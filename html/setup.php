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
echo "<pre><b> Configuration :</b></pre>";
?>


<table border="0" ALIGN="left" >

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.setup.complete.php'" target="showframe"> Create New Configuration (Library/Drives/Media)
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.remove.library.php'" target="showframe"> Remove (Library/Drives/Media)
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.options.php'" target="showframe"> Edit Options
</td>
</tr>


<tr>
<td>
<hr width="100%" size=1 color="blue">
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #FF0000" ONCLICK="parent.frames[1].location.href='confirm.reset_default.php'" target="showframe"> Reset Original Settings (Restore Default)
</td>
<td>
</tr>


<tr>
<td>
<hr width="100%" size=1 color="blue">
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe"> Setup iSCSI Target (tgt)
</td>
</tr>


<tr>
<td>
<hr width="100%" size=1 color="blue">
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view_device.conf.php'" target="showframe"> View Configuration
</td>
</tr>



<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='view.options.php'" target="showframe"> View Options
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png"  ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.vtlcmd.make.tape.php'" target="showframe"> Create Media
</td>
</tr>


</table>


</body>
</html>
