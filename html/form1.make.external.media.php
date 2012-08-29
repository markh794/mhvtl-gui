<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Create External media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="make.external.media.php">

<?php $libid = $_REQUEST['libid'];?>
Library Selected <FONT COLOR=blue><?php echo $libid;?></FONT>
<input TYPE=HIDDEN name="libid" value=<?php echo $libid;?> READONLY >
<br>
<?php $optcap  = `sudo -u root -S grep ^"CAPACITY" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`; ?>
Capacity (Auto-Detected) <input name="size" value=<?php echo $optcap;?> READONLY style="color: #736F6E" type="number" MAXSIZE="6" required >
<br>
Enter Type <SELECT name="type"><option>data</OPTION><option>clean</OPTION><option>WORM</OPTION> </select>

<?php
$output = shell_exec('DEVICES=`sudo -u root -S ../scripts/plot_devices.sh`; if [ ! -z "$DEVICES" ]; then echo "$DEVICES";fi');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";
?>


Select Barcode <SELECT name="mp">
<OPTION>A</OPTION>
<OPTION>B</OPTION>
<OPTION>C</OPTION>
<OPTION>D</OPTION>
<OPTION>E</OPTION>
<OPTION>F</OPTION>
<OPTION>G</OPTION>
<OPTION>H</OPTION>
<OPTION>I</OPTION>
<OPTION>J</OPTION>
<OPTION>K</OPTION>
<OPTION>L</OPTION>
<OPTION>M</OPTION>
<OPTION>N</OPTION>
<OPTION>O</OPTION>
<OPTION>P</OPTION>
<OPTION>Q</OPTION>
<OPTION>R</OPTION>
<OPTION>S</OPTION>
<OPTION>T</OPTION>
<OPTION>U</OPTION>
<OPTION>V</OPTION>
<OPTION>W</OPTION>
<OPTION>X</OPTION>
<OPTION>Y</OPTION>
<OPTION>Z</OPTION>
<OPTION>CLN</OPTION>
</select>

<SELECT name="pcl1"><option>0</OPTION><option>1</OPTION><option>2</OPTION><option>3</OPTION><option>4</OPTION><option>5</OPTION><option>6</OPTION><option>7</OPTION><option>8</OPTION><option>9</OPTION></select>

<SELECT name="pcl2"><option>0</OPTION><option>1</OPTION><option>2</OPTION><option>3</OPTION><option>4</OPTION><option>5</OPTION><option>6</OPTION><option>7</OPTION><option>8</OPTION><option>9</OPTION></select>

<SELECT name="pcl3"><option>0</OPTION><option>1</OPTION><option>2</OPTION><option>3</OPTION><option>4</OPTION><option>5</OPTION><option>6</OPTION><option>7</OPTION><option>8</OPTION><option>9</OPTION></select>

<SELECT name="pcl4"><option>0</OPTION><option>1</OPTION><option>2</OPTION><option>3</OPTION><option>4</OPTION><option>5</OPTION><option>6</OPTION><option>7</OPTION><option>8</OPTION><option>9</OPTION></select>

<SELECT name="pcl5" ><option>1</OPTION><option>0</OPTION><option>2</OPTION><option>3</OPTION><option>4</OPTION><option>5</OPTION><option>6</OPTION><option>7</OPTION><option>8</OPTION><option>9</OPTION></select>


<SELECT name="density">
<OPTION>LTO5:L5</OPTION>
<OPTION>AIT1:X1</OPTION>
<OPTION>AIT2:X2</OPTION>
<OPTION>AIT3:X3</OPTION>
<OPTION>AIT4:X4</OPTION>
<OPTION>DDS1:S1</OPTION>
<OPTION>DDS2:S2</OPTION>
<OPTION>DDS3:S3</OPTION>
<OPTION>DDS4:S4</OPTION>
<OPTION>DLT3:D3</OPTION>
<OPTION>DLT4:D4</OPTION>
<OPTION>LTO1:L1</OPTION>
<OPTION>LTO2:L2</OPTION>
<OPTION>LTO3:L3</OPTION>
<OPTION>LTO4:L4</OPTION>
<OPTION>LTO5:L5</OPTION>
<OPTION>LTO6:L6</OPTION>
<OPTION>SDLT1:S1</OPTION>
<OPTION>SDLT2:S2</OPTION>
<OPTION>SDLT3:S3</OPTION>
<OPTION>SDLT4:S4</OPTION>
<OPTION>SuperDLT1:S1</OPTION>
<OPTION>SDLT220:S2</OPTION>
<OPTION>SDLT320:S3</OPTION>
<OPTION>SDLT600:S3</OPTION>
<OPTION>DLT-S4:S4</OPTION>
<OPTION>T10KA:TA</OPTION>
<OPTION>T10KB:TB</OPTION>
<OPTION>T10KC:TC</OPTION>
<OPTION>9840A:TA</OPTION>
<OPTION>9840B:TB</OPTION>
<OPTION>9840C:TC</OPTION>
<OPTION>9840D:TD</OPTION>
<OPTION>9940A:TA</OPTION>
<OPTION>9940B:TB</OPTION>
<OPTION>J1A:JA</OPTION>
<OPTION>E05:JB</OPTION>
<OPTION>E06:JB</OPTION>
</select>

View current tape inventory:
<?php
$VAR = `echo $libid| cut -d ":" -f1`;
echo $output = `sudo -u root -S ../scripts/build_html_opts.sh tape $VAR`;
?>



<br><br>
<input type="submit">
</form>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Return"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
