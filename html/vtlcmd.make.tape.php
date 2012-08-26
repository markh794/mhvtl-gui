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



<hr width="100%" size=1 color="blue">

<?php
$LIBID = $_REQUEST['libid'];
$LIBIDN = `echo $LIBID | cut -d ":" -f1|awk '{print $1}'`;
$COUNT = $_REQUEST['ctc'];
$run1 = `sudo -u vtl -S ../scripts/make_more_library_contents "$LIBIDN" "$COUNT" `;
$save = `sudo -u vtl -S cp -f /etc/mhvtl/library_contents.$LIBIDN /etc/mhvtl/library_contents.$LIBIDN.save.$$`;
$run2 = `sudo -u vtl -S cp -f /tmp/library_contents.tmp.add.more.tapes.in /etc/mhvtl/library_contents.$LIBIDN`;
$output = `sudo -u vtl -S grep -v ^# /tmp/library_contents.tmp.add.more.tapes.in.tmp`;
$output2 = `sudo -u vtl -S cat /tmp/library_contents.tmp.add.more.tapes ; sudo -u vtl -S rm -f /tmp/library_contents.*`;
echo "<FONT COLOR=blue><b> ========= LIBRARY CONFIGURATION UPDATED ================ </b></FONT>";
echo "<pre>$output<FONT COLOR=red>$output2</FONT></pre>";
echo "<FONT COLOR=blue><b> ========= LIBRARY CONFIGURATION UPDATED ================ </b></FONT>";
?>

<hr width="100%" size=1 color="blue">
<br>
<b><FONT COLOR="red">*** You must restart mhvtl daemons to utilize the new media ***</FONT></b><br>
<br>
<FORM ACTION="confirm.stop-start_mhvtl.php"> <INPUT TYPE=SUBMIT style="color: #FF0000" VALUE="Restart"> </FORM>
<FORM ACTION="setup.php"> <INPUT TYPE=SUBMIT style="color: #0000FF" VALUE="Finish"> </FORM>
<FORM ACTION="form.vtlcmd.make.tape.php"> <INPUT TYPE=SUBMIT style="color: #0000FF" VALUE="Add More"> </FORM>

</body>
</html>
