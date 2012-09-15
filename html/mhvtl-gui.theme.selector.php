<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Themes</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b> Console Color Themes  :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$VAR = $_REQUEST['theme'];
$run = system(" echo $VAR >/tmp/themes.tmp ; sudo -u root -S ../scripts/change_console_theme ");
?>
<input type="submit" onclick="parent.location.reload()" value="Refresh">

</body>
</html>
