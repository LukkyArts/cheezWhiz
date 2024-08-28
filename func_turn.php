<?php

//Array table that holds all possible results from the action() function. 
//Option 0 is a duplicate of Option 20 on purpose. Each choice shares the first and last choices with their neighbors. 

$results = array(
	array(11, "right into a low branch... SLAM!, that\'s going to cost you six seconds"),
	array(0, "WHAT\'S THIS?! You teleported the next 10 meters in no time flat!"),
	array(3, "and a freak gust of wind blows you down the hill... wow you saved at least one second there!"),
	array(5, "... keep going, $active_pet_name is nearly there!"),
	array(9, "... and a big rock is jutting out of the ground to the left ... SLAM!!! - That's going to cost at least four more seconds"),
	array(1, "hitting a rock the cheese bounces high in the air - wow its going much faster now, that saved you at least three seconds!!!"),
	array(4, "... the audience roars with applause!"),
	array(6, "the cheese bounces around as it rolls quickly down the slope!"),
	array(10, "... and the cheese gets stuck down a pothole.. uggh, that took 6 seconds to get it free :\("),
	array(2, "... a Plushie Varwolf runs by and farts loudly, encouraging you to run faster to escape, saving you three seconds!"),
	array(4, "... good thing you avoided that low branch, eh?"),
	array(6, "... the cheese bounces merrily down the slope towards the finish line"),
	array(9, "... and a big rock is jutting out of the ground to the right ... SLAM!!! - That\'s going to cost at least five more seconds"),
	array(2, ".. and what a LUCKY BOUNCE. The cheese flies forward, saving you two seconds"),
	array(5, "... and a big rock is jutting out of the ground to the right ... good thing you dived left!"),
	array(7, "... and the cheese starts to wobble all over the place, $active_pet_name should have held it steady, thats going to cost 3 seconds!"),
	array(11, "... and the cheese bounces off a rock and falls on the floor.. uggh, that took 6 seconds to get it rolling again :\("),
	array(3, "flavor_text_3"),
	array(5, "and the cheese rolls faster and faster towards the goal!"),
	array(8, "It\'s a hot day and the sticky cheese is causing it to roll slower, that\'s going to cut your time down by at least 2-4 seconds!"),
	array(11, "right into a low branch... SLAM!, that\'s going to cost you six seconds"),
	);




function roller($choice) {
	if($_SESSION['distance'] > 0) {
		switch ($choice) {
			case $choice === "Forward Somersault":
			
				$set_roll = rand(0, 4);
				$_SESSION['roll'] = $set_roll;
				$roll = $_SESSION['roll'];
				turn($roll);

				break;
			case $choice === "Push Cheese Faster":
				$set_roll = rand(4, 8);
				$_SESSION['roll'] = $set_roll;
				$roll = $_SESSION['roll'];
				turn($roll);

				break;
			case $choice === "Hold Cheese Steady":
				$set_roll = rand(8, 12);
				$_SESSION['roll'] = $set_roll;
				$roll = $_SESSION['roll'];
				turn($roll);
				
				break;
			case $choice === "Dive Left":
				$set_roll = rand(12, 16);
				$_SESSION['roll'] = $set_roll;
				$roll = $_SESSION['roll'];
				turn($roll);
				
				break;
			case $choice === "Dive Right":
				$set_roll = rand(16, 20);
				$_SESSION['roll'] = $set_roll;
				$roll = $_SESSION['roll'];
				turn($roll);

				break;
			default:
				return null;
				break;
		}
	} else {
		echo "Error"; 
		// if ($jackpot > 0) {award $jackpot}
		// If ($time < 60) {award $cheese}
	}
}

function turn($roll){
	global $results;
	
	$set_distance = $_SESSION['distance'] - 10;
	$_SESSION['distance'] = $set_distance;
	$distance = $_SESSION['distance'];
	
	// Choose Flavor text
	$set_outcome = $results[$roll][1];
	$_SESSION['outcome'] = $set_outcome;
	$outcome = $_SESSION['outcome'];
				
	// Choose how many seconds the turn takes minus penalty
	$set_seconds = $results[$roll][0] + $penalty;
	$_SESSION['seconds'] = $set_seconds;
	$seconds = $_SESSION['seconds'];
	
	// Reduce Jackpot by 30 per second and the time penalty, add bonus
	$set_jackpot = max($_SESSION['jackpot'] - ($seconds * 30) + $bonus, 0);
	$_SESSION['jackpot'] = $set_jackpot;
	$jackpot = $_SESSION['jackpot'];
	
	// Add seconds to the time
	$set_time = $_SESSION['time'] + $seconds;
	$_SESSION['time'] = $set_time;
	$time = $_SESSION['time'];
	
	header("Refresh:0");
}







?>