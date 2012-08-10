<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Drive Status :</b></pre>";
?>

<hr width="100%" size=1 color="blue">



<?php
$VAR = $_REQUEST['drivedev'];
$drivedev = ` echo $VAR| sed -e "s/^.* //"` ;
?>

<form method="post" action="drive.status.php">
<?php echo "<FONT COLOR=#000000>Drive Device = $drivedev </FONT>"; ?>
<input TYPE=HIDDEN name="drivedev" value=<?php echo $drivedev;?> READONLY >
<INPUT TYPE="submit" VALUE=" Continue " style="color: #000000" >
</form>
<INPUT TYPE=SUBMIT VALUE=" Cancel " input ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">

</body>
</html>
