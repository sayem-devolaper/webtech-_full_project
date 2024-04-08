<?php
session_start();
include_once './controller/database_connection.php';
include_once './controller/session.php';

$uid = $_SESSION['userId'];
$query = "SELECT * FROM user WHERE `id` = '$uid' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <style>
.home_page_style{
    text-align: center;
    font-size: x-large;
    
}
    </style>
</head>
<body>
    <h1 style="text-align:center;">Doctor Home Page</h1>
<div class="home_page_style">


    <button><a style="text-decoration: none;color: black;" href="views/profile.php">Profile</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/patient_profile.php">Patient Profile</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/patient_list.php">Patient List</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/staff_list.php">Staff List</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/doctor_list.php">Doctor List</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/diagnostician_list.php">Diagnostician List</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/emergency_update_notice.php">Update Schedule Notice</a></button>
    <button><a style="text-decoration: none;color: black;" href="views/log_out.php" class="button">Log out</a></button>

</div>
<br>
</body>
</html>