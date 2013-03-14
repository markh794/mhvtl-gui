<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<font color=purple size=3>MHVTL Testing</font>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/activity.png" >
</td>
</tr>

<?php
echo "<pre><b>MHVTL Testing :</b></pre>";
?>


<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>

<?php
$output = shell_exec('cat /tmp/mhvtl.quick.test.tmp; rm -f /tmp/mhvtl.quick.test.tmp');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>
</TABLE>
<br>
<FORM ACTION="tools.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
