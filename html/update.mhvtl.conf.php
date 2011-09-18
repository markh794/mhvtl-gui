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
echo "<pre><b>Updating Current Settings :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<?php
$save = `sudo -u root -S cp -f /etc/mhvtl/mhvtl.conf /etc/mhvtl/mhvtl.conf.console.save.$$`;
$run = `sudo -u vtl -S cp -f /tmp/mhvtl.conf.tmp /etc/mhvtl/mhvtl.conf`;
$output = `sudo -u root -S cat /etc/mhvtl/mhvtl.conf`;
echo "========= CONFIGURATION UPDATED ================";
echo "<pre>$output</pre>";
echo "========= CONFIGURATION UPDATED ================";
?>

<br>
<b><FONT COLOR="red">You must restart MHVTL for new settings to take effect</FONT></b><br>
<FORM ACTION="confirm.stop-start_mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Restart"> </FORM>
<FORM ACTION="setup.options.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
