<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Kernel Module</font><b>
<hr width="100%" size=1 color="blue">
<META HTTP-EQUIV="refresh" CONTENT="30">

<tr>
<td align=left valign=middle>
<img src="images/mhvtl_procs.png">
</td>
</tr>
<br>

<?php
$output = shell_exec('sudo -u root -S uptime');
echo "<pre>MHVTL $output</pre>";
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

<table border="0">
<td>
<form action="module_quick.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value=" Refresh ">
</form>
</td>

<td>
<FORM ACTION="monitor.php" method="post" onsubmit="return ray.ajax()" >
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM></td>
</table>




<?php
$version = `cat /sys/module/mhvtl/version`;
echo "<pre>Module Version $version</pre>";
$lsmod = shell_exec('sudo -u root -S lsmod | grep mhvtl');
echo "<pre>lsmod : $lsmod</pre>";
?>

</body>
</html>
