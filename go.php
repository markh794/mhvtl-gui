<html>
<head><title>MHVTL Web Console</title></head>
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="html/styles.css" rel="stylesheet" type="text/css">
<body>

<center>
<hr width="100%" size=10 color="blue">
<tr>
<td align=left valign=middle>
<img src="html/images/mhvtl.png" >
</td>
</tr>
<br>
<tr>
<td align=left valign=middle>
<FONT SIZE=6 COLOR=purple >Linux Virtual Tape Library </FONT>
</td>
</tr>

<hr width="100%" size=1 color="blue">

<br>
<a href="http://sites.google.com/site/linuxvtl2/"><b><font size=2>Developed by Mark Harvey & Community (markh794@gmail.com)<b></a>
<br>
Web Console built by (nia) <a href="http://mhvtl-community-forums.966029.n3.nabble.com/">mhvtl-community-forums</a>
<br>
<?php
$output = `cat version`;
echo "<pre><FONT COLOR=green size=3 ><b>Console Version $output</b></FONT></pre>";
?>
<br>
<th><a href="http://www.gnu.org/licenses/gpl-2.0.html">License: GPL v2</a></th>
<br>

<?php session_start();
if(isset($_POST['login'])) { $password = $_POST['pswd'];

if ( $password == "mhvtl" ) { //Replace with your password
  $_SESSION['phplogin'] = true;
    header('Location: html/mhvtl.php');
    exit;
   } else {
?>
  <script type="text/javascript">
 <!--
 alert('Wrong Password, Please Try Again')
 //-->
 </script>
<?php
  }
   }
?>
<br>
<b>Enter Password </b>
<br>
<form method="post" action="">
<input type="password" name="pswd">
<br><input type="submit" name="login" value="Login">
</form>

</br>
</center>

</body>
</html>
