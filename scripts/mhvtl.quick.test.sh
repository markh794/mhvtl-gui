clear
if [ -z "$1" ] ; then
echo "* * * Warning : data loss may occur * * * "
echo "This test will mount random tapes and write to them."
echo "Do not proceed if any of the media have data already that you need."
echo "-------------------------------------------------------------"
echo This tool mounts random tapes and perform write/read
echo Tapes will get overwritten .. Be careful with this ...
echo "Usage './mhvtl.quick.test.sh GO' (Detail)"
echo "Usage './mhvtl.quick.test.sh GO | grep TESTED' (Brief)"
exit 0
elif [ "$1" != "GO" ] ; then
echo This tool mounts random tapes and perform write/read
echo Tapes will get overwritten .. Be careful with this ...
echo "Usage './mhvtl.quick.test.sh GO' (Detail)"
echo "Usage './mhvtl.quick.test.sh GO | grep TESTED' (Brief)"
exit 0
fi

clear
echo "******************************************************************************* "
lsscsi -g | egrep "mediumx|tape"
echo "******************************************************************************* "

dd if=/dev/zero of=/tmp/Test-File.tmp bs=1K count=10000 2>/dev/null
STATUS=$?
if [ $STATUS -eq 0 ] ; then
STATUS=OK
else
STATUS=FAIL
fi
echo "Created Test file size 10MB" EXIT $STATUS

COUNT1=1
COUNT2=0

CHECK=`lsscsi -g | egrep "mediumx|tape"`
if [ "$CHECK" = "" ] ; then
STATUS=FAIL
COLOR="#FF0000"
echo '<b><FONT COLOR=#00FFFF>Error Occured:</FONT> is MHVTL running ?:<FONT COLOR='$COLOR'> TESTED '$STATUS'</FONT></b>'
exit 0
fi

lsscsi -g | egrep "mediumx|tape"|awk '{print $2,$(NF-1),"\t",$NF}' |  while read dev st sg; do
echo "******************************************************************************* "
if [ "$dev" = "mediumx" ] ; then
DEVICE=$sg
lsscsi -g | grep $sg$
dev=RESET
COUNT1=1
COUNT2=0
elif [ "$dev" = "tape" ] ; then
lsscsi -g | grep $st" "
mtx -f $DEVICE load $COUNT1 $COUNT2
echo "Loading Media on device $st"
tar -cvf $st /tmp/Test-File.tmp 2>/dev/null
STATUS=$?
if [ $STATUS -eq 0 ] ; then
STATUS=OK
COLOR="#00FF00"
else
STATUS=FAIL
COLOR="#FF0000"
fi
echo '<b><FONT COLOR=#FFFF00>Writing</FONT> : device '$st' :<FONT COLOR='$COLOR'> TESTED '$STATUS'</FONT></b>'

mkdir -p /tmp/mhvtl-tape-test-tar-xtract-work-dir
cd /tmp/mhvtl-tape-test-tar-xtract-work-dir
tar -xvf $st tmp/Test-File.tmp 2>/dev/null
STATUS=$?
if [ $STATUS -eq 0 ] ; then 
STATUS=OK
COLOR="#00FF00"
rm -f tmp/Test-File.tmp 2>/dev/null
else
STATUS=FAIL
COLOR="#FF0000"
fi
echo '<b><FONT COLOR=#00FFFF>Reading</FONT> : device '$st' :<FONT COLOR='$COLOR'> TESTED '$STATUS'</FONT></b>'
mtx -f $DEVICE unload $COUNT1 $COUNT2
echo "Unloading Media ..." $sg $st
COUNT1=$(($COUNT1+1))
COUNT2=$(($COUNT2+1))
fi
if [ "$dev" = "mediumx" ] ; then
break
fi
done
echo "******************************************************************************* "
rm -f /tmp/Test-File.tmp
STATUS=$?
if [ $STATUS -eq 0 ] ; then
STATUS=OK
else
STATUS=FAIL
fi
echo "Removing tmp test file" EXIT $STATUS
rm -Rf /tmp/mhvtl-tape-test-tar-xtract-work-dir
STATUS=$?
if [ $STATUS -eq 0 ] ; then
STATUS=OK
else
STATUS=FAIL
fi
echo "Removing tmp work space" EXIT $STATUS

