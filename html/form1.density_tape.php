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
echo "<pre><b>change Tape Density:</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="form2.density_tape.php">

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
Select Density:
<SELECT name="density">
<OPTION>AIT1</OPTION>
<OPTION>AIT2</OPTION>
<OPTION>AIT3</OPTION>
<OPTION>AIT4</OPTION>
<OPTION>DDS1</OPTION>
<OPTION>DDS2</OPTION>
<OPTION>DDS3</OPTION>
<OPTION>DDS4</OPTION>
<OPTION>DLT3</OPTION>
<OPTION>DLT4</OPTION>
<OPTION>LTO1</OPTION>
<OPTION>LTO2</OPTION>
<OPTION>LTO3</OPTION>
<OPTION>LTO4</OPTION>
<OPTION>LTO5</OPTION>
<OPTION>LTO6</OPTION>
<OPTION>SDLT1</OPTION>
<OPTION>SDLT220</OPTION>
<OPTION>SDLT320</OPTION>
<OPTION>SDLT600</OPTION>
<OPTION>T10KA</OPTION>
<OPTION>T10KB</OPTION>
<OPTION>T10KC</OPTION>
<OPTION>9840A</OPTION>
<OPTION>9840B</OPTION>
<OPTION>9840C</OPTION>
<OPTION>9840D</OPTION>
<OPTION>9940A</OPTION>
<OPTION>9940B</OPTION>
<OPTION>J1A</OPTION>
<OPTION>E05</OPTION>
<OPTION>E06</OPTION>
</select>
<br>

<hr width="100%" si e=1 color="blue">

<input type="submit">
</form>
<FORM ACTION="edit_tape.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
