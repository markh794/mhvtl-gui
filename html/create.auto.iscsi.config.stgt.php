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
echo "<pre><b>Automatic STGT iscsi Target :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php $filename = '../ENABLE_TGTD_SCSI_TARGET';
if (!file_exists($filename)) {
	echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
	exit("<pre><FONT COLOR=#0000FF>STGT currently Disabled</FONT></pre>");
}
?>

<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>


<?php
$cmd = `sudo -u root -S ../scripts/auto.iscsi.config.stgt.sh >/tmp/auto.iscsi.config.stgt.tmp 2>&1`;
$output = shell_exec('cat /tmp/auto.iscsi.config.stgt.tmp');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>

</TABLE>

<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
