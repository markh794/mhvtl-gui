#!/bin/bash

CHECK=`grep ^" Home directory:" /etc/mhvtl/device.conf | awk '{print $NF}'`
if [ ! -z "$CHECK" ] ; then

	grep ^" Home directory:" /etc/mhvtl/device.conf | awk '{print $NF}' >/tmp/HOMEDIRCUST.OUT
	TOTAL=0
	HOMEDIRCUST=`sort -u /tmp/HOMEDIRCUST.OUT`
	for each in $HOMEDIRCUST; do

		case $each in
		/opt/mhvtl*)
			ADD=0
			TOTAL=$(($TOTAL + $ADD))
			;;
		*)
			ADD=`find $each -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| wc -l`
			TOTAL=$(($TOTAL + $ADD))
			;;
		esac
	done
fi

ADD=`find /opt/mhvtl -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| wc -l`
TOTAL=$(($TOTAL + $ADD))
echo $TOTAL
rm -f /tmp/HOMEDIRCUST.OUT
