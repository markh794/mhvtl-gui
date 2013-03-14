VAR1=`echo $2 | sed 's/ //g'`
VAR2=`echo $1 | sed 's/ //g'`
STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`
if [ $STGTPROCS -gt 0 ]; then 
echo "<FONT COLOR=#FFFF00><b>Shutting down STGT ...</b></FONT>"
pkill -9 tgtd >/dev/null 2>&1
fi
echo "<BR>"
echo "<FONT COLOR=#FFFF00><b>Shutting down MHVTL ...</b></FONT>"
echo "<BR>"
/etc/init.d/mhvtl stop >/dev/null 2>&1
echo "<BR>"

echo "<FONT COLOR=#FFA500><b>Removing Library "$VAR1" + Drives ...</b></FONT>"

if [ ! -f  /etc/mhvtl/device.conf ] ; then
echo "<pre><FONT COLOR=#FF0000><b>*** Error Occured: /etc/mhvtl/device.conf does not exsit! </b></FONT></pre>"
exit 0
fi

HOMEDIR=`awk 'BEGIN{RS="" } /Library: '$VAR1'/' /etc/mhvtl/device.conf | grep "Home directory:" | cut -d ":" -f2|awk '{print $1}'`

sed "/Library: $VAR1/,/Library:/{//p;d;}" /etc/mhvtl/device.conf | grep -v ^"Library: $VAR1" >/tmp/devicetmp.conf
cp -f /tmp/devicetmp.conf /etc/mhvtl/device.conf
rm -f /tmp/devicetmp.conf
echo "<pre><FONT COLOR=#FF0000><b>*** Library : $VAR1 Removed </b></FONT></pre>"

if [ "$VAR2" = "YES" ]; then
if [ "$HOMEDIR" = "" ] ; then
echo "<FONT COLOR=#FF0000><b>Library $VAR1: Media Home directory = ? $HOMEDIR , setting to /opt/mhvtl</b></FONT><br>"
HOMEDIR="/opt/mhvtl"
fi

echo "<FONT COLOR=#FF0000><b>Removing all existing tape media ...</b></FONT><br>"

grep ^Slot /etc/mhvtl/library_contents."$VAR1" | awk '{print $NF}'| cut -d ":" -f2 | grep -v ^$ | while read each; do

if [ -d $HOMEDIR/$each ] ; then
sudo -u vtl -S rm -Rf $HOMEDIR/$each
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> $HOMEDIR/$each </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to find Media Path for $each, please remove manually </b></FONT>"
fi

done

echo "<FONT COLOR=#FF0000><b>Removing all external tape media ...</b></FONT><br>"
if [ -d /opt/mhvtl/external_media/$VAR1 ] ; then
sudo -u vtl -S rm -Rf /opt/mhvtl/external_media/$VAR1/*
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> /opt/mhvtl/external_media/$VAR1 </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to find Media Path for $each, please remove manually </b></FONT>"
fi


echo "<FONT COLOR=#008000><b>Done ...</b></FONT><br>"

else
echo "<FONT COLOR=#00FF00><b>Keeping all existing tape media ...</b></FONT><br>"
fi

rm -f /etc/mhvtl/library_contents."$VAR1"
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> /etc/mhvtl/library_contents."$VAR1" </FONT><FONT COLOR=#FFFFFF>EXIT: $STATUS</FONT><br>"
echo "<FONT COLOR=#008000><b> *** Completed *** </b></FONT>"
