if [ ! -d ../mhvtl.git ]; then
mkdir -p ../mhvtl.git
mkdir -p ../mhvtl.git/patches
chmod 777 ../mhvtl.git/patches
cd ../mhvtl.git
git init
git pull http://github.com/markh794/mhvtl.git
if [ $? -eq 0 ]; then
echo "<FONT COLOR=#00FF00>Status:$? Success </FONT>"
else
echo Status:$? Failed
fi
cd ../html
fi
