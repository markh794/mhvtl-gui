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
echo "<pre><b>Delete External media :</b></pre>";
?>

<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
 <TD>


<?php 
$libid = $_REQUEST['libid'];
$LIBN = ` echo $libid | cut -d ":" -f1`;
$TAPE = $_REQUEST['vmedia'];

$run = system("sudo -u root -S ../scripts/delete_external_media.sh $TAPE $LIBN ");
echo "<pre>$run</pre>";
?>

</TD>
</TR>
</TABLE>
</FORM><FORM ACTION="form.del.external.media.php"><INPUT TYPE=SUBMIT VALUE=" Return "></FORM>
</FORM><FORM ACTION="setup.php"><INPUT TYPE=SUBMIT VALUE=" Exit "></FORM>

</body>
</html>
