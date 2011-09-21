<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Install stgt</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b>Installing stgt :</b></pre>";
?>


<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 >

<TR>
 <TD>

<?php

$url = "http://github.com/fujita";
if (fopen($url, "r")) {
echo "<pre><font color=#FFFFFF>Internet Connectivity : OK</font><br></pre>";
} else {
echo "<pre><font color=#FFFFFF>Can't Connect to the Internet !</font><br></pre>";
}


echo "<pre><font color=#FFFFFF>stgt installation Started, Please Wait ...</font><br></pre>";
$output = shell_exec('sudo -u root -S ../scripts/install_stgt.sh regular >/tmp/install_stgt.sh.out; cat /tmp/install_stgt.sh.out');
echo "<pre><font color=#FFFFFF>$output</font></pre>";
?>

</TD>
</TR>
</TABLE>


<FORM ACTION="stgt.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>


</body>
</html>
