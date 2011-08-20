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
<br>
<hr width="100%" size=1 color="blue">


<?php
$VAR = $_REQUEST['robotdev'];
$cmdoutfile = `sudo -u root -S mtx -f $VAR status >/tmp/robot.status.tmp 2>&1`;
$output = shell_exec('cat /tmp/robot.status.tmp');
echo "<pre>$output</pre>";
?>


<FORM ACTION="form.robot.status.php">
<INPUT TYPE=SUBMIT VALUE="Return">
<a href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>
</FORM>

</body>
</html>
