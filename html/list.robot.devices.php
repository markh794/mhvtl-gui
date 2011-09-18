<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>


<?php
$output = shell_exec('lsscsi -g | egrep "mediumx"');
echo "<pre>$output</pre>";
?>

<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE="Close"></a>

</body>
</html>
