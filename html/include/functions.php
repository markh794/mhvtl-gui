<?php
/**
 * Common Functions for mhvtl-gui
 * Date: 05/11/14
 * Time: 19:57
 */


function HttpRedirect($url,$seconds=0 )
{
 $PROTO = "http://";
 if (! empty ( $_SERVER ['HTTPS'] )) {
  $PROTO = "https://";
 }

 $serverbase=$PROTO.$_SERVER['HTTP_HOST'];
 $fullurl=$serverbase.$url;
 ?>
 <script type="text/javascript">
            window.location.href = "<?php  echo $fullurl;?>"
        </script>
 <h3>Redirecting to <a href='".<?php  echo $fullurl;?>."'><?php  echo $url;?></a></h3>
<?php
die; // no more output needed
}

?>