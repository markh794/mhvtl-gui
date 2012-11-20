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
echo "<pre><b>Select Brand :</b></pre>";
?>


<table border="0" >


<tr>
<td>
<form action="form.add.stk.library.php" method="post" >
<input TYPE="submit" style="color: #FF0000" value=" STK "><b></b>
</form>
</td>
</tr>


<tr>
<td>
<form action="form.add.ibm.library.php" method="post" >
<input TYPE="submit" style="color: #000000" value=" IBM "><b></b>
</form>
</td>
</tr>



<tr>
<td>
<form action="form.add.hp.library.php" method="post" >
<input TYPE="submit" style="color: #0000FF" value=" HP "><b></b>
</form>
</td>
</tr>



<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.spectra.library.php'" target="showframe"> Spectra<br>
</td>
</tr>


<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.quantum.library.php'" target="showframe"> Quantum<br>
</td>
</tr>



<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.adic.library.php'" target="showframe"> ADIC<br>
</td>
</tr>



<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.sony.library.php'" target="showframe"> Sony<br>
</td>
</tr>


<tr>
<td>
<a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.add.dell.library.php'" target="showframe"> Dell<br>
</td>
</tr>


</table>
<br>

<FORM ACTION="form.setup.standard.next.library.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
