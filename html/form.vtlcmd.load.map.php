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
echo "<pre><b>Load Map :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.load.map.php">

<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh tape`; ?>
Select Volume : <?php echo $cmd;?><a href="#" onClick="window.open('list.tapes.php', 'Devices', 'width = 600, height = 400');">Search</a>

<br>

<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh libid`; ?>
Select Library ID Number : <?php echo $cmd;?><a href="#" onClick="window.open('find.device.id.php', 'Deviceid', 'width = 600, height = 400');">Search</a>

<br>
<input type="submit"></form>
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
