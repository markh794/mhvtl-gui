exit 0
cat /tmp/mhvtl.act.tmp| grep VolumeTag | awk '{print $NF}' | while read each; do

VAL1=`ls -l /opt/mhvtl/$each/data| awk '{print $5}'`
sleep 1
VAL2=`ls -l /opt/mhvtl/$each/data| awk '{print $5}'`
if [ ! -z $VAL1 ] || [ ! -z $VAL2 ]; then
DIFF=$((($VAL2-$VAL1)/1000000))
MBSIZE=$(($VAL2/1000000))
if [ $DIFF = 0 ] ;then
echo "<FONT COLOR=#00FFFF size=2 >Media Loaded: <FONT COLOR=#FF00FF size=2 >$each</FONT> : <FONT COLOR=#00FFFF size=2 >$MBSIZE MB</FONT> - <FONT COLOR=#008000 size=2 >Idle</FONT>"
else
echo "<FONT COLOR=#00FFFF size=2 >Media Loaded: <FONT COLOR=#FF00FF size=2 >$each</FONT> : <FONT COLOR=#FF0000 size=2 >$MBSIZE MB</FONT> - <FONT COLOR=#FFFF00 size=2 >Writing</FONT>"
fi
echo "<br>"
fi

done

