
<p><img src='cheese_slope.png'>

<p><b>DISTANCE TO FINISH LINE</b> : <?php echo $_SESSION['distance'] . "m"; ?>
<br><b>TIME TAKEN</b> : <?php echo $_SESSION['time'] . "s"; ?> 

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

