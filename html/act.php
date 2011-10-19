<?php
$cmdout = shell_exec ('sudo -u root -S rm -f /tmp/mhvtl.act.tmp; sudo -u root -S lsscsi -g | grep mediumx | grep -o "[^dev]*$" | while read each; do  sudo -u root -S lsscsi -g | grep /dev$each$; sudo -u root -S mtx -f /dev$each status | sudo -u root -S grep "Loaded"; done >>/tmp/mhvtl.act.tmp');
$ACTIVITY=`sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx`;
$cmdout2 = shell_exec ('sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx | while read eachone; do echo "<img src=images/animated_dot.gif align=top />" $eachone ; done');
$output1=`if [ ! -z "$ACTIVITY" ] ; then echo "$cmdout2" ;fi`;
$output2=`if [ ! -z "$ACTIVITY" ] ; then sudo -u root -S cat /tmp/mhvtl.act.tmp;else echo STATUS: IDLE;fi`;
echo "<pre><b>$output1</b></pre>";
echo "<pre><b>$output2</b></pre>";
?>
