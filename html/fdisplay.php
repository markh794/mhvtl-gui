<?php

echo '<form action="confirm.start_mhvtl.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" class=sameSize2 style="background-color:#008000; color: #FFFFFF; font-weight: bold" value="Start" src="images/turn_on.png" ></form>';
echo '<form action="confirm.stop_mhvtl.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" class=sameSize2 style="background-color:#FF0000; color: #FFFFFF; font-weight: bold" value="Stop" src="images/turn_off.png" ></form>';
echo '<form action="activity.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" class=sameSize2 style="background-color:#FFFF00; color: #000000; font-weight: bold" value=" Monitor " ></form>';
echo '<form action="monitor.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" class=sameSize2 style="background-color:#800080; color: #FFFFFF; font-weight: bold" value=" System " ></form>';
echo '<form action="console.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" class=sameSize2 style="background-color:#eeeeee; color: #000000; font-weight: bold" value=" Refresh " ></form>';
echo "<BR>";
echo "<BR>";
?>

<?php

$dtt = `date`;
echo "<b><FONT COLOR=#FFFFFF>$dtt</FONT>";



$dm = `sudo -u root -S ../scripts/pandisp.sh`;
echo "<BR>";

if ($dm=="")
{
$mhvtlver = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
$output = shell_exec('DEVICES=`sudo -u root -S lsscsi -g | egrep "tape|mediumx"`; if [ -z "$DEVICES" ]; then echo "<img src="images/fd_red_light.png" align=center /><FONT COLOR=#ffffff > MHVTL: </FONT><FONT COLOR=#FF0000 >OFFLINE</FONT>"; else echo "<img src="images/fd_green_light.png" align=center /><FONT COLOR=#ffffff > MHVTL: </FONT><FONT COLOR=#00ff00 >ONLINE</FONT>"; fi');

$output1 = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v grep|grep -v scsi_tgtd| wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=center /><FONT COLOR="#ffffff" > tgt  : </FONT><FONT COLOR=#00ff00 >ONLINE</FONT>";else echo "<img src="images/red_light.png" align=center /><FONT COLOR="#ffffff" > tgt  : </FONT></FONT><FONT COLOR=#FF0000 >OFFLINE</FONT>";fi');


echo "<pre>$output$output1</pre>";

$RC=`sudo -u root -S lsscsi -g | grep mediumx| wc -l`;
$RT=`sudo -u root -S lsscsi -g | grep tape| wc -l`;

$NT=`sudo -u root -S ../scripts/count_tapes.sh`;
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
