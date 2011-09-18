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
echo "<pre><b>Select configuration type :</b></pre>";
?>


<table border="1" align="left" valign="middle" >

<tr>
<td>
<form action="form.setup.standard.next.library.php" method="post" >
<input TYPE="submit" class="sameSize" style="color: #000000" value=" Standard " >
</form>
</td>
</tr>


<tr>
<td>
<form action="form.setup.custom.next.library.php" method="post" >
<input TYPE="submit" class="sameSize" style="color: #000000" value=" Custom " >
</form>
</td>
</tr>

<tr>
<td>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT class="sameSize" style="color: #000000" VALUE="Return"> </FORM>
</td>
</tr>

</table>

</body>
</html>
