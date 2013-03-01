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
echo "<pre><b>Dump Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<?php
$VAR = $_REQUEST['tape'];
$output = `sudo -u root -S dump_tape -f $VAR`;
echo "<pre>$VAR</pre>";
echo "<pre>$output</pre>";
?>

<FORM ACTION="form.dump.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
