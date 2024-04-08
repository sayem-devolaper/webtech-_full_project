
<?php
session_start();
include_once '../controller/database_connection.php';
include_once '../controller/registration.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
     
        .form{
            background-color:#00B0D6;
            width:300px;
            height:400px;
            margin:10px 0;
            padding:20px 20px;
            color:white;
        }
        .heading{
            font-size:50px;
            color:#302953;
            text-transform:uppercase;
            font-family:arial;
        }
        .signIn{
            text-decoration:none;
            color:white;
        }
        
</style>
</head>
<body>
    <center>
        <h1 class="heading">Doctor's Arena</h1>
        <div class="form">
            <table>
                <h2>Registration</h2>
                <form method="POST" action="">
                    <tr>
                        <td> <label for="Name ">Name : </label> </td>
                        <td><input name="Name" type="text" id="Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Email ">Email : </label> </td>
                        <td><input name="Email" type="text" id="Email"></td>
                    </tr>
                    <tr>
                        <td> <label for="Phone">Phone : </label> </td>
                        <td><input name="Phone" type="text" id="Phone"></td>
                    </tr>
                    <tr>
                        <td> <label for="User_Name ">User Name : </label> </td>
                        <td><input name="User_Name" type="text" id="User_Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password ">Password : </label> </td>
                        <td><input name="Password" type="password" id="Password"></td>
                    </tr>
                    <tr>
                        <td> <label for="Confirm_Password ">Confirm Password : </label> </td>
                        <td><input name="Confirm_Password" type="password" id="Confirm_Password"></td>
                    </tr>
                    <tr>
                        <td> <label>Gender : </label> </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="DoB ">Date of Birth : </label> </td>
                        <td><input name="DoB" type="date" id="DoB"></td>
                    </tr>
                    <tr>
                        <td> <label for="Address ">Address : </label> </td>
                        <td><input name="Address" type="text" id="Address"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" name="Reset"></td>
                        <td> <input type="submit" name="Submit"></td>    
                    </tr>
                    <tr>
                        <td><?php if (isset($_GET['m'])) echo ($_GET['m']) ?></td>
                    </tr>
                </form>
            </table>
            <a href="login_page.php" class="signIn">Already Registered?Sign in</a>
        </div>
    </center>
   
</body>
</html>