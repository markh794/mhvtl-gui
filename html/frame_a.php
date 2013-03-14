<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<center>

<hr width="100%" size=10 color="blue">

<b><font color=purple size=3>MHVTL Web Console</font></b>

<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/tux.png" >
</td>
</tr>


<script language="JavaScript" type="text/javascript">
<!-- Copyright 2005, Sandeep Gangadharan -->
<!-- For more free scripts go to http://www.sivamdesign.com/scripts/ -->
<!--
if (document.getElementById) {
document.writeln('<style type="text/css"><!--')
document.writeln('.texter {display:none} @media print {.texter {display:block;}}')
document.writeln('//--></style>') }

function openClose(theID) {
if (document.getElementById(theID).style.display == "block") { document.getElementById(theID).style.display = "none" }
else { document.getElementById(theID).style.display = "block" } }
// -->
</script>


<script type="text/javascript">
var ray={
ajax:function(st)
        {
                this.show('load');
        },
show:function(el)
        {
                this.getID(el).style.display='';
        },
getID:function(el)
        {
                return document.getElementById(el);
        }
}
</script>



<pre><FONT COLOR=#008000 size=5 ><b>MHVTL: A Linux Virtual Tape Library System</b></FONT></pre>


<pre>
<?php
$output = shell_exec('sudo -u root -S vtlcmd -V| cut -d "-" -f1,3| cut -d ":" -f2| cut -d " " -f2');
echo "<FONT COLOR=blue size=3>MHVTL Release:</FONT> $output";
?>
</pre>



<?php
$MHVTLHOST = shell_exec('sudo -u root -S hostname');
echo "<pre><FONT COLOR=blue size=3>Server Host: </FONT>$MHVTLHOST</pre>" ;
$serverIP = $_SERVER["SERVER_ADDR"];
echo "<pre><FONT COLOR=blue size=3>IP Address: </FONT>$serverIP</pre>";

$osrel = shell_exec('sudo -u root -S ../scripts/os_release.sh');
echo "<pre><FONT COLOR=blue size=3>Platform: </FONT>$osrel</pre>" ;
?>


<?php 
$output = `sudo -u root -S cat ../version`;
echo "<pre><FONT COLOR=blue size=3>Console Release: </FONT>$output</pre>" ;
?>

<div onClick="openClose('a1')" style="cursor:hand; cursor:pointer"><b><FONT COLOR=red size=2>*** Read Trademark Disclaimer ***</FONT></b></div>
<div id="a1" class="texter">
<pre>
 Product names, logos, brands, and other trademarks featured or referred to within
 MHVTL Web Console are the property of their respective trademark holders.
 These trademark holders are not affiliated with MHVTL Web Console,
 nor they sponsor or endorse any of our solutions.
</pre>
<br>
</div>

<br>


<div onClick="openClose('a2')" style="cursor:hand; cursor:pointer"><b><FONT COLOR=red size=2>*** Read SOFTWARE Disclaimer ***</FONT></b></div>
<div id="a2" class="texter">
<pre>
 This SOFTWARE PRODUCT is provided by me "as is" and "with all faults".
 I make no representations or warranties of any kind concerning the safety,
 suitability, lack of viruses, inaccuracies, typographical errors, or other
 harmful components of this SOFTWARE PRODUCT.
 There are inherent dangers in the use of any software, and you are solely
 responsible for determining whether this SOFTWARE PRODUCT is compatible
 with your equipment and other software installed on your equipment.
 You are also solely responsible for the protection of your equipment and 
 backup of your data, and I will not be liable for any damages you may suffer
 in connection with using, modifying, or distributing this SOFTWARE PRODUCT.
</pre>
</div>

<br>
<td>
<form action='mhvtl.php' method='post' onsubmit='return ray.ajax()'>
<input TYPE='submit' style='color: #000000' value='Continue' >
</td>

</center>
</body>
</html>
