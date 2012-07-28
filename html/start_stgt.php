<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/starting_mhvtl.png" >
</td>
</tr>



<?php
echo "<pre>Starting STGT Daemons:</pre>";
?>
<br>

<?php 
$filename = '../ENABLE_TGTD_SCSI_TARGET';
if (!file_exists($filename))
{
echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
exit("<FONT COLOR='#000000'>STGT Disabled($filename)</FONT>");
}
?>

<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>

<?php
$output = shell_exec('RUNNING=`sudo -u root -S ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $RUNNING -gt 0 ]; then echo "<img src="images/green_light.png" />" "STATE:<FONT COLOR="green"> Already RUNNING Exiting ... </FONT>";else echo "<img src="images/red_light.png" />" "STATE:<FONT COLOR="red"> STOPPED</FONT> :<FONT COLOR="green"> Starting ... </FONT></a>";if [ -f /usr/sbin/tgtd ]; then sudo -u root -S /usr/sbin/tgtd -d 1; else sudo -u root -S ../stgt.git/usr/tgtd -d 1; fi >/tmp/starting.stgt;fi');
$restoreconfig = shell_exec('sudo PATH=/usr/sbin:sudo /usr/sbin/tgt-admin -e --conf=/etc/tgt/targets.conf.mhvtl');
$file = "/tmp/starting.stgt";
$result = file_get_contents($file);
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Please wait ...<br><br><br>$result</FONT></pre>";
echo "<pre><FONT COLOR=#FFFF00>Restoring Saved Configuration ... [if exist in /etc/tgt/targets.conf.mhvtl]<br><br><br>$result</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>$restoreconfig</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Done<br><br><br></FONT></pre>";
?>


</TD>
</TR>
</TABLE>

<?php
sleep(1);
?>


<td>
<?php
$output = shell_exec('RUNNING=`sudo -u root -S ps -ef | egrep "tgtd"|egrep -v egrep|  wc -l`; if [ $RUNNING -gt 0 ]; then echo "<img src="images/green_light.png" />" "STATE:<FONT COLOR="green">RUNNING </FONT>";else echo "<img src="images/red_light.png" />" "STATE:<FONT COLOR="red">STOPPED </FONT></a>";fi');
echo "<pre>$output</pre>";
?>
</td>

<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
