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
echo "<pre><b>Library Operation - Unload Volume :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">


<?php
$VAR1 = $_REQUEST['robotdev'];
$VAR2 = $_REQUEST['drdev'];
$VAR3 = $_REQUEST['voltag'];

$cmd1 = `sudo -u root -S mtx -f $VAR1 unload $VAR2 $VAR3 >/tmp/unmount.tape.tmp 2>&1`;
$output1 = shell_exec('cat /tmp/unmount.tape.tmp');
echo "<pre>$output1</pre>";
?>


<FORM ACTION="form.unmount.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
