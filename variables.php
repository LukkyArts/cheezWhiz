<?php

/*
Blank Session-saving lines:

$set_ = 0; 	// 
$_SESSION[''] = $set_;
$ = $_SESSION[''];
*/


echo "<b>Session info:</b>"; // Not intended to be visible to user. 
if (isset($_SESSION['jackpot'])) { echo "<br>Jackpot: " . $_SESSION["jackpot"];}
if (isset($_SESSION['distance'])) { echo "<br>Distance: " . $_SESSION["distance"];}
if (isset($_SESSION['time'])) { echo "<br>Time: " . $_SESSION["time"];}



if (isset($_SESSION['cheese'])) { echo "<br>Cheese: " . $_SESSION["cheese"];}
if (isset($_SESSION['price'])) { echo "<br>Price: " . $_SESSION["price"];}
if (isset($_SESSION['bonus'])) { echo "<br>Bonus: " . $_SESSION["bonus"];}
if (isset($_SESSION['penalty'])) { echo "<br>Penalty: " . $_SESSION["penalty"];}

if (isset($_SESSION['choice'])) { echo "<br>Choice: " . $_SESSION["choice"];}
if (isset($_SESSION['roll'])) { echo "<br>Roll: " . $_SESSION["roll"];}
if (isset($_SESSION['seconds'])) { echo "<br>Seconds: " . $_SESSION["seconds"];}

?>

<form action="cheeseroller.php" method="POST">
<?php
if(isset($_POST['clear'])){
$_SESSION = [];
}
?>
    <input type="submit" name="clear" value="Clear session" />
</form>
