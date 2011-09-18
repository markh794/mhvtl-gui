<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>

<?php
$output = shell_exec('RUNNING=`lsscsi -g | egrep "tape|mediumx"| wc -l`; if [ $RUNNING -gt 0 ]; then echo "RUN <br> <img src="images/green_light.png" />";else echo "[STOPPED] <br> <img src="red_light.png" />";fi');
echo "<pre>$output</pre>";
?>

</body>
</html>
