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
echo "<pre><b>Unload Volume :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.unmount.tape.php">
<form method="post" action="robot.status.php">
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh robotdev`; ?>
Select Robot Device : <?php echo $cmd;?><a href="#" onClick="window.open('activity.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
Enter Data Transfer Element Number (i.e. 0 for first drive ) : <input name="drivedev" min="0" type="number" required ><a href="#" onClick="window.open('activity.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
Enter Storage Element Number (i.e. 35 ) : <input name="voltag" min="0" type="number" required ><a href="#" onClick="window.open('activity.php', 'Devices', 'width = 600, height = 400');">Search</a>
<br>
<input type="submit"></form>
<FORM ACTION="vtlcmd.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
