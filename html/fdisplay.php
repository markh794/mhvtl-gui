<?php
$mhvtl_ver = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
$dtt = `date`;
echo "<b><FONT COLOR=#FFFFFF>$dtt</FONT><br><br>";

$cmdout = shell_exec ('sudo -u root -S rm -f /tmp/mhvtl.act.tmp; sudo -u root -S lsscsi -g | grep mediumx | grep -o "[^dev]*$" | while read each; do  sudo -u root -S lsscsi -g | grep /dev$each$|cut -d "]" -f2 ; sudo -u root -S mtx -f /dev$each status | sudo -u root -S grep "Loaded"; done >>/tmp/mhvtl.act.tmp');


$dm = `sudo -u root -S ../scripts/pandisp.sh`;
if ($dm=="")
{
echo "<FONT COLOR=#00FFFF>MHVTL </FONT><FONT COLOR=#00FFFF>$mhvtl_ver </FONT>";

$output = shell_exec('DEVICES=`sudo -u root -S ../scripts/plot_devices.sh`; if [ -z "$DEVICES" ]; then echo "<br><br><img src="images/red_light.png" align=center /><FONT COLOR=#FF0000> System Offline</FONT>"; else echo "<br><br><FONT COLOR=#00FF00>System Online : idle</FONT></b>"; fi');
echo "<b>$output</b>";
}
else
{
echo "$dm";
}

sleep(0);
?>
