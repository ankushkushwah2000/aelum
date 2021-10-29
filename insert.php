<?php
include('dbcon.php');
$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['date'];
$d =$_POST['your'];
$data ="INSERT into aelum(name,email,date,about_yourself) value('$a','$b','$c','$d')";
// echo "$data";
mysqli_query($con,$data);
header('location:display.php'); 
?>