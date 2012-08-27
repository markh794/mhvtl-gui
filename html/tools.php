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

<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><form action="update.php" method="post" >
<input TYPE="submit" style="color: #008000" value=" Live Update ">
</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><form action="form.patch.mhvtl.php" method="post" >
<input TYPE="submit" style="color: #0000FF" value=" Apply Patch ">
</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #FF0000" ONCLICK="parent.frames[1].location.href='form.quick.test.mhvtl.php'" target="showframe">Write/Read Test</a>
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.dump.tape.php'" target="showframe"> Dump Tape</a>
</td>
</tr>

<!--
<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.tapealert.mhvtl.php'" target="showframe"> Send TapeAlert flags</a>
</td>
</tr>
-->

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='devices.php'" target="showframe"> Display Tape Devices (lsscsi)</a>
</td>
</tr>



</table>


</body>
</html>
