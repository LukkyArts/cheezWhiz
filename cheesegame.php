
<?php

session_start();

include 'variables.php';
include 'func_turn.php';
?>


<html>
<body>

<h1>Cheeseroller</h1>
<p>
It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<center>
<?php
if($_SESSION['distance'] = 120 && !isset($_SESSION['start'])){
	include 'start.php';
	$set_start = true;
	$_SESSION['start'] = $set_start;
	$start = $_SESSION['start'];
} elseif ($_SESSION['distance'] = 0) {
	include 'finish.php';
} else {
	include 'options.php';
}

?>

</center>

</body>
</html>