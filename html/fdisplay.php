<?php

$dtt = `date`;
echo "<b><FONT COLOR=#FFFFFF>$dtt</FONT>";

$dm = `sudo -u root -S ../scripts/pandisp.sh`;
if ($dm=="")
{
$output = shell_exec('DEVICES=`sudo -u root -S lsscsi -g | egrep "tape|mediumx"`; if [ -z "$DEVICES" ]; then echo "<br><br><img src="images/fd_red_light.png" align=center /><FONT COLOR=#FF0000> Offline</FONT>"; else echo "<br><br><img src="images/fd_green_light.png" align=center /><FONT COLOR=#008000> Ready</FONT>"; fi');
echo "<b>$output</b>";
echo "<BR><BR>";
$RC=`sudo -u root -S lsscsi -g | grep mediumx| wc -l`;
$RT=`sudo -u root -S lsscsi -g | grep tape| wc -l`;
$NT=`sudo -u root -S find /opt/mhvtl -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| wc -l`;
echo "<FONT COLOR=#FFFF00> $RC</FONT><FONT COLOR=#FFFFFF>Changer(s)</FONT></FONT>";
echo "<FONT COLOR=#FFFF00> $RT</FONT><FONT COLOR=#FFFFFF>Tape Drive(s)</FONT></FONT>";
echo "<FONT COLOR=#FFFF00> $NT</FONT><FONT COLOR=#FFFFFF>Cartridge(s)</FONT></FONT>";
}
else
{
echo "$dm";
}

sleep(0);
?>
