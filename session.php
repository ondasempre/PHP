<?php

// open session
session_start();


if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
}

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	$navbar = "1";
	$logindisplay = "0";
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

}

?>


<html>
<head>
	<title></title>
</head>
<body>

 	<form action="session.php" method="POST">
  	User:<br>
  	<input type="text" name="username" value="username">
  	<br>
  	Password:<br>
  	<input type="password" name="password" value="password">
  	<br><br>
  	<input type="submit" value="Submit">
	</form> 

</body>
</html>





<?php

	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		echo " ";
		echo "<b>Nome utente:</b> " . $username . " <br />";
		echo "<b>Password utente:</b> " . $password . " <br />";
	}

?>





