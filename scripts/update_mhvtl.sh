#!/bin/sh

if [ ! -d ../mhvtl.git ]; then
mkdir -p ../mhvtl.git
mkdir -p ../mhvtl.git/patches
chmod 777 ../mhvtl.git/patches
cd ../mhvtl.git
git init
git pull http://github.com/markh794/mhvtl.git
cd ../html
fi

../scripts/check_update.sh

if [ $? -eq 1 ] ; then

echo "Updating MHVTL, Please Wait ..."

echo "Stopping MHVTL, Please Wait ..."


../scripts/start_stop_scst stop


RUNNING=`sudo -u root -S ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`
if [ $RUNNING -gt 0 ]; then 
echo STGT STATE : RUNNING , Shutting down ... 
pkill -9 tgtd
fi


/etc/init.d/mhvtl stop
sleep 5
/etc/init.d/mhvtl shutdown
sleep 5
cd ../mhvtl.git
make distclean
cd kernel
make
if [ $? -ne 0 ] ; then
echo "Compilation Error ... Exitting ..."
exit 1
fi
cd ../
make
if [ $? -ne 0 ] ; then
echo "Compilation Error ... Exitting ..."
exit 1
fi
cd kernel
make install
if [ $? -ne 0 ] ; then
echo "Installation Error ... Exitting ..."
exit 1
fi
cd ../
make install
if [ $? -ne 0 ] ; then
echo "Installation Error ... Exitting ..."
exit 1
fi

echo "Starting MHVTL, Please Wait ..."
/etc/init.d/mhvtl start
sleep 5
lsscsi -g

cd ../html

else
echo "Your system is current & up-to-date as of `date`"
fi
