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
<br>


<?php
echo "<pre>Display STGT Targets:</pre>";
?>
<br>
<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>

<?php
$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$output = shell_exec("sudo -u root -S $TGTADMCMD --lld iscsi --op show --mode target >/tmp/search.stgt.target");
$file = "/tmp/search.stgt.target";
$result = file_get_contents($file);
echo "<pre><FONT COLOR=#FFFFFF>$result</FONT></pre>";
?>

</TD>
</TR>
</TABLE>

<?php
sleep(1);
?>

<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT VALUE=" Close "></a>


</body>
</html>
