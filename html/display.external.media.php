<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>


<?php
echo "<pre><b>List External Media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$VAR = $_REQUEST['clibid'];
echo "<pre>Library $VAR External Media : </pre>";
$output = `sudo -u root -S ls -ald /opt/mhvtl/external_media/$VAR/* | cut -d "/" -f6 `;
echo "<pre><b><FONT COLOR=#0000FF>$output</FONT></pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
