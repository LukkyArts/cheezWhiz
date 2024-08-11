<?php

$jackpot = 5000; 	// Decreased 30 * $seconds each turn
$distance = 120; 	// Decreased by 10 each turn 
$time = 0; 			// Increases by $seconds + $penalty each turn
$turn = 0; 			// Counts up to 12

$price = ""; 		// Price of $user_cheese, 
$bonus = ""; 		// Jackpot boost, decided by cheese price
$penalty = ""; 		// Time penalty, decided by cheese price

$roll = ""; 		// Number to search $results 2D array
$results = "";
$seconds = ""; 		// Time the turn takes. Decided by $roll


/*
$_SESSION["jackpot"] = $jackpot;
$_SESSION["distance"] = $distance;
$_SESSION["time"] = $time;
$_SESSION["turn"] = $turn;
$_SESSION["cheese"] = $cheese;
$_SESSION["price"] = $price;
$_SESSION["bonus"] = $bonus;
$_SESSION["penalty"] = $penalty;
$_SESSION["roll"] = $roll;
$_SESSION["seconds"] = $seconds;
*/

//Session information. Not intended to be visible to user. 
echo "<br>Jackpot: " . $_SESSION["jackpot"];
echo "<br>Distance: " . $_SESSION["distance"];
echo "<br>Time: " . $_SESSION["time"];
echo "<br>Turn: " . $_SESSION["turn"];
echo "<br>Cheese: " . $_SESSION["cheese"];
echo "<br>Price: " . $_SESSION["price"];
echo "<br>Bonus: " . $_SESSION["bonus"];
echo "<br>Penalty: " . $_SESSION["penalty"];
echo "<br>Roll: " . $_SESSION["roll"];
echo "<br>Seconds: " . $_SESSION["seconds"];





?>