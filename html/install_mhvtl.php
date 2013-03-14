<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b>Install MHVTL :</b></pre>";
?>


<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 >

<TR>
 <TD>

<?php
$output = shell_exec('sudo -u root -S ../scripts/install_mhvtl.sh >/tmp/install_mhvtl.sh.out; cat /tmp/install_mhvtl.sh.out');
echo "<pre><font color=#FFFFFF>$output</font></pre>";
?>

</TD>
</TR>
</TABLE>

<input type="submit" onclick="parent.location.reload()" value="Finish">

</body>
</html>
