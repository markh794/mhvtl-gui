<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI Target System</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/scsi_target.png" height="64" width="192" >
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
echo "<pre><b><FONT COLOR=black >iSCSI Target via Linux SCSI target framework:<a href=# ONCLICK=parent.frames[1].location.href='http://stgt.sourceforge.net' target=showframe class='image-link' >tgt </a></FONT></b></pre>";
?>


<?php $filename = '../ENABLE_TGTD_SCSI_TARGET';
if (!file_exists($filename))
{
echo "<FONT COLOR=#FF0000>iSCSI Target (tgt): Disabled  </FONT>";
echo "<FORM ACTION=enable_stgt_scsi_target.php><INPUT TYPE=SUBMIT VALUE=Enable></FORM>";
exit(0);
}
?>


<table border="0" >

<?php
$filename = '/usr/sbin/tgtadm';if (file_exists($filename))
{
$STGTPROCS = shell_exec('ps -ef | egrep "tgtd"|egrep -v egrep');
if ( '' == $STGTPROCS )
{
echo "<img src='images/red_light.png' align=center /><b><FONT COLOR=#000000 size=2> SCSI target framework (tgt) : </><FONT COLOR=red> Stopped </FONT></b><form action='confirm.start_stgt.php' method=post onsubmit=return ray.ajax()><input TYPE=submit style='color: #008000;font-weight: bold' value=' Start ' ></form>";
exit (0);
}
else
{
}

}
else
{
echo "<img src='images/red_light.png' align=center /><b><FONT COLOR=#000000 size=2> SCSI target framework (tgt) : </><FONT COLOR=red> Not installed  </FONT></b><form action='confirm.install.stgt.php' method=post onsubmit=return ray.ajax() ><input TYPE=submit style='color: #0000FF' value=' Install ' ></form>";
exit(0);
}
?>


<TABLE BORDER='1' CELLSPACING='4' CELLPADDING='4' style="background-color: #000000" BORDERCOLOR=grey >
<TR>
<TD>
<div style="overflow:auto;height:30px;width:565px;" id="ReloadThis" >
<?php
include 'tgt-fdisplay.php' ;
?>
</div>
</table>
<br>




<table border="1" ALIGN="left" >


<tr>
<td>
<form action="form.create.auto.iscsi.config.stgt.php" method="post" >
<input TYPE="submit" class=sameSize style="color: #008000" value=" Quick Start "></form>
</tr>
</td>


<tr>
<td>
<form action="display_stgt.initiator.cons.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Connections " ></form>
</td>
</tr>



<tr>
<td>
<form action="view.tgt.conf.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" targets.conf "></form>
</td>
</tr>


</table>



<table border="1" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display_stgt.target.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000FF" value=" Targets "></form>
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


<table border="1" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display_stgt.lun.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000FF" value=" LUNS "></form>
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


<table border="1" ALIGN="left" style="margin-left:15px;" >
<tr>
<td>
<form action="display.tgt.initiator.php" method="post" ><input TYPE="submit" class=sameSize style="color: #0000FF" value=" Initiators "></form>
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

</body>
</html>
