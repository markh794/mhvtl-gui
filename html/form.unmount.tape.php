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
echo "<pre><b>Unmount Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="form1.unmount.tape.php">
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh robotdev`; ?>
Select Robot Device : <?php echo $cmd;?><a href="#" onClick="window.open('list.robot.devices.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>

<input type="submit">
</form>
<FORM ACTION="vtlcmd.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
