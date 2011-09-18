<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>


<?php
$save = `sudo -u root cp -f /etc/mhvtl/device.conf /etc/mhvtl/device.conf.console.save.$$;sudo -u root cp -f /etc/mhvtl/device.conf /tmp/device.conf.trans; sudo -u root chmod 777 /tmp/device.conf.trans`;
$run1 = `sudo -u root echo >>/tmp/device.conf.trans`;
$run2 = `sudo -u root cat /tmp/device.conf.tmp >> /tmp/device.conf.trans`;
$run3 = `sudo -u root echo >>/tmp/device.conf.trans`;
$run4 = `sudo -u root cp -f /tmp/device.conf.trans /etc/mhvtl/device.conf`;
$output = `sudo -u root cat /tmp/device.conf.tmp`;
$run5 = `sudo -u root rm -f /tmp/device.conf.tmp /tmp/device.conf.trans`;

echo "<FONT COLOR=blue><b> ========= CONFIGURATION UPDATED ================ </b></FONT>";
echo "<pre>$output</pre>";
echo "<FONT COLOR=blue><b> ========= CONFIGURATION UPDATED ================ </b></FONT>";

?>


<hr width="100%" size=1 color="blue">
<br>
<b><FONT COLOR="red">*** You must restart mhvtl daemons to use new library and drives ***</FONT></b><br>
<br>
<FORM ACTION="confirm.stop-start_mhvtl.php"> <INPUT TYPE=SUBMIT style="color: #FF0000" VALUE="Restart"> </FORM>
<FORM ACTION="form.setup.complete.php"> <INPUT TYPE=SUBMIT style="color: #0000FF" VALUE="Finish"> </FORM>

</body>
</html>
