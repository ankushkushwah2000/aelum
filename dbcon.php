<?php 
$con =mysqli_connect('localhost','root','','company');
if ($con) {
	 echo"connect";
}
else{
	echo "not connect";
}



?>