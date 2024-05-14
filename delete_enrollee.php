<?php
$conn = mysqli_connect("localhost", "root", "", "ccis");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['FormID'])) {
    $FormID = $_GET['FormID'];
    $sql = "DELETE FROM enrolled WHERE FormID = $FormID";

    if ($conn->query($sql) === TRUE) {
         
        echo "<script>alert('Enrollee deleted successfully');</script>";
    } else {
        echo "Error deleting enrollee: " . $conn->error;
    }
} else {
    echo "Enrollee ID not provided";
}

$conn->close();
?>
