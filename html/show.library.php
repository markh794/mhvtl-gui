<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Library Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b>Show Library :</b></pre>";
?>

<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>
<div style="overflow:auto;height:250px;width:400px;">
<?php
$VAR = $_REQUEST['clibid'];
$output = `sudo -u root -S cat /etc/mhvtl/library_contents.$VAR| grep -v ^#`;
echo "<pre><FONT COLOR=#FFFF00>$output</FONT></pre>";
?>
</div>
</TR>
</TD>
</TABLE>

<hr width="100%" size=1 color="blue">
<FORM ACTION="vtlcmd.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
