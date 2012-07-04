<html>
<head><title>MHVTL Web Console </title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">


<img src=images/gear_red.png ALIGN=top><a ONCLICK="parent.frames[1].location.href='about_console.php'" target="showframe" ><b><FONT COLOR=purple> Web Console</FONT></b> </a>

<hr width="100%" size=1 color="blue">

<tr><td align=center valign=middle><img src="images/mhvtl.png" ></td></tr>

<pre>
<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<b><FONT COLOR=#000000 >$output</FONT></b>";
?>
</pre>



<table border="1">

<tr>
<td>
<INPUT TYPE="button" VALUE="   Start Menu   " class="sameSize" style="color: #0000FF" ONCLICK="parent.frames[1].location.href='frame_a.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" Operation " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='vtlcmd.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Configuration " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='setup.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" iSCSI Target " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='stgt.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE="Live Update" class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='update.php'" target="showframe">
</td>
</tr>

<tr>
<td>
<INPUT TYPE="button" VALUE=" System " class="sameSize"  style="color: #000000" ONCLICK="parent.frames[1].location.href='system.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE=" Support " class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='help.php'" target="showframe">
</td>
</tr>


<tr>
<td>
<INPUT TYPE="button" VALUE="Exit" class="sameSize" style="color: #000000" ONCLICK="parent.frames[1].location.href='logout.php'" target="showframe">
</td>
</tr>

</table>

<?php
$gui_ver = `cat ../version`;
echo "<pre><b><FONT COLOR=purple >Web Console<br></FONT><FONT COLOR=black>$gui_ver </FONT></b></pre>";
echo "<td align=center valign=middle><img src='images/gplv2.gif' ></td>"
?>



</center>

</body>
</html>
