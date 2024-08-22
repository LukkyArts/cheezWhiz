
<?php




?>


<img src='finish_cheese_race.png'>

<br><b>You Finished in <?php echo $_SESSION['time']; ?>  seconds!!!</b>


<p><b>Your Score :</b> <?php echo $_SESSION['jackpot']; ?>
<small>(and you win that many Neopoints!)</small>

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
			echo "404 Rating Not Found"
			break;
		}
}
?>