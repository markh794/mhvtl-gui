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
$VARc = $_REQUEST['ro'];
$VARd = $_REQUEST['ro1'];
$VARe = $_REQUEST['rw'];
$VARf = $_REQUEST['rw1'];
$VARg = $_REQUEST['wm'];
$VARh = $_REQUEST['wm1'];
$VARi = $_REQUEST['ecr'];
$VARj = $_REQUEST['ecr1'];

$outputa = `echo >>/tmp/device.conf.tmp`;
$outputd = `echo "Drive: "'$VARx'" CHANNEL: "'$VAR2'" TARGET: "'$VAR3'" LUN: "'$VAR4' >>/tmp/device.conf.tmp`;
$output0 = `echo " Library ID: "'$VAR1'" Slot: "'$VARr' >>/tmp/device.conf.tmp`;
$output1 = `echo " Vendor identification: "'$VAR5'>>/tmp/device.conf.tmp`;
$output2 = `echo " Product identification: "'$VAR6' >>/tmp/device.conf.tmp`;
$output3 = `echo " Product revision level: "'$VAR7' >>/tmp/device.conf.tmp'`;
$output4 = `echo " Unit serial number: "'$VAR8' >>/tmp/device.conf.tmp`;
$output5 = `echo " NAA: "'$VAR1:11:22:33:ab:$VAR2:$VAR3:$VAR4' >>/tmp/device.conf.tmp`;
$outputf = `echo " fifo: /var/tmp/mhvtl" >>/tmp/device.conf.tmp`;
<!-- Removed for now since it is no longer supported by MHVTL recent release
$output6 = `echo " READ_ONLY: "'$VARc' >>/tmp/device.conf.tmp`;
$output7 = `echo " READ_ONLY: "'$VARd' >>/tmp/device.conf.tmp`;
$output8 = `echo " READ_WRITE: "'$VARe' >>/tmp/device.conf.tmp`;
$output9 = `echo " READ_WRITE: "'$VARf' >>/tmp/device.conf.tmp`;
$outputx = `echo " WORM: "'$VARg' >>/tmp/device.conf.tmp`;
$outputy = `echo " WORM: "'$VARh' >>/tmp/device.conf.tmp`;
$outputz = `echo " ENCRYPTION: "'$VARi' >>/tmp/device.conf.tmp`;
$outputq = `echo " ENCRYPTION: "'$VARj' >>/tmp/device.conf.tmp`;
-->

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
