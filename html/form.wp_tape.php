<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Write Protect Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="form1.wp_tape.php">

<?php $libid = `sudo -u root -S ../scripts/build_html_opts.sh libid`; ?>
Select Library <?php echo $libid;?><input type="submit"></form>
<FORM ACTION="edit_tape.php"><INPUT TYPE=SUBMIT VALUE="Cancel"></FORM>

</body>
</html>
