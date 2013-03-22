<table border="1" >

<td>
<?php
$output = shell_exec('RUNNING=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $RUNNING -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>" "STATE:<FONT COLOR="green">ONLINE </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>" "STATE:<FONT COLOR="red">OFFLINE </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>
<td>
<?php
$output = shell_exec('PROCS=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $PROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="procs_quick.php" style="text-decoration:none" >" "PROCS:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="procs_quick.php" style="text-decoration:none" >" "PROCS:<FONT COLOR="red">STOPPED </FONT></b></a>";fi');
echo "<pre>$output</pre>";
?>
</td>
<td>
<?php
$output = shell_exec('MODULE=`sudo -u root -S lsmod| egrep "mhvtl"|egrep -v egrep|wc -l`; if [ $MODULE -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="module_quick.php" style="text-decoration:none" >" "MODULE:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="module_quick.php" style="text-decoration:none" >" "MODULE:<FONT COLOR="red">Missing </FONT></b></a>";fi');
echo "<pre>$output</pre>";
?>
</td>
<td>
<?php if (file_exists("../ENABLE_TGTD_SCSI_TARGET") || file_exists("../ENABLE_SCST_SCSI_TARGET"))
{
echo "<pre><img src='images/green_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3 style='text-decoration:none' > iSCSI: </><a href=stgt.php><FONT COLOR=#347C17 size=3 style='text-decoration:none' >ON </FONT></b></pre>";
}
else
{
echo "<pre><img src='images/red_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3 style='text-decoration:none' > iSCSI: </><a href=stgt.php><FONT COLOR=#FF0000 size=3 style='text-decoration:none' >OFF </FONT></b></pre>";
}
?>

</td>

<td>
<?php
$filename = '../ENABLE_TGTD_SCSI_TARGET';if (file_exists($filename))
{
$output = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="stgt-procs_quick.php" style="text-decoration:none" >" "TGT:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="stgt-procs_quick.php" style="text-decoration:none" >" "STGT:<FONT COLOR="red">STOPPED </FONT></b></a>";fi');
echo "<pre>$output</pre>";
}
?>
</td>

<td>
<?php
$filename = '../ENABLE_SCST_SCSI_TARGET';if (file_exists($filename))
{
$output = shell_exec('STCTPROCS=`ps -ef | egrep "scst"|egrep -v egrep|  wc -l`; if [ $STCTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="scst-procs_quick.php" style="text-decoration:none" >" "SCST:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="scst-procs_quick.php" style="text-decoration:none" >" "SCST:<FONT COLOR="red">STOPPED </FONT></b></a>";fi');
echo "<pre>$output</pre>";
}
?>
</td>
</table>

<br>
<FONT COLOR="blue"><b>CPU Load : </b></FONT>
<?php
$output = shell_exec("sudo -u root -S uptime | awk '{print $1,$8,$9,$10,$11,$12}'");
echo "<pre>$output</pre>";
?>



<FONT COLOR="blue"><b>System Memeory : </b></FONT>
<?php
$output = shell_exec('sudo -u root -S free ');
echo "<pre><font size=2>$output</font></pre>";
?>


<FONT COLOR="blue"><b>MHVTL Filesystem : </b></FONT>
<?php
$output = shell_exec('sudo -u root -S df -h /opt/mhvtl ');
echo "<pre>$output</pre>";
?>



<FONT COLOR="blue"><b>Alerts & Error Messages : </b></FONT>
<table>
<td>
<form action="view_syslog.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameLook" style="color: #000000" value=" View System Log ">
</form>
</td>
</table>




<?php
$output = shell_exec('CHECKD=`sudo -u root -S ../scripts/host_mon.sh disk 95`; if [ ! -z "$CHECKD" ] ; then echo "<img src="images/alert.png" /> MHVTL Disk FS Threshold Exceeded = $CHECKD %" ; fi');
echo "<pre>$output</pre>";
?>

<table>
<div style="overflow:auto; height:100px;width:570px;">
<?php
$output = shell_exec('CHECKL=`sudo -u root -S tail -100 /var/log/messages | sudo -u root -S egrep "vtltape|vtllibrary|tgtd" | egrep -i "warning|fail|error" | grep -v sudo| sort -r | cut -d":" -f1,3,4,5`; if [ ! -z "$CHECKL" ] ; then echo "<FONT COLOR="red">$CHECKL</FONT>"; fi');
echo "<pre>$output</pre>";
?>
</div>
</table>
