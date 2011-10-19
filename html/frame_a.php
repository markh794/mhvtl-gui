<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><FONT COLOR=purple > Control Center</FONT><FONT COLOR=black></FONT></b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/tux.png" ALIGN="middle" ><b><FONT COLOR=blue size=4> Linux Virtual Tape Library System</FONT></b>
</td>
</tr>

<?php
$output = `uname -snrp`;
echo "<pre><b> $output</b></pre>";
?>


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

<table border="1" >

<td>
<form action="confirm.start_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #008000" value="     Run     ">
</form>
</td>

<td>
<form action="confirm.stop_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #FF0000" value="     Halt     ">
</form>
</td>

<td>
<form action="devices.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #800080" value=" Virtual Devices ">
</form>
</td>



<td>
<form action="activity.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #F87217" value="  Activity    ">
</form>
</td>


<td>
<form action="monitor.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #0000FF" value="   Monitor   " >
</form>
</td>
<td>
<INPUT TYPE="button" VALUE=" Hardware " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='hardware.php'" target="showframe">
</td>

<!--
<td>
<form action="frame_a.php" method="post" >
<input TYPE="submit" class="sameSize" style="color: #808000" value=" Refresh  ">
</form>
</td>
-->

</table>

<!--
<img src="images/libr_img.gif" ALIGN=top >
-->
<br>

<script type="text/javascript">

			function Ajax()
			{
				var
					$http,
					$self = arguments.callee;

				if (window.XMLHttpRequest) {
					$http = new XMLHttpRequest();
				} else if (window.ActiveXObject) {
					try {
						$http = new ActiveXObject('Msxml2.XMLHTTP');
					} catch(e) {
						$http = new ActiveXObject('Microsoft.XMLHTTP');
					}
				}

				if ($http) {
					$http.onreadystatechange = function()
					{
						if (/4|^complete$/.test($http.readyState)) {
							document.getElementById('ReloadThis').innerHTML = $http.responseText;
							setTimeout(function(){$self();}, 2000);
						}
					};
					$http.open('GET', 'mhvtl_fifo.php' + '?' + new Date().getTime(), true);
					$http.send(null);
				}

			}

		</script>
                <script type="text/javascript">
                        setTimeout(function() {Ajax();}, 2000);
                </script>

<TABLE BORDER='1' CELLSPACING='4' CELLPADDING='4' style="background-color: #000000" >
<TR>
<TD>
<div style="overflow:auto;height:60px;width:450px;" id="ReloadThis" >
<?php
include 'mhvtl_fifo.php' ;
?>
</div>
</table>


<div style="overflow:auto;height:200px;width:500px;">
<?php
$output = shell_exec('DEVICES=`sudo -u root -S ../scripts/plot_devices.sh`; if [ -z "$DEVICES" ]; then echo "<img src="images/red_light.png" align=center /> *** System maybe offline *** <a href=procs_quick.php style=text-decoration:none >is MHVTL running ? </a>"; else echo "$DEVICES"; fi');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";
?>
<Select>
</div>

<?php
if (!file_exists('/tmp/mhvtl.last.update.check'))
{
$output = shell_exec('touch -t 200001010000.00 /tmp/mhvtl.last.update.check');
}
?>

<?php
if (!file_exists('/tmp/mhvtl-gui.last.update.check'))
{
$output = shell_exec('touch -t 200001010000.00 /tmp/mhvtl-gui.last.update.check');
}
?>



<?php
$output = shell_exec('LASTCHECK=`find /tmp/mhvtl.last.update.check -mtime +1`; if [ ! -z "$LASTCHECK" ]; then CHECKU=`sudo -u root -S ../scripts/check_update.sh| grep -v "MHVTL is up-to-date"`; if [ ! -z "$CHECKU" ] ; then echo "<img src="images/animated_alert.gif" /> $CHECKU" ;fi;
fi');
echo "<pre>$output</pre>";
?>

<?php
$output = shell_exec('LASTCHECK=`find /tmp/mhvtl-gui.last.update.check -mtime +1`; if [ ! -z "$LASTCHECK" ]; then CHECKU=`sudo -u root -S ../scripts/check_gui.update.sh| grep -v "MHVTL-GUI is up-to-date"`;if [ ! -z "$CHECKU" ] ; then echo "<img src="images/animated_alert.gif" /> $CHECKU";fi;
fi');
echo "<pre>$output</pre>";
?>

</table>

<!--
<pre>
<FONT COLOR=blue size=4>Trademark Disclaimer:</FONT>
<FONT COLOR=black size=3> Product names, logos, brands, and other trademarks featured or referred to within
 MHVTL Web Console are the property of their respective trademark holders.
 These trademark holders are not affiliated with MHVTL Web Console, nor
 they sponsor or endorse any of our solutions.
</FONT></pre>
-->
</body>
</html>
