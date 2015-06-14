#!/bin/bash

touch /tmp/tgt.last.update.check

if [ ! -d ../stgt.git ]; then
	mkdir -p ../stgt.git
	cd ../stgt.git
	git init
	git pull https://github.com/fujita/tgt.git
	cd ../html
fi

cd ../stgt.git

sudo -u root -S git pull https://github.com/fujita/tgt.git > /dev/null 2>&1

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
	echo "<font color=red>TGT Updates Available</font> : <a href="review_tgt_update.php"><font color=blue>$STGTVER_GIT-$GITEXTRAVERSION </font></a>"
	cd ../html
else
	echo "<font color=green>TGT is up-to-date</font><a style='float:right;'</a> $STGTVER_GIT-$GITEXTRAVERSION "
	cd ../html
	exit 1
fi
