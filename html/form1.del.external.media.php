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
echo "<pre><b>Delete External media :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="del.external.media.php">

<?php $libid = $_REQUEST['libid'];?>
Library Selected <FONT COLOR=blue><?php echo $libid;?></FONT>
<br>
Select External Media:
<?php
$VAR = `echo $libid| cut -d ":" -f1`;
echo $output = `sudo -u root -S ../scripts/build_html_opts.sh lvvault $VAR`;
?>
<input TYPE=HIDDEN name="libid" value=<?php echo $libid;?> READONLY >
<input type="submit" style="color: #FF0000" VALUE=" Delete " ></form>
<FORM ACTION="setup.php"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
