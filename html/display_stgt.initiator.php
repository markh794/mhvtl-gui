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
echo "<pre>TGT Active Connections:</pre>";
?>

<div style="overflow:auto; height:330px;width:600px;">
<TABLE BORDER=1 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>
<?php
$filename = '/usr/sbin/tgtadm';if (file_exists($filename)){$TGTADMCMD = '/usr/sbin/tgtadm';}else{$TGTADMCMD = '../stgt.git/usr/tgtadm';}
$output = shell_exec("sudo -u root -S $TGTADMCMD --lld iscsi --op show --mode target | grep Initiator >/tmp/display.stgt.init");
$result = shell_exec('CHECK=`grep "Initiator: iqn" /tmp/display.stgt.init`;if [ -z "$CHECK" ]; then echo 0:Sessions ; else egrep -n3 "Initiator" /tmp/display.stgt.init; fi');
echo "<pre><FONT COLOR=#FFFFFF>$result</FONT></pre>";
?>
</TD>
</TR>
</TABLE>

<form action="display_stgt.initiator.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #0000FF" value=" Refresh ">
</form>

<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>
</div>

</body>
</html>
