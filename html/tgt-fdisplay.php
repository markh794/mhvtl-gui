<?php


$ver = shell_exec('sudo -u root -S /usr/sbin/tgtadm -V');
echo "<FONT COLOR=#FFFFFF>Linux SCSI target framework  ( tgt ) Release : </FONT><a href='update.php'><FONT COLOR=#00FFFF > $ver </FONT></a>";
//echo "<form action='update.php' method='post' ><input TYPE='submit' style='color: #000000' value='Update'></form>";

$output = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=center /><FONT COLOR="#ffffff" ></FONT><a href="tgt-procs_quick.php"><FONT COLOR=#00ff00 >  ONLINE </FONT></a>";else echo "<img src="images/red_light.png" align=center /><FONT COLOR="#ffffff" > </FONT></FONT><FONT COLOR=#FF0000 >OFFLINE</FONT>";fi');

//echo "' '$output";
echo "' '$output' '<form action='confirm.stop_stgt.php' method='post' ><input TYPE='submit' style='color: #FF0000' value='Shutdown'></form>";
// echo "<form action='stgt.php' method='post' onsubmit='return ray.ajax()'><input TYPE='submit' type='submit' value='Refresh'></form>";
?>
