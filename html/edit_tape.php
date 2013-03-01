<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/tools.png" >
</td>
</tr>

<?php
echo "<pre><b> Edit Tape :</b></pre>";
?>

<table border="0" >

<table border="0" ALIGN="left" style="margin-left:0px;" >

<tr>
<td>
<form action="form.wp_tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" W/Protect "></form>
</td>
</tr>

<tr>
<td>
<form action="form.size_tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Size "></form>
</td>
</tr>

<!-- Currently not working  in edit_tape utility ...
<tr>
<td>
<form action="form.type_tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Type "></form>
</td>
</tr>
-->

<tr>
<td>
<form action="form.density_tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Density "></form>
</td>
</tr>


<tr>
<td>
<br><br><FORM ACTION="tools.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>
</td>
</tr>

</table>
</table>

</body>
</html>
