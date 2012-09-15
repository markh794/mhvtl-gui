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
echo "<pre><b>Reset all MHVTL Configurations :</b></pre>";
?>

<hr width="100%" size=1 color="blue">



<?php
$VAR = $_REQUEST['kmed'];
echo "<pre><b><FONT COLOR=#FF0000>Warrning: Please Confirm !!! </FONT></b></pre>";
echo "<pre><b><FONT COLOR=#FF0000>Warrning: Remove all configured libraries/drives/media !!!</FONT></b></pre>";
echo "<pre><b><FONT COLOR=#FF0000>Warrning: Reset MHVTL to Default Setting !!!</FONT></b></pre>";
echo "<pre><b><FONT COLOR=#FF0000>Warrning: Remove all exsiting media = $VAR </FONT></b></pre>";
?>
<br>




<br>

<table border="0" >
<tr>
<td>
<INPUT TYPE=SUBMIT VALUE="Cancel" input ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
<form method="post" action="reset_default.php">
<input TYPE=HIDDEN name="ckmed" value=<?php echo $VAR;?> READONLY >
<INPUT TYPE="submit" VALUE=" Continue " style="color: #FF0000" >
</tr>
</td>
</form>

</table>

</body>
</html>
