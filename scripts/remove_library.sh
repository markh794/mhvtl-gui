#!/bin/sh

VAR1=`echo $1 | sed 's/ //g'`
VAR2=`echo $2 | sed 's/ //g'`

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
sed "/Library: $VAR1/,/Library:/{//p;d;}" /etc/mhvtl/device.conf | grep -v ^"Library: $VAR1" >/tmp/devicetmp.conf
cp -f /tmp/devicetmp.conf /etc/mhvtl/device.conf
rm -f /tmp/devicetmp.conf
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<pre><FONT COLOR=#FF0000><b>*** Library : $VAR1 Removed </b></FONT></pre>"

if [ "$VAR2" = "YES" ]; then
echo "<FONT COLOR=#FF0000><b>Removing all existing tape media ...</b></FONT>"
if [ -d /opt/mhvtl/$VAR1 ] ; then

if mountpoint -q -d /opt/mhvtl/$VAR1 ; then
rm -Rf /opt/mhvtl/$VAR1/*
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<pre><FONT COLOR=#FFFF00><b>Removed /opt/mhvtl/$VAR1/* </b></FONT>"
else
rm -Rf /opt/mhvtl/$VAR1
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<pre><FONT COLOR=#FFFF00><b>Removed /opt/mhvtl/$VAR1 </b></FONT>"
fi

else
grep ^Slot /etc/mhvtl/library_contents."$VAR1" | awk '{print $NF}'| cut -d ":" -f2 | grep -v ^$ | while read each; do
rm -Rf /opt/mhvtl/$each
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<pre><FONT COLOR=#FFFF00><b>Removed /opt/mhvtl/$each </b></FONT>"
done
fi
rm -f /etc/mhvtl/library_contents."$VAR1"
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"

echo "<FONT COLOR=#FF0000><b>All existing tape media removed</b></FONT>"
else
echo "<FONT COLOR=#00FF00><b>Keeping all existing tape media ...</b></FONT>"
rm -f /etc/mhvtl/library_contents."$VAR1"
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
fi


echo
echo done ..
