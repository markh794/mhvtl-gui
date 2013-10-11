touch /tmp/mhvtl-gui.last.update.check

if [ ! -d ../.git ]; then
cd ../
git init
git pull https://github.com/niadev67/mhvtl-gui.git
cd html
fi

cd ../
git pull https://github.com/niadev67/mhvtl-gui.git > /dev/null 2>&1
RELEASE=`cat version | cut -d "-" -f1`
ONLINE_VERSION=`sudo -u root -S git log --pretty=oneline | head -1 | cut -c1-7`
INSTALLED_VERSION=`sudo -u root -S cat version | cut -d "-" -f2`

cd html

if [ "$ONLINE_VERSION" = "$INSTALLED_VERSION" ] ; then
echo "<font color=green>MHVTL-GUI is up-to-date </font><a style='float:right;' </a> $RELEASE-$INSTALLED_VERSION "
exit 0
else
echo "<font color=red>MHVTL-GUI Updates Available</font> : <a href="review_mhvtl-gui_update.php"><font color=blue>$RELEASE-$ONLINE_VERSION </font></a>"
exit 1
fi
