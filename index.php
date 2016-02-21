 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="basic.css"/>
 </head>
 <body>
 </body>
 </html>
 
 <?php
   require  'conf.inc.php';
  require 'core.inc.php';
     
  if(loggedin())
  { header('Location:upload.php');
	   
	  
  }
  else
  require 'loginform.inc.php';
	 
  
 
   
	?>
  
 