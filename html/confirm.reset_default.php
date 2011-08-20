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
<br>
<hr width="100%" size=1 color="blue">


<?php
echo "<pre><b><FONT COLOR=#FF0000>Warrning: This will remove all configured libraries/drives/media !!!</FONT></b></pre>";
?>
<br>

<form method="post" action="confirm.again.reset_default.php">
>>>> Remove all tape media : <select name="kmed" MAXLENGTH="2" type="text" ><OPTION>NO</option><OPTION>YES</option></select><b><FONT COLOR="red">*</FONT></b>
<br>

<table border="0" >
<tr>
<td>
<input type="submit" VALUE=" Continue " class="sameSize" style="color: #FF0000" >
</tr>
</td>

<tr>
<td>
<INPUT TYPE=button VALUE="Cancel" class="sameSize" input ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>
</form>
</table>
</body>
</html>
