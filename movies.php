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
 
 $query="SELECT `name` FROM `filestorage` WHERE `sharing`='public' AND `filetype`='application/pdf'" ;
$query_run=mysql_query($query);
while($row=mysql_fetch_row($query_run))
{echo $row[0];
echo "<a href='dncdownload.php?nama=".$row[0]."'>download</a> ";
echo '.<br \>.';
}
?>