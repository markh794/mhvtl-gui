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
echo "<pre><b>Resize Tape :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="form2.size_tape.php">

<?php $libid = $_REQUEST['libid'];?>
Library Selected <FONT COLOR=blue><?php echo $libid;?></FONT>
<input TYPE=HIDDEN name="libid" value=<?php echo $libid;?> READONLY >
<br>

<?php
$VAR = `echo $libid| cut -d ":" -f1`;
$tape = `sudo -u root -S ../scripts/build_html_opts.sh tape $VAR`;
?>
Select Tape: <?php echo $tape;?>
<br>

<?php
$size  = `sudo -u root -S grep ^"CAPACITY" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`;
?>
Set Tape Capacity Size (Mbytes) <input name="size" min="1" value=<?php echo $size;?> type="number" required ><br>



<hr width="100%" size=1 color="blue">
<input type="submit">
</form>
<FORM ACTION="edit_tape.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
