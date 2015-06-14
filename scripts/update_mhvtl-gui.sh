#!/bin/bash

if [ ! -d ../.git ]; then
	cd ../
	git init
	git pull https://github.com/markh794/mhvtl-gui.git
	cd html
fi


../scripts/check_gui.update.sh
if [ $? -eq 1 ] ; then
	echo "Updating MHVTL GUI ..."
	if [ $? -eq 0 ] ; then
		echo Update Successful $? ...
		cd ../
		ONLINE_VERSION=`sudo -u root -S git log --pretty=oneline | head -1 | cut -c1-7`
		CURRENT_RELEASE=`sudo -u root -S cat version | cut -d "-" -f1`
		echo $CURRENT_RELEASE-$ONLINE_VERSION >version
		echo MHVTL-GUI is now up-to-date with `sudo -u root -S cat version`
	else
		echo Update Failed $?
	fi
fi
