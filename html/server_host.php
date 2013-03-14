<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Server Host info</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
$upt = shell_exec('sudo -u root -S uptime');
echo "<pre>$upt</pre>" ;
?>


<hr width="100%" size=1 color="blue">



<table border="0" >

<?php 
$MHVTLHOST = shell_exec('sudo -u root -S hostname');
echo "<pre><FONT COLOR=blue size=3>Hostname: </FONT>$MHVTLHOST</pre>";

$serverIP = $_SERVER["SERVER_ADDR"];
echo "<pre><FONT COLOR=blue size=3>IP Address: </FONT>$serverIP</pre>";

$osrel = shell_exec('sudo -u root -S ../scripts/os_release.sh');
echo "<pre><FONT COLOR=blue size=3>Platform: </FONT>$osrel</pre>";
?>



<hr width="100%" size=1 color="blue">

Network:

<?php
$net = shell_exec('sudo -u root -S ifconfig -a');
echo "<pre>$net</pre>" ;
?>

<hr width="100%" size=1 color="blue">

Storage:

<?php
$df = shell_exec('sudo -u root -S df -h');
echo "<pre>$df</pre>" ;
?>

<hr width="100%" size=1 color="blue">

Hardware:

<?php
$pci = shell_exec('sudo -u root -S lspci -v');
echo "<pre><FONT SIZE=1>$pci</FONT></pre>" ;
?>


</table>


</body>
</html>
