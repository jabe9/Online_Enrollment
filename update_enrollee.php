<?php
$conn = mysqli_connect("localhost", "root", "", "ccis");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['FormID'])) {
    $FormID = $_POST['FormID'];
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $StudentNo = $_POST['StudentNo'];
    $Gender = $_POST['Gender'];
    $Year = $_POST['Year'];
    $Course = $_POST['Course'];
    $Section = $_POST['Section'];

    $sql = "UPDATE enrolled SET LastName='$LastName', FirstName='$FirstName', StudentNo='$StudentNo', Gender='$Gender', Year='$Year', Course='$Course', Section='$Section' WHERE FormID=$FormID";

    if ($conn->query($sql) === TRUE) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Success</title>
            <script>
                window.onload = function() {
                    alert("Enrollee updated successfully");
                    window.location = "edit_enrollee.php?FormID=<?php echo $FormID; ?>";  
                }
            </script>
        </head>
        <body>
        </body>
        </html>
        <?php
    } else {
        echo "Error updating enrollee: " . $conn->error;
    }
} else {
    echo "Enrollee ID not provided";
}

$conn->close();
?>
