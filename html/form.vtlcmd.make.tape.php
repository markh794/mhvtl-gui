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

<?php $libid = `sudo -u root -S ../scripts/build_html_opts.sh libid`; ?>
Select Library <?php echo $libid;?>
Enter Count <input name="ctc" type="number" value="" MAXSIZE="3" required >
<INPUT TYPE=SUBMIT VALUE="Create"></form>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>

</body>
</html>
