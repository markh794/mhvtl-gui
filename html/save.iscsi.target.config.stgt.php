<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/starting_mhvtl.png" >
</td>
</tr>



<?php
echo "<pre>SAVE STGT Targets:</pre>";
?>
<br>

<?php
include_once "common.php";

exit_if_tgtd_not_eabled();
?>


<div style="overflow:auto; height:330px;width:600px;">
<TABLE BORDER=1 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>

<?php
$output = shell_exec('sudo -u root ../scripts/config_stgt.sh save');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>

</TD>
</TR>
</TABLE>
<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>
</div>

</body>
</html>
