
<table border="1">
<td>
<?php
$output = shell_exec('RUNNING=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $RUNNING -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>" "STATE:<FONT COLOR="green">ONLINE </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>" "STATE:<FONT COLOR="red">OFFLINE </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php
$output = shell_exec('PROCS=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $PROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="procs_quick.php" style="text-decoration:none" >" "PROCS:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="procs_quick.php" style="text-decoration:none" >" "PROCS:<FONT COLOR="red">STOPPED </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php
$output = shell_exec('MODULE=`sudo -u root -S lsmod| egrep "mhvtl"|egrep -v egrep|wc -l`; if [ $MODULE -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="module_quick.php" style="text-decoration:none" >" "MODULE:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="module_quick.php" style="text-decoration:none" >" "MODULE:<FONT COLOR="red">Missing </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php if (file_exists("../ENABLE_TGTD_SCSI_TARGET") || file_exists("../ENABLE_SCST_SCSI_TARGET"))
{
echo "<pre><img src='images/green_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3 style='text-decoration:none' >iSCSI : </><a href=stgt.php><FONT COLOR=#347C17 size=3 style='text-decoration:none' >ON </FONT></b></a></pre>";
}
else
{
echo "<pre><img src='images/red_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3 style='text-decoration:none' > iSCSI: </><a href=stgt.php><FONT COLOR=#FF0000 size=3 style='text-decoration:none' >OFF </FONT></b></a></pre>";
}
?>
</td>


<td>
<?php
$output = shell_exec ('ACTIVITY=`sudo -u root -S lsscsi -g | grep mediumx | grep -o "[^dev]*$" | while read each; do sudo -u root -S mtx -f /dev/$each status | grep "Loaded" ;done`;if [ -z "$ACTIVITY" ] ; then echo "<img src="images/green_light.png" align=top /><b>""<a href="activity.php" style="text-decoration:none" >" "STATUS:<FONT COLOR="green">IDLE </FONT></b>";else echo "<img src="images/warning.png" align=top /><b>""<a href="activity.php" style="text-decoration:none" >" "STATUS:<FONT COLOR="orange">Active </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>


<td>
<?php
$filename = '../ENABLE_TGTD_SCSI_TARGET';if (file_exists($filename))
{
$output = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="stgt-procs_quick.php" style="text-decoration:none" >" "STGT:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="stgt-procs_quick.php" style="text-decoration:none" >" "STGT:<FONT COLOR="red">STOPPED </FONT></b>";fi');
echo "<pre>$output</pre>";
}
?>
</td>


<td>
<?php
$filename = '../ENABLE_SCST_SCSI_TARGET';if (file_exists($filename))
{
$output = shell_exec('STCTPROCS=`ps -ef | egrep "scst"|egrep -v egrep|  wc -l`; if [ $STCTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=top /><b>""<a href="scst-procs_quick.php" style="text-decoration:none" >" "SCST:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=top /><b>""<a href="scst-procs_quick.php" style="text-decoration:none" >" "SCST:<FONT COLOR="red">STOPPED </FONT></b>";fi');
echo "<pre>$output</pre>";
}
?>
</td>

</table>

<?php
$output = shell_exec('sudo -u root -S uptime');
echo "<pre>$output</pre>";
?>

<FONT COLOR="blue"><b>CPU & Device Utilization : </b></FONT>
<?php
$cmd = shell_exec('sudo -u root -S iostat -c >/tmp/mnitor.iostat.tmp 2>&1');
$output = shell_exec('sudo -u root -S cat /tmp/mnitor.iostat.tmp');
echo "<pre>$output</pre>";
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
<div style="overflow:auto; height:100px;width:640px;">
<?php
$output = shell_exec('CHECKL=`sudo -u root -S egrep "vtltape|vtllibrary|tgtd" /var/log/messages| egrep -i "warning|fail|error" | tail -100| grep -v sudo| cut -d":" -f1,3,4,5`; if [ ! -z "$CHECKL" ] ; then echo "<FONT COLOR="red">$CHECKL</FONT>"; fi');
echo "<pre>$output</pre>";
?>
</div>
</table>
