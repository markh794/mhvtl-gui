<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Activity</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/activity.png" >
</td>
</tr>


<?php
$output = shell_exec('sudo -u root -S uptime');
echo "<pre>MHVTL $output</pre>";
?>
<br>

<META HTTP-EQUIV="refresh" CONTENT="30">


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


<table border="0" >
<td>
<FORM ACTION="frame_a.php"> <INPUT TYPE=SUBMIT style="color: #000000" VALUE="Return"></FORM>
<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT style="color: #FF0000" VALUE="Close"></a>
</td>

<td>
<form action="activity.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value=" Refresh ">
</form>
</td>

</table>


<div id="load" style="display:none;"><img src="images/loading.gif" border=0></div>
<?php
$cmdout = shell_exec ('sudo -u root -S rm -f /tmp/mhvtl.act.tmp; sudo -u root -S lsscsi -g | grep mediumx | cut -d"/" -f2,3 | while read each; do  sudo -u root -S lsscsi -g | grep /$each$; sudo -u root -S mtx -f /$each status | sudo -u root -S grep "Loaded"; done >>/tmp/mhvtl.act.tmp');
$ACTIVITY=`sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx`;
$cmdout2 = shell_exec ('sudo -u root -S cat /tmp/mhvtl.act.tmp| grep -v mediumx | while read eachone; do echo "<img src=images/animated_dot.gif align=top />" $eachone ; done');
$output1=`if [ ! -z "$ACTIVITY" ] ; then echo "$cmdout2" ;fi`;
$output2=`if [ ! -z "$ACTIVITY" ] ; then sudo -u root -S cat /tmp/mhvtl.act.tmp;else echo STATUS: IDLE;fi`;
echo "<pre><b>$output1</b></pre>";
echo "<pre><b>$output2</b></pre>";
?>

</body>
</html>
