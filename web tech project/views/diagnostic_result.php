<?php
if(isset($_POST['text']))
{
header('Content-disposition: attachment; filename=Report.txt');
header('Content-type: application/txt');
echo $_POST['text'];
exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic Result</title>
<style>


</style>
</head>
<body>
<button><a style="text-decoration: none;color: black;" href="patient_profile.php">Back</a></button>


    <form action="" method="post">
       
        <textarea name="text" rows="20" cols="100"></textarea>
        <br><br>
        <input type="submit" value="Download" name="submit">
          <br><br>
        
        </form>

    
</body>
</html>