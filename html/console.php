<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">

<b><font color=purple size=3>Linux Virtual Tape Library System</font></b>

<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/tux.png" >
</td>
</tr>

<?php
$upt = shell_exec('sudo -u root -S uptime');
echo "<pre>$upt</pre>" ;
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


<TABLE BORDER='1' CELLSPACING='4' CELLPADDING='4' style="background-color: #000000" BORDERCOLOR=grey >
<TR>
<TD>
<div style="overflow:auto;height:170px;width:460px;" id="ReloadThis" >
<?php
include 'fdisplay.php' ;
?>
</div>
</table>

<table>
<?php
$output = shell_exec('DEVICES=`sudo -u root -S ../scripts/plot_devices.sh`; if [ ! -z "$DEVICES" ]; then echo "$DEVICES";fi');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";
?>
</table>



</body>
</html>
