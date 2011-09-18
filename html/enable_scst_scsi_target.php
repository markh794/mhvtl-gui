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
echo "<pre>Enable SCST:</pre>";
?>
<br>

<TABLE BORDER=1 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>

<?php
$filename = '../ENABLE_TGTD_SCSI_TARGET';if (!file_exists($filename))
{
$output = shell_exec("sudo -u root -S touch ../ENABLE_SCST_SCSI_TARGET >/tmp/disable_scst_scsi_target.tmp");
echo "<pre><FONT COLOR=#FFFFFF>Enabling SCST ... <br>$output</FONT></pre>";
}
else
{
echo "<pre><FONT COLOR=#FF0000>STGT Enabled .. Please disable first<br>$output</FONT></pre>";
}
?>

</TD>
</TR>
</TABLE>
<FORM ACTION="scst.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
