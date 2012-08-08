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
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.setup.standard.next.library.php'" target="showframe"> Standard (Predefined Configuration)<br>
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.setup.custom.next.library.php'" target="showframe"> Custom (Advanced User)<br>
</td>
</tr>

</table>
<br>

<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT style="color: #000000" VALUE="Return"> </FORM>

</body>
</html>
