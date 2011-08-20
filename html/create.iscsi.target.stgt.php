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
echo "<pre><b>Create STGT iscsi Target :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

<?php

$VAR0 = $_REQUEST['mode'];
$VAR1 = $_REQUEST['iqn'];
$VAR2 = $_REQUEST['idn1'];
$VAR6 = $_REQUEST['idn2'];
$VAR3 = $_REQUEST['tid'];
$VAR4 = $_REQUEST['lun'];
$VAR5 = $_REQUEST['device'];

$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `if [ "$VAR0" = "target" ];then sudo -u root -S $TGTADMCMD --lld iscsi --op new --mode $VAR0 --tid $VAR3 -T $VAR1:$VAR2:$VAR6:$VAR3 >/tmp/create.iscsi.target.stgt.tmp 2>&1; else sudo -u root -S $TGTADMCMD --lld iscsi --op new --mode $VAR0 --tid $VAR3 --lun $VAR4 --bstype=sg --device-type=pt -b $VAR5 >/tmp/create.iscsi.target.stgt.tmp 2>&1; fi`;
$output = shell_exec('cat /tmp/create.iscsi.target.stgt.tmp');
echo "<pre>Created $VAR0:$VAR1:$VAR6:$VAR2:$VAR3:$VAR4:$VAR5</pre>";
echo "<pre>$output</pre>";


?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
