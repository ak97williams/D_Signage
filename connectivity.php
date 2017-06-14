<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); $db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
	session_start();	//starting session for login page
	if(!empty($_POST['user']))	//checking the username from sign in, is it empty 
	{
		$query = mysqli_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
		$row = mysqli_fetch_array($query) or die(mysqli_error());
		if(!empty($row['userName']) AND !empty($row['pass']))
		{
			$_SESSION['userName'] = $row['pass'];
			echo "SUCCESSFUL LOGIN TO USER PAGE";
		}
	else
	{
		echo "WRONG ID OR PASSWORD (or both)";
	}
}	
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>