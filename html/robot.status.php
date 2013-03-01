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
echo "<pre><b>Robot Status :</b></pre>";
?>

<div style="overflow:auto; height:300px;width:675px;">
<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>

<?php
$VAR = $_REQUEST['rrobotdev'];
$cmdoutfile = `sudo -u root -S mtx -f $VAR status >/tmp/robot.status.tmp 2>&1`;
$output = shell_exec('cat /tmp/robot.status.tmp');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>

</TR>
</TD>
</TABLE>
</div>

<FORM ACTION="form.robot.status.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
