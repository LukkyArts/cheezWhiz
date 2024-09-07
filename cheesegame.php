
<?php

session_start();

// include 'variables.php';

?>


<html>
<body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<center>
<?php
if($_SESSION['distance'] === 0){
	include 'finish.php';
} else {
	echo "<p><img src='images/cheese_slope.png'>";
	echo "<p><b>DISTANCE TO FINISH LINE</b> : " . $_SESSION['distance'] . "m";
	echo "<br><b>TIME TAKEN</b> : " . $_SESSION['time'] . "s";
	if(isset($_SESSION['outcome'])) {
		echo "<hr><p>" . $_SESSION['outcome'] . "<p><hr>";
	}

	echo "<form method='post' action='cheesegame.php'><select name='options'>";
		$options = array("Forward Somersault", "Push Cheese Faster", "Hold Cheese Steady", "Dive Left", "Dive Right"); 
		foreach ($options as $choice) { 
			echo "<option value='$choice'>$choice</option>";			
		}
		if(isset($_POST['options'])) {
			$_SESSION['choice'] = $_POST['options'];
			$choice = $_SESSION['choice'];
			include 'func_turn.php';
			roller($choice);
		}
		echo "</select> 
  <input type='submit' name='play' value='Go!'></input>
</form>";
}

/*

*/

?>
	


</center>

</body>
</html>