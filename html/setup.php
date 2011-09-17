<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Configuration :</b></pre>";
?>
<br>

<table border="0" ALIGN="left" >

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.setup.complete.php'" target="showframe"> Create New Tape Library and Drives
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.remove.library.php'" target="showframe"> Remove Existing Tape Library and Drives
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view_device.conf.php'" target="showframe"> View Current Device Configuration
</td>
</tr>



<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view.options.php'" target="showframe"> View Current MHVTL Options
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.options.php'" target="showframe"> Update MHVTL Options
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.vtlcmd.make.tape.php'" target="showframe"> Create Single Tape Media
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='mhvtl.list.tapes.php'" target="showframe"> Display All Tape Media
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='confirm.reset_default.php'" target="showframe"> Reset All Configuration
</td>
</tr>

</table>

</body>
</html>
