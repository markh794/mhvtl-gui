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
echo "<pre><b>Library Operation - Load Volume :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php

$VAR1 = $_REQUEST['robot'];
$VAR2 = $_REQUEST['slot'];
$VAR3 = $_REQUEST['driveslotf'];

settype($VAR2, "integer");
settype($VAR3, "integer");



$cmd1 = `sudo -u root -S mtx -f $VAR1 load $VAR2 $VAR3 >/tmp/mount.tape.tmp 2>&1`;
$cmd2 = `sudo -u root -S mtx -f $VAR1 status | grep Loaded | grep  "Data Transfer Element $VAR3:Full" >/tmp/mount.status.tmp 2>&1`;
$output1 = shell_exec('cat /tmp/mount.tape.tmp');
$output2 = shell_exec('cat /tmp/mount.status.tmp');
echo "<pre>$output1</pre>";
echo "<pre>$output2</pre>";
?>


<FORM ACTION="form.mount.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
