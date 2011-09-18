<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT Procs</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/mhvtl_procs.png">
</td>
</tr>


<?php
$output = shell_exec('sudo -u root -S uptime');
echo "<pre>MHVTL $output</pre>";
?>
<META HTTP-EQUIV="refresh" CONTENT="30">



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

<table>
<td>
<form action="stgt-procs_quick.php" method="post" onsubmit="return ray.ajax()">
<br>
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value=" Refresh ">
</form>
</td>
</table>

<?php
$output = shell_exec('ps -ef | egrep "tgtd"| egrep -v egrep');
echo "<pre>$output</pre>";
?>

<table>
<FORM ACTION="monitor.php" method="post" onsubmit="return ray.ajax()" >
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>
</table>

</body>
</html>
