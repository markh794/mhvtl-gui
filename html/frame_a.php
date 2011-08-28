<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">

<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Control Center</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/tux.png" ALIGN="middle" ><b><FONT COLOR=blue size=4> Linux Virtual Tape Library System</FONT></b>
</td>
</tr>


<?php
$output = `cat ../version`;
echo "<pre><b><FONT COLOR=green>Web Console Build: $output</FONT></b></pre>";
?>
<br>

<script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
	},
show:function(el)
	{
		this.getID(el).style.display='';
	},
getID:function(el)
	{
		return document.getElementById(el);
	}
}
</script>

<div id="load" style="display:none;"><img src="images/loading.gif" border=0></div>

<table border="1">

<td>
<form action="confirm.start_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #008000" value="    Run    ">
</form>
</td>

<td>
<form action="confirm.stop_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #FF0000" value="    Halt    ">
</form>
</td>

<td>
<form action="devices.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #800080" value=" Virtual Devices ">
</form>
</td>



<td>
<form action="activity.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #F87217" value=" Activity  ">
</form>
</td>


<td>
<form action="monitor.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #0000FF" value=" Monitor " >
</form>
</td>


<td>
<?php if (file_exists("../ENABLE_TGTD_SCSI_TARGET") || file_exists("../ENABLE_SCST_SCSI_TARGET"))
{
echo "<img src='images/green_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=2> Remote Clients : </><a href=scsi_target.php><FONT COLOR=#347C17 size=2> Enabled </FONT></b></a>";
}
else
{
echo "<img src='images/red_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=2> Remote Clients : </><a href=scsi_target.php><FONT COLOR=#FF0000 size=2> Disabled </FONT></b></a>";
}
?>
</td>

</table>

<!--
<img src="images/libr_img.gif" ALIGN=top >
-->

<?php
$output = `uname -snrvp`;
echo "<pre><b>$output</b></pre>";
?>


<div style="overflow:auto;height:200px;width:570px;">
<?php
$output = shell_exec('DEVICES=`sudo -u root -S ../scripts/plot_devices.sh`; if [ -z "$DEVICES" ]; then echo "<img src="images/red_light.png" align=center /> *** System maybe offline *** <a href=procs_quick.php style=text-decoration:none >is MHVTL running ? </a>"; else echo "<img src=images/gear_red.png ALIGN=top> Virtual Tape Devices :<br>$DEVICES"; fi');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";
?>
<Select>
</div>


<?php
$output = shell_exec('LASTCHECK=`find /tmp/mhvtl.last.update.check -mtime +1`; if [ ! -z "$LASTCHECK" ]; then
CHECKU=`sudo -u root -S ../scripts/check_update.sh| grep -v "MHVTL is up-to-date"`;
if [ ! -z "$CHECKU" ] ; then echo "<img src="images/animated_alert.gif" /> $CHECKU" ;
fi; fi');
echo "<pre>$output</pre>"
?>

<?php
$output = shell_exec('LASTCHECK=`find /tmp/mhvtl.last.update.check -mtime +1`; if [ ! -z "$LASTCHECK" ]; then
CHECKU=`sudo -u root -S ../scripts/check_gui.update.sh| grep -v "MHVTL-GUI is up-to-date"`;
if [ ! -z "$CHECKU" ] ; then echo "<img src="images/animated_alert.gif" /> $CHECKU";
fi; fi');
echo "<pre>$output</pre>"
?>


<?php echo "<pre><b><FONT size=2><a href='http://sites.google.com/site/linuxvtl2/'>MHVTL</a> - <a href='http://www.gnu.org/licenses/gpl-2.0.html'>GNU GENERAL PUBLIC LICENSE : GPL v2 : Copyright (C) 2011. All rights reserved.</a></FONT></b></pre>";?>

</body>
</html>
