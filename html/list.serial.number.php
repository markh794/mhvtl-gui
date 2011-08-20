<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>

<?php
$output = `sudo -u root -S grep -v ^# /etc/mhvtl/device.conf| grep "Unit serial number"| awk '{print $4}'|sort -u`;
echo "<pre>$output</pre>";
?>

<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>

</body>
</html>
