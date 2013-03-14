<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>

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
                                        $http.open('GET', 'act.test.php' + '?' + new Date().getTime(), true);
                                        $http.send(null);
                                }

                        }

                </script>
                <script type="text/javascript">
                        setTimeout(function() {Ajax();}, 1000);
                </script>

<div style="overflow:auto;height:170px;width:625px;font-size:normal" id="ReloadThis" >
<?php include 'act.test.php' ; ?>
</div>

</body>
</html>
