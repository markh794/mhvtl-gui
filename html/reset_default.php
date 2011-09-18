<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

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
<div id="load" style="display:none;"><img src="images/loading.gif" border=0></div>


<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Restting ALL MHVTL Configurations :</b></pre>";
?>


<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 <FONT COLOR="#FFFFFF"></FONT> 
<TR>
 <TD>

<?php
$VAR = $_REQUEST['ckmed'];
$run = shell_exec('sudo -u root -S ../scripts/reset_default.sh ' .$VAR );
echo "<pre><FONT COLOR=#FFFFFF>$run</FONT></pre>";
?>

<form action="start_mhvtl.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" style="color: #008000" value="Start MHVTL"></form>


</TD>
</TR>
</TABLE>


<FORM ACTION="setup.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>

</body>
</html>
