<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI Target System</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/scsi_target.png" >
</td>
</tr>

<?php
echo "<pre><b> SCSI Target System :</b></pre>";
?>


<table border="0" >


<!--
<tr>
<td>
<?php

if (file_exists("../ENABLE_TGTD_SCSI_TARGET") || file_exists("../ENABLE_SCST_SCSI_TARGET")) {
	echo "<pre><img src='images/green_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3> SCSI Target : </><FONT COLOR=#347C17> Enabled </FONT></b></pre>";
} else {
	echo "<pre><img src='images/red_light.png' ALIGN='top' /><b><FONT COLOR=#000000 size=3> SCSI Target : </><FONT COLOR=#FF0000> Disabled </FONT></b></pre>";
}

?>
</td>
</tr>
-->



<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #0000FF;text-decoration:none" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe"> SCSI Target via STGT (http://stgt.sourceforge.net/)
</td>
</tr>


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><a href="#" input class="sameLook" style="color: #000000;text-decoration:none" ONCLICK="parent.frames[1].location.href='scst.php'" target="showframe"> SCSI Target via SCST (http://scst.sourceforge.net/)
</td>
</tr>


</body>
</html>
