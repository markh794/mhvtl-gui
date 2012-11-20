<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
echo "<pre><b> Tools :</b></pre>";
?>

<table border="0" >

<table border="0" ALIGN="left" style="margin-left:10px;" >

<tr>
<td>
<form action="update.php" method="post" >
<input TYPE="submit" class=sameSize style="color: #008000" value=" Live Update ">
</form>
</td>
</tr>


<tr>
<td>
<form action="form.patch.mhvtl.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000FF" value=" Apply Patch "></form>
</td>
</tr>

<tr>
<td>
<form action="form.quick.test.mhvtl.php" method="post" ><input TYPE="submit" class=sameSize style="color: #FF0000" value=" Test Tape "></form>
</td>
</tr>


<tr>
<td>
<form action="form.dump.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Dump Tape "></form>
</td>
</tr>

<!--
<tr>
<td>
<form action="form.tapealert.mhvtl.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" TapeAlert "></form>
</td>
</tr>
-->

<tr>
<td>
<form action="devices.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" List Devices "></form>
</td>
</tr>



</table>
</table>

</body>
</html>
