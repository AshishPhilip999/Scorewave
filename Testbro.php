<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'testdatabase';

$con = mysqli_connect($servername , $username, $password, $database);

if(!$con){

    echo mysqli_error($con);
    die();
}

echo "<h3> Connection successful"."<br>";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   $matchid = $_POST["matchid"];
   $teamone = $_POST["teamone"];

   $query = "UPDATE `scores` SET `teamone` = '$teamone' WHERE `matchid` = '$matchid' ";

   $res = mysqli_query($con, $query);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    
    <form action="/CRUD/Testbro.php" method = "post">
        <input type="text" id = "matchid" name = "matchid"><br><br>
        <input type="text" id = "teamone" name = "teamone"><br><br>

        <input type="submit">
    </form>
</body>
</html>