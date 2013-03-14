<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Operation</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/operation.png" >
</td>
</tr>


<?php
echo "<pre><b>Load Map :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="vtlcmd.load.map.confirm.again.php">

<?php $libid = $_REQUEST['libid'];?>
Library Selected <FONT COLOR=blue><?php echo $libid;?></FONT>
<br>
Select External Media:
<?php
$libidn = `echo $libid| cut -d ":" -f1`;
echo $output = `sudo -u root -S ../scripts/build_html_opts.sh lvvault $libidn`;
?>

<input type="text" readonly hidden value="<?php echo $libid;?>" name="libid" />

<br>
<input type="submit"></form><FORM ACTION="vtlcmd.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
