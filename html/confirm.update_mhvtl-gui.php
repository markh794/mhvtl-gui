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
echo "<pre><b>MHVTL Console Update :</b></pre>";
?>
<br>
<hr width="100%" size=1 color="blue">

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

<table border="0" >

<td>
<form action="update_mhvtl-gui.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value=" Update ">
</form>
<td>

<td>
<form action="update.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #000000" value="  Cancel  ">
</form>
<td>

</table>

</body>
</html>



</body>
</html>
