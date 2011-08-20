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
<br>
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
$miqn = `sudo -u root -S cut -d "=" -f2 /etc/iscsi/initiatorname.iscsi`;
}
else
{
$thost = `sudo -u root -S hostname`;
$miqn = `sudo -u root -S echo iqn.2001-04.com.example:$thost`;
}
?>

<form method="post" action="create.iscsi.target.stgt.php">
<?php $nexttarget = `sudo -u root -S ../scripts/build_html_opts.sh nexttarget`; ?>

Enter STGT iSCSI Target Name (Example Auto Detected) : <input name="iqn" type="text" size="50" value=<?php echo $miqn;?> required >
<br>
Mode : <SELECT name="mode" ><option>target</OPTION></select>
<br>
Enter Identifier Name1 - Example : <input name="idn1" type="text" value="mhvtl" required >
<br>
Enter Identifier Name2 - Example : <input name="idn2" type="text" value="stgt" required >
<br>
Target ID Number  : <?php echo $nexttarget;?>
<br>
<INPUT TYPE=SUBMIT VALUE="Create">
</FORM>
<br>
<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>
</table>

</body>
</html>
