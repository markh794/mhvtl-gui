<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b>Live Update via GitHub :</b><font color=red><b> *** Git + Online Access Required</b></font></pre>";
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
<table border="1" align="left" valign="middle" >

<td>
<form action="live_update.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #000000" value=" Check for updates now  " >
</form>
</td>
</table>

</body>
</html>
