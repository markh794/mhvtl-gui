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
$output = `sudo -u root -S ls -1 /opt/mhvtl/`;
echo "<pre>$output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
