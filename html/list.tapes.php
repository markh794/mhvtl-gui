<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>


<?php
$outfile = shell_exec('sudo -u root -S ls -1 /opt/mhvtl >/tmp/list.tapes.tmp 2>&1');
$output = shell_exec('sudo -u root -S cat /tmp/list.tapes.tmp');
echo "<pre>$output</pre>";
?>

<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>

</body>
</html>
