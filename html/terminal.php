<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>SSH/Telnet Terminal</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b> SSH/Telnet Terminal:</b></pre>";
?>

    <applet CODEBASE="."
            ARCHIVE="jta26.jar"
            CODE="de.mud.jta.Applet" 
            WIDTH=590 HEIGHT=400>
            <param name="config" value="applet.conf">
    </applet>
<pre><b> Copyright Matthias L. Jugel and Marcus Meissner : </b>http://javassh.org/space/start</pre>

</body>
</html>
