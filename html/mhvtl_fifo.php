<?php
$mhvtl_ver = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
$dtt = `date`;
$adjperm = `sudo -u root -S chmod 777 /var/tmp/mhvtl`;
$fifo = fopen("/var/tmp/mhvtl", "r+");
if ($fifo) {
    stream_set_blocking($fifo, false);
  echo "<b><FONT COLOR=white>$dtt</FONT></b><br>";
$data = fgets($fifo);
if ($data === false) echo "<br><FONT COLOR=#00FFFF>MHVTL</FONT><br><FONT COLOR=#FF00FF>Release $mhvtl_ver </FONT><FONT COLOR=#6FFF00><br>Ready ...</FONT>";
sleep(0);
$a= strstr($data, '-', false);
echo "<FONT COLOR=#736AFF ><br>$a</FONT><br>";
    } else {
  echo "<b><FONT COLOR=white>Pipe: </FONT><FONT COLOR=red>Offline</FONT><FONT COLOR=white> or option</FONT><FONT COLOR=yellow> disabled</FONT></b>";
    }
fclose($fifo);
?>
