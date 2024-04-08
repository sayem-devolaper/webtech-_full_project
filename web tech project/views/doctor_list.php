<?php
session_start();
include_once '../controller/database_connection.php';
include_once '../controller/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor List</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-size:50px;
        }
        .footer{
            margin-top:281px;
            height:30px;
            background-color:#5B6D7B;
            
        }
        .footer>p{
            text-align:center;
            color:white;
        }
    </style>
</head>
<body>
    <center>
        <h1 id="heading">Doctor's Arena</h1>
        <h2>Doctor List</h2>
        <table>
            <form method="POST" action="#">
                <tr>
                    <td> <input name="search" type="text" id="search"> </td>
                    <td><input name="submit" type="submit" value="Search"></td>
                </tr>
            </form>
        </table>
        <a href="../index.php" style="text-decoration:none;border:1px solid black;">Back</a>
    </center>
    
    
</body>
<footer>
    <div class="footer">
    <p>&copy; All right reserved Doctor's Arena</p>
    </div>
</footer>
</html>