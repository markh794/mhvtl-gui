<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Restarting MHVTL :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">



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

<?php
echo "<pre><b>Restarting MHVTL:</b></pre>";
?>
<br>

<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
 <TD>


<?php

$output = shell_exec('sudo -u root -S ../scripts/start_stop_stgt stop');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('sudo -u root -S ../scripts/start_stop_scst stop');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";

$output = shell_exec('sudo -u root -S /etc/init.d/mhvtl stop');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('echo Done ..');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>

</TD>
</TR>
</TABLE>

<?php
sleep(1);
?>


<td>
<?php
$output = shell_exec('RUNNING=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $RUNNING -gt 0 ]; then echo "<img src="images/green_light.png" />" "STATE:<FONT COLOR="green">RUN </FONT>";else echo "<img src="images/red_light.png" />" "STATE:<FONT COLOR="red">HALTED </FONT></a>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php
$output = shell_exec('PROCS=`ps -ef | egrep "vtltape|vtllibrary"|egrep -v egrep|  wc -l`; if [ $PROCS -gt 0 ]; then echo "<img src="images/green_light.png" />" "PROCS:<FONT COLOR="green">OK </FONT>";else echo "<img src="images/red_light.png" />" "PROCS:<FONT COLOR="red">STOPPED </FONT></a>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php
$output = shell_exec('MODULE=`sudo -u root -S lsmod| egrep "mhvtl"|egrep -v egrep|wc -l`; if [ $MODULE -gt 0 ]; then echo "<img src="images/green_light.png" />" "MODULE:<FONT COLOR="green">OK </FONT></a>";else echo "<img src="images/red_light.png" />" "MODULE:<FONT COLOR="red">Missing </FONT></a>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<?php
$output = shell_exec('STGTPROCS=`ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $STGTPROCS -gt 0 ]; then echo "<img src="images/green_light.png" align=center /><b>"" STGT:<FONT COLOR="green">OK </FONT></b>";else echo "<img src="images/red_light.png" align=center /><b>"" STGT:<FONT COLOR="red">STOPPED </FONT></b>";fi');
echo "<pre>$output</pre>";
?>
</td>

<td>
<form action="start_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" style="color: #0000FF" value=" Start ">
</form>
</td>
<FORM ACTION="frame_a.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
