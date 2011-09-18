<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Web Console</font><b>
<hr width="100%" size=1 color="blue">
<META HTTP-EQUIV="refresh" CONTENT="30">

<tr><td align=center valign=middle><img src="images/mhvtl.png" ></td></tr>

<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<pre><FONT COLOR=purple><b>$output</b></FONT></pre>";
?>




<table border="1">

<tr>
<td>
<INPUT TYPE="button" VALUE="  Control Center  " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='frame_a.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Configuration " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Operator Panel " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" iSCSI " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE="Live Update" class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='update.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Help " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='online-support.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE="Exit" class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='logout.php'" target="showframe">
</td>
</tr>

</table>

<?php
$output = `cat ../version`;
echo "<pre><b><FONT COLOR=green >Console<br>$output</FONT></b></pre>";
?>


</center>

</body>
</html>
