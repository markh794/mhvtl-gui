<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Change Tape Density:</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="density_tape.php">

<?php $libid = $_REQUEST['libid'];?>
Library Selected <FONT COLOR=blue><?php echo $libid;?></FONT>
<input TYPE=HIDDEN name="libid" value=<?php echo $libid;?> READONLY >
<br>

<?php $PCL = $_REQUEST['tape'];?>
Tape Selected <FONT COLOR=blue><?php echo $PCL;?></FONT>
<input TYPE=HIDDEN name="tape" value=<?php echo $PCL;?> READONLY >
<br>

<?php $DENSITY = $_REQUEST['density'];?>
Tape Density Selected <FONT COLOR=blue><?php echo $DENSITY;?></FONT>
<input TYPE=HIDDEN name="density" value=<?php echo $DENSITY;?> READONLY >
<br>

<input type="submit">
</form>
<FORM ACTION="edit_tape.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
