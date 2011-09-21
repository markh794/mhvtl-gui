<html>
<head><title>MHVTL Web Console</title></head>
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="html/styles.css" rel="stylesheet" type="text/css">
<body>
<center>

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
<FONT COLOR=green><b>Enter Password </b></FONT>
<br>
<form method="post" action="">
<input type="password" name="pswd">
<br><input type="submit" name="login" value="Login">
</form>

</br>
</center>

</body>
</html>
