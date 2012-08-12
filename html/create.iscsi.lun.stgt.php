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
echo "<pre><b>Create STGT iscsi LUN :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php

$VAR3 = $_REQUEST['tid'];
$VAR4 = $_REQUEST['lun'];
$VAR5 = $_REQUEST['device'];
$TID = `echo $VAR3|cut -d ":" -f1`;
$DEV = `echo $VAR5 | cut -d "/" -f3 `;

$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `sudo -u root -S $TGTADMCMD --lld iscsi --op new --mode logicalunit --tid "$TID" --lun $VAR4 --bstype=sg --device-type=pt -b /dev/$DEV >/tmp/create.iscsi.lun.stgt.tmp 2>&1`;
$output = shell_exec('cat /tmp/create.iscsi.lun.stgt.tmp');
echo "<pre>LUN:$VAR4 Created on Target $TID Device = /dev/$DEV</pre>";
echo "<pre>$output</pre>";


?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
