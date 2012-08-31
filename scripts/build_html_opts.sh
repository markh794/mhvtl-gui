
libid()
{
echo '<SELECT name="libid" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
grep ^Library /etc/mhvtl/device.conf| cut -d ":" -f2| awk '{print $1}'| while read each; do
LIBRVI=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Vendor identification:" | cut -d ":" -f2|awk '{print $1}'`
LIBRPI=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Product identification" | cut -d ":" -f2|awk '{print $1}'`
LIBRSN=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Unit serial number:" | cut -d ":" -f2|awk '{print $1}'`
echo '<OPTION>'$each: $LIBRVI : $LIBRPI : SN: $LIBRSN'</OPTION>'
done
echo '</SELECT>'
}


libidwd()
{
echo '<SELECT name="libidwd" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
grep ^Library /etc/mhvtl/device.conf| cut -d ":" -f2| awk '{print $1}'| while read each; do
LIBRVI=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Vendor identification:" | cut -d ":" -f2|awk '{print $1}'`
LIBRPI=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Product identification" | cut -d ":" -f2|awk '{print $1}'`
LIBRSN=`awk 'BEGIN{RS="" } /Library: '$each'/' /etc/mhvtl/device.conf| grep "Unit serial number:" | cut -d ":" -f2|awk '{print $1}'`
echo '<OPTION>'$each: $LIBRVI : $LIBRPI : SN: $LIBRSN'</OPTION>'
awk 'BEGIN{RS="" } /Library ID: '$each'/' /etc/mhvtl/device.conf|grep ^Drive|cut -d ":" -f2| awk '{print $1}' | while read each1; do
DRVI=`awk 'BEGIN{RS="" } /Drive: '$each1'/' /etc/mhvtl/device.conf| grep "Vendor identification:" | cut -d ":" -f2|awk '{print $1}'`
DRPI=`awk 'BEGIN{RS="" } /Drive: '$each1'/' /etc/mhvtl/device.conf| grep "Product identification" | cut -d ":" -f2|awk '{print $1}'`
DRSN=`awk 'BEGIN{RS="" } /Drive: '$each1'/' /etc/mhvtl/device.conf| grep "Unit serial number:" | cut -d ":" -f2|awk '{print $1}'`
echo '<OPTION>'$each1: $DRVI : $DRPI : SN: $DRSN'</OPTION>'
done
done
echo '</SELECT>'
}



tape()
{
HOMEDIR=`awk 'BEGIN{RS="" } /Library: '$1'/' /etc/mhvtl/device.conf | grep "Home directory:" | cut -d ":" -f2|awk '{print $1}'`
if [ "$HOMEDIR" = "" ] ; then
HOMEDIR="/opt/mhvtl"
fi

echo '<SELECT name="tape" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
find $HOMEDIR -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| sort -u | grep -v ^$ | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}

stape()
{
echo '<SELECT name="tape" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
grep ^Slot /etc/mhvtl/library_contents.$1| cut -d ":" -f2 | sort -u | grep -v ^$ | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}



exttape()
{
HOMEDIR=`awk 'BEGIN{RS="" } /Library: '$1'/' /etc/mhvtl/device.conf | grep "Home directory:" | cut -d ":" -f2|awk '{print $1}'`
if [ "$HOMEDIR" = "" ] ; then
HOMEDIR="/opt/mhvtl"
fi

if [ "$HOMEDIR" = "/opt/mhvtl" ]; then
cat /etc/mhvtl/library_contents.*| grep ^Slot | cut -d ":" -f2 | sort -u | grep -v ^$ >/tmp/slotedmedia
find $HOMEDIR -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| sort -u | grep -v ^$ >/tmp/allmedia
else
grep ^Slot /etc/mhvtl/library_contents.$1| cut -d ":" -f2 | awk '{print $1}'| sort -u | grep -v ^$ >/tmp/slotedmedia
find $HOMEDIR -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| awk '{print $1}'| sort -u | grep -v ^$ >/tmp/allmedia
fi

echo '<SELECT name="exttape" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'

CHECK1st=`diff -q -w /tmp/slotedmedia /tmp/allmedia`
if [ -z "$CHECK1st" ]; then
echo '<OPTION>'NONE'</OPTION>'
rm -f /tmp/slotedmedia.s /tmp/allmedia.s
else
cat /tmp/allmedia | while read each; do 
CHECK=`grep $each /tmp/slotedmedia`
if [ -z "$CHECK" ] ; then
echo '<OPTION>'$each'</OPTION>'
else
echo >/dev/null
fi
done
fi
echo '</SELECT>'
rm -f /tmp/slotedmedia /tmp/allmedia
}


robotdev()
{
echo '<SELECT name="robotdev" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
lsscsi -g | egrep "mediumx" | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}


drivedev()
{
echo '<SELECT name="drivedev" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
lsscsi -g | egrep "tape"|awk '{print $1,$2,$3,$4,$(NF-1)}'  | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}


