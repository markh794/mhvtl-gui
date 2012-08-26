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
echo "<pre><b>Create External media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php 
$libid = $_REQUEST['libid'];
$libidn = ` echo $libid | cut -d ":" -f1`;
$VAR1 = $_REQUEST['type'];
$VAR2 = $_REQUEST['size'];
$VAR3 = $_REQUEST['density'];
$VAR4 = $_REQUEST['mp'];
$VAR5 = $_REQUEST['pcl1'];
$VAR6 = $_REQUEST['pcl2'];
$VAR7 = $_REQUEST['pcl3'];
$VAR8 = $_REQUEST['pcl4'];
$VAR9 = $_REQUEST['pcl5'];
$EXT = `echo $VAR3| cut -d ":" -f2`;

$run = `sudo -u root -S ../scripts/create_external_media $VAR1 $VAR2 $VAR3 $VAR4 $VAR5 $VAR6 $VAR7 $VAR8 $VAR9 $libidn `;
echo "<pre>$run</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.make.external.media.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Exit"></FORM>

</body>
</html>
