<?php
if (isset($_POST['submit'])) {
    $username = $_POST['User_Name'];
    $password = $_POST['Password'];
    $query = "SELECT * FROM user WHERE `user_name` = '$username' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 0) {
        header('location: ../views/login_page.php?m=No username found');
        exit;
    }

    $row = mysqli_fetch_array($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['userId'] = $row['id'];
        header('location: ../index.php');
    } else{
        header('location: ../views/login_page.php?m=Incorrect password');

    }
       
}

if(isset($_SESSION['userId'])) {
    
    header('location: ../index.php');
    exit;
}
?>