slot()
{
echo '<SELECT name="slot" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
mtx -f $2 status| grep -v "Data Transfer Element" | grep Full | grep -v "IMPORT/EXPORT"| grep -v "Storage Changer"| awk '{print $3,$4}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}

slotf()
{
echo '<SELECT name="slotf" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
mtx -f $2 status| grep -v "Data Transfer Element" | grep Empty | grep -v "IMPORT/EXPORT"| grep -v "Storage Changer"| awk '{print $3,$4}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}

map()
{
echo '<SELECT name="map" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
CHECK=`mtx -f $2 status | grep "IMPORT/EXPORT" | grep Full | awk '{print $3,$4,$5}'`
if [ -z "$CHECK" ] ; then
echo '<OPTION>'EMPTY'</OPTION>'
else
mtx -f $2 status | grep "IMPORT/EXPORT" | grep Full | awk '{print $3,$4,$5}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
fi
echo '</SELECT>'
}


mapf()
{
echo '<SELECT name="mapf" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
mtx -f $2 status | grep "IMPORT/EXPORT" | grep Empty | awk '{print $3,$4}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}


driveslotf()
{
echo '<SELECT name="driveslotf" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
CHECK=`mtx -f $2 status| grep "Data Transfer Element" | grep Empty | awk '{print $1,$2,$3,$4}'`
if [ -z "$CHECK" ] ; then
echo '<OPTION>'EMPTY'</OPTION>'
else
mtx -f $2 status| grep "Data Transfer Element" | grep Empty | awk '{print $1,$2,$3,$4}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
fi
echo '</SELECT>'
}

driveslot()
{
echo '<SELECT name="driveslot" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
CHECK=`mtx -f $2 status| grep "Data Transfer Element" | grep -v Empty | awk '{print $4,$5,$6,$7,$8,$9,$10}'`
if [ -z "$CHECK" ] ; then
echo '<OPTION>'EMPTY'</OPTION>'
else
mtx -f $2 status| grep "Data Transfer Element" | grep -v Empty | awk '{print $4,$5,$6,$7,$8,$9,$10}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
fi
echo '</SELECT>'
}

device()
{
echo '<SELECT name="device" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
lsscsi -g | egrep "tape|mediumx" | awk '{print $NF}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}

devices()
{

CHECK=`lsscsi -g | egrep "mediumx|tape" | awk '{print $NF}'`
if [ -z "$CHECK" ]; then
exit 0
fi

echo '<SELECT name="device" type="text" style="color: #000000; background: #BCB9B9; font-weight: bold;" class="set_width" maxlength=100 >'

lsscsi -g| egrep "mediumx|tape"| awk '{print $1,$2,$3,$4,$5,$7}' | while read sid dev ven mod fw sgd; do
if [ "$dev" = "mediumx" ] ;then
echo '<OPTION>'$sid Changer: $ven - Model: $mod - Firmware: $fw $sgd'</OPTION>'
else
echo '<OPTION>'$sid Tape: $ven - Model: $mod - Firmware: $fw $sgd'</OPTION>'
fi
done
echo '</SELECT>'
}


libdid()
{
echo '<SELECT name="libdid" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
grep ^Drive /etc/mhvtl/device.conf| cut -d ":" -f2| awk '{print $1}'| while read each; do
LIBRVI=`awk 'BEGIN{RS="" } /Drive: '$each'/' /etc/mhvtl/device.conf| grep "Vendor identification:" | cut -d ":" -f2|awk '{print $1}'`
LIBRPI=`awk 'BEGIN{RS="" } /Drive: '$each'/' /etc/mhvtl/device.conf| grep "Product identification" | cut -d ":" -f2|awk '{print $1}'`
LIBRSN=`awk 'BEGIN{RS="" } /Drive: '$each'/' /etc/mhvtl/device.conf| grep "Unit serial number:" | cut -d ":" -f2|awk '{print $1}'`
echo '<OPTION>'$each: $LIBRVI : $LIBRPI : SN: $LIBRSN'</OPTION>'
done
echo '</SELECT>'
}

target()
{
if [ -f /usr/sbin/tgtadm ]; then
CMD="/usr/sbin/tgtadm"
else
CMD="../stgt.git/usr/tgtadm"
fi

CHECK=`$CMD --lld iscsi --op show --mode target | grep ^Target| cut -c7-`
if [ -z "$CHECK" ] ; then
exit 0
else
echo '<SELECT name="tid" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
$CMD --lld iscsi --op show --mode target | grep ^Target| cut -c7- | sort -r | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
fi
}

nexttarget()
{
if [ -f /usr/sbin/tgtadm ]; then
CMD="/usr/sbin/tgtadm"
else
CMD="../stgt.git/usr/tgtadm"
fi

CHECK=`$CMD --lld iscsi --op show --mode target | grep ^Target| cut -c7- 2>/dev/null`
if [ -z "$CHECK" ] ; then
exit 0

else
echo '<SELECT name="tid" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
$CMD --lld iscsi --op show --mode target | grep ^Target| cut -d ":" -f1| tail -1 | awk '{print $NF}' | sort -r | while read each; do
newvalue=$(($each+1))
echo '<OPTION>'$newvalue'</OPTION>'
done
fi
echo '</SELECT>'
}

lun()
{
if [ -f /usr/sbin/tgtadm ]; then
CMD="/usr/sbin/tgtadm"
else
CMD="../stgt.git/usr/tgtadm"
fi

TARGET=`echo $1| cut -d ":" -f1`
CHECK=`$CMD --lld iscsi --op show --mode target | awk "/^Target $TARGET: iqn/,/ACL/"| grep LUN| cut -d ":" -f2| grep -v "0"`
if [ -z "$CHECK" ] ; then
exit 0
else
echo '<SELECT name="lun" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
$CMD --lld iscsi --op show --mode target | awk "/^Target $TARGET: iqn/,/ACL/"| grep LUN| cut -d ":" -f2| grep -v "0"| grep -v ^$ |sort -r | while read each; do
echo '<OPTION>'$each'</OPTION>'
done

echo '</SELECT>'

fi

}

iscsiclient()
{
if [ -f /usr/sbin/tgtadm ]; then
CMD="/usr/sbin/tgtadm"
else
CMD="../stgt.git/usr/tgtadm"
fi

CHECK=`$CMD --lld iscsi --op show --mode target|sed '/System information:/,/ACL information:/d'`
if [ -z "$CHECK" ] ; then
exit 0

else
echo '<SELECT name="iqn" min="1" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
$CMD --lld iscsi --op show --mode target|sed '/System information:/,/ACL information:/d' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
fi
}



nlun()
{
echo '<SELECT name="lun" min="1" type="number" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
if [ -f /usr/sbin/tgtadm ]; then
CMD="/usr/sbin/tgtadm"
else
CMD="../stgt.git/usr/tgtadm"
fi

CHECK=`$CMD --lld iscsi --op show --mode target | awk "/^Target $1: iqn/,/ACL/"| grep LUN| cut -d ":" -f2| grep -v "0"| grep -v "^$"`

if [ -z "$CHECK" ] ; then
echo '<OPTION>'1'</OPTION>'
echo '</SELECT>'

elif [ $1 -eq 0 ] ; then
echo '<OPTION>'No Target Defined'</OPTION>'
echo '</SELECT>'

else

$CMD --lld iscsi --op show --mode target | awk "/^Target $1: iqn/,/ACL/"| grep LUN| cut -d ":" -f2| grep -v "0"| grep -v "^$"| sort -r| head -1 | while read each; do
newvalue=$(($each+1))
echo '<OPTION>'$newvalue'</OPTION>'
done

echo '</SELECT>'
fi
}


patch()
{
if [ ! -f ../mhvtl.git/Makefile ] ; then
echo '</form>'
echo '<font color="red">No Source Code Detected !</font>'
echo '<FORM ACTION="download_mhvtl.php"><INPUT TYPE=SUBMIT VALUE="Download via GitHub"></FORM>'
else
echo '<SELECT name="patch" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
if [ ! -f ../mhvtl.git/patches/* ] ; then
echo '<OPTION>'Empty'</OPTION>'
else
ls -lat ../mhvtl.git/patches/* | awk '{print $6,$7,$8,$9,$10}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
fi
echo '</SELECT>'
fi
}

patch2()
{
if [ ! -f ../stgt.git/Makefile ] ; then
echo '</form>'
echo '<font color="red">No Source Code Detected !</font>'
echo '<FORM ACTION="download_tgt.php"><INPUT TYPE=SUBMIT VALUE="Download via GitHub"></FORM>'
else
echo '<SELECT name="patch" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
if [ ! -f ../stgt.git/patches/* ] ; then
echo '<OPTION>'Empty'</OPTION>'
else
ls -lat ../stgt.git/patches/* | awk '{print $6,$7,$8,$9,$10}' | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
fi
echo '</SELECT>'
fi
}

qvendbli()
{
echo '<SELECT name="qvendbli" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
echo '<OPTION>'"Device Type | Name | Manufacture | Driver String ID | Firmware"'</OPTION>'
grep ^Library ../mhvtl.cfg.db | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}

qvendbdr()
{
echo '<SELECT name="qvendbdr" type="text" style="color:#000000; background-color: #BCB9B9;font-weight:bold;" required >'
echo '<OPTION>'"Device Type | Name | Manufacture | Driver String ID | Firmware"'</OPTION>'
grep ^Drive ../mhvtl.cfg.db | while read each; do
echo '<OPTION>'$each'</OPTION>'
done
echo '</SELECT>'
}



$1 $2 $3
