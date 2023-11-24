<?php
$servername = "localhost";
$username = "23mca056";
$password = "2146";
$dbname = "23mca056";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
   die("connection failed: " . $conn->connect_error);
}
$x=$_POST['name'];
$y=$_POST['course'];
$z=$_POST['age'];
$sql="INSERT INTO `student`(`name`, `course`, `age`)VALUES('$x','$y','$z')";

if($conn->query($sql)===TRUE){
  echo "New record created successfully";
}else{
 echo"Error:".$sql."<br>".$conn->error;
 }
 $conn->close();
 ?>
