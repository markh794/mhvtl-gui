touch /tmp/mhvtl.last.update.check

if [ ! -d ../mhvtl.git ]; then
mkdir -p ../mhvtl.git
mkdir -p ../mhvtl.git/patches
chmod 777 ../mhvtl.git/patches
cd ../mhvtl.git
git init
git pull https://github.com/markh794/mhvtl.git
cd ../html
fi

cd ../mhvtl.git

sudo -u root -S git pull https://github.com/markh794/mhvtl.git > /dev/null 2>&1

VER=`sudo -u root -S grep ^Version ./mhvtl-utils.spec|awk '{print $2}'`
REL=`sudo -u root -S grep ^Release ./mhvtl-utils.spec|awk '{print $2}'| cut -d"%" -f1`
VERSION=`echo $VER.$REL`
EXTRAVERSION=`sudo -u root -S git show-ref --head --abbrev|head -1|awk '{print $1}'`
NEW_VERSION=`echo $VERSION-git-$EXTRAVERSION`
INSTALLED_VERSION=`sudo -u root -S vtlcmd -V|awk '{print $2}'`
DISPLAY_INSTALLED_VERSION=`sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| awk '{print $1}'`
if [ "$NEW_VERSION" = "$INSTALLED_VERSION" ] ; then
echo "<font color=green>MHVTL is up-to-date </font><a style='float:right;' </a> $DISPLAY_INSTALLED_VERSION "
exit 0
else
echo "<font color=red>MHVTL Updates Available</font> : <a href="review_mhvtl_update.php"><font color=blue> $NEW_VERSION </font></a>"
exit 1
fi
