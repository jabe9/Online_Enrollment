<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Forms</title>
    <link rel="stylesheet" href="admin_freshman.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="header">
    <div class="user-icon">
        <i class="fas fa-user-circle"></i>
    </div>
    <nav class="navigation">
        <ul>
            <li class="active"><i class="fas fa-chart-bar"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_dashboard.php">Dashboard</a></li>
            <li><i class="fas fa-calendar-alt"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_enrolled.php">Enrollees</a></li>
            <li><i class="fas fa-user"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_freshman.php">Freshman</a></li>
            <li><i class="fas fa-user"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_sophomore.php">Sophomore</a></li>
            <li><i class="fas fa-user"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_junior.php">Junior</a></li>
            <li><i class="fas fa-user"></i><a href="http://localhost/CCIS_EnrollmentSystem/admin_senior.php">Senior</a></li><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <li><i class="fas fa-sign-out-alt"></i><a href="http://localhost/CCIS_EnrollmentSystem/home.html">Logout</a></li>

        </ul>
    </nav>
</div>

<div class="enrollment-list">
    <h2>1st Year Enrollees</h2>
    <table>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Student No.</th>
            <th>Gender</th>
            <th>Year</th>
            <th>Course</th>
            <th>Section</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "ccis");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM enrolled WHERE Year = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['StudentNo'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['Year'] . "</td>";
                echo "<td>" . $row['Course'] . "</td>";
                echo "<td>" . $row['Section'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>

</body>
</html>
