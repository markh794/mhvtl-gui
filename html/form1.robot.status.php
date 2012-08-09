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
echo "<pre><b>Robot Status :</b></pre>";
?>

<hr width="100%" size=1 color="blue">



<?php
$VAR = $_REQUEST['robotdev'];
$VAR1 = ` echo $VAR| sed -e "s/^.* //" `;
?>

<form method="post" action="robot.status.php">
<?php echo "<FONT COLOR=#000000>Robot Device for library = $VAR1 </FONT>"; ?>
<input TYPE=HIDDEN name="rrobotdev" value=<?php echo $VAR1;?> READONLY >
<INPUT TYPE="submit" VALUE=" Continue " style="color: #000000" >
</form>
<INPUT TYPE=SUBMIT VALUE=" Cancel " input ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">

</body>
</html>
