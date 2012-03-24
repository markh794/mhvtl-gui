<html>
<head><title>MHVTL Web Console</title></head>
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="html/styles.css" rel="stylesheet" type="text/css">
<body>
<center>
<hr width="100%" size=10 color="blue">

<tr>
<td>
<img src="html/images/mhvtl.png" ALIGN="center" ><br><b><FONT COLOR=purple size=5>Linux Virtual Tape Library System</FONT></b>
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

<?php $output = `uname -a`; echo "<pre><b><FONT COLOR=#FFFFFF> $output</FONT></b></pre>"; ?>
<?php $output = `sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2`; echo "<pre><center><b><FONT COLOR=#FFFF00>MHVTL Release $output</FONT></b></center></pre>"; ?>

<?php
$output = `cat version`;
echo "<pre><center><FONT COLOR=#2B60DE ><b>Web Console Release $output</b></FONT></center></pre>";
?>


<?php

/* $output = shell_exec('scripts/check_before_use.sh testphp');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>"; */
$output = shell_exec('scripts/check_before_use.sh testsudo');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testmhvtl');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testlsscsi');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testmt');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testmtx');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
/*
$output = shell_exec('scripts/check_before_use.sh testsysstat');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testgit');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh teststgt');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
$output = shell_exec('scripts/check_before_use.sh testscst');echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
*/

$CMD = shell_exec('cat /tmp/test.required.components.* | grep -v "PASS" | sort -u|wc -l');

if ($CMD == 0 ) 
{
include 'go.php' ;
} 
else 
{
echo "<pre><FONT COLOR=#FF0000><b>Error: Required Components Not Verified </b></FONT></pre>";
}
?>


</TR>
</TD>
</table>
<br><br>
<?php echo "<pre><b><FONT size=2><a href='http://www.gnu.org/licenses/gpl-2.0.html'>GNU GENERAL PUBLIC LICENSE : GPLv2 : Copyright (C) 2011. All rights reserved.</a></FONT></b></pre>";?>
</center>
</body>
</html>
