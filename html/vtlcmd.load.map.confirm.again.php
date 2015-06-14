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
echo "<pre><b>Load Map :</b></pre>";
?>

<hr width="100%" size=1 color="blue">



<?php
$VAR = $_REQUEST['libid'];
$VAR2 = $_REQUEST['vmedia'];
$VAR1 = `echo $VAR| cut -d ":" -f1`;
if ( "$VAR2" == "EMPTY" ) {
	echo "<pre><b><FONT COLOR=#FF0000>None external Media present ... </FONT></b></pre>";
	echo "<pre><b><FONT COLOR=#000000>Please create external media first </FONT></b></pre>";
	echo "<FORM ACTION='vtlcmd.php'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
	exit;
} else { 
	echo "<pre><b><FONT COLOR=#000000>Load $VAR2 in Map for library $VAR </FONT></b></pre>";
}
?>

<table border="0" >
<tr>
<td>
<INPUT TYPE=SUBMIT VALUE=" Cancel " input ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
<form method="post" action="vtlcmd.load.map.php">
<input TYPE=HIDDEN name="clibid" value=<?php echo $VAR1;?> READONLY >
<input TYPE=HIDDEN name="ctape" value=<?php echo $VAR2;?> READONLY >
<INPUT TYPE="submit" VALUE=" Continue " style="color: #000000" >
</tr>
</td>
</form>

</table>

</body>
</html>
