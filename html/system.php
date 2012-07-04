<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>System</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/operation.png" >
</td>
</tr>

<?php $output = `uname -a`; echo "<pre><b> $output</b></pre>"; ?>

<table border="0" ALIGN="left" >


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='hardware.php'" target="showframe"> Hardware
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='terminal.php'" target="showframe"> Terminal
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='reboot.php'" target="showframe"> Reboot System
</td>
</tr>


</table>

</body>
</html>
