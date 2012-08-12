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
echo "<pre><b>Remove STGT iscsi Target :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php

$VAR3 = $_REQUEST['tid'];
$TID = ` echo $VAR3 | cut -d ":" -f1`;

$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `sudo -u root -S $TGTADMCMD --lld iscsi --mode target --op delete --tid $TID >/tmp/delete.iscsi.target.stgt.tmp 2>&1`;
$output = shell_exec('cat /tmp/delete.iscsi.target.stgt.tmp');
echo "<pre>Deleted Target $TID</pre>";
echo "<pre>$output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.remove.iscsi.target.stgt.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
