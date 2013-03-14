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
echo "<pre><b>Custom Configuration :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
echo "<pre><b><FONT COLOR=#0000FF>Custom Library Configuration:</FONT></b></pre>";
?>


<?php
$nextlid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{ SUM += $1+20} END { print SUM}'| awk '{print $1}'`;
$nextcid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f3|awk '{ SUM += $1+1} END { print SUM}'| awk '{print $1}'`;
?>


<form action="add.library.php" method="post">
Library ID: (Auto-Detected ) <input name="lid" value=<?php echo $nextlid;?> MAXLENGTH="3" type="number">
<br>
CHANNEL: (Auto-Detected ) <input name="channel" value=<?php echo $nextcid;?> MAXLENGTH="2" type="number">
<br>
TARGET: <input name="ltarget" value="00" type="number">
<br>
LUN: <input name="lun" value="00" type="number">
<br>
Vendor identification <input name="vi" value="IBM" type="text">
<br>
Product identification <input name="lpi" value="03584L32" type="text">
<br>
Product revision level <input name="lprl" value="4.02" type="text">
<br>
Unit serial number (unique - 8 numeric chars) :<input name="lusn" value=<?php echo $nextlid+10000000;?> MAXLENGTH="8" type="text">
<br>
NAA: <input name="naa" value="Auto-Generated" READONLY type="text" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 14px; background-color: #DDDDDD;" size="15" ><br>

<br>
<hr width="100%" size=1 color="blue">

<?php
echo "<pre><b><FONT COLOR=#0000FF>Custom Drive Configuration:</FONT></b></pre>";
?>


<?php
$nextlid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{ SUM += $1+20} END { print SUM}'| awk '{print $1}'`;
$nextcid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f3|awk '{ SUM += $1+1} END { print SUM}'| awk '{print $1}'`;
$did = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2|awk '{ SUM += $1+20} END { print SUM}'| awk '{print $1}' | awk '{ SUM += $1+1} END { print SUM}'`;
?>

Enter Number of Drives : <input name="nod" value="5" min="1" max="19" required type="number"><br>

<form action="add.drive.php" method="post">
Drive: <input name="did" value=<?php echo $did;?> type="number"><br>
CHANNEL: <input name="channel" value=<?php echo $nextcid;?> type="number"><br>
TARGET: <input name="dtarget" value="00" type="number"><br>
LUN: <input name="lun" value="01" type="number"><br>
Library ID: <input name="dlid" value=<?php echo $nextlid;?> type="number"><br>
Slot: <input name="sn" value="01" type="number"><br>
Vendor identification: <input name="dvi" value="IBM" type="text"><?php echo $output = `sudo -u root -S ../scripts/build_html_opts.sh qvendb`; ?> <br>
Product identification: <input name="pi" value="ULT3580-TD5" type="text"><?php echo $output = `sudo -u root -S ../scripts/build_html_opts.sh qvendb`; ?> <br>
Product revision level: <input name="prl" value="A3K6" type="text"><?php echo $output = `sudo -u root -S ../scripts/build_html_opts.sh qvendb`; ?> <br>
Unit serial number: <input name="usn" value=<?php echo $nextlid+10000001;?>  type="text">
<br>
NAA: <input name="naa" value="Auto-Generated" READONLY type="text" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 14px; background-color: #DDDDDD;" size="15" ><br>
Compression enabled (ON=1 OFF=0) : <SELECT name="ce" MAXLENGTH="1" > <OPTION>1</option><OPTION>0</option></select><br>
Compression factor (Value 1-9) : <input name="cf" value="1" MAXLENGTH="1" type="number"><br>
Compression Type (lzo or zlib) : <SELECT name="ctt" MAXLENGTH="4" ><OPTION>lzo</option><OPTION>zlib</option></select><b><FONT COLOR="red">*</FONT></b><br>

Enter Backoff Value (Default:400): <select name="bkfv" MAXLENGTH="7" type="number" ><OPTION>Default</option><OPTION>200</option><OPTION>100</option><OPTION>10</option></select><b><FONT COLOR="red">*</FONT></b><br>

