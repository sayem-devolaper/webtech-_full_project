<?php
if(!isset($_SESSION['userId'])) {
    header('location: ./views/login_page.php?m=Need to login');
    exit;
}

?>