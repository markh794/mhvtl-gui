<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Library Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Library Operation - Offline Library :</b></pre>";
?>



<?php
$VAR = $_REQUEST['libid'];
$output = `sudo -u root -S vtlcmd $VAR online`;
echo "<pre>OK: $output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
