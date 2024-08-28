
<?php

session_start();

include 'variables.php';
include 'func_turn.php';
?>


<html>

	<style>
	<!-- Any colored text showing up on the page is for testing (so I can follow the numbers) and should be removed in the final game. -->
	</style>

<body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<p>

<center>

	<p><b>DISTANCE TO FINISH LINE</b> : <?php echo $distance . "m"; ?>
	<br><b>TIME TAKEN</b> : <?php echo $time . "s"; ?> 

<?php
if(isset($_SESSION['outcome'])) {
	echo "<hr><p>" . $_SESSION['outcome'] . "<p><hr>";
}
?>

<form method='post' action='cheesegame.php'> 
	<select name="options"> 
		<?php 
		$options = array("Forward Somersault", "Push Cheese Faster", "Hold Cheese Steady", "Dive Left", "Dive Right"); 
		foreach ($options as $choice) { 
			echo "<option value='$choice'>$choice</option>";			
		}
		if(isset($_POST['options'])) {
        $_SESSION['choice'] = $_POST['options'];
		$choice = $_SESSION['choice'];
		roller($choice);
		}
		?> 
	</select> 
  <input type='submit' name="play" value='Go!'></input>
</form> 

</center>



<hr>

<!-- 

BELOW THIS LINE ARE THINGS I'M TESTING THAT ARE "BEHIND" AN ERROR OTHERWISE

-->

Your Rating : <?php 
if ($_SESSION['time'] > 0) {
		switch ($time) {
			case $time <= 50:
			echo "CHEESEMASTER!";
		break;
			case $time <= 52:
			echo "Head Cheese";
		break;
			case $time <= 54:
			echo "Awesome!";
		break;
			case $time <= 56:
			echo "Fantastic";
		break;
			case $time <= 58:
			echo "Brill";
		break;
			case $time <= 60:
			echo "Great";
		break;
			case $time <= 63:
			echo "Cheeseriffic";
		break;
			case $time <= 66:
			echo "Cheesy";
		break;
			case $time <= 70:
			echo "Moldy";
		break;
			case $time <= 75:
			echo "Could do Better";
		break;
			case $time <= 80:
			echo "Awful";
		break;
			case $time <= 85:
			echo "Pathetic";
		break;
			case $time <= 90:
			echo "TERRIBLE";
		break;
			case $time <= 50:
			echo "Beyond Redemption";
		break;
			default:
			echo "404 Rating Not Found";
			break;
		}
}


	 
	 
?>




</body>
</html>