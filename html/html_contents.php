<html>
<head><title>MHVTL Web Console </title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">

<?php $MHVTLHOST = shell_exec('sudo -u root -S hostname -s');?>
<img src="images/gear_red.png" ALIGN="top" ><b>Server: <FONT COLOR=#008000><?php echo $MHVTLHOST ;?></FONT></b>

<hr width="100%" size=1 color="blue">
<tr><td align=center valign=middle><img src="images/mhvtl.png" ></td></tr>

<pre>
<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<b><FONT COLOR=#000000 >$output</FONT></b>";
?>
</pre>


<table border="2">

<tr>
<td>
<INPUT TYPE="button" VALUE=" Status " class="sameSize" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='frame_a.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Setup " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE="  Operation  " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Tools " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='tools.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Support " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='help.php'" target="showframe">
</td>
</tr>


</table>

<br>
<td align=center valign=middle><img src='images/gplv2.gif' ></td>
</center>

<br>

<center><td align=center valign=middle><INPUT TYPE="button" VALUE="Change Color" style="color: #000000" ONCLICK="parent.frames[1].location.href='form.mhvtl-gui.theme.selector.php'" target="showframe"></td></center>


</body>
</html>
