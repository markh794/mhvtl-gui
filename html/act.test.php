<?php
$dt = shell_exec ('sudo -u root -S date');
$cmdout = shell_exec ('sudo -u root -S rm -f /tmp/mhvtl.act.tmp; sudo -u root -S lsscsi -g | grep mediumx | grep -o "[^dev]*$" | while read each; do  sudo -u root -S lsscsi -g | grep /dev$each$|cut -d "]" -f2 ; sudo -u root -S mtx -f /dev$each status | sudo -u root -S grep "Loaded"; done >>/tmp/mhvtl.act.tmp');
$ACTIVITY=`sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx`;
$cmdout2 = shell_exec ('sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx| cut -d ":" -f2,3|cut -c5- | while read eachone; do echo "<FONT COLOR=#FFFF00>Testing, Please Wait ...</FONT><br><br> <img src=images/test.animated_dot.gif align=top />" "<FONT COLOR=#00FFFF>$eachone</FONT>" ; done');
$output1=`if [ ! -z "$ACTIVITY" ] ; then echo "$cmdout2" ; else echo "$dt" ;fi`;
$output = shell_exec('cat /tmp/mhvtl.quick.test.tmp');
$output2=`if [ ! -z "$ACTIVITY" ] ; then sudo -u root -S cat /tmp/mhvtl.act.tmp| awk 'BEGIN{RS="mediumx" } /Data Transfer Element/' ;else echo "<FONT COLOR=#008000></FONT><br><pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";fi`;

echo "<pre><b><FONT COLOR=#FFFFFF>$output1</FONT></b></pre>";
echo "<pre><b><FONT COLOR=#FFFFFF>$output2</FONT></b></pre>";
?>
