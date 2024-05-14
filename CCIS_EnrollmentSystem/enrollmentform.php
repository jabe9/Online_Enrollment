<?php
 
$servername = "localhost";
$username = "root";  
$password = "";  
$database = "ccis";  

$conn = new mysqli($servername, $username, $password, $database);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO enrolled (LastName, FirstName, StudentNo, Gender, Year, Course, Section) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisiss", $LastName, $FirstName, $StudentNo, $Gender, $Year, $Course, $Section);
 
$LastName = $_POST['LName'];
$FirstName = $_POST['FName'];
$StudentNo = $_POST['StudentNum'];
$Gender = $_POST['Gender'];
$Year = $_POST['CourseYear'];
$Course = $_POST['Course'];
$Section = $_POST['Section'];

if ($stmt->execute()) {
    echo "<script>alert('New record inserted successfully');</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
