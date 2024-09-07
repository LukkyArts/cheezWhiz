

<img src='images/finish_cheese_race.png'>

<br><b>You Finished in <?php echo $_SESSION['time']; ?>  seconds!!!</b>

<p><b>Your Score :</b> <?php echo $_SESSION['jackpot']; ?>
<br><small>(and you win that many Leopoints!)</small>

<p>Your Rating : <?php 
if ($_SESSION['time'] > 0) {
		switch (true) {
			case $_SESSION['time'] <= 50:
			echo "CHEESEMASTER!";
			break;
			case $_SESSION['time'] <= 52:
			echo "Head Cheese";
			break;
			case $_SESSION['time'] <= 54:
			echo "Awesome!";
			break;
			case $_SESSION['time'] <= 56:
			echo "Fantastic";
			break;
			case $_SESSION['time'] <= 58:
			echo "Brill";
			break;
			case $_SESSION['time'] <= 60:
			echo "Great";
			break;
			case $_SESSION['time'] <= 63:
			echo "Cheeseriffic";
			break;
			case $_SESSION['time'] <= 66:
			echo "Cheesy";
			break;
			case $_SESSION['time'] <= 70:
			echo "Moldy";
			break;
			case $_SESSION['time'] <= 75:
			echo "Could do Better";
			break;
			case $_SESSION['time'] <= 80:
			echo "Awful";
			break;
			case $_SESSION['time'] <= 85:
			echo "Pathetic";
			break;
			case $_SESSION['time'] <= 90:
			echo "TERRIBLE";
			break;
			default:
			echo "Beyond Redemption";
			break;
		}
}

?>

<form action="cheeseroller.php" method="POST">
<?php
if(isset($_POST['clear'])){
$_SESSION = [];
}
?>
    <input type="submit" name="clear" value="Play again!" />
</form>