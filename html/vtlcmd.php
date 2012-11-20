<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Library Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/operation.png" >
</td>
</tr>

<?php
echo "<pre><b> Library Operator Panel :</b></pre>";
?>


<table border="0" >
<table border="0" ALIGN="left" style="margin-left:10px;" >

<tr>
<td>
<form action="form.vtlcmd.open.map.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Open Map "></form>
</tr>
</td>

<tr>
<td>
<form action="form.vtlcmd.load.map.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Load Map "></form>
</tr>
</td>

<tr>
<td>
<form action="form.vtlcmd.close.map.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Close Map "></form>
</tr>
</td>

<tr>
<td>
<form action="form.vtlcmd.list.map.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" List Map "></form>
</tr>
</td>

<tr>
<td>
<form action="form.vtlcmd.empty.map.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Empty Map "></form>
</tr>
</td>
</table>

<table border="0" ALIGN="left" style="margin-left:10px;" >
<tr>
<td>
<form action="form1.import.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Import "></form>
</tr>
</td>

<tr>
<td>
<form action="form1.export.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Export "></form>
</tr>
</td>

<tr>
<td>
<form action="form.move.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Move Cart "></form>
</tr>
</td>

<tr>
<td>
<form action="form.mount.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Load Drive "></form>
</tr>
</td>

<tr>
<td>
<form action="form.unmount.tape.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Unload Drive "></form>
</tr>
</td>
</table>


<table border="0" ALIGN="left" style="margin-left:10px;" >
<tr>
<td>
<form action="form.vtlcmd.exit.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Power Off "></form>
</td>
</tr>


<tr>
<td>
<form action="form.robot.status.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Show Library "></form>
</td>
</tr>


<tr>
<td>
<form action="form.drive.status.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Show Drive "></form>
</td>
</tr>


<tr>
<td>
<form action="form.vtlcmd.offline.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Vary Offline "></form>
</td>
</tr>

<tr>
<td>
<form action="form.vtlcmd.online.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" Vary Online "></form>
</td>
</tr>

</table>


</table>

<!--
<table border="0" ALIGN="left" style="margin-left:10px;" >

<tr>
<td>
<form action="form.display.external.media.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value=" External Media "></form>
</td>
</tr>


<tr>
<td>
<form action="form.vtlcmd.empty.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value="  "></form>
</td>
</tr>

<tr>
<td>
<form action="form.vtlcmd.empty.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value="  "></form>
</td>
</tr>

<tr>
<td>
<form action="form.vtlcmd.empty.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value="  "></form>
</td>
</tr>

<tr>
<td>
<form action="form.vtlcmd.empty.php" method="post" ><input TYPE="submit" class=sameSize style="color: #000000" value="  "></form>
</td>
</tr>

</table>
-->

</body>
</html>
