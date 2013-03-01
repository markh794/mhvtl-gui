<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<?php $output = `sudo -u root -S cat ../version`;?>
<FONT COLOR=#000000 ><b>Console: </FONT><FONT COLOR=#008000 size=2 ><?php echo $output ;?></FONT></b>


<hr width="100%" size=1 color="blue">

<tr><td><img src="images/tux.png" align=middle ><FONT COLOR=blue size=5> Linux Virtual Tape Library System</FONT></td></tr>

<?php $output = shell_exec('sudo -u root -S ../scripts/os_release.sh');?>
<pre><b><FONT COLOR=#000000><?php echo $output ;?></FONT></b></pre>


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
<div style="overflow:auto;height:180px;width:460px;" id="ReloadThis" >
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
