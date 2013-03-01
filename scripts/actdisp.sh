
CHOMEDIRS=`grep ^" Home directory:" /etc/mhvtl/device.conf | awk '{print $NF}' | sort -u >/tmp/AHOMEDIRS`
DHOMEDIR=`echo /opt/mhvtl >>/tmp/AHOMEDIRS`
cat /tmp/mhvtl.act.tmp| grep VolumeTag | awk '{print $NF}' | while read each; do

cat /tmp/AHOMEDIRS| sort -u| while read eachh; do

VAL1=`ls -l $eachh/$each/data| awk '{print $5}'`
perl -e 'select(undef,undef,undef,.5)'
VAL2=`ls -l $eachh/$each/data| awk '{print $5}'`

if [ ! -z $VAL1 ] || [ ! -z $VAL2 ]; then
DIFF=$((($VAL2 - $VAL1)/1000000))
SIZE=$(($VAL2/1000))
ADDDIFF=$(($ADDDIFF+$SIZE))


if [ $DIFF = 0 ] ;then
echo "<b><FONT COLOR=#00FF00 >* <FONT COLOR=#00FF00 >$each</FONT> : <FONT COLOR=#00FF00 > Used $SIZE KB </FONT> - <FONT COLOR=#00FF00 >Idle</FONT></b>"
else
echo "<b><FONT COLOR=#FFFF00 >* <FONT COLOR=#FFFF00 >$each</FONT> : <FONT COLOR=#FFFF00 > Writing $ADDDIFF KB </FONT> - <FONT COLOR=#FFFF00 >Active</FONT></b>"
fi
fi

done
done
