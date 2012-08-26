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
echo "<pre><b>Create additional data tapes :</b></pre>";
?>

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



<form method="post" action="vtlcmd.make.tape.php" onsubmit="return ray.ajax()" >

<?php $libid = $_REQUEST['libid'];?>
<?php $libidn = `echo $libid| cut -d ":" -f1`; ?>
Library Selected <?php echo $libid;?>
<input TYPE=HIDDEN name="libid" value=<?php echo $libid;?> READONLY >
<br>
Enter Count <input name="ctc" type="number" value="" MAXSIZE="3" required >
<?php echo $output = `sudo -u root -S ../scripts/build_html_opts.sh tape $libidn`; ?>

<INPUT TYPE=SUBMIT VALUE="Create"></form>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
