<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
echo "<pre><b> Apply Patches :</b></pre>";
?>


<table border="0" >


<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<input name="uploadedfile" type="file" />
<input type="submit" value=" Upload " />
</form>
<hr width="100%" size=1 color="blue">
</td>
</tr>



<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.install.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Apply "></FORM>
<br>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.uninstall.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Undo "></FORM>


<br>
<hr width="100%" size=1 color="blue">
</td>
</tr>



</table>
<br>
<FORM ACTION="help.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>
