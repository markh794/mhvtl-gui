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
echo "<pre><b>Change Tape Density :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php 
$libid = $_REQUEST['libid'];
$libidn = ` echo $libid | cut -d ":" -f1`;
$VAR0 = $_REQUEST['tape'];
$VAR1 = $_REQUEST['density'];

$run = `sudo -u root -S edit_tape -l "$libidn" -m "$VAR0" -d "$VAR1" `;
echo "<pre>$run</pre>";
echo "<pre>Done...</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.density_tape.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="edit_tape.php"> <INPUT TYPE=SUBMIT VALUE="Exit"></FORM>

</body>
</html>
