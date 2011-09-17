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
echo "<pre><b>View MHVTL Options  :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

<?php
$output = `cat /tmp/mhvtl.conf.tmp`;
echo "<pre>$output</pre>";
?>

<FORM ACTION="setup.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
