<html>
<head><title>MHVTL Web Console</title></head>
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="html/styles.css" rel="stylesheet" type="text/css">
<body>
<center>

<?php
 include_once('html/include/functions.php');

ob_start(); 
ob_flush();
@session_start();

if(isset($_POST['login'])) {
	$password = $_POST['pswd'];

	if (!file_exists(dirname(__FILE__).'/html/include/password.php')) {
		// password file does not exists lets create a default one
		$adminpassword='mhvtl';
		$FILE_TEMPLATE_PASSWORD="<?php // DEFAULT ADMIN PASSWORD \$adminpassword='$adminpassword'; ?>";

		file_put_contents(dirname(__FILE__).'/html/include/password.php', $FILE_TEMPLATE_PASSWORD);
		// Since it's the FIRST time we run we show the password on html
		echo "<font color='white'>Default password is " . $adminpassword;
		echo "<br> please change it on <br>";
		echo dirname(__FILE__) . "/html/include/password.php<br>";
	}

require_once(dirname(__FILE__).'/html/include/password.php');

	if ( $password == $adminpassword ) {
		$_SESSION['phplogin'] = true;
		HttpRedirect(dirname($_SERVER['PHP_SELF']).'/html/mhvtl.php');
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
