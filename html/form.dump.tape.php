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
echo "<pre><b>Dump Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">
<form method="post" action="dump.tape.php">
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh tape`; ?>
Select Volume : <?php echo $cmd;?>
<input type="submit">
</form>
<FORM ACTION="tools.php">
<INPUT TYPE=SUBMIT VALUE="Cancel">
</FORM>

</body>
</html>
