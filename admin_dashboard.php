<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
 
     <div class="chart-container">
        <canvas id="enrolleesPieChart"></canvas>
    </div>

    <script>
      
        var ctx = document.getElementById('enrolleesPieChart').getContext('2d');
        var enrolleesPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Freshman', 'Sophomore', 'Junior', 'Senior'],
                datasets: [{
                    label: 'Enrollees by Year',
                    data: [1,2,3,4],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'right'
                }
            }
        });
    </script>
</body>
</html>

    