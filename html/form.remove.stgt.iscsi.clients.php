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
echo "<pre><b>Remove Remote Client :</b></pre>";
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

<?php $target = `sudo -u root -S ../scripts/build_html_opts.sh target`; ?>

<form method="post" action="remove.stgt.iscsi.clients.php">
Enter Remote Client IP, Net or "ALL" for any - Example : <input name="iqn" type="text" size="20" value="198.51.100.0/24" required ><a href="#" onClick="window.open('search_stgt.all.php', 'iscsitgt', 'width = 600, height = 400');">Search</a>

<br>
Mode : <SELECT name="mode" ><option>target</OPTION></select>
<br>
Select Target ID Number  : <?php echo $target;?><a href="#" onClick="window.open('search_stgt.target.php', 'targetid', 'width = 600, height = 400');">Search</a>
<br>

<input type="submit">
</form>
<FORM ACTION="stgt.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
