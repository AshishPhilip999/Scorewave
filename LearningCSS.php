<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdatabase";

$connection = mysqli_connect($servername , $username, $password, $database);

if(!$connection){

  echo "<h3> Something went wrong! ;( </h3>";
  die();
}


$matchid = 1000;
$teamAName = "A";
$teamBName = "B";
$scoreA = 0;
$scoreB = 0;
$wicketsA = 0;
$wicketsB =  0;



 function getTeamAName(){

   $query = "SELECT teamone FROM scores WHERE matchid =";
   return fetchData($query , 'teamone');

 }

 function getTeamBName(){

  $query = "SELECT teamtwo FROM scores WHERE matchid = ";
  return fetchData($query, 'teamtwo');
 }

 
 function getTeamAScore(){

  $query = "SELECT scoreone FROM scores WHERE matchid = ";
  return fetchData($query, 'scoreone');
 }


 function getTeamBScore(){

  $query = "SELECT scoretwo FROM scores WHERE matchid = ";
  return fetchData($query, 'scoretwo');

 }


 function getTeamAWickets(){

  $query = "SELECT wickets1 FROM scores WHERE matchid = ";
  return fetchData($query, 'wickets1');

 }
 function getTeamBWickets(){

  $query = "SELECT wickets2 FROM scores WHERE matchid = ";
  return fetchData($query, 'wickets2');

 }




  function fetchData($query , $key){

    global $connection, $matchid;
    $query = $query."$matchid";

    $result = mysqli_query($connection,  $query);
    $fetch = mysqli_fetch_assoc($result);
    $data = $fetch[$key];

    return $data;
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylz.css">
    <title>Document</title>
</head>
<body>
  
  <div class="header">
    <div class="titlebg">
      <p class="title">
        TeamA vs TeamB
      </p>
    </div>
  </div>

  <div class="main">
   
    <div class="scorecard">

      <div class="score">
        <div class="scorea">
          
          <div class="teamascore">
            <div class="runs"><?php echo getTeamAScore() ?></div>
            <div class="slash">/</div>
            <div class="wickets"><?php echo getTeamAWickets() ?></div>
          </div>
          <div class="teamaname">
           <?php echo getTeamAName(); ?>
          </div>
        </div>
        <div class="scoreb">
          <div class="teambscore">
            <div class="runs"><?php echo getTeamBScore() ?></div>
            <div class="slash">/</div>
            <div class="wickets"><?php echo getTeamBWickets() ?></div>
          </div>
          <div class="teambname">
            <?php echo getTeamBName() ?>
          </div>
        </div>
      </div>
       
    </div>

   <div class="btnbg">
      <button class="btn scorecard">scorecard</button>
      <button class="btn summary">Summary</button>
   </div>

   <div class="cntnt">
    
   </div>
  </div>
  </body>
</html>
