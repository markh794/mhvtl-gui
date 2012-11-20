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
  if(!e)return true;
  if(e.style.display=="none"){
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
echo "<pre><b>MHVTL Test:</b></pre>";
?>


<TABLE BORDER=2 >
<tr>
<td>
<br>
<b><font color=red size=5>
* * * Warning : data loss may occur * * * <br>
This test will mount random tapes and write to them.<br>
Tapes will get overwritten .. Be careful with this ...<br>
Do not proceed if any of your tapes already have data that you need.<br>
<br></b></font>
<b><font color=blue size=2>
The following steps will take place:<br>
<br>
(1) Create small Test file using dd under tmp<br> 
(2) Mount random tapes on all devices<br>
(3) Perform Write using Tar<br>
(4) Perform Read using Tar verify<br>
(5) Dismount tapes on all devices<br>
(6) Report Status<br>

</b></font>
<br>
</tr>

<tr>
<td>
<form action="tools.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #000000" value=" Cancel "></form>
<form action="quick.test.mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" style="color: #FF0000" value=" Start "></form>
</td>
</tr>
</table>
</body>
</html>
