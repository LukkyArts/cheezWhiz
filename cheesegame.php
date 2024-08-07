
<?php


include 'variables.php';
include 'cheeseroller.php';
include 'cheeses.php';
include 'Results.php';

?>

<html><body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<?php 
	echo "Number: " . $guess . "<br>";
	echo "Cheese: " . $user_cheese . "<br>";
	echo "Price: " . $price . "<br>";
	echo "Bonus: " . $bonus . "<br>";
	echo "Penalty: " . $penalty . "<br>";
?>


<center>
	<p><b>DISTANCE TO FINISH LINE</b> : <?php echo "${distance}m" ?>
	<br><b>TIME TAKEN</b> : <?php echo "${time}s" ?> 
	<br><b>TURN:</b> : <?php echo "${turn}" ?>
<p>

<!-- Dropdown menu for making your moves. -->
<form action='cheesegame.php' method='post'> 
  <select name="options"> 
    <?php 
    $options = array("Select", "Forward Somersault", "Push Cheese Faster", "Hold Cheese Steady", "Dive Left", "Dive Right"); 
	foreach ($options as $choice) { 
      echo "<option value='$choice'>$choice</option>"; 
    } 
    ?> 
  </select> 
  <input type='submit' value='Go!'>
</form> 

</center>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && $price != 0) {
	function action($choice) {
        if ($choice = "Forward Somersault") {
			$roll = rand(0, 4);
			return $roll;

        } elseif ($choice = "Push Cheese Faster") {
			$roll = rand(4, 8);
            return $roll;
			
        } elseif ($choice = "Hold Cheese Steady") {
			$roll = rand(8, 12);
            return $roll;
			
        } elseif ($choice = "Dive Left") {
			$roll = rand(12, 16);
			return $roll;
			
        } elseif ($choice = "Dive Right") {
			$roll = rand(16, 20);
			return $roll;
			
        } else {
			echo "You have to make a choice!";

        }
	}
	
	echo "You rolled: " . $roll;
	
	
	
}


?>

<center>
<p>Go back

<form method="post" action="cheeseroller.php">
  <input type="submit" name="return" value="Back">
</form>
</center>


</body></html>



