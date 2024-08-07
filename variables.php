<?php

$jackpot = 5000; 	//Decreased 30 * $seconds each turn
$distance = 120; 	//Decreased by 10 each turn 
$time = 0; 			//Increases by $seconds + $penalty each turn
$turn = 0; 			// Counts up to 12

$user_cheese = ""; 	//Cheese chosen by user
$price = ""; 		//Price of $user_cheese
$roll = ""; 		//Number to search Results array with
$seconds = ""; 		// The result of $roll
$bonus = ""; 		// Jackpot boost
$penalty = ""; 		//Time penalty
$pick = "";

$active_pet_name = "<u>Chimaera</u>"; // Remove


// if POST name "x" is true, post = x, if false post = blank.
// isset($_POST['x']) ? $_POST['x'] : '';









?>