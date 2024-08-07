
<?php

$jackpot = 5000; 	//Decreased 30 * $seconds each turn
$distance = 120; 	//Decreased by 10 each turn 
$time = 0; 			//Increases by $seconds + $penalty each turn
$turn = 0; 			// Counts up to 12


$cheese_input = "";	//The initial cheese submission
$user_cheese = ""; 	//Cheese chosen by user
$price = ""; 		//Price of $user_cheese
$roll = ""; 		//Number to search Results array with
$seconds = ""; 		// The result of $roll
$bonus = ""; 		// Jackpot boost
$penalty = ""; 		//Time penalty
$pick = "";

$active_pet_name = "<u>Chimaera</u>"; // Remove

?>


<html>
<style>

u {
	color:red;
	text-decoration:none;
}

<!-- Any red text showing up on the page is for testing (so I can follow the numbers) and should be removed in the final game. -->

</style>


<body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<?php

//Initial input for cheese name. The array to be removed for database search. 




if (!isset($_POST['start']) && empty($user_cheese)) {
	echo "<p><b><s>Enter name of cheese</s>
<br><u>Pick a number 1 - 34.</u></b><br>
<form method='post' action='cheeseroller.php'>
  <input type='text' name='cheese_input'>
  <input type='submit'>
</form>";
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($cheese_input)) {
$user_cheese = $_POST['cheese_input'];
} else {
	$user_cheese = "";
}





 /*		The validation will also need the database. 

	$cheeseItem = Item::findBy(['name' => $user_cheese, 'type' => 'cheese']); 
		if (!$cheeseItem) {
			echo "Sorry, I don't have a cheese with that name.";
		} else {
			echo "You have chosen ${user_Cheese}! Let's get rolling!";
		}

*/

include 'cheeses.php';

//Sets the cheese type and price, 
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($pick)) {
	//Searches an array instead of the real database.
  $user_cheese = $cheeses[$pick][1];
  $price = $cheeses[$pick][0]; 
  if (empty($user_cheese) or $pick > 34 or empty($pick)) {
	  echo "Oops! I don't have a cheese for that!";
  } else {
		echo "<h3>Your cheese: </h3>";
		}
	}


	
if ($_SERVER["REQUEST_METHOD"] == "POST" && $price != 0) {
		switch ($price) {
			case $price >= 5000:
			$bonus = 50; 
			$penalty = 3; 
			break;
		case $price >= 4000:
			$bonus = 40;
			$penalty = 2;
			break;
		case $price >= 3000:
			$bonus = 30;
			$penalty = 1;
			break;
		case $price >= 2000:
			$bonus = 20;
			$penalty = 0;
			break;
		case $price >= 1000:
			$bonus = 10;
			$penalty = -1;
			break;
		default:
			$bonus = 0;
			$penalty = -2;
			break;
	}
}
	
	

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($user_cheese)) {
	echo "<center><u><b>Number:</b> " . $pick . "<br></u>"; //remove
	echo "<b>Cheese:</b> " . $user_cheese . "<br>";
	echo "<b>Price:</b> " . $price . "<br>";
	echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
	echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
	echo "<h3>Is this correct? </h3>";
	echo "<form method='post' action='cheeseroller.php'>
  <input type='submit' name='start' value='Yes!'>
</form></center>";
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['start'])) {
	echo "<p><center>
	<b>DISTANCE TO FINISH LINE</b> : ${distance}m
	<br><b>TIME TAKEN</b> : ${time}s
	<br><b>TURN:</b> : ${turn}
	<p>";
	include 'selection.php';
	}
	
?>





<?php

include 'results.php';





if (isset($_POST['choice'])) {
	switch ($choice) {
		case $choice = "Forward Somersault":
		$roll = rand(0, 4);
		$seconds = $results[$roll][0];
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
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
	default:
		echo "You have to make a choice!";
		return null;
		break;
	}
}




function turn($roll) {
	include 'results.php';
	include 'variables.php';
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








/*
if (isset($_POST['choice'])) {
	switch ($choice) {
		case $choice = "Forward Somersault":
		$roll = rand(0, 4);
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Push Cheese Faster":
		$roll = rand(4, 8);
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Hold Cheese Steady":
		$roll = rand(8, 12);
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Dive Left":
		$roll = rand(12, 16);
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	case $choice = "Dive Right":
		$roll = rand(16, 20);
		echo "Roll: " . $roll . "<br>"; //remove
		echo "Time penalty: " . $results[$roll][0] . "<br>"; //remove
		echo $results[$roll][1];
		return $roll;
		break;
	default:
		echo "You have to make a choice!";
		return null;
		break;
	}
}
	
	
if ($_SERVER["REQUEST_METHOD"] == "POST" && $price != 0) {
	function action($choice) {
        if ($choice = "Forward Somersault") {
			$roll = rand(0, 4);
			echo "You rolled: " . $roll;
			return $roll;

        } elseif ($choice = "Push Cheese Faster") {
			$roll = rand(4, 8);
			echo "You rolled: " . $roll;
            return $roll;
			
        } elseif ($choice = "Hold Cheese Steady") {
			$roll = rand(8, 12);
			echo "You rolled: " . $roll;
            return $roll;
			
        } elseif ($choice = "Dive Left") {
			$roll = rand(12, 16);
			echo "You rolled: " . $roll;
			return $roll;
			
        } elseif ($choice = "Dive Right") {
			$roll = rand(16, 20);
			echo "You rolled: " . $roll;
			return $roll;
			
        } else {
			echo "You have to make a choice!";

        }
	}
}

*/















?>

<html><body>

<center>
<p>
<form method="post" action="cheeseroller.php">
  <input type="submit" name="return" value="Reset page.">
</form>
</center>

</body>
</html>