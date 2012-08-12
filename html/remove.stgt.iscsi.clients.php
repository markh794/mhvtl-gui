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
echo "<pre><b>Remove ACL :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php

$VAR0 = $_REQUEST['mode'];
$VAR1 = $_REQUEST['iqn'];
$VAR3 = $_REQUEST['tid'];
$VAR4 = $_REQUEST['lun'];
$tidn = `echo $VAR3 | cut -d ":" -f1`;

$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$cmd = `if [ "$VAR0" = "target" ];then sudo -u root -S $TGTADMCMD --lld iscsi --op unbind --mode "$VAR0" --tid "$tidn" -I "$VAR1" >/tmp/remove.iscsi.target.stgt.tmp 2>&1; else sudo -u root -S $TGTADMCMD --lld iscsi --op unbind --mode "$VAR0" --tid "$tidn" --lun "$VAR4" -I "$VAR1" >/tmp/remove.iscsi.target.stgt.tmp 2>&1; fi`;
$output = shell_exec('cat /tmp/remove.iscsi.target.stgt.tmp');
echo "<pre>Removed $VAR1 from Target $tidn $output</pre>";
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.remove.stgt.iscsi.clients.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
