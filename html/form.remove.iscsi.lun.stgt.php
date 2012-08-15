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
echo "<pre><b>Remove STGT LUN :</b></pre>";
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
$target = $_REQUEST['tid'];
$lun = `sudo -u root -S ../scripts/build_html_opts.sh lun $target`;

if ( $lun == "" )
{
echo "<FONT COLOR=#FF0000>No LUNS Exist</FONT>";
echo "</FORM>";
echo "<br>";
echo "<hr width='100%' size=1 color='blue'>";
echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
echo "</table>";
}
else
{
echo "<form method='post' action='remove.iscsi.lun.stgt.php'>";
echo "Target <Select name='tid'><option>$target</OPTION></Select>";
echo "LUN $lun";
echo "<INPUT TYPE=SUBMIT VALUE='Remove'></FORM><br>";
echo "<hr width='100%' size=1 color='blue'>";
echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'><INPUT TYPE=SUBMIT VALUE='Cancel'> </FORM>";
}
?>

</table>

</body>
</html>
