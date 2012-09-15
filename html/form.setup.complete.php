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


<table border="0" >



<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><form action="form.setup.standard.next.library.php" method="post" >
<input TYPE="submit" style="color: #0000FF" value="Standard" >
</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><form action="form.setup.custom.next.library.php" method="post" >
<input TYPE="submit" style="color: #FF0000" value=" Custom " >
</form>
</td>
</tr>


</table>
<br>

<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT style="color: #000000" VALUE="Return"> </FORM>

</body>
</html>
