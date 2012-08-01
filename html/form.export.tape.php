<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Misc Tools</font><b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Export Volume :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.export.tape.php">
<form method="post" action="robot.status.php">
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh robotdev`; ?>
Select Robot Device : <?php echo $cmd;?><a href="#" onClick="window.open('list.robot.devices.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
Enter Element Number - Slot : <input name="vol" min="1" type="number" required ><a href="#" onClick="window.open('form.robot.status.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
Enter Element Number - IMPORT/EXPORT : <input name="maps" min="0" type="number" required ><a href="#" onClick="window.open('form.robot.status.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
<input type="submit"></form>
<FORM ACTION="vtlcmd.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
