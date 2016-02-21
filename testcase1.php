<?php 
 $var_1 = 'heplomango'; 
$var_2 = 'heplomang'; 

similar_text($var_1, $var_2, $percent); 

echo $percent; 
// 27.272727272727 

similar_text($var_2, $var_1, $percent); 
 
echo $percent; 
if($percent>90)
	echo "hello";
// 18.181818181818 
?>