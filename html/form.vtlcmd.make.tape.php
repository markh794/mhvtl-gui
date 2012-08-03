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
echo "<pre><b>Create additional media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.make.tape.php">

<?php $libid = `sudo -u root -S ../scripts/build_html_opts.sh libid`; ?>
Select Library ID Number : <?php echo $libid;?><a href="#" onClick="window.open('find.device.id.php', 'Deviceid', 'width = 600, height = 400');">Search</a>
<br>
Enter Media Size (Megabytes) : <input name="size" min="500" type="number" value="500" MAXSIZE="6" required >
<br>
Enter Media Type : <SELECT name="type" ><option>data</OPTION><option>clean</OPTION><option>WORM</OPTION> </select>
<br>
Enter Media Density : <SELECT name="density" ><OPTION SELECTED>LTO4<option>AIT1</OPTION><option>AIT2</OPTION><option>AIT3</OPTION><option>AIT4</OPTION><option>DDS1</OPTION><option>DDS2</OPTION><option>DDS3</OPTION><option>DDS4</OPTION><option>DLT3</OPTION><option>DLT4</OPTION><option>LTO1</OPTION><option>LTO2</OPTION><option>LTO3</OPTION><option>LTO4</OPTION><option>LTO5</OPTION><option>SDLT1</OPTION><option>SDLT2</OPTION><option>SDLT3</OPTION><option>SDLT4</OPTION><option>T10KA</OPTION><option>T10KB</OPTION><option>T10KC</OPTION><option>J1A</OPTION><option>E05</OPTION><option>E06</OPTION></select> 
<br>

Enter Cartridge Label (barcode) 8 char e.g. TES001L4 : <input name="pcl" type="text" value="XXX001L4" MAXSIZE="8" required ><a href="#" onClick="window.open('list.tapes.php', 'Deviceid', 'width = 600, height = 400');">Search</a>
<br>


<input type="submit">
</form>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
