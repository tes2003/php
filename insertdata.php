 <?php
$servername = "localhost";
$username = "23mca056";
$password = "2146";
$dbname = "23mca056";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="INSERT INTO `student`(`name`, `course`, `age`)
VALUES ('Anna','mca',20)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
