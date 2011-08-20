<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">

<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Control Center</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/disk.png" >
</td>
</tr>

<?php
echo "<pre><b>Hardware Information :</b></pre>";
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

<table border="2">

<td>
<form action="hw_cpu.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #FF0000" value=" CPU " >
</form>
</td>

<td>
<form action="hw_ram.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #AF7817" value=" RAM " >
</form>
</td>

<td>
<form action="hw_disk.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #000000" value=" DISK " >
</form>
</td>


<td>
<form action="hw_nic.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #008000" value="  NIC   ">
</form>
</td>

<td>
<form action="hw_hba.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" class="sameSize" style="color: #7D0552" value="  HBA   ">
</form>
</td>


</table>

<br>
Disk info :
<?php
$output = shell_exec('sudo -u root -S lsscsi -g | grep disk');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";

$output = shell_exec('sudo -u root -S fdisk -l| grep ^Disk');
echo "<pre><p style=\"text-align:left;\"><b>$output</b></p></pre>";
?>

</body>
</html>
