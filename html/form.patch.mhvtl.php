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
<img src="images/tab_right.png" ALIGN="left" ><form enctype="multipart/form-data" action="uploader.php" method="POST"><b><font color=red>MHVTL </font></b>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<input name="uploadedfile" type="file" />
<input type="submit" value=" Upload " />
</form>
</td>
</tr>



<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.view.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" View "></FORM>

<br>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.install.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Apply "></FORM>

<br>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.uninstall.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Undo "></FORM>
<br>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.delete.mhvtl.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Delete "></FORM>
<br>


<hr width="100%" size=1 color="blue">
</td>
</tr>


<!--
<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><form enctype="multipart/form-data" action="tgt_uploader.php" method="POST"><b><font color=blue>TGT </font></b>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<input name="uploadedfile1" type="file" />
<input type="submit" value=" Upload " />
</form>
</td>
</tr>

<tr>
<td>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.install.tgt.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch2`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Apply "></FORM>
<br>
<img src="images/tab_right.png" ALIGN="left" ><form action="form.patch.uninstall.tgt.php" method="post" >
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh patch2`; ?>
Select Patch <?php echo $cmd;?><input TYPE="submit" style="color: #000000" value=" Undo "></FORM>
<br>
<hr width="100%" size=1 color="blue">
</td>
</tr>
-->



</table>
<FORM ACTION="tools.php"><INPUT TYPE=SUBMIT VALUE="Return"></FORM>
<form action="form.patch.mhvtl.php" method="post" ><input TYPE="submit" style="color: #000000" value=" Refresh "></form>
</body>
</html>
