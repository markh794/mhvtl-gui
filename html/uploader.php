<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
echo "<pre><b> Apply Patches :</b></pre>";
?>


<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>


<table border="0">
<td>
<div style="overflow:auto;height:75px;width:400px;">

<?php
$target_path = "../mhvtl.git/patches/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "<pre><B><FONT COLOR=#FFFFFF>Patch: ".  basename( $_FILES['uploadedfile']['name']).
    "</FONT><br> <FONT COLOR=#00FF00> *** Uploaded Successfully *** </FONT></B></pre>";

$FILE = $_REQUEST['uploadedfile'];
} else{
    echo "<pre><B><FONT COLOR=#FFFF00>An error occured !<br>Please try again.</FONT></B></pre>";
}
?>

</div>
</td>
</table>

</TR>
</TD>
</TABLE>

<FORM ACTION="form.patch.mhvtl.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
