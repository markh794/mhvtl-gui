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
echo "<pre><b>Power Off Library/Drives :</b></pre>";
?>

<hr width="100%" size=1 color="blue">




<?php
$VAR = $_REQUEST['libidwd'];
$VAR1 = `echo $VAR | cut -d ":" -f1`;
?>
<form method="post" action="vtlcmd.exit.php">
<?php echo "<FONT COLOR=#000000>$VAR</FONT>"; ?>
<input TYPE=HIDDEN name="clibidwd" value=<?php echo $VAR1;?> READONLY >
<INPUT TYPE="submit" VALUE=" Power Off " style="color: #000000" >
</form>
<INPUT TYPE=SUBMIT VALUE=" Cancel " input ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">

</body>
</html>
