<?php
$conn = mysqli_connect("localhost", "root", "", "ccis");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['FormID'])) {
    $FormID = $_GET['FormID'];
    $sql = "SELECT * FROM enrolled WHERE FormID = $FormID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Enrollee</title>
            <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
      
        form {
            width: 20%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size:25px;
            
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size:25px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size:25px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
        </head>
        <body>
             
            <form action="update_enrollee.php" method="POST">
                <input type="hidden" name="FormID" value="<?php echo $row['FormID']; ?>">
                Last Name: <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>"><br>
                First Name: <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>"><br>
                Student No.: <input type="text" name="StudentNo" value="<?php echo $row['StudentNo']; ?>"><br>
                Gender: <input type="text" name="Gender" value="<?php echo $row['Gender']; ?>"><br>
                Year: <input type="text" name="Year" value="<?php echo $row['Year']; ?>"><br>
                Course: <input type="text" name="Course" value="<?php echo $row['Course']; ?>"><br>
            Section: <input type="text" name="Section" value="<?php echo $row['Section']; ?>"><br>

                <input type="submit" value="Update">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Enrollee not found";
    }
} else {
    echo "Enrollee ID not provided";
}

$conn->close();
?>
