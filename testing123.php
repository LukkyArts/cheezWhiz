<?php

// check if the form was submitted
if (isset($_POST['submit_button'])) {
    $a = $_POST['update'];
    echo $a;
}
else {
    
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- notice the updated action -->
	<select name="options" cols="30" rows="4" id="update" maxlength="200"> 
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
<br />
<input name="submit_button" type="submit"  value=" Update "  id="update_button"  class="update_button"/> <!-- notice added name="" -->
</form>

<?php

} // end "else" loop

?>

	<select name="options" id="update"> 
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