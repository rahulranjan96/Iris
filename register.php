
<html>
<head> <link rel="stylesheet" type="text/css"  href="basic.css"/>
</head>
<body>
</body>
</html>
<?php 
 
require 'core.inc.php';
require 'conf.inc.php';
if(!loggedin())
   { 
	if(isset($_POST['username']) &&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname']) &&isset($_POST['email']))
		{   $email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$password_again=$_POST['password_again'];
			$password_hash=md5($password);
			$firstname=$_POST['firstname'];
			$surname=$_POST['surname'];
			if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname) && !empty($email))
			{
				if($password!=$password_again)
				{
					echo 'password donot match';
				}
				else if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
				{
					echo "Enter a valid email id";
				}
				 
else{
						 if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
    echo "Your password is strong.";
$query ="SELECT `username` FROM `user` WHERE `username`='$username'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1)
{
	echo 'username exists';
}
else{

$query="INSERT INTO `user` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."','".mysql_real_escape_string($email)."')";
if($query_run=mysql_query($query))
{
	header('Location: register_success.php');
}
else{
	echo 'sorry';
}
}
}
else {
echo "Your password is not safe.";}
}				 
			}
		else{
			echo 'all fields are required';
		}
	}
	
	?>
	<html>
<head>
<style type="text/css">
form {
   border:5px solid #ff3300;
   color:#ff3300;
   font-size:20px;
   font-weight:bold;
   width:250px;
   height:420px;
   padding:20px;
   position:absolute;
   top:110px;
   left:500px;
     }
 h1 {
   color:#ff3300;
   text-align:center;
   text-decoration:underline;
   font-size:60px;
   font-weight:bold;
  }
</style>
</head>
<body>
<h1>Registration Form:</h1>
	<form action="register.php" method="post">
	Username:<br> <input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;}?>" placeholder="Username"><br><br>
	Password:<br> <input type="password" name="password" placeholder="[a-z],[A-Z],[0-9],symbols"> <br><br>
	Re-enter Password:<br> <input type="password" name="password_again"><br><br>
	First name:<br><input type="text" name="firstname" maxlength="40" value ="<?php if(isset($firstname)){echo $firstname ;}?>" placeholder="First name"><br><br>
	Surname:<br><input type="text" name="surname" maxlength="40" value="<?php if(isset($surname)){echo $surname;}?>" placeholder="Surname"><br><br>
	Email ID:<br><input type="text" name="email" value="<?php if(isset($email)) {echo $email;}?>" placeholder="Email Address"><br><br>
	<input type="submit" value="Register"><br>
	</form>
	</body>
	</html>
 	
<?php
	}
else  
echo 'youre logged in';
 
?>