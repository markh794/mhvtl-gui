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
<br>

<table border="0" >

<tr>
<td>
<INPUT TYPE="button" VALUE=" STK " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.stk.library.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" HP " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.hp.library.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" IBM " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.ibm.library.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Spectra " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.spectra.library.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Quantum " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.quantum.library.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" ADIC " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.adic.library.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Sony " input class="sameSize" ONCLICK="parent.frames[1].location.href='form.add.sony.library.php'" target="showframe">
</td>
</tr>



</table>

<br>
<br>
<FORM ACTION="form.setup.standard.next.library.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
