<?php

session_start(); // starts the session

include 'variables.php';










?>



<html>

<style>

u {
	color:gray;
	text-decoration:none;
}

<!-- Any colored text showing up on the page is for testing (so I can follow the numbers) and should be removed in the final game. -->

</style>

<body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<p>

<center>
<form action='cheeseroller.php' method='post'>
<b>Enter name of cheese</b><br>
  <input type='text' name='cheese'><br>
  <input type='submit'>
</form>
</center>



<?php




// Cheeses array is a workaround to replace the database. 
include 'arr_cheeselist.php';

// User confirms that their cheese is correct. 
if (isset($_POST['cheese']) && !empty($_POST['cheese'])) {
	$set_cheese = $_POST['cheese'];
	$_SESSION['cheese'] = $set_cheese;
	$cheese = $_SESSION['cheese'];
	$set_price = $cheeselist[$set_cheese];
	$_SESSION['price'] = $set_price;
	$price = $_SESSION['price'];
	if ($price != 0) {
		switch ($price) {
			case $price >= 5000:
			$set_bonus = 50; 			
			$set_penalty = 3; 			
			break;
		case $price >= 4000:
			$set_bonus = 40; 			
			$set_penalty = 2; 			
			break;
		case $price >= 3000:
			$set_bonus = 30; 			
			$set_penalty = 1; 			
			break;
		case $price >= 2000:
			$set_bonus = 20; 			
			$set_penalty = 0; 			
			break;
		case $price >= 1000:
			$set_bonus = 10; 			
			$set_penalty = -1; 			
			break;
		default:
			$set_bonus = 0; 			
			$set_penalty = -2; 			
			break;
		}
	$_SESSION['bonus'] = $set_bonus;
	$bonus = $_SESSION['bonus'];
	$_SESSION['penalty'] = $set_penalty;
	$penalty = $_SESSION['penalty'];
	}
	echo "<center><b>Cheese:</b> $cheese <br>";
	echo "<b>Price: $price <br>";
	echo "<h3>Is this correct? </h3>";
	echo "<form method='post' action='cheesegame.php'>
  <input type='submit' name='start' value='Yes!'>
</form></center>";
	} else {
			return null;
		}

?>







</body>
</html>










<!--
 /*		Database validation to be added.

	$cheeseItem = Item::findBy(['name' => $user_cheese, 'type' => 'cheese']); 
		if (!$cheeseItem) {
			echo "Sorry, I don't have a cheese with that name.";
		} else {
			echo "You have chosen ${user_Cheese}! Let's get rolling!";
		}


function createBonus ($price) {
	if ($price != 0) {
		switch ($price) {
			case $price >= 5000:
			$set_bonus = 50; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		case $price >= 4000:
			$set_bonus = 40; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		case $price >= 3000:
			$set_bonus = 30; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		case $price >= 2000:
			$set_bonus = 20; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		case $price >= 1000:
			$set_bonus = 10; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		default:
			$set_bonus = 0; 			
			$_SESSION['bonus'] = $set_bonus;
			$bonus = $_SESSION['bonus'];
			break;
		}
	}
}
	

if (isset($_POST['start'])) {
	createBonus($price);
	return $bonus;
}
*/


-->