<!-- Removed for now since it is no longer supported by MHVTL recent release
<hr width="100%" size=1 color="blue">
<br><b>LTO DRIVE OPTIONS ONLY (Checked=Yes): <INPUT TYPE=checkbox NAME="doi" VALUE="no" > </b><br><br>
READ_ONLY: <select name="ro"><option>LTO1</OPTION><option>LTO2</OPTION><OPTION>LTO3</option></select><INPUT TYPE=checkbox NAME="roc" VALUE="no"><br>
READ_ONLY: <select name="ro1"><option>LTO2</OPTION><option>LTO1</OPTION><OPTION>LTO3</option></select><INPUT TYPE=checkbox NAME="ro1c" VALUE="no"><br>
READ_WRITE: <select name="rw"><option>LTO3</OPTION><option>LTO2</OPTION><OPTION>LTO1</option><option>LTO4</OPTION><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="rwc" VALUE="no"><br>
READ_WRITE: <select name="rw1"><option>LTO4</OPTION><option>LTO2</OPTION><OPTION>LTO3</option><option>LTO1</OPTION><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="rw1c" VALUE="no"><br>
WORM:  <select name="wm"><option>LTO3</OPTION><option>LTO4</OPTION><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="wmc" VALUE="no"><br>
WORM:  <select name="wm1"><option>LTO4</OPTION><OPTION>LTO3</option><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="wm1c" VALUE="no"><br>
ENCRYPTION:  <select name="ecr"><option>LTO3</OPTION></option><option>LTO4</OPTION><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="ecrc" VALUE="no"><br>
ENCRYPTION:  <select name="ecr1"><option>LTO4</OPTION></option><option>LTO3</OPTION><OPTION>LTO5</option></select><INPUT TYPE=checkbox NAME="ecr1c" VALUE="no"><br>
-->

<hr width="100%" size=1 color="blue">

<?php
echo "<pre><b><FONT COLOR=#0000FF>Custom Media Configuration:</FONT></b></pre>";
?>

Library id (Auto-Detected ) : <input name="li" value=<?php echo $nextlid;?> type="number"><br>
Enter Number of Maps : <input name="nom" value="5" min="1" max="40" required MAXLENGTH="1" type="number"><br>

<?php $optcap  = `sudo -u root -S grep ^"CAPACITY" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`; ?>
CAPACITY in MegaByte (Auto-Detected): <input name="c" value=<?php echo $optcap;?> READONLY style="color: #736F6E" type="number">
<a href="#" input style="color: #0000ff" ONCLICK="parent.frames[1].location.href='setup.options.php'" target="showframe"> Edit</a>
<br>

Select Media Density Type : <SELECT name="mt" ><OPTION SELECTED>LTO5<option>AIT1</OPTION><option>AIT2</OPTION><option>AIT3</OPTION><option>AIT4</OPTION><option>DLT4</OPTION><option>LTO1</OPTION><option>LTO2</OPTION><option>LTO3</OPTION><option>LTO4</OPTION><option>LTO5</OPTION><option>LTO6</OPTION><option>SDLT600</OPTION><option>T10KA</OPTION><option>T10KB</OPTION><option>T10KC</OPTION><option>J1A</OPTION><option>E05</OPTION><option>E06</OPTION><option>9840A</OPTION><option>9840B</OPTION><option>9840C</OPTION><option>9840D</OPTION><option>9940A</OPTION><option>9940B</OPTION></select><br>
Enter Media Prefix ( 1 Char Only ) : <input name="mp" value="M" required MAXLENGTH="1" type="text"><br>

Enter Full Slots  : <input name="mc" value="185" min="1" max="15000" required MAXLENGTH="5" type="number"><br>

Enter Empty Slots : <input name="es" value="15" min="1" max="15000" required MAXLENGTH="5" SIZE=2 type="number"><b><FONT COLOR="red">*</FONT></b>
<br>


<!--
Enter Library Media PATH (Default:/opt/mhvtl): <select name="llp" MAXLENGTH="7" type="text" ><OPTION>/opt/mhvtl</option><OPTION>/opt/mhvtl/<?php echo $nextlid;?></option></select><b><FONT COLOR="red">*</FONT></b><br>
-->


<script type="text/javascript">
    function OnDropDownChange(dropDown)
    {
       var selectedValue = dropDown.options[dropDown.selectedIndex].value;
       document.getElementById("SelectOther").value = selectedValue;
    }
</script>
Enter Library Media PATH (Default:/opt/mhvtl):
     <select name = "llp" MAXLENGTH="7" type="text" required onChange="OnDropDownChange(this);">
        <option value="/opt/mhvtl">/opt/mhvtl</option>
        <option value="/opt/mhvtl/<?php echo $nextlid;?>">/opt/mhvtl/<?php echo $nextlid;?></option>
        <option value="">** Other</option>
      </select>
            <input type="text" id="SelectOther" name="llp" value="/opt/mhvtl" required style="background-color: #6AFB92;" />
<br><font color="#FF0000" SIZE="1" >** NOTE: If you select Library Media PATH Other,<br> if path is not under /opt/mhvtl, then must already exist with permission set to "vtl:vtl"</font>

<hr width="100%" size=1 color="blue">

<input type="submit" /> </form>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
