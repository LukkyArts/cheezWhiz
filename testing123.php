<?php

session_start();

/*
if (isset($_POST['input_cheese'])) {
	$someID = $_POST['input_cheese'];
	$_SESSION['set_cheese'] = $someID;
	$cheese = $_SESSION['set_cheese'];
	echo $cheese;
}
*/

if (isset($_POST['cheese'])) {
	$set_cheese = $_POST['cheese'];
	$_SESSION['cheese'] = $set_cheese;
	$cheese = $_SESSION['cheese'];
	echo $cheese;
}

?>

<center>
<form action='testing123.php' method='post'>
<b>Enter name of cheese</b><br>
  <input type='text' name='cheese'>
  <input type='submit'>
</form>
</center>