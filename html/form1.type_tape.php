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
echo "<pre><b>change Tape Type:</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="form2.type_tape.php">

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
Enter Type <SELECT name="type"><option>data</OPTION><option>clean</OPTION><option>WORM</OPTION> </select>
<br>

<hr width="100%" si e=1 color="blue">

<input type="submit">
</form>
<FORM ACTION="edit_tape.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
