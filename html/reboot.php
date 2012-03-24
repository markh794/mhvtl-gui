<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Reboot System</font></b>
<hr width="100%" size=1 color="blue">

<?php

if ($_POST) {
if ($_POST['Submit'] == gettext(" Yes ")) {
        $rebootmsg = gettext("The system is rebooting now. This may take few minutes.");
        echo "<pre><b>The system is rebooting now. This may take few minutes.</b></pre>";
        $system_reboot = shell_exec('sudo -u root -S /sbin/reboot');
} else {
	Header("Location: system.php");
}
}
?>


<form action="reboot.php" method="post">
<?php if ($rebootmsg): echo print_info_box($rebootmsg); else: ?>
<p><strong><?=gettext("Are you sure you want to reboot the system?");?></strong></p>
<p>
  <input name="Submit" type="submit" class="formbtn" value=" <?=gettext("Yes");?> ">
  <input name="Submit" type="submit" class="formbtn" value=" <?=gettext("No");?> ">
</p>
</form>
<?php endif; ?>

<?php
if ($_POST) {
$reply = " " . gettext("Yes") . " ";
if ($_POST['Submit'] == $reply) {
	echo "<meta http-equiv=\"refresh\" content=\"70;url=/\">";
        echo "<pre><b>The system is rebooting now. This may take few minutes.</b></pre>";
	$system_reboot = shell_exec('sudo -u root -S /sbin/reboot');
} else {
	exit;
}
}

?>

</body>
</html>
