<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Power Off Library/Drives :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.exit.php">
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh libdid`; ?>
Select Library ID or Drive Number : <?php echo $cmd;?><a href="#" onClick="window.open('find.device.id.php', 'Deviceid', 'width = 600, height = 400');">Search</a>
<input type="submit">
</form>
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>
<br>
<br>
Example:
<br>
Library ID =10 in [ Library: 10 CHANNEL: 00 TARGET: 00 LUN: 00 ]
<br>
Drive Number =11 in  [ Drive: 11 CHANNEL: 00 TARGET: 01 LUN: 00 ]

</body>
</html>
