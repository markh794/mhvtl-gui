VER=`cat ../LAST_STGT_GIT_UPDATE`
cd ../stgt.git
git log --graph --pretty=format:"%h %ad %d %s" --date=short $VER"..."
cd ../html
