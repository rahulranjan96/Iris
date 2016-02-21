<html>
 <head>
 <link rel="stylesheet" type="text/css" href="basic.css"/>
 </head>
 <body>

 
 </body>
 </html>
<?php
if(isset($_POST['submit'])){
 if($_POST['submit']){
 if(isset($_POST['username']) && isset($_POST['password']))
 {
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $password_hash=md5($password);
	 if(!empty($username) && !empty($password))
	 {
		 $query="SELECT `id` FROM `user` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password_hash)."'";
	 if($query_run=mysql_query($query))
	 {
		 $query_num_rows=mysql_num_rows($query_run);
		 if($query_num_rows==0)
			 echo 'Invalid user name or Password';
		else if($query_num_rows==1)
		{
			$user_id=mysql_result($query_run,0,'id');
			 $_SESSION['user_id']=$user_id;
			 header('Location: index.php');
		}
		
	 }
	 }
 }
 }
}
 if(isset($_POST['register'])){
 if($_POST['register'])
 {
	 
	 header('Location: register.php');
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
         height:170px;
         position:absolute;
         top:200px;
         left:500px;
         }
  h1 {
      color:#ff3300;
      text-align:center;
      text-decoration:underline;
      font-size:100px;
      font-weight:bold;
     }
	  
      </style></head>
</body>
 <h1>Login Form:</h1>
	  <form action="<?php echo $current_file; ?>" method="POST">
<strong>Username:</strong><input type="text" name="username"><strong><br \> <br> Password:</strong><input type="password" name="password"><br>
<br><input type="submit" value="Log in" name="submit" id="login">
<br><br><br>
<strong>New User</strong> </br>
<div id="register"><input type="submit" value="Register" name="register" id="register"></div>
</form>
</body>
</html>
 