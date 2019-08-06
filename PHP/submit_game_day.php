<?php
//Add to PLAYER table
$p_id = $_POST["id"];
$name = $_POST["name"];
$nick_name = $_POST["nick_name"];
$photo_path = $_POST["photo_path"];

$insertPlayer = "INSERT INTO PLAYER VALUES ('$p_id', '$name' , '$nick_name' , '$photo_path');";

?>

<?php
//Add to STATS table
$s_id = $_POST["s_id"];
$off_td = $_POST["off_td"];
$def_td = $_POST["def_td"];
$qb_td = $_POST["qb_td"];
$interceptions = $_POST["interceptions"];
$penalties = $_POST["penalties"];
$date = $_POST["date"];

$insertStat = "INSERT INTO STATISTICS VALUES('$s_id', '$off_td', '$def_td', '$qb_td', '$interceptions', '$penalties', '$date');";

?>

<?php
//Add to GAME table
$date = $_POST["date"];
$winner = $_POST["winner"];
$field = $_POST["field"];
$team1_score = $_POST["team1_score"];
$team2_score = $_POST["team2_score"];

$insertGame = "INSERT INTO GAME VALUES('$date', '$winner', '$field', '$team1_score', '$team2_score');";

?>

<?php
//Add to TEAM table
$t_id = $_POST["t_id"];
$team_name  = $_POST["team_name"];

$insertTeam = "INSERT INTO TEAM VALUES('$t_id', '$team_name');";
?>
