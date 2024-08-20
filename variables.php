<?php


$jackpot = 5000;
$distance = 120;
$time = 0;

$cheese = "";
$price = 0; 	
$bonus = 0; 	
$penalty = 0; 	

$choice = "";
$roll = 0; 			
$outcome = "";		
$seconds = 0; 	







/*
Expanded;

$set_jackpot = 5000; 	// Decreased 30 * $seconds each turn
$_SESSION['jackpot'] = $set_jackpot;
$jackpot = $_SESSION['jackpot'];

$set_distance = 120; 	// Decreased by 10 each turn 
$_SESSION['distance'] = $set_distance;
$distance = $_SESSION['distance'];

$set_time = 0; 	// Increases by $seconds + $penalty each turn
$_SESSION['time'] = $set_time;
$time = $_SESSION['time'];



$set_cheese = ""; 	// Name of cheese
$_SESSION['cheese'] = $set_cheese;
$cheese = $_SESSION['cheese'];

$set_price = 0; 	// Price of $cheese
$_SESSION['price'] = $set_price;
$price = $_SESSION['price'];

$set_bonus = 0; 	// Jackpot bonus, decided by cheese price
$_SESSION['bonus'] = $set_bonus;
$bonus = $_SESSION['bonus'];

$set_penalty = 0; 	// Time penalty, decided by cheese price
$_SESSION['penalty'] = $set_penalty;
$penalty = $_SESSION['penalty'];



$set_choice = ""; 	// Action the user takes on each turn
$_SESSION['choice'] = $set_choice;
$choice = $_SESSION['choice'];

$set_roll = 0; 	// Number to search $results 2D array
$_SESSION['roll'] = $set_roll;
$roll = $_SESSION['roll'];

$set_outcome = ""; 	// The flavor text that gets posted.
$_SESSION['outcome'] = $set_outcome;
$outcome = $_SESSION['outcome'];

$set_seconds = 0; 	// 
$_SESSION['seconds'] = $set_seconds;
$seconds = $_SESSION['seconds'];
*/

/*
Blank Session-saving lines:

$set_ = 0; 	// 
$_SESSION[''] = $set_;
$ = $_SESSION[''];
*/

//Session information. Not intended to be visible to user. 
echo "<br>Jackpot: " . $_SESSION["jackpot"];
echo "<br>Distance: " . $_SESSION["distance"];
echo "<br>Time: " . $_SESSION["time"];

echo "<br>Cheese: " . $_SESSION["cheese"];
echo "<br>Price: " . $_SESSION["price"];
echo "<br>Bonus: " . $_SESSION["bonus"];
echo "<br>Penalty: " . $_SESSION["penalty"];

echo "<br>Choice: " . $_SESSION["choice"];
echo "<br>Roll: " . $_SESSION["roll"];
echo "<br>Outcome: " . $_SESSION["outcome"];
echo "<br>Seconds: " . $_SESSION["seconds"];




?>