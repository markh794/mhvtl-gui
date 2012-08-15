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
echo "<pre><b>Remove TGT Target :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$filename = '../ENABLE_TGTD_SCSI_TARGET';
if (!file_exists($filename))
{
echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
exit("<FONT COLOR='#000000'>STGT Disabled($filename)</FONT>");
}
?>

<?php
$target = `sudo -u root -S ../scripts/build_html_opts.sh target`;
if ( $target == "" )
{
echo "<FONT COLOR=#FF0000>No Targets Exist</FONT>";
echo "</FORM>";
echo "<br>";
echo "<hr width='100%' size=1 color='blue'>";
echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
echo "</table>";
}
else
{
echo "<form method='post' action='remove.iscsi.target.stgt.php'>";
echo "Select Target $target";
echo "<INPUT TYPE=SUBMIT VALUE='Remove'>";
echo "</FORM><br><hr width='100%' size=1 color='blue'>";
echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
echo "</table>";
}
?>

</body>
</html>
