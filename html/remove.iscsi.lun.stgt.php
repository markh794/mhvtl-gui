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
echo "<pre><b>Remove STGT iscsi LUN :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php


$VAR3 = $_REQUEST['tid'];
$VAR4 = $_REQUEST['lun'];


$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `sudo -u root -S $TGTADMCMD --lld iscsi --mode logicalunit --op delete --tid $VAR3 --lun $VAR4 >/tmp/delete.iscsi.lun.stgt.tmp 2>&1`;
$output = shell_exec('cat /tmp/delete.iscsi.lun.stgt.tmp');
echo "<pre>Deleted Target $VAR3 LUN $VAR4 </pre>";
echo "<pre>$output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"> <INPUT TYPE=SUBMIT VALUE="Retrun"> </FORM>

</body>
</html>
