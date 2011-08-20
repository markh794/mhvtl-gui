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
echo "<pre><b>Update Current Settings :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

<?php
$VAR1 = $_REQUEST['mcp'];
$VAR2 = $_REQUEST['c'];
$VAR3 = $_REQUEST['v'];
$VAR4 = $_REQUEST['vd'];

$output1 = `echo "MHVTL_CONFIG_PATH="'$VAR1'>/tmp/mhvtl.conf.tmp`;
$output2 = `echo "CAPACITY="'$VAR2' >>/tmp/mhvtl.conf.tmp`;
$output3 = `echo "VERBOSE="'$VAR3' >>/tmp/mhvtl.conf.tmp`;
$output4 = `echo "VTL_DEBUG="'$VAR4' >>/tmp/mhvtl.conf.tmp`;

$output = `cat /tmp/mhvtl.conf.tmp`;
echo "<pre>$output</pre>";
?>

<FORM ACTION="update.mhvtl.conf.php">
<INPUT TYPE=SUBMIT VALUE="Finish">
</FORM>
<FORM ACTION="setup.options.php">
<INPUT TYPE=SUBMIT VALUE="Cancel">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
