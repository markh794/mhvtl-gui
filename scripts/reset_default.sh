STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`
if [ $STGTPROCS -gt 0 ]; then 
echo "STGT is running .. Shutting down ..."
pkill -9 tgtd
fi


/etc/init.d/mhvtl stop

if [ "$1" = "YES" ]; then

echo "<FONT COLOR=#FFFF00><b>Removing all existing tape media ...</b></FONT>"
ls -d /opt/mhvtl/* | while read each; do
if mountpoint -q -d $each ; then
sudo -u root -S rm -Rf $each/*
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<FONT COLOR=#FF0000><b>Removed  $each/* </b></FONT>"
else
sudo -u root -S rm -Rf $each
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<FONT COLOR=#FF0000><b>Removed  $each </b></FONT>"
fi
done

else
echo "<FONT COLOR=#00FF00><b>Keeping all existing tape media ...</b></FONT>"
fi

echo
echo "<FONT COLOR=#FFFF00><b>Removing /etc/mhvtl/device.conf</b></FONT>"
sudo -u root -S rm -f /etc/mhvtl/device.conf
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<FONT COLOR=#FF0000><b>Removed /etc/mhvtl/device.conf</b></FONT>"
echo
echo "<FONT COLOR=#FFFF00><b>Removing /etc/mhvtl/mhvtl.conf</b></FONT>"
sudo -u root -S rm -f /etc/mhvtl/mhvtl.conf
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<FONT COLOR=#FF0000><b>Removed /etc/mhvtl/mhvtl.conf</b></FONT>"
echo
echo "<FONT COLOR=#FFFF00>Removing all /etc/mhvtl/library_contents.*</b></FONT>"
sudo -u root -S rm -f /etc/mhvtl/library_contents.*
echo "<FONT COLOR=#FFA500><b>STATUS:$?</b></FONT>"
echo "<FONT COLOR=#FF0000><b>Removed /etc/mhvtl/library_contents.* </b></FONT>"
echo
echo done ..
