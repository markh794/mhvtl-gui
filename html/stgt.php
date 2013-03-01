<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI Target System</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/scsi_target.png" >
</td>
</tr>


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

<?php
echo "<pre><b><FONT COLOR=black >iSCSI Target via SCSI target framework :<a href=# ONCLICK=parent.frames[1].location.href='http://stgt.sourceforge.net' target=showframe>TGT</a></FONT></b></pre>";
?>

<table border="1" >
<td>
<?php
$filename = '/usr/sbin/tgtadm';if (file_exists($filename))
{
$output = shell_exec('sudo -u root -S /usr/sbin/tgtadm -V');
echo "<img src='images/green_light.png' ALIGN='left' /><b><FONT COLOR=#000000 >TGT:</FONT><FONT COLOR=green> $output </FONT></b> ";
}
else
{
echo "<img src='images/red_light.png' align=left /><b><FONT COLOR=#000000 size=2>TGT: </><FONT COLOR=red> NO</FONT></b><td><form action='confirm.install.stgt.php' method=post onsubmit=return ray.ajax() ><input TYPE=submit style='color: #0000FF' value=' Install ' ></form></td>";

}
?>

</td>

<td>

<?php
$STGTPROCS = shell_exec('ps -ef | egrep "tgtd"|egrep -v egrep');
if ( '' == $STGTPROCS )
{
echo "<img src='images/red_light.png' align=left /><b><FONT COLOR=#000000 size=2>STATE: </><FONT COLOR=red> STOPPED </FONT></b><td><form action='confirm.start_stgt.php' method=post onsubmit=return ray.ajax()><input TYPE=submit style='color: #0000FF;font-weight: bold' value=' Start ' ></form></td>";
}
else
{
echo "<img src='images/green_light.png' align=left /><b><FONT COLOR=#000000 size=2>STATE:</><FONT COLOR=green> RUNNING </FONT></b><td><form action='confirm.stop_stgt.php' method=post onsubmit=return ray.ajax()><input TYPE=submit style='color: #FF0000;font-weight: bold' value=' Stop '></form></td>";
}
?>
</td>

<td>
<?php $filename = '../ENABLE_TGTD_SCSI_TARGET';if (file_exists($filename))
{
echo "<img src='images/green_light.png' ALIGN='left' /><b><FONT COLOR=#000000 size=2> STATUS:</><FONT COLOR=#347C17> Enabled </FONT></b>"; 
echo "<td><form action='disable_stgt_scsi_target.php' method=post onsubmit=return ray.ajax()><input TYPE=submit style='color: #FF0000;font-weight: bold' value=' Disable '></form></td>";

}
else
{
echo "<img src='images/red_light.png' ALIGN='left' /><b><FONT COLOR=#000000 size=2> STATUS:</><FONT COLOR=#FF0000> Disabled </FONT></b>";
echo "<td><form action='enable_stgt_scsi_target.php' method=post onsubmit=return ray.ajax()><input TYPE=submit style='color: #347C17;font-weight: bold' value=' Enable '></form></td>";
}
?>
</td>


<td>
<form action="stgt.php" method="post" onsubmit="return ray.ajax()"><input TYPE="submit" style="color: #000000;font-weight: bold" value=" Refresh " ></form>
</td>

</table>
<br>
<table border="0" ALIGN="left" >
<tr>
<td>
<form action="form.create.auto.iscsi.config.stgt.php" method="post" >
<input TYPE="submit" class=sameSize style="color: #FF0000" value=" Quick Start "></form>
</tr>
</td>

<tr>
<td>
<form action="view.tgt.conf.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Conf.File "></form>
</td>
</tr>

<tr>
<td>
<form action="display_stgt.initiator.cons.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Sessions "></form>
</td>
</tr>
</table>


<table border="0" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display_stgt.target.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000A0" value=" Targets "></form>
</td>
</tr>



<tr>
<td>
<form action="form.create.iscsi.target.stgt.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" New "></form>
</td>
</tr>

<tr>
<td>
<form action="form.remove.iscsi.target.stgt.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Delete "></form>
</td>
</tr>
</table>

<table border="0" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display_stgt.lun.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000A0" value=" LUNS "></form>
</td>
</tr>

<tr>
<td>
<form action="form.select.iscsi.target.stgt.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" New "></form>
</td>
</tr>


<tr>
<td>
<form action="form.select.iscsi.lun.stgt.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Delete "></form>
</td>
</tr>
</table>

<table border="0" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display.tgt.initiator.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000A0" value=" Initiators "></form>
</td>
</tr>



<tr>
<td>
<form action="form.add.stgt.iscsi.clients.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Enable "></form>
</td>
</tr>


<tr>
<td>
<form action="form.remove.stgt.iscsi.clients.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Disable "></form>
</td>
</tr>
</table>

</table>


</body>
</html>
