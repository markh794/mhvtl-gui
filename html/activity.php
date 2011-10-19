<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Activity</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/activity.png" >
</td>
</tr>


<?php
$output = shell_exec('sudo -u root -S uptime');
echo "<pre>MHVTL $output</pre>";
?>


<META HTTP-EQUIV="refresh" CONTENT="30">


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


<table border="1" >

<td>
<form action="activity.php" method="post" onsubmit="return ray.ajax()">
<input TYPE="submit" type="submit" class="sameSize" style="color: #0000FF" value=" Refresh ">
</form>
</td>

<td>
<FORM ACTION="frame_a.php"> <INPUT TYPE=SUBMIT class="sameSize" style="color: #000000" VALUE=" Return "></FORM>
</td>

<td>
<a title="Close Window" href="Javascript:close();"><INPUT TYPE=SUBMIT class="sameSize" style="color: #FF0000" VALUE=" Close "></a>
</td>


</table>

<script type="text/javascript">

                        function Ajax()
                        {
                                var
                                        $http,
                                        $self = arguments.callee;

                                if (window.XMLHttpRequest) {
                                        $http = new XMLHttpRequest();
                                } else if (window.ActiveXObject) {
                                        try {
                                                $http = new ActiveXObject('Msxml2.XMLHTTP');
                                        } catch(e) {
                                                $http = new ActiveXObject('Microsoft.XMLHTTP');
                                        }
                                }

                                if ($http) {
                                        $http.onreadystatechange = function()
                                        {
                                                if (/4|^complete$/.test($http.readyState)) {
                                                        document.getElementById('ReloadThis').innerHTML = $http.responseText;
                                                        setTimeout(function(){$self();}, 1000);
                                                }
                                        };
                                        $http.open('GET', 'act.php' + '?' + new Date().getTime(), true);
                                        $http.send(null);
                                }

                        }

                </script>
                <script type="text/javascript">
                        setTimeout(function() {Ajax();}, 1000);
                </script>
<div id="ReloadThis" >
<?php
include 'act.php' ;
?>
</div>
</body>
</html>
