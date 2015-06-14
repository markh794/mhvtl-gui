<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI target framework (stgt)</font></b>
<hr width="100%" size=1 color="blue">

<script type="text/javascript">
function toggleMe(a){
  var e=document.getElementById(a);
  if (!e)
	return true;
  if (e.style.display=="none") {
    e.style.display="block"
  } else {
    e.style.display="none"
  }
  return true;
}
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
<div id="load" style="display:none;"><img src="images/loading.gif" border=0></div>

<tr>
<td align=left valign=middle>
<img src="images/scsi_target.png" >
</td>
</tr>

<?php
echo "<pre><b>Automatic Configuration :</b></pre>";
?>


<?php

$filename = '../ENABLE_TGTD_SCSI_TARGET';

if (!file_exists($filename)) {
	echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
	exit("<FONT COLOR='#000000'><b>STGT Disabled</b></FONT>");
}

?>



<TABLE BORDER=2 align="left" valign="middle" >
<tr>
<td>
<br>
<b><font color=red size=2>

(1) Create Targets/LUNS on All Devices<br>
(2) Enable All Inititator Client Hosts<br>
(3) Save Configuration<br>

</b></font>
<br>
</tr>

<td>
<form action="stgt.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #000000" value=" Cancel "></form>
<form action="create.auto.iscsi.config.stgt.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #FF0000" value=" Start "></form>
</td>

</table>
</body>
</html>
