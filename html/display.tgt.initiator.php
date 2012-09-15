<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3> LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b> Display TGT Inittiators :</b></pre>";
?>


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

<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 </FONT>
<TR>
<td>


<?php
$output = `sudo -u root -S ../scripts/build_html_opts.sh iscsiclient2 `;
echo "<pre><b><FONT COLOR=#FFFFFF>$output</FONT></b></pre>";
?>

</td>
</TR>
</table>

<br>
<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
