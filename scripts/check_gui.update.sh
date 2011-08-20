
if [ ! -d ../mhvtl-gui.git ]; then
mkdir -p ../mhvtl-gui.git
cd ../mhvtl-gui.git
git init
git pull http://github.com/niadev67/mhvtl-gui.git
cd ../html
fi

cd ../mhvtl-gui.git
git pull http://github.com/niadev67/mhvtl-gui.git > /dev/null 2>&1

ONLINE_VERSION=`sudo -u root -S git log --pretty=oneline | head -1 | cut -c1-7`
INSTALLED_VERSION=`sudo -u root -S cat ../version | cut -d "-" -f2`

cd ../html

if [ "$ONLINE_VERSION" = "$INSTALLED_VERSION" ] ; then
echo "<font color=green>MHVTL-GUI is up-to-date</font>"
exit 0
else
echo "<font color=red>MHVTL-GUI Updates Available</font> : <font color=blue>V.$ONLINE_VERSION</font>"
exit 1
fi
