
standalone_install()
{
if [ -f /usr/sbin/tgtd ]; then
echo "<FONT COLOR=yellow>NON-Standalone version already installed v.`/usr/sbin/tgtadm -V` .. Skipping ...</FONT>"
echo "Please Use Regualr Install"
exit 0
fi
regular_install standalone
}

update_repo()
{
if [ ! -d ../stgt.git ]; then
mkdir -p ../stgt.git
cd ../stgt.git
git init
if [ $? != 0 ];then
echo "<FONT COLOR=red>git init Failed $? ... Exiting ...</FONT>"
exit 0
fi
fi

cd ../stgt.git
git pull http://github.com/fujita/tgt.git
if [ $? != 0 ];then
echo "<FONT COLOR=red>git pull Failed $? ... Exiting ...</FONT>"
exit 0
fi

make clean > /dev/null 2>&1
if [ $? != 0 ];then
echo "<FONT COLOR=red>make clean Failed $? ... Exiting ...</FONT>"
exit 0
fi

make | tee /tmp/install.update.stgp.make.log > /dev/null 2>&1
if [ $? != 0 ];then
echo "<FONT COLOR=red>make Failed $? ... Exiting ...</FONT>"
exit 0
fi
echo "<FONT COLOR=blue>GIT Refresh Completed</FONT>"
cd ../html
}



check_if_upgrade_required()
{

update_repo

cd ../stgt.git
GITEXTRAVERSION=`sudo -u root -S git show-ref --head --abbrev|head -1|awk '{print $1}'`

LAST_STGT_GIT_UPDATE=`cat ../LAST_STGT_GIT_UPDATE`
if [ -z "$LAST_STGT_GIT_UPDATE" ] ; then
LAST_STGT_GIT_UPDATE=0000000
fi

STGTVER_INSTALLED=`/usr/sbin/tgtadm -V`
if [ -z "$STGTVER_INSTALLED" ] ; then
STGTVER_INSTALLED=0000000
fi

STGTVER_GIT=`../stgt.git/usr/tgtadm -V`
if [ -z "$STGTVER_GIT" ] ; then
STGTVER_GIT=0000000
fi

if [ $STGTVER_INSTALLED-$LAST_STGT_GIT_UPDATE != $STGTVER_GIT-$GITEXTRAVERSION ] ; then
echo "New updates available = "`echo $STGTVER_GIT-$GITEXTRAVERSION`
cd ../html

#echo '<form action="confirm.install.stgt.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" style="color: #008000" value=" Update "></form>'

else

echo "<FONT COLOR=green>Current stgt release already installed </FONT> = "`echo $STGTVER_INSTALLED-$LAST_STGT_GIT_UPDATE`
echo "<FONT COLOR=green>Current stgt updates available in git  </FONT> = "`echo $STGTVER_GIT-$GITEXTRAVERSION`
echo "<FONT COLOR=blue>No new updates available at this time...</FONT>"
cd ../html
exit 1
fi
}



regular_install()
{
check_if_upgrade_required
if [ $? != 0 ];then
exit 0
fi

cd ../stgt.git
GITEXTRAVERSION=`sudo -u root -S git show-ref --head --abbrev|head -1|awk '{print $1}'`

if [ "$1" != "standalone" ] ; then

echo "<FONT COLOR=yellow>Shutting down stgt .... </FONT>"
pkill -9 tgtd
sleep 2
echo "Installing stgt git version $GITEXTRAVERSION ...."
make install | tee /tmp/install.update.stgp.make.install.log > /dev/null 2>&1
if [ $? = 0 ];then
echo "<FONT COLOR=green>Install Succeeded $?</FONT>"
echo $GITEXTRAVERSION > ../LAST_STGT_GIT_UPDATE
else
echo "<FONT COLOR=red>Install Failed $? ... Exiting ...</FONT>"
exit 0
fi

fi

echo $GITEXTRAVERSION > ../LAST_STGT_GIT_UPDATE
echo "<FONT COLOR=blue>Installation Complete ...</FONT>"
cd ../html
}


run()
{
if [ "$1" = "check_updates" ] ; then check_if_upgrade_required
elif [ "$1" = "standalone" ] ; then standalone_install
else
regular_install
fi
}

run $1
