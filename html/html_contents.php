<html>
<head><title>MHVTL Web Console </title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">

<?php $MHVTLHOST = shell_exec('sudo -u root -S hostname -s');?>
<img src="images/gear_red.png" ALIGN="top" > <b>Server: <FONT COLOR=#0000FF size=2 ><?php echo $MHVTLHOST ;?></FONT></b>

<hr width="100%" size=1 color="blue">
<a href="http://sites.google.com/site/linuxvtl2/" ONCLICK="parent.frames[1].location.href='http://sites.google.com/site/linuxvtl2/'" target="showframe">
<tr><td align=center valign=middle><img border="0" src="images/mhvtl.png" alt="http://sites.google.com/site/linuxvtl2" ></td></tr></a>


<pre>
<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<FONT COLOR=#000000 ><b>$output</b></FONT>";
?>
</pre>

<table border="0" >

<tr>
<td>
<INPUT TYPE="button" VALUE=" Console " class="sameSize" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='frame_a.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Setup " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Operator " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" iSCSI " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Utility " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='tools.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Support " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='help.php'" target="showframe">
</td>
</tr>
</table>

<br>
<td align=center valign=middle><img src='images/linux-powered.png' width=120 height=40 ></td>

<br><br>
<a href="http://stgt.sourceforge.net/" ONCLICK="parent.frames[1].location.href='http://stgt.sourceforge.net/'" target="showframe">
<td align=center valign=middle><img border="0" src='images/tgt.png' alt="http://stgt.sourceforge.net" width=120 height=40 ></td></a>

<br><br>
<a href="http://www.gnu.org/licenses/gpl-2.0.html" ONCLICK="parent.frames[1].location.href='http://www.gnu.org/licenses/gpl-2.0.html'" target="showframe">
<td align=center valign=middle><img border="0" src='images/gplv2.gif' alt="http://www.gnu.org/licenses/gpl-2.0.html" ></td></a>
</center>
</body>
</html>
