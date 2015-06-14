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
echo "<pre><b>Select TGT Target :</b></pre>";
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
	echo "<form method='post' action='form.remove.iscsi.lun.stgt.php'>";
	echo "Select Target $target";
	echo "<INPUT TYPE=SUBMIT VALUE='SUBMIT'></FORM>";
	echo "</FORM><br><hr width='100%' size=1 color='blue'>";
	echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
}
?>

</table>

</body>
</html>
