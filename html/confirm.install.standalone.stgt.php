<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Install stgt</font></b>
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
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b>Installing stgt :</b></pre>";
?>


<table border="0" valign="middle" >

<td>
<form action="install.standalone.stgt.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #FF0000" value=" Start ">
</form>
</td>

<td>
<FORM ACTION="stgt.php">
<INPUT TYPE=SUBMIT class="sameSize" style="color: #000000" VALUE=" Cancel ">
</FORM>
</td>
</table>

** Please Note: This is a standalone setup. This will not install anything on your system.<br> 
It will only download the stgt bianires via git pull into ~stgt.git directory and then compile it.<br>
All stgt commands used will be run directcly from that directry.<br>

</body>
</html>
