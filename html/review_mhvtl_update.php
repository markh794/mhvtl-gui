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
echo "<pre><b> Review MHVTL Updates :</b></pre>";
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
$CURR = `sudo -u root -S vtlcmd -V| cut -d "-" -f3`;
$output = `sudo -u root -S ../scripts/review_mhvtl_update.sh`;
echo "<pre><b><FONT COLOR=#FFFFFF>Updates since $CURR <br>$output</FONT></b></pre>";
?>

</td>
</TR>
</table>

<br>
<FORM ACTION="live_update.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
