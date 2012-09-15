<?php

$dtt = `date`;
echo "<b><FONT COLOR=#FFFFFF>$dtt</FONT>";

$dm = `sudo -u root -S ../scripts/pandisp.sh`;
echo "<BR>";

if ($dm=="")
{
$output = shell_exec('DEVICES=`sudo -u root -S lsscsi -g | egrep "tape|mediumx"`; if [ -z "$DEVICES" ]; then echo "<br><img src="images/fd_red_light.png" align=center /><FONT COLOR=#ffffff > MHVTL: </FONT><FONT COLOR=#FF0000 >OFFLINE</FONT>"; else echo "<br><img src="images/fd_green_light.png" align=center /><FONT COLOR=#ffffff > MHVTL: </FONT><FONT COLOR=#00ff00 >ONLINE</FONT>"; fi');

$output1 = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=center /><FONT COLOR="#ffffff" > iSCSI Target (tgt): </FONT><FONT COLOR=#00ff00 >ONLINE</FONT>";else echo "<img src="images/red_light.png" align=center /><FONT COLOR="#ffffff" > iSCSI Target (tgt): </FONT></FONT><FONT COLOR=#FF0000 >OFFLINE</FONT>";fi');


echo "<pre>$output$output1</pre>";

$RC=`sudo -u root -S lsscsi -g | grep mediumx| wc -l`;
$RT=`sudo -u root -S lsscsi -g | grep tape| wc -l`;
$NT=`sudo -u root -S find /opt/mhvtl -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"| wc -l`;
echo "<FONT COLOR=#FFFF00> $RC</FONT><FONT COLOR=#FFFFFF>Changer(s)</FONT></FONT>";
echo "<FONT COLOR=#FFFF00> $RT</FONT><FONT COLOR=#FFFFFF>Tape Drive(s)</FONT></FONT>";
echo "<FONT COLOR=#FFFF00> $NT</FONT><FONT COLOR=#FFFFFF>Cartridge(s)</FONT></FONT>";
}
else
{
echo "<FONT COLOR=#FFFF00 size=2 ><br><br> $dm</FONT>";
}

sleep(0);
?>
