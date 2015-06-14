#!/bin/bash

exit 0 # disabled ...

if [ -f /usr/bin/sg_logs ]; then
	lsscsi -g | egrep "tape" | awk '{print $NF}' | while read each; do 
		CHECK=`/usr/bin/sg_logs  -p 0x2e $each | egrep "warning|error|failure|protect|Unsupported|corrupted|required|requested|Hardware|fail|temperature|invalid|check" | grep -v 0$`
		if [ ! -z "$CHECK" ] ; then
			echo
			lsscsi -g | grep "$each"$ | awk '{print $1,$3,$4,$5}'
			echo $CHECK
		fi
	done
fi
