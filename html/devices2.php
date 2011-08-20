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
echo "<pre><b>MHVTL Virtual Devices :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

<table border="0">
<td>


<?php
$VAL = $_REQUEST['alldev'];
$output = `sudo -u root -S lsscsi -g | sudo -u root -S grep "$VAL"`;
echo "<pre><B>$output</B></pre>";
?>

</td>
</table>
<br>
<table border="0" >
<td>
<FORM ACTION="frame_a.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>
</td>
</table>
</body>
</html>
