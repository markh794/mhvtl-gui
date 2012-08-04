<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>List all tapes in use :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<?php
$cmd = shell_exec('sudo -u root -S find /opt/mhvtl -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"|sort -n|sort -u  >/tmp/list.tapes.tmp');
$output = shell_exec('sudo -u root -S cat /tmp/list.tapes.tmp');
echo "<pre>$output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
