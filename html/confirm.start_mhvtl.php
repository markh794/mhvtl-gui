<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Daemons</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/activity.png" >
</td>
</tr>

<?php
echo "<pre><b>Start MHVTL Daemons:</b></pre>";
?>
<br>


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
<form action="start_mhvtl.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value="   Yes   ">
</form>
</td>

<td>
<form action="frame_a.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #008000" value="   Cancel   ">
</form>
</td>
</table>

</body>
</html>
