if [ "$1" = "standalone" ] ; then

if [ -f /usr/sbin/tgtd ]; then
echo "NON-Standalone version already installed v.`/usr/sbin/tgtadm -V` .. Skipping ..."
echo "Please Use Regualr Install"
exit 0
fi

fi



if [ ! -d ../stgt.git ]; then
echo "No STGT git directory found ! .. Installing new"
mkdir -p ../stgt.git
cd ../stgt.git
git init
git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git
if [ $? = 0 ];then
echo "git pull Succeeded $?"
else
echo "git pull Failed $? ... Exiting ..."
exit 0
fi

else
cd ../stgt.git
git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git
if [ $? = 0 ];then
echo "git pull Succeeded $?"
else
echo "git pull Failed $? ... Exiting ..."
exit 0
fi

fi


STGTVER_INSTALLED=`/usr/sbin/tgtadm -V`
if [ -z "$STGTVER_INSTALLED" ] ; then
STGTVER_INSTALLED=0
fi

STGTVER_GIT=`usr/tgtadm -V`
if [ -z "$STGTVER_GIT" ] ; then
STGTVER_GIT = 0
fi

if [ $STGTVER_INSTALLED != $STGTVER_GIT ] ; then
echo Current stgt release already loaded = `echo $STGTVER_INSTALLED`
echo Current stgt release available from git = `echo $STGTVER_GIT`
echo Updating from git ...

#echo "Executing git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git ..."
#sudo -u root -S git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git > /dev/null 2>&1
#if [ $? = 0 ];then
#echo "Succeeded $?"
#else
#echo "Failed $? ... Exiting ..."
#exit 0
#fi

echo "Running make clean ..."
make clean > /dev/null 2>&1
if [ $? = 0 ];then
echo "Succeeded $?"
else
echo "Failed $? ... Exiting ..."
exit 0
fi

echo "Running make ..."
make | tee /tmp/install.update.stgp.make.log > /dev/null 2>&1
if [ $? = 0 ];then
echo "Succeeded $? ... We now have stgt v.`usr/tgtadm -V`"
else
echo "Failed $? ... Exiting ..."
exit 0
fi

if [ "$1" = "regular" ] ; then

echo "Stopping stgt .... "
pkill -9 tgtd
echo Result = $?
echo "Running make install ..."
make install | tee /tmp/install.update.stgp.make.install.log > /dev/null 2>&1
if [ $? = 0 ];then
echo "Succeeded $?"
else
echo "Failed $? ... Exiting ..."
exit 0
fi
fi
echo "Installation Complete ..."

else

echo Current stgt release already loaded = `echo $STGTVER_INSTALLED`
echo Current stgt release available from git = `echo $STGTVER_GIT`
echo Update not required ...
fi

