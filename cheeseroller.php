<?php

session_start(); // starts the session

include 'variables.php';

// Cheeses array is a workaround to replace the database. 
include 'arr_cheeselist.php';


?>



<html>
<body>

<h1>Cheeseroller</h1>

<p>It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<center>
<p><b>Games played:</b> 0/10



<p>



<?php


if (!isset($_POST['cheese']) && empty($_POST['cheese'])) {
echo "<img src='cheese_maker_welcome.png'>
<br><form action='cheeseroller.php' method='post'>

<p><b>Which cheese do you wish to purchase?</b><br>
  <input type='text' name='cheese'><br>
  <input type='submit'>
</form>

<p><a href=''>High Scores</a>
";
} elseif (isset($_POST['cheese']) && !empty($_POST['cheese'])) { // !empty should be replaced by $cheeseitem

	$set_jackpot = 5000; 	// Decreased 30 * $seconds each turn
	$_SESSION['jackpot'] = $set_jackpot;
	$jackpot = $_SESSION['jackpot'];

	$set_distance = 120; 	// Decreased by 10 each turn 
	$_SESSION['distance'] = $set_distance;
	$distance = $_SESSION['distance'];

	$set_time = 0; 	// Increases by $seconds + $penalty each turn
	$_SESSION['time'] = $set_time;
	$time = $_SESSION['time'];
	
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
	echo "<img src='cheese_maker_yes.png'>
	<p><b>Yes, you must mean ${cheese}!</b>
	<br>We do have some of that!
	<br>[-Image of your cheese here-]
	<br><b>Price:</b> $price <br>
	<h3>Is this the cheese you want?</h3>
	<form method='post' action='cheesegame.php'>
	<input type='submit' name='start' value='Yes!'>
	</form>

	<p><form action='cheeseroller.php' method='post'>
	<p><b>... or enter another cheese</b>
	<br><input type='text' name='cheese'>
	<br><input type='submit'>
	</form>";

	} else {
		echo "<img src='cheese_maker_no.png'>
	<p><b>Come again?
	<p><form action='cheeseroller.php' method='post'>
	<br><input type='text' name='cheese'>
	<br><input type='submit'>
	</form>";
		}

/*

I don't have a way to workaround this until it's on the server, but this checks if the item is a cheeseitem. 

 $cheeseItem = Item::findBy(['name' => $cheese, 'type' => 'cheese']); 
  if (!$cheeseItem) {
	echo "<img src='cheese_maker_no.png'>
	<p><b>Come again?

	<p><form action='cheeseroller.php' method='post'>
	<p><b>... or enter another cheese</b>
	<br><input type='text' name='cheese'>
	<br><input type='submit'>
	</form>";
} else {
	echo "<img src='cheese_maker_yes.png'>
	<p><b>Yes, you must mean ${cheese}!
	<br>We do have some of that!
	<br>[-Image of your cheese here-]
	<br><b>Price: $price <br>
	<h3>Is this the cheese you want?</h3>
	<form method='post' action='cheesegame.php'>
	<input type='submit' name='start' value='Yes!'>
	</form>

	<p><form action='cheeseroller.php' method='post'>
	<p><b>... or enter another cheese</b>
	<br><input type='text' name='cheese'>
	<br><input type='submit'>
	</form>";
}
*/


?>





</center>



</body>
</html>







