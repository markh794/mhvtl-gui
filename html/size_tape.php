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
echo "<pre><b>Resize Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php 
$libid = $_REQUEST['libid'];
$libidn = ` echo $libid | cut -d ":" -f1`;
$VAR0 = $_REQUEST['size'];
$VAR1 = $_REQUEST['tape'];

$run = `sudo -u root -S edit_tape -l "$libidn" -m "$VAR1" -s "$VAR0" `;
echo "<pre>$run</pre>";
echo "<pre>Done...</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.size_tape.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="edit_tape.php"> <INPUT TYPE=SUBMIT VALUE="Exit"></FORM>

</body>
</html>
