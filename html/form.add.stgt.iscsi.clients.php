<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT Targets</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Add ACL :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php

include_once "common.php";

exit_if_tgtd_not_eabled();

$target = `sudo -u root -S ../scripts/build_html_opts.sh target`;
if ( $target == "" ) {
	echo "<FONT COLOR=#FF0000>Target not defined, please create first</FONT>";
	echo "</FORM><br>";
	echo "<hr width='100%' size=1 color='blue'>";
	echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'></FORM>";
	echo "</table>";
} else {
	echo "<form method='post' action='add.stgt.iscsi.clients.php'>";
	echo "Select Target $target";
	echo "<br>";
	echo "Enter Host, IP, Network or ALL <input name='cn' type='text' size='20' value='ALL' required >";
	echo "<br>";
	echo "<input type='submit'></form><FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'></FORM>";
}
?>

</body>
</html>
