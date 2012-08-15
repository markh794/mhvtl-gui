<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Testing</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/activity.png" >
</td>
</tr>
<br>
<br>

<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>

<?php
$cmd = `sudo -u root -S ../scripts/mhvtl.quick.test.sh GO | grep TESTED >/tmp/mhvtl.quick.test.tmp 2>&1 &`;
$output = shell_exec('cat /tmp/mhvtl.quick.test.tmp');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
include 'activity.test.php' ;
?>

</TABLE>
<br>
<FORM ACTION="tools.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
