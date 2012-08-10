<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3> LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b> Download MHVTL :</b></pre>";
?>


<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>

<div style="overflow:auto;height:200px;width:600px;">
<?php
$download = shell_exec('sudo -u root -S ../scripts/download_mhvtl.sh 2>&1 | tee /tmp/download_mhvtl.sh.tmp');
$OUTPUT=`sudo -u root -S cat /tmp/download_mhvtl.sh.tmp`;
echo "<pre><FONT COLOR=#FFFFFF>$OUTPUT</FONT></pre>";
$cmd=`sudo -u root -S rm -f /tmp/download_mhvtl.sh.tmp`;
?>
</div>
</TR>
</TD>
</TABLE>

<FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"> </FORM>

</body>
</html>
