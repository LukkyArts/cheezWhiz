<?php

session_start();

// include 'variables.php';
?>

<html>
<body>

<h1>Cheeseroller</h1>

<p>It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!

<center>
<p><b>Games played:</b> 0/10



<p>

<p><img src='images/start_cheese_race.png'>
<br>3... 2... 1...

<p><form method='post' action='cheesegame.php'>
	<input type="submit" name="go" value='Go!'>
	</input>
</form>

</center>



</body>
</html>
