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
cd ../html
fi

cd ../stgt.git
echo Current stgt release already loaded v.`./usr/tgtadm -V`
echo Updating from git anyway ...
echo "Executing git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git ..."
sudo -u root -S git pull http://git.kernel.org/pub/scm/linux/kernel/git/tomo/tgt.git > /dev/null 2>&1
if [ $? = 0 ];then
echo "Succeeded $?"
else
echo "Failed $? ... Exiting ..."
exit 0
fi

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
