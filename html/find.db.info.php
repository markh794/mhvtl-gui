<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SCSI Target System</font><b>
<hr width="100%" size=1 color="blue">



<style type="text/css">
.sameSize {
width:100%;
height:120%;
padding:0%;
margin:0%;
text-align: center;
font: bold small 'trebuchet ms',helvetica,sans-serif;
}
body {
font-size: 100%;
font-family: arial, verdana, helvetica, sans-serif;
}
</style>

<?php echo "<pre><b>Library and Drive Database :</b></pre>"; ?>

<table border="3">

<?php
$output = shell_exec('cat ../mhvtl.cfg.db');
echo "<pre>$output</pre>";
?>

</table>

<a href="Javascript:close();" ><INPUT TYPE=SUBMIT VALUE=" Close " ></a>

</body>
</html>
