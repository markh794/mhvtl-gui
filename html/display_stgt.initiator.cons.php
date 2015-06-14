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

<div style="overflow:auto; height:300px;width:650px;">
<TABLE BORDER=1 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>
<?php

$filename = '/usr/sbin/tgtadm';
if (file_exists($filename)) {
	$TGTADMCMD = '/usr/sbin/tgtadm';
} else {
	$TGTADMCMD = '../stgt.git/usr/tgtadm';
}

// $output = ` sudo -u root -S $TGTADMCMD --lld iscsi --op show --mode target | awk 'BEGIN{RS="LUN" } /Target/' >/tmp/display.stgt.init `;
// $result = shell_exec('CHECK=`grep "Initiator: iqn" /tmp/display.stgt.init`;if [ -z "$CHECK" ]; then echo Connections = 0 ; else cat /tmp/display.stgt.init; fi');

$output = `sudo -u root -S $TGTADMCMD --lld iscsi --op show --mode target | awk '/Target|Initiator|IP/'  >/tmp/display.stgt.init `;

$result = shell_exec('CHECK=`grep "Initiator: iqn" /tmp/display.stgt.init`;if [ -z "$CHECK" ]; then echo 0:Sessions ; else cat /tmp/display.stgt.init; fi');

echo "<pre><FONT COLOR=#FFFFFF>$result</FONT></pre>";
?>



<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>
<form action="display_stgt.initiator.cons.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #0000FF" value=" Refresh ">
</form>

</TD>
</TR>
</TABLE>
</div>


</body>
</html>
