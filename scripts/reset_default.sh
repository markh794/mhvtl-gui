STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`
if [ $STGTPROCS -gt 0 ]; then 
echo "STGT is running .. Shutting down ..."
pkill -9 tgtd
fi


/etc/init.d/mhvtl stop

if [ "$1" = "YES" ]; then

echo "<FONT COLOR=#FF0000><b>Removing all existing tape media ...</b></FONT><br>"

if [ -d /opt/mhvtl/external_media ] ; then
sudo -u vtl -S rm -Rf /opt/mhvtl/external_media
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> /opt/mhvtl/external_media </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to remove /opt/mhvtl/external_media </b></FONT>"
fi



if [ ! -f /etc/mhvtl/library_contents.* ] ; then
echo "<pre><FONT COLOR=#FFFF00><b>Error Occured .. Unable to find /etc/mhvtl/library_contents.X files </b></FONT>"
exit 0
fi

HDIR=`grep "Home directory:" /etc/mhvtl/device.conf | cut -d":" -f2| awk '{print $1}'| sort -u`
if [ "$HDIR" = "" ] ;then
echo "<FONT COLOR=#FF0000><b>Media Home directory = $HDIR , setting to /opt/mhvtl</b></FONT><br>"
echo "/opt/mhvtl" >/tmp/HDIR.tmp
else
grep "Home directory:" /etc/mhvtl/device.conf | cut -d":" -f2| awk '{print $1}'| grep -v ^$| sort -u >/tmp/HDIR.tmp
fi

cat /tmp/HDIR.tmp | grep -v ^$ | while read each; do
if [ -d $each ] ; then
sudo -u vtl -S rm -Rf $each/*
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> $each/* </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to find Home Directory $each </b></FONT>"
fi



done
echo "<FONT COLOR=#008000><b>Done ...</b></FONT>"
rm -f /tmp/HDIR.tmp

else
echo "<FONT COLOR=#00FF00><b>Keeping all existing tape media ...</b></FONT>"
fi

echo
echo "<FONT COLOR=#FFFF00><b>Removing all configurations</b></FONT>"
sudo -u root -S rm -f /etc/mhvtl/*
STATUS=$?
echo "<FONT COLOR=#FF0000><b>Removed /etc/mhvtl/* EXIT STATUS:$STATUS</b></FONT>"
echo
echo done ..
