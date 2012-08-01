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
echo "<pre><b>Library Operation - Import Volume :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<?php
$VAR1 = $_REQUEST['robotdev'];
$VAR2 = $_REQUEST['vol'];
$VAR3 = $_REQUEST['maps'];

$cmd = `sudo -u root -S mtx -f $VAR1 transfer $VAR3 $VAR2 >/tmp/import.tape.tmp 2>&1`;
$output = shell_exec('sudo -u root -S cat /tmp/import.tape.tmp');
$cmd2 = `sudo -u root -S mtx -f $VAR1 status | grep $VAR2 >/tmp/import.tape.tmp2 2>&1`;
$output2 = shell_exec('sudo -u root -S cat /tmp/import.tape.tmp2');
echo "<pre>$output<br></pre>";
echo "<pre>$output2</pre>";
?>




<FORM ACTION="form.import.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
