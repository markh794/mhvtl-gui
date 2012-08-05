if [ -f /usr/sbin/tgtadm ]; then
TGTADM="/usr/sbin/tgtadm"
else
TGTADM="../stgt.git/usr/tgtadm"
fi



RUNNING=`sudo -u root -S ps -ef | egrep "tgtd"|egrep -v egrep`
if [ -z "$RUNNING" ]; then
echo "<table valign='middle' ><td><b><FONT COLOR=#FFFF00>STGT is currently not running </FONT></b><form action='confirm.start_stgt.php' method='post' ><input TYPE='submit' value=' Start '></form></td></table>"
exit 0
fi 



if [ -f /etc/iscsi/initiatorname.iscsi ] ;then
IQN=`grep "InitiatorName=iqn." /etc/iscsi/initiatorname.iscsi|cut -d "=" -f2 2>/dev/null`
fi

if [ -z "$IQN" ] ; then
IQN="iqn.2001-04.com.example:`hostname`"
fi
TARGET=0
LUN=1

lsscsi -g | egrep "mediumx|tape" | awk '{print $2,$NF}' | while read type dev; do
if [ "$type" = "mediumx" ] ; then
echo "---------------------------------------"
echo "Creating Target for $type $dev"
TARGET=$((TARGET+1))
LUN=1
echo TARGET $TARGET $IQN:mhvtl:stgt:$TARGET
$TGTADM --lld iscsi --op new --mode target --tid $TARGET -T $IQN:mhvtl:stgt:$TARGET
if [ $? -ne 0 ]; then
#echo "STATUS=$? Succeeded ... "
#else
echo "STATUS=$? Failed ..."
exit 0
fi
fi
echo "Adding luns for $IQN" [ LUN $LUN $dev ]
$TGTADM --lld iscsi --op new --mode logicalunit --tid $TARGET --lun $LUN --bstype=sg --device-type=pt -b $dev
if [ $? -eq 0 ]; then
#echo "STATUS=$? Succeeded ... "
LUN=$((LUN+1))
else
echo "STATUS=$? Failed ..."
exit 0
fi

done

echo "---------------------------------------"
TARGET=`$TGTADM --lld iscsi --mode target --op show | grep ^Target| wc -l`
while true; do
if [ $TARGET -eq 0 ] ; then
break
fi
echo "Exporting Target $IQN:mhvtl:$TARGET to ALL ..."
$TGTADM --lld iscsi --op bind --mode target --tid $TARGET -I ALL
if [ $? -eq 0 ]; then
TARGET=$((TARGET-1))
else
echo "STATUS=$? Failed ..."
exit 0
fi
done
echo "---------------------------------------"
../scripts/config_stgt.sh save
