#!/bin/bash

CHECK=`lsscsi -g| egrep "mediumx|tape"`
if [ -z "$CHECK" ] ; then

	echo '</SELECT>'
	echo '<SELECT style="color: #FF0000; background: #FFFFFF; font-weight: bold;" class="set_width" maxlength=10 >'
	echo '<OPTION>'no mediumx changer or tape devices found ...'</OPTION>'
	echo '</SELECT>'

	echo '</BR>'
	echo '* is system offline ? ...'
	echo '* check if system running ...'
	echo '* start system if not running ...'
else
	lsscsi -g| egrep "mediumx|tape"| awk '{print $1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11}' | cut -d "/" -f1 | awk '{$(NF--)=""; print}' | while read sid dev ven mod fw ext1 ext2 ext3 ext4 ext5 ext6 ; do 
		if [ "$dev" = "mediumx" ] ;then
			echo '</SELECT>'
			echo '<SELECT style="color: #000000; background: #ffffff; font-weight: bold;" class="set_width" maxlength=10 >'
			echo '<OPTION>'$sid - $dev - $ven $mod $fw $ext1 $ext2 $ext3 $ext4 $ext5 $ext6 '</OPTION>'
		else
			echo '<OPTION>'$sid - $dev - $ven $mod $fw $ext1 $ext2 $ext3 $ext4 $ext5 $ext6 '</OPTION>'
		fi
	done
	echo '</SELECT>'

fi
