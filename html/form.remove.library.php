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
echo "<pre><b>Remove Library Configurations :</b></pre>";
?>

<hr width="100%" size=1 color="blue">


<form method="post" action="form.remove.confirm.again.library.php">

<?php 
$checklastone = `sudo -u root grep ^Library /etc/mhvtl/device.conf|wc -l`;
if ($checklastone == 1 )
{
echo "<FONT COLOR=red>Number of configured libraries = $checklastone <br></FONT>";
echo "<FONT COLOR=blue>You cannot remove the last one ...<br></FONT>";
echo "<INPUT TYPE=button VALUE=Return input ONCLICK=parent.frames[1].location.href='setup.php' target=showframe>";
}

else

{
echo "<pre><b><FONT COLOR=#FF0000>Warrning: This will permanently remove configured library/drives/media !!!</FONT></b></pre>";
$cmd = `sudo -u root -S ../scripts/build_html_opts.sh libid`;
echo "Select Library to remove $cmd ";
echo "<br>";
echo "Remove ALL Tape Media Also ? <select name=kmed MAXLENGTH=2 type=text ><OPTION>NO</option><OPTION>YES</option></select><b><FONT COLOR=red>*</FONT></b>";
echo "<br>";
echo "<table border=0 >";
echo "<tr>";
echo "<td>";
echo "<INPUT TYPE=button VALUE=' Cancel ' input ONCLICK=parent.frames[1].location.href='setup.php' target=showframe>";
echo "<input type=submit VALUE=' Continue '  style='color: #FF0000' >";
echo "</td>";
echo "</tr>";
echo "</form>";
echo "</table>";
}
?>
</body>
</html>
