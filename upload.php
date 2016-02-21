
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="basic.css"/>
 </head>
 <body>
 <script src="shortcut.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/submitbutton.js"></script>
  
 </body>
 </html>
<?php
require 'conf.inc.php';
require 'core.inc.php';
 require 'clock.php';
	  $username=getuserfield('firstname');
	  $surname=getuserfield('surname');
	 // echo $surname;
	  echo 'logged in.<a href="logout.php">logout</a>';
 $name=$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 $type=$_FILES['file']['type'];
 $sharing=$_POST['sharing'];
   
  $tmp_name=$_FILES['file']['tmp_name'];
  
if(isset($name) && !empty($name)){
	 
 
$location='uploads/';
if(move_uploaded_file($tmp_name,$location.$name))
{
	echo 'uploaded';
	$prefix = "uploads/";
	echo "<a href='dncdownload.php?nama=".$name."'>download</a> ";echo '.<br \>.';
//echo "<a href='$prefix/$name'>localhost/series/form/uploads/$name </a>";
}
$link='localhost/series/form/uploads/'.$name.'';
$query="INSERT INTO `filestorage` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($sharing)."','".mysql_real_escape_string($link)."','".mysql_real_escape_string($type)."','".mysql_real_escape_string($size)."')";
$query_run=mysql_query($query);
if($query_run)
{
	$query="SELECT `name` FROM `filestorage` WHERE `sharing`='public' AND `filetype`='".$type."'";
$query_run=mysql_query($query);
$count=0;
while($row=mysql_fetch_row($query_run))
{
	if($count<5){
similar_text($name,$row[0],$percent);
if($percent>90)
{
	echo $row[0];
	echo "<a href='dncdownload.php?nama=".$row[0]."'>download</a> ";
echo '.<br \>.';
$count++;
 
}
}
}
}
 


}
?>
<html>
<head>
<style type="text/css">
 form {
         <--border:5px solid #ff3300;
         color:#ff3300;
         font-size:20px;
         font-weight:bold;
         width:400px;
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
	  <body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input id="file" type="file" name="file"><br></br>
Choose your sharing type:
 <select name="sharing">
  <option value="private">Private</option>
  <option value="public">Public</option>
  <option value="unlisted">Unlisted</option>
   
</select><br /><br />
<input id="submit" type="submit" value="upload" disabled="disabled">
<input id="public_files" type="button" value="View public files" name="public_files" onclick="document.location.href='show.php';">
<input id="my_files" type="button" value="View my files" name="my_files" onclick="document.location.href='show_my_files.php';">

</form>
</body>