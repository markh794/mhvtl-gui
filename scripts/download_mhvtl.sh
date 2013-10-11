# Download current version of  MHVTL
if [ ! -d ../mhvtl.git ]; then
mkdir -p ../mhvtl.git
mkdir -p ../mhvtl.git/patches
chmod 777 ../mhvtl.git/patches
cd ../mhvtl.git
git init
git pull https://github.com/markh794/mhvtl.git
if [ $? -eq 0 ]; then
echo "<FONT COLOR=#00FF00>Status:$? Success </FONT>"
else
echo "<FONT COLOR=#FF0000>Status:$? Failed </FONT>"
fi
MHVTl_GIT_VERSION_SHORT=`vtlcmd -V| cut -d "-" -f3|awk '{print $1}'`
echo "<FONT COLOR=#FF00FF>Check out & switch to specific branch from current version ($MHVTl_GIT_VERSION_SHORT)</FONT>"
MHVTl_GIT_VERSION_LONG=`git log --pretty=oneline| grep ^$MHVTl_GIT_VERSION_SHORT$""| awk '{print $1}'||awk '{print $1}'`
git checkout -b $MHVTl_GIT_VERSION_SHORT_branch $MHVTl_GIT_VERSION_LONG
if [ $? -eq 0 ]; then
echo "<FONT COLOR=#00FF00>Status:$? Success </FONT>"
else
echo "<FONT COLOR=#FF0000>Status:$? Failed </FONT>"
fi

cd ../html
fi
