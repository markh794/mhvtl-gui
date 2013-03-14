<html>
<head><title>MHVTL Web Console </title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">

<a href="server_host.php" class="image-link" alt="Server Host Info" ONCLICK="parent.frames[1].location.href='server_host.php'" target="showframe">
<?php $MHVTLHOST = shell_exec('sudo -u root -S hostname -s');?>
<img src="images/gear_red.png" ALIGN="top" border="0" alt="Server Host Info" > <FONT COLOR=#000000 size=3 ><b>Server: </FONT></b><?php echo $MHVTLHOST ;?></a>



<hr width="100%" size=1 color="blue">
<a href="http://sites.google.com/site/linuxvtl2/" class="image-link" ONCLICK="parent.frames[1].location.href='http://sites.google.com/site/linuxvtl2/'" target="showframe">
<tr><td align=center valign=middle><img border="0" src="images/mhvtl.png" alt="http://sites.google.com/site/linuxvtl2" height="64" width="120" ></td></tr></a>


<pre>
<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<b>$output</b>";
?>
</pre>

<table border="0" >

<tr>
<td>
<INPUT TYPE="button" VALUE=" Console " class="sameSize" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='console.php'" target="showframe">
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
<INPUT TYPE="button" VALUE=" iSCSI (tgt) " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe">
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

<br>
<a href="http://stgt.sourceforge.net/" ONCLICK="parent.frames[1].location.href='http://stgt.sourceforge.net/'" target="showframe">
<td align=center valign=middle><img border="0" src='images/tgt.png' alt="http://stgt.sourceforge.net" width=120 height=40 ></td></a>

<!--
<br>
<a href="http://en.wikipedia.org/wiki/Linear_Tape-Open" ONCLICK="parent.frames[1].location.href='http://en.wikipedia.org/wiki/Linear_Tape-Open'" target="showframe">
<td align=center valign=middle><img border="0" src='images/Lto-ultrium-logo.png' alt="http://en.wikipedia.org/wiki/Linear_Tape-Open" width=120 height=40 ></td></a>
-->


<br>
<a href="http://www.gnu.org/licenses/gpl-2.0.html" ONCLICK="parent.frames[1].location.href='http://www.gnu.org/licenses/gpl-2.0.html'" target="showframe">
<td align=center valign=middle><img border="0" src='images/gplv2.gif' alt="http://www.gnu.org/licenses/gpl-2.0.html" ></td></a>


<br>
<br>
<?php $output = `sudo -u root -S cat ../version`;?>
<FONT COLOR=#000000 size=1 ><b>Console </FONT><FONT COLOR=#0000ff size=1 ><?php echo $output ;?></FONT></b>



</center>
</body>
</html>
