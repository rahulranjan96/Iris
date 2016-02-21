 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="basic.css"/>
 </head>
 <body>
 <a class="aa" href="movies.php"><img style="position:absolute; TOP:35px; LEFT:100px;width:200px;height:200px;"  src="pictures/movie.PNG" /></a>
 <a  class="aa" href="books.php"> <img style="position:absolute; TOP:35px; LEFT:500px;width:200px;height:200px;" src="pictures/book.PNG"   /></a>
  <a  class="aa" href="songs.php"> <img style="position:absolute; TOP:35px; LEFT:900px;width:200px;height:200px;" src="pictures/song.JPG"  /></a>
<a  class="aa" href="softwares.php"><img style="position:absolute; TOP:300px; LEFT:300px;width:200px;height:200px;" src="pictures/softwares.JPG"   /> </a>  
  <a  class="aa" href="tvseries.php"> <img style="position:absolute; TOP:300px; LEFT:700px;width:200px;height:200px;" src="pictures/tvseries.JPG"   /></a>
 </body>
 </html>
<?php
require 'conf.inc.php';
require 'core.inc.php';

/*$query="SELECT `name` FROM `filestorage` WHERE `sharing`='public'";
$query_run=mysql_query($query);
while($row=mysql_fetch_row($query_run))
{echo $row[0];
echo "<a href='dncdownload.php?nama=".$row[0]."'>download</a> ";
echo '.<br \>.';
}*/
?>

<form method="post" action="show.php">

<input type="button" name="back" value="Back" onclick="document.location.href='upload.php';"/>

</form>