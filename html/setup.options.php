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
echo "<pre><b>Update Current Settings :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$optpath = `sudo -u root -S grep ^"MHVTL_CONFIG_PATH" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`;
$optcap  = `sudo -u root -S grep ^"CAPACITY" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`;
$optverb = `sudo -u root -S grep ^"VERBOSE" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`;
$optdeb  = `sudo -u root -S grep ^"VTL_DEBUG" /etc/mhvtl/mhvtl.conf| cut -d"=" -f2`;
?>

<form action="add.options.php" method="post" >
MHVTL Configuration Path <input name="mcp" READONLY value=<?php echo $optpath;?> type="text" required style="background-color: #C0C0C0;"><br>
Set Tape Capacity Size (Mbytes) <input name="c" min="1" value=<?php echo $optcap;?> type="number" required ><br>
Select Log Verbosity Level <SELECT name="v"><OPTION><?php echo $optverb;?></option><OPTION>0</option><OPTION>1</option> <OPTION>2</option><OPTION>3</option></select> <br>
Select kernel Debug Level <SELECT name="vd"><OPTION><?php echo $optdeb;?></option><OPTION>0</option><OPTION>1</option></select><br>
<hr width="100%" size=1 color="blue">
<input type="SUBMIT" VALUE="Update" ></FORM>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Cancel"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
