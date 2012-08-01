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

<form method="post" action="vtlcmd.unmount.tape.php">

<?php $robot = $_REQUEST['robotdev']; ?>
Library Robot Device : <input type="text" readonly="readonly" value="<?php echo $robot;?>" name="robot" />
<br>

<?php $driveslot = `sudo -u root -S ../scripts/build_html_opts.sh driveslot ignore $robot`; ?>
Select Element - Drive : <?php echo $driveslot;?>
<br>


<?php $slotf = `sudo -u root -S ../scripts/build_html_opts.sh slotf ignore $robot`; ?>
Select Element - Slot : <?php echo $slotf;?>
<br>


<input type="submit">
</form>
<FORM ACTION="form.unmount.tape.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
