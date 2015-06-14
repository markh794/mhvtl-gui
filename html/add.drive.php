<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>

<?php
$VARx = $_REQUEST['did'];
$VARr = $_REQUEST['sn'];
$VAR1 = $_REQUEST['dlid'];
$VAR2 = $_REQUEST['channel'];
$VAR3 = $_REQUEST['target'];
$VAR4 = $_REQUEST['lun'];
$VAR5 = $_REQUEST['dvi'];
$VAR6 = $_REQUEST['pi'];
$VAR7 = $_REQUEST['prl'];
$VAR8 = $_REQUEST['usn'];
$VAR0 = $_REQUEST['naa'];
$VARa = $_REQUEST['ce'];
$VARb = $_REQUEST['cf'];
$VCTT = $_REQUEST['ctt'];

$outputa = `echo >>/tmp/device.conf.tmp`;
$outputd = `echo "Drive: "'$VARx'" CHANNEL: "'$VAR2'" TARGET: "'$VAR3'" LUN: "'$VAR4' >>/tmp/device.conf.tmp`;
$output0 = `echo " Library ID: "'$VAR1'" Slot: "'$VARr' >>/tmp/device.conf.tmp`;
$output1 = `echo " Vendor identification: "'$VAR5'>>/tmp/device.conf.tmp`;
$output2 = `echo " Product identification: "'$VAR6' >>/tmp/device.conf.tmp`;
$output3 = `echo " Product revision level: "'$VAR7' >>/tmp/device.conf.tmp'`;
$output4 = `echo " Unit serial number: "'$VAR8' >>/tmp/device.conf.tmp`;
$output5 = `echo " NAA: "'$VAR1:11:22:33:ab:$VAR2:$VAR3:$VAR4' >>/tmp/device.conf.tmp`;
$output6 = `echo " Compression type: "'$VCTT' >>/tmp/device.conf.tmp`;

$output = `cat /tmp/device.conf.tmp`;
echo "<pre>$output</pre>";
?>

<FORM ACTION="update.device.conf.drive.php">
<INPUT TYPE=SUBMIT VALUE="Finish">
</FORM>


<FORM ACTION="form.setup.complete.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
