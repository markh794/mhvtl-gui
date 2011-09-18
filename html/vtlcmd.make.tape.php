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
echo "<pre><b>Create additional media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$VAR1 = $_REQUEST['size'];
$VAR2 = $_REQUEST['type'];
$VAR3 = $_REQUEST['density'];
$VAR4 = $_REQUEST['pcl'];

$checkunique = `sudo -u root ls /opt/mhvtl/$VAR4 |wc -l`;
if ($checkunique == 0 )
{
$cmd = `sudo -u root -S mktape -m $VAR4 -s $VAR1 -t $VAR2 -d $VAR3 >/tmp/vtlcmd.create.tape.tmp 2>&1`;
$output = shell_exec('cat /tmp/vtlcmd.create.tape.tmp');
echo "<pre>Created $VAR4 .. $output</pre>";
}
else
{
echo "<FONT COLOR=red>$VAR4 already exist ! , select different barcode please ...</FONT>";
}
?>

<hr width="100%" size=1 color="blue">
<FORM ACTION="form.vtlcmd.make.tape.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
