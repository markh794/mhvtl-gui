<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>


<?php
$cmd = shell_exec('sudo -u root -S find /opt/mhvtl -type d | cut -d "/" -f4,5 | cut -d "/" -f2 | egrep ^"[A-Z]"|sort -n  >/tmp/list.tapes.tmp');
$output = shell_exec('sudo -u root -S cat /tmp/list.tapes.tmp');
echo "<pre>$output</pre>";
?>
<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>

</body>
</html>
