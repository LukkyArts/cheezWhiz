
<?php

session_start();

include 'variables.php';
include 'func_turn.php';



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

	<p><b>DISTANCE TO FINISH LINE</b> : <?php echo $distance . "m"; ?>
	<br><b>TIME TAKEN</b> : <?php echo $time . "s"; ?> 
	<!-- These aren't printing, and ultimately they won't be, but why aren't they???? 
	<br><b>BONUS</b> : <?php echo $bonus . "lps"; ?> 
	<br><b>PENALTY</b> : <?php echo $penalty . "s"; ?> -->



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
		}
		?> 
	</select> 
  <input type='submit' name="play" value='Go!'></input>
</form> 

</center>



<?php





	 
	 
?>




</body>
</html>