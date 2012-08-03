<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Misc Tools</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Drive Status :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>

<?php
$VAR = $_REQUEST['drivedev'];
$cmdoutfile = `sudo -u root -S mt -f $VAR status >/tmp/drive.status.tmp 2>&1`;
$output = shell_exec('cat /tmp/drive.status.tmp');
echo "<pre><FONT COLOR=#FFFF00>$output</FONT></pre>";
?>

</TR>
</TD>
</TABLE>


<FORM ACTION="form.drive.status.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
