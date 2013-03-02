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
echo "<pre><b>StorageTek :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<?php
$nextlid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{print $1}' |awk '{ SUM += $1+20} END { print (SUM)}'`;
$nextcid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f3|awk '{print $1}' | awk '{ SUM += $1+1} END { print (SUM)}'`;
?>
<form action="add.library.php" method="post">
<input TYPE=HIDDEN name="lid" value=<?php echo $nextlid;?> READONLY type="number">
<input TYPE=HIDDEN name="channel" value=<?php echo $nextcid;?> READONLY type="number">
<input TYPE=HIDDEN name="ltarget" value="00" READONLY type="number">
<input TYPE=HIDDEN name="lun" value="00" READONLY type="number">
<input TYPE=HIDDEN name="vi" value="STK" READONLY type="text" >
Select Library Model:<select name="lpi"><option>SL150</OPTION><OPTION>SL500</option><option>SL3000</OPTION><option>L700</OPTION><option>L180</OPTION><option>L120</OPTION></select><b><FONT COLOR="red">*</FONT></b>
<input TYPE=HIDDEN name="lprl" value="0016" READONLY type="text" />
<input TYPE=HIDDEN name="lusn" value=<?php echo $nextlid+90000000;?> READONLY MAXLENGTH="8" type="text" />
<input TYPE=HIDDEN name="naa" value="Auto-Generated" READONLY type="text" />

<?php
$nextlid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{print $1}' |awk '{ SUM += $1+20} END { print (SUM)}'`;
$nextcid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f3|awk '{print $1}' | awk '{ SUM += $1+1} END { print (SUM)}'`;
$did = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{print $1}' | awk '{ SUM += $1+20} END { print SUM}' | awk '{ SUM += $1+1} END { print SUM}'`;
?>
<br>
<form action="add.drive.php" method="post">
<input TYPE=HIDDEN name="did" value=<?php echo $did;?> READONLY type="number">
<input TYPE=HIDDEN name="channel" value=<?php echo $nextcid;?> READONLY type="number">
<input TYPE=HIDDEN name="dtarget" value="00" READONLY type="number">
<input TYPE=HIDDEN name="lun" value="01" READONLY type="number">
<input TYPE=HIDDEN name="dlid" value=<?php echo $nextlid;?> READONLY type="number">
<input TYPE=HIDDEN name="sn" value="01" READONLY type="number">
<input TYPE=HIDDEN name="dvi" value="STK" READONLY type="text">
Select Drive Vendor: <select name="dvi"><OPTION>STK</option><OPTION>HP</option><OPTION>QUANTUM</option></select><b><FONT COLOR="red">*</FONT></b>
<br>
Select Drive Model: <select name="pi"><OPTION>T10000A</option><OPTION>T10000B</option><OPTION>T10000C</option><OPTION>9940A</option><OPTION>9940B</option><OPTION>9840A</option><OPTION>9840B</option><OPTION>9840C</option><OPTION>9840D</option><OPTION>Ultrium 3-SCSI</option><OPTION>Ultrium 4-SCSI</option><OPTION>Ultrium 5-SCSI</option><OPTION>Ultrium 6-SCSI</option><OPTION>DLT7000</option></select><b><FONT COLOR="red">*</FONT></b>
<input TYPE=HIDDEN name="prl" value="1.27" READONLY type="text">
<input TYPE=HIDDEN name="usn" value=<?php echo $nextlid+90000001;?>  READONLY type="text"></a>
<input TYPE=HIDDEN name="naa" value="Auto-Generated" READONLY type="text"><br>
Compression enabled (ON=1 OFF=0) : <SELECT name="ce" MAXLENGTH="1" > <OPTION>1</option><OPTION>0</option></select><b><FONT COLOR="red">*</FONT></b><br>
Compression factor (Value 1-9) : <SELECT name="cf" MAXLENGTH="1"> <OPTION>1</option><OPTION>2</option><OPTION>3</option><OPTION>4</option><OPTION>5</option><OPTION>6</option><OPTION>7</option><OPTION>8</option><OPTION>9</option></select><b><FONT COLOR="red">*</FONT></b><br>
Compression Type (lzo or zlib) : <SELECT name="ctt" MAXLENGTH="4" ><OPTION>lzo</option><OPTION>zlib</option></select><b><FONT COLOR="red">*</FONT></b><br>

Enter Backoff Value (Default:400): <select name="bkfv" MAXLENGTH="7" type="number" ><OPTION>Default</option><OPTION>200</option><OPTION>100</option><OPTION>10</option></select><b><FONT COLOR="red">*</FONT></b><br>


Enter Number of Drives : <input name="nod" value="5" min="1" max="19" required MAXLENGTH="2" SIZE=2 type="number"><b><FONT COLOR="red">*</FONT></b><br>
Enter Number of Maps   : <input name="nom" value="5" min="1" max="40" required MAXLENGTH="2" SIZE=2 type="number"><b><FONT COLOR="red">*</FONT></b><br>

<input TYPE=HIDDEN name="li" value=<?php echo $nextlid;?> READONLY type="number">

Enter Media Type : <select name="mt" MAXLENGTH="2" type="text" ><OPTION>T10000A</option><OPTION>T10000B</option><OPTION>T10000C</option><OPTION>9940A</option><OPTION>9940B</option><OPTION>9840A</option><OPTION>9840B</option><OPTION>9840C</option><OPTION>9840D</option><OPTION>Ultrium 3-SCSI</option><OPTION>Ultrium 4-SCSI</option><OPTION>Ultrium 5-SCSI</option><OPTION>Ultrium 6-SCSI</option><OPTION>DLT7000</option></select><b><FONT COLOR="red">*</FONT></b><br>

<?php $optcap  = `sudo -u root -S grep ^"CAPACITY" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`; ?>
CAPACITY in MegaByte (Auto-Detected): <input name="c" value=<?php echo $optcap;?> READONLY style="color: #736F6E" type="number">
<a href="#" input style="color: #0000ff" ONCLICK="parent.frames[1].location.href='setup.options.php'" target="showframe"> Edit</a>
<br>


Enter Media Barcode Prefix (1 char only) : <input name="mp" value="S" style="text-transform: uppercase" required MAXLENGTH="1" SIZE=2 type="text"><b><FONT COLOR="red">*</FONT></b><br>
Enter Full Slots  : <input name="mc" value="95" min="1" max="15000" required MAXLENGTH="5" SIZE=2 type="number"><b><FONT COLOR="red">*</FONT></b>
<br>

Enter Empty Slots : <input name="es" value="5" min="1" max="15000" required MAXLENGTH="5" SIZE=2 type="number"><b><FONT COLOR="red">*</FONT></b>
<br>


Enter Library Media PATH (Default:/opt/mhvtl): <select name="llp" MAXLENGTH="7" type="text" ><OPTION>/opt/mhvtl</option><OPTION>/opt/mhvtl/<?php echo $nextlid;?></option></select><b><FONT COLOR="red">*</FONT></b><br>

<hr width="100%" size=1 color="blue">

<br><input type="submit" /> </form>
<FORM ACTION="form.setup.choose.standard.complete.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
