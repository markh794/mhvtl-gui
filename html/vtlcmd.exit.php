<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Power Off Library/Drives :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$VAR = $_REQUEST['clibidwd'];
$cmd = `sudo -u root -S vtlcmd $VAR exit >/tmp/vtlcmd.exit.tmp 2>&1`;
$output = shell_exec('cat /tmp/vtlcmd.exit.tmp');
echo "<pre>OK: $output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
