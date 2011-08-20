
if [ ! -d ../mhvtl.git ]; then
mkdir -p ../mhvtl.git
cd ../mhvtl.git
git init
git pull http://github.com/markh794/mhvtl.git
cd ../html
fi

cd ../mhvtl.git

sudo -u root -S git pull http://github.com/markh794/mhvtl.git > /dev/null 2>&1

VER=`sudo -u root -S grep Version ./mhvtl.spec|awk '{print $2}'`
REL=`sudo -u root -S grep Release ./mhvtl.spec|awk '{print $2}'`
VERSION=`echo $VER.$REL`
EXTRAVERSION=`sudo -u root -S git show-ref --head --abbrev|head -1|awk '{print $1}'`
NEW_VERSION=`echo $VERSION-git-$EXTRAVERSION`
INSTALLED_VERSION=`sudo -u root -S vtlcmd -V|awk '{print $2}'`

if [ "$NEW_VERSION" = "$INSTALLED_VERSION" ] ; then
echo MHVTL is up-to-date
exit 0
else
echo "<font color=red>MHVTL New Update : v.$NEW_VERSION</font>"
exit 1
fi
