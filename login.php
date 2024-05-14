<?php

if(isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $correct_username = 'admin';
    $correct_password = 'spcfccis';

   
    if($username === $correct_username && $password === $correct_password) {
       
        header('Location: admin_dashboard.php');
        exit;
    } else {
    
        header('Location: login.html?error=1');
        exit;
    }
} else {
    
    header('Location: login.html');
    exit;
}
?>
