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

<TABLE BORDER='1' CELLSPACING='4' CELLPADDING='4' style="background-color: #000000" BORDERCOLOR=grey >
<TR>
<TD>
<div style="overflow:auto;height:70px;width:565px;" id="ReloadThis" >
<?php
$procs = shell_exec('ps -ef | egrep "tgtd"| egrep -v egrep');
// $sockets = shell_exec('netstat -tulpn | grep 3260');
echo "<pre><FONT COLOR=white >$procs</FONT></pre>";
?>
</div>
</TD>
</TR>
</TABLE>


<table>
<td>
<form action="tgt-procs_quick.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" style="color: #0000FF" value=" Refresh ">
</form>
<FORM ACTION="stgt.php" method="post" onsubmit="return ray.ajax()" ><INPUT TYPE=SUBMIT VALUE="Return"></FORM>
</td>
</table>


</body>
</html>
