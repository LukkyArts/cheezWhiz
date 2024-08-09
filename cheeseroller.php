
<?php

include 'variables.php';

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
if (!isset($_POST['start'])) {
	echo "<form action='cheeseroller.php' method='post'>
<b>Enter name of cheese</b><br>
  <input type='text' name='cheese_input'>
  <input type='submit'>
</form>";
} else {
	echo "<br><b>Whoops... something seems to have broken.</b>";
}


 /*		Database validation to be added.

	$cheeseItem = Item::findBy(['name' => $user_cheese, 'type' => 'cheese']); 
		if (!$cheeseItem) {
			echo "Sorry, I don't have a cheese with that name.";
		} else {
			echo "You have chosen ${user_Cheese}! Let's get rolling!";
		}
*/


// Cheese array is a workaround to replace the database. 
include 'cheeses.php';

session_start(); // starts the session


// User confirms that their cheese is correct. 
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($cheese_input)) {
	$user_cheese = $_POST['cheese_input'];
	$price = $cheeses[$user_cheese];
  	echo "<b>Cheese:</b> $user_cheese <br>";
	echo "<b>Price: $price <br>";
	echo "<h3>Is this correct? </h3>";
	echo "<form method='post' action='cheesegame.php'>
  <input type='submit' name='start' value='Yes!'>
</form></center>";

		}


	if ($price != 0) {
		switch ($price) {
			case $price >= 5000:
			$bonus = 50; 
			$penalty = 3; 
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
		case $price >= 4000:
			$bonus = 40;
			$penalty = 2;
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
		case $price >= 3000:
			$bonus = 30;
			$penalty = 1;
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
		case $price >= 2000:
			$bonus = 20;
			$penalty = 0;
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
		case $price >= 1000:
			$bonus = 10;
			$penalty = -1;
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
		default:
			$bonus = 0;
			$penalty = -2;
			echo "<b><u>Bonus:</b> " . $bonus . "<br></u>"; //remove
			echo "<b><u>Penalty:</b> " . $penalty . "<br></u>"; //remove
			break;
	}
}






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