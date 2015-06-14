#!/bin/bash

if [ -z "$1" ] ; then
	exit 0
fi

VAR2=`echo $2 | sed 's/ //g'`

disk()
{
CHECK=`df -k /opt/mhvtl | cut -d "%" -f1 | awk '{print $NF}'| egrep ^[0-9]`
if [ $CHECK -gt $VAR2 ] ; then
	echo $CHECK
fi
}


$1
