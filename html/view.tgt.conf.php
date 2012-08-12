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
echo "<pre><b>View TGT Configuration file  :</b></pre>";
?>


<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>


<?php
$filename = "/etc/tgt/targets.conf.mhvtl";
if (!file_exists($filename))
{
echo "<pre><FONT COLOR=#FFFF00>Configuration not saved</FONT></pre>";
}
else
{
$output = `sudo -u root -S cat /etc/tgt/targets.conf.mhvtl`;
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
}
?>

</TR>
</TD>
</TABLE>

<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
