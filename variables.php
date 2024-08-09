<?php

$jackpot = 5000; 	// Decreased 30 * $seconds each turn
$distance = 120; 	// Decreased by 10 each turn 
$time = 0; 			// Increases by $seconds + $penalty each turn
$turn = 0; 			// Counts up to 12

$cheese_input = isset($_POST['cheese_input']); // Cheese submitted by form?
$user_cheese = ""; 	// Cheese put in play 

$price = ""; 		// Price of $user_cheese, 
//located in the database or the $cheeses array for testing. 

$roll = ""; 		// Number to search $results 2D array
$seconds = ""; 		// Time the turn takes. Decided by $roll
$bonus = ""; 		// Jackpot boost, decided by cheese price
$penalty = ""; 		// Time penalty, decided by cheese price


// if POST name "x" is true, post = x, if false post = blank.
// isset($_POST['x']) ? $_POST['x'] : '';









?>