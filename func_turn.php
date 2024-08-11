<?php

$active_pet_name = "<u>Chimaera</u>"; // Remove

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
	
	
	
function turn($choice) {
	switch ($choice) {
		case $choice = "Forward Somersault":
			$set_roll = rand(0, 4);
			$_SESSION['roll'] = $set_roll;
			$roll = $_SESSION['roll'];
			echo "Roll: " . $roll . "<br>"; //remove
		
	/* === */
			$set_outcome = $results[$roll][1];
			$_SESSION['outcome'] = $set_outcome;
			$outcome = $_SESSION['outcome'];
			echo "Outcome: " . $outcome . "<br>";
	/* === */
		
			break;
		case $choice = "Push Cheese Faster":
			$set_roll = rand(4, 8);
			$_SESSION['roll'] = $set_roll;
			$roll = $_SESSION['roll'];
			echo "Roll: " . $roll . "<br>"; //remove
			break;
		case $choice = "Hold Cheese Steady":
			$set_roll = rand(8, 12);
			$_SESSION['roll'] = $set_roll;
			$roll = $_SESSION['roll'];
			echo "Roll: " . $roll . "<br>"; //remove
			break;
		case $choice = "Dive Left":
			$set_roll = rand(12, 16);
			$_SESSION['roll'] = $set_roll;
			$roll = $_SESSION['roll'];
			echo "Roll: " . $roll . "<br>"; //remove
			break;
		case $choice = "Dive Right":
			$set_roll = rand(16, 20);
			$_SESSION['roll'] = $set_roll;
			$roll = $_SESSION['roll'];
			echo "Roll: " . $roll . "<br>"; //remove
			break;
		default:
			echo "You have to make a choice!";
			return null;
			break;
	}
}



/*




case $choice = "Push Cheese Faster":
		$roll = rand(4, 8);
		
		$seconds = $results[$roll][0];
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Hold Cheese Steady":
		$roll = rand(8, 12);
		$seconds = $results[$roll][0];
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Dive Left":
		$roll = rand(12, 16);
		$seconds = $results[$roll][0];
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Dive Right":
		$roll = rand(16, 20);
		$seconds = $results[$roll][0];
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;


















function turn($roll) {
	global $results;
	global $penalty;
	global $user_cheese;
	global $price;
	global $bonus;
	$turn = &$turn + 1;
	$distance = &$distance - 10;
	$jackpot = &$jackpot - (30 * $results[$roll][0]) - $penalty;
	$time = &$time - ($penalty + $results[$roll][0]);
	echo "<p><center>
	<b>DISTANCE TO FINISH LINE</b> : ${distance}m
	<br><b>TIME TAKEN</b> : ${time}s
	<br><b>TURN:</b> : ${turn}
	<p>";
	echo "<b>Cheese:</b> " . $user_cheese . "<br>";
	echo "<b>Price:</b> " . $price . "<br>";
	echo "<b>Bonus:</b> " . $bonus . "<br>"; //remove
	echo "<b>Penalty:</b> " . $penalty . "<br>"; //remove;
}

echo turn($roll);

*/

?>