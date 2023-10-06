<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $wickets1 = $_POST['wickets1'];
    $wickets2 = $_POST['wickets2'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "testdatabase";

$connection = mysqli_connect($servername , $username, $password, $database);

if(!$connection){

  echo "<h3> Something went wrong! ;( </h3>";
  die();
}

echo "<h3>Database Connected ! :)</h3>";

$q = "UPDATE `scores`
 SET 
     `scoreone` = '$score1',
     `scoretwo` = '$score2',
     `wickets1` = '$wickets1',
     `wickets2` = '$wickets2' 
     
WHERE `matchid` = '1000' ";


$res = mysqli_query($connection, $q);

if(!$res){
    echo "<h3>Problem updating database</h3>";
    echo mysqli_error($connection);
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Controller</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<form action = "/CRUD/ScoreController.php" method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">MATCH ID</label>
    <input type="text" id = "matchid" name = "matchid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Score1</label>
    <input type="text" id = "score1" name="score1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">wickets1</label>
    <input type="text" id = "wickets1" name="wickets1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Score2</label>
    <input type="text" id = "score2" name="score2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">wickets2</label>
    <input type="text" id = "wickets2" name="wickets2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</body>
</html>