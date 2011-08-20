<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>

<?php
$lid = `grep ^Library /etc/mhvtl/device.conf | tail -1| cut -d":" -f2| awk '{print $1}'`;
$output = `sudo -u root cat /etc/mhvtl/library_contents.$lid`;
echo "<pre>$output</pre>";
?>

<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>

</body>
</html>
