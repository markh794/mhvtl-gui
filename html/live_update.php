<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b> Live Update :</b></pre>";
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

<table border="1" align="top" valign="middle" >

<td>
<?php
$mhvtlver = shell_exec('sudo -u root -S ../scripts/check_update.sh >/tmp/check_update.sh.tmp');
$OUTPUT=`sudo -u root -S cat /tmp/check_update.sh.tmp`;
echo "<pre><b> $OUTPUT</b></pre>";
?>
</td>

<?php
$IFNEEDUPDATE = shell_exec('sudo -u root -S grep "is up-to-date" /tmp/check_update.sh.tmp');
if ( '' == $IFNEEDUPDATE )
{
echo "<td><form action=confirm.update_mhvtl.php method=post onsubmit=return ray.ajax() ><input TYPE=submit class=sameSize value=Update ></form></td>";
}
else
{
echo "<td><pre><img src=images/green_light.png align=top /></pre></td>";
}
?>


<tr>

<td>
<?php
$mhvtlguiver = shell_exec('sudo -u root -S ../scripts/check_gui.update.sh >/tmp/check_gui.update.sh.tmp');
$OUTPUT=`sudo -u root -S cat /tmp/check_gui.update.sh.tmp`;
echo "<pre><b> $OUTPUT</b></pre>";
?>
</td>

<?php
$IFNEEDUPDATE = shell_exec('sudo -u root -S grep "is up-to-date" /tmp/check_gui.update.sh.tmp');
if ( '' == $IFNEEDUPDATE )
{
echo "<td><form action=confirm.update_mhvtl-gui.php method=post onsubmit=return ray.ajax() ><input TYPE=submit class=sameSize value=Update ></form></td>";
}
else
{
echo "<td><pre><img src=images/green_light.png align=top /></pre></td>";
}
?>

</table>
</body>
</html>
