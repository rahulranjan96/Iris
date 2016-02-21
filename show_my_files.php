 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="basic.css"/>
 </head>
 <body>
 </body>
 </html>
<?php
require 'conf.inc.php';
require 'core.inc.php';
$username=getuserfield('firstname');
$query="SELECT `name` FROM `filestorage` WHERE `username`='".$username."'";
$query_run=mysql_query($query);
while($row=mysql_fetch_row($query_run))
{echo $row[0] ;
echo "<a href='dncdownload.php?nama=".$row[0]."'>download</a> ";
echo '.<br \>.';
}

?>

<form method="post" action="show_my_files.php">

<input type="button" name="back" value="Back" onclick="document.location.href='upload.php';"/>

</form>