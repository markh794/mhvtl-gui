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
echo "<pre><b>Create STGT Target :</b></pre>";
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
$filename = '/etc/iscsi/initiatorname.iscsi';
if (file_exists($filename))
{
$miqn = `sudo -u root -S grep "InitiatorName=iqn." /etc/iscsi/initiatorname.iscsi|cut -d "=" -f2`;
}
else
{
$thost = `sudo -u root -S hostname -s`;
$miqn = `sudo -u root -S echo iqn.2011-04.com.nia:$thost`;
}

$nexttarget = `sudo -u root -S ../scripts/build_html_opts.sh nexttarget`;
if ( $nexttarget == "" )
{
echo "<FONT COLOR=#FF0000>Error: is TGT running ?</FONT>";
echo "</FORM>";
echo "<br>";
echo "<hr width='100%' size=1 color='blue'>";
echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
echo "</table>";
}
else
{
echo "<form method='post' action='create.iscsi.target.stgt.php'>";
echo "Enter Target-iqn : <input name='iqn' type='text' size='50' value='$miqn' required >";
echo "<input name='mode' value='target' hidden readonly >";
echo "<br>";
echo "Enter Identifier1 : <input name='idn1' type='text' value='mhvtl' required >";
echo "<br>";
echo "Enter Identifier2 : <input name='idn2' type='text' value='tgt' required >";
echo "<br>";
echo "Target ID Number  : $nexttarget";
echo "<br>";
echo "<INPUT TYPE=SUBMIT VALUE='Create'></FORM><FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Cancel'></FORM>";
echo "<br>";
echo "</table>";
}
?>


</body>
</html>
