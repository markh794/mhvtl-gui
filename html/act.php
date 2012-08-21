<?php

echo "<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 </FONT>";
echo "<TR>";
echo "<TD>";

$output = shell_exec('sudo -u root -S uptime');
echo "<pre><b><FONT COLOR=#FFFFFF>$output</FONT></b></pre>";

$cmdout = shell_exec ('sudo -u root -S rm -f /tmp/mhvtl.act.tmp; sudo -u root -S lsscsi -g | grep mediumx | grep -o "[^dev]*$" | while read each; do  sudo -u root -S lsscsi -g | grep /dev$each$|cut -d "]" -f2 ; sudo -u root -S mtx -f /dev$each status | sudo -u root -S grep "Loaded"; done >>/tmp/mhvtl.act.tmp');

$actdisp = shell_exec('sudo -u root -S ../scripts/actdisp.sh');
$ACTIVITY=`sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx`;

$cmdout2 = shell_exec ('sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx| cut -d ":" -f2,3|cut -c5- | while read eachone; do echo "<img src=images/animated_dot.gif align=top />" "<FONT COLOR=00FFFF>$eachone</FONT>" ; done');

$output1=`if [ ! -z "$ACTIVITY" ] ; then echo "$cmdout2" ;fi`;

$output2=`if [ ! -z "$ACTIVITY" ] ; then sudo -u root -S cat /tmp/mhvtl.act.tmp| awk 'BEGIN{RS="mediumx" } /Data Transfer Element/';else echo "<FONT COLOR=00FF00>STATUS: Idle</FONT>";fi`;
echo "<pre>$actdisp</pre>";
echo "<pre><b><FONT COLOR=FFFFFF>$output2</FONT></b></pre>";
echo "</TR>";
echo "</TD>";
echo "</TABLE>";
?>
