<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">

<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Monitor</font><b>
<hr width="100%" size=1 color="blue">
<style type="text/css"></style>

<tr>
<td align=left valign=middle>
<img src="images/monitoring.png" >
</td>
</tr>
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
                                        $http.open('GET', 'mon.php' + '?' + new Date().getTime(), true);
                                        $http.send(null);
                                }

                        }

                </script>
                <script type="text/javascript">
                        setTimeout(function() {Ajax();}, 1000);
                </script>

<div style="overflow:auto" id="ReloadThis" >
<?php
include 'mon.php' ;
?>
</div>
</body>
</html>
