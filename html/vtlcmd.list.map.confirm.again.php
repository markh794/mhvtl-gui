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
echo "<pre><b>List Map :</b></pre>";
?>

<hr width="100%" size=1 color="blue">



<?php
$VAR = $_REQUEST['libid'];
$VAR1 = `echo $VAR| cut -d ":" -f1`;
echo "<pre><b><FONT COLOR=#000000>List Map for library = $VAR1 </FONT></b></pre>";
?>

<table border="0" >

<tr>
<td>
<INPUT TYPE=SUBMIT VALUE=" Cancel " input ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
<form method="post" action="vtlcmd.list.map.php">
<input TYPE=HIDDEN name="clibid" value=<?php echo $VAR1;?> READONLY >
<INPUT TYPE="submit" VALUE=" Continue " style="color: #000000" >
</tr>
</td>
</form>

</table>

</body>
</html>
