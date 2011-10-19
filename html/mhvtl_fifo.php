<?php
$dtt = `date`;
$adjperm = `sudo -u root -S chmod 777 /var/tmp/mhvtl`;
$fifo = fopen("/var/tmp/mhvtl", "r+");
if ($fifo) {
    stream_set_blocking($fifo, false);
  echo "<b><FONT COLOR=white>$dtt </FONT></b><br>";
    } else {
  echo "<b><FONT COLOR=white>Pipe: </FONT><FONT COLOR=red>Offline</FONT></b>";
    }
$data = fgets($fifo);
if ($data === false) echo "<FONT COLOR=green>Ready ...</FONT><br>";
sleep(0);
echo "<FONT COLOR=#736AFF>$data</FONT><br>";
pclose($fifo);
?>
