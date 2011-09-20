<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/about.png" >
</td>
</tr>

<?php
echo "<pre><b>About MHVTL Web Console:</b></pre>";
?>


<table border="0" align="left" valign="middle" >

<?php
$gui_ver = `cat ../version`;
echo "<pre><b><FONT COLOR=purple >Web Console Release </FONT><FONT COLOR=black>$gui_ver <a href=# ONCLICK=parent.frames[1].location.href='http://mhvtl-community-forums.966029.n3.nabble.com' target=showframe> Built by nia</FONT></b></pre>";
?>


</table>

</body>
</html>
