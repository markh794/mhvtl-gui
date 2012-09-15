<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Support</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td>
<img src="images/help.png" >
</td>
</tr>

<?php
echo "<pre><b> Send Feedback :</b></pre>";
?>
<hr width="100%" size=1 color="blue">

Please complete form :
<br><br>

<form method="post" action="emailfeedback.php" method="post" >
Your Name: <input name="name" type="text" value="Optional" required >
Email: <input name="email" type="text" value="Required" required ><br>
<br>
Your feedback or comments:
<br>
<textarea name="comments" rows="15" cols="60" required ></textarea>
<br>
<input type="submit" >
</form>

</body>
</html>
