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
echo "<pre><b>Library Operation - Eject Volume :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">


<?php
$VAR1 = $_REQUEST['robotdev'];
$VAR2 = $_REQUEST['vol'];
$VAR3 = $_REQUEST['maps'];

$cmd = `sudo -u root -S mtx -f $VAR1 transfer $VAR2 $VAR3 >/tmp/eject.tape.tmp 2>&1`;
$output = shell_exec('cat /tmp/eject.tape.tmp');
echo "<pre>OK<br>$output</pre>";
?>


<FORM ACTION="form.eject.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
