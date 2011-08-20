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
<br>
<hr width="100%" size=1 color="blue">

<?php

$VAR0 = $_REQUEST['mode'];
$VAR1 = $_REQUEST['iqn'];
$VAR2 = $_REQUEST['add'];
$VAR3 = $_REQUEST['tid'];
$VAR4 = $_REQUEST['lun'];
$VAR5 = $_REQUEST['device'];
$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `sudo -u root -S $TGTADMCMD --lld iscsi --op bind --mode target --tid $VAR3 -I $VAR1 >/tmp/add.iscsi.client.stgt.tmp 2>&1;`;
$output = shell_exec('cat /tmp/add.iscsi.client.stgt.tmp');
echo "<pre>Added $VAR1 to TID $VAR3 .. $output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.add.stgt.iscsi.clients.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
