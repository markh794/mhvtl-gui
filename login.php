<html>
<head><title>MHVTL Web Console</title></head>
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="html/styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">

<tr>
<td>
<img src="html/images/mhvtl.png" ALIGN="center" ><br><b><FONT COLOR=#000000 size=5>Linux Virtual Tape Library System</FONT></b>
</td>
</tr>

<br>
<a href="http://sites.google.com/site/linuxvtl2/"><b><font size=1>Developed by Mark Harvey & Community (markh794@gmail.com)<b></a>
<br>
Web Console GUI built by (nia) <a href="http://mhvtl-community-forums.966029.n3.nabble.com/">mhvtl-community-forums</a>
<hr width="100%" size=1 color="blue">
<br><br>
<TABLE BORDER=1 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT>
<TR>
<TD>
<div style="overflow:auto;height:250px;width:400px;" >



<?php
$testsudo = shell_exec('scripts/check_before_use.sh testsudo');
$CMD = shell_exec('cat /tmp/test.required.components.testsudo | grep -v "PASS" | sort -u|wc -l');
if ($CMD != 0 )
{
echo "<pre><FONT COLOR=#FFFF00>ERROR: sudo</FONT></pre>";
echo "<pre><FONT COLOR=#FFFF00>$testsudo</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Modify /etc/sudoers</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Add this line: example :</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>apache ALL=(ALL) NOPASSWD: ALL  </FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Remove Defaults requiretty </FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Disable selinux </FONT></pre>";
echo "<pre><b><a style='text-decoration:none; color:#FFFF00;' href='README'>See README</a></b></pre>";
exit;
}

$testmhvtl = shell_exec('scripts/check_before_use.sh testmhvtl');
$CMD = shell_exec('cat /tmp/test.required.components.testmhvtl | grep -v "PASS" | sort -u|wc -l');
if ($CMD != 0 )
{
echo "<pre><FONT COLOR=#FFFFFF>ERROR: mhvtl</FONT></pre>";
echo "<pre><FONT COLOR=#FFFF00>$testmhvtl</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>You need to install MHVTL first</FONT></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Please visit MHVTL development site:</FONT></pre>";
echo "<pre><b><a style='text-decoration:none; color:#FFFF00;' href='http://sites.google.com/site/linuxvtl2/'>http://sites.google.com/site/linuxvtl2/ </a></b></pre>";

echo "<pre><b><a style='text-decoration:none; color:#00FF00;' href='http://mhvtl-linux-virtual-tape-library-community-forums.966029.n3.nabble.com/MHVTL-Getting-Started-td1663811.html'>For additional help, click here </a></b></pre>";
echo "<pre><FONT COLOR=#FFFFFF>Exiting ....</FONT></pre>";
exit;
}



echo "<br><br>";
$MHVTLHOST = shell_exec('sudo -u root -S hostname');
echo "<b><FONT COLOR=#FFFFFF><center> $MHVTLHOST </center></FONT></b>";
$mhvtlrel = `sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2`;
echo "<pre><center><b><FONT COLOR=#FFFF00>MHVTL Release $mhvtlrel</FONT></b></center></pre>";
$output = shell_exec('scripts/check_before_use.sh testmhvtl');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testlsscsi');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testmt');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testmtx');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";

$CMD = shell_exec('cat /tmp/test.required.components.* | grep -v "PASS" | sort -u|wc -l');
if ($CMD == 0 ) 
{
include 'go.php' ;
} 
else 
{
echo "<pre><FONT COLOR=#FF0000><b>Error: Required Components Not Verified </b></FONT></pre>";
echo "<pre><b><a style='text-decoration:none; color:#FFFF00;' href='README'>See README</a></b></pre>";
echo "<pre><b><a style='text-decoration:none; color:#00FF00;' href='http://mhvtl-linux-virtual-tape-library-community-forums.966029.n3.nabble.com/'>Click here to get help</a></b></pre>";
}

$output = `cat version`;
echo "<pre><center><FONT COLOR=#2B60DE ><b>Console Version $output</b></FONT></center></pre>";

$CLEANUP = shell_exec('sudo -u root -S rm -f  /tmp/test.required.components.*');
?>

</div>
</TR>
</TD>
</table>

<br><br>
<?php echo "<pre><b><FONT size=2><a href='http://www.gnu.org/licenses/gpl-2.0.html'>GNU GENERAL PUBLIC LICENSE : GPLv2 : Copyright (C) 2011. All rights reserved.</a></FONT></b></pre>";?>
</center>
</body>
</html>
