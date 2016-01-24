<!DOCTYPE html>
<html>
	<head>

		<link href="FancyPants.css" type="text/css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		<title>The Dice has Spoken</title>

	</head>
	<body>

		<?php

		/**
		 * @return array Array with random integers (range 1-6)
		 * @param Integer $amount
		 */
		function generateRandNumbers($amount) {
			$ret = array();

			for ($i = 0; $i < $amount; $i++) {
				array_push($ret, mt_rand(1, 6));
			}
			return $ret;
		}

		/**
		 * Displays a dice with its $number
		 * @param Integer $number
		 */
		function outputDice($number) {
			switch ($number) {
				case 1:
					echo '<img src="DiceImages/One.png" alt="One" height="200" width="200">';
					break;
				case 2:
					echo '<img src="DiceImages/Two.png" alt="Two" height="200" width="200">';
					break;
				case 3:
					echo '<img src="DiceImages/Three.png" alt="Three" height="200" width="200">';
					break;
				case 4:
					echo '<img src="DiceImages/Four.png" alt="Four" height="200" width="200">';
					break;
				case 5:
					echo '<img src="DiceImages/Five.png" alt="Five" height="200" width="200">';
					break;
				case 6:
					echo '<img src="DiceImages/Six.png" alt="Six" height="200" width="200">';
					break;
			}
		}

		echo "<h1>PHP Dice</h1>";

		// Generates an array with random numbers
		$rndNumArray = generateRandNumbers($_POST["diceCount"]);
		$rndTotal = 0;
		// Maximum dice allowed
		$maxDice = 3;

		if (count($rndNumArray) <= $maxDice || count($rndNumArray) < 1) {
			for ($i = 0; $i < count($rndNumArray); $i++) {
				outputDice($rndNumArray[$i]);
				$rndTotal += $rndNumArray[$i];
			}
			echo "<h3>Total: $rndTotal";
		} else {

			echo '<div id="fail">ERROR:<br/>No valid dice count entered!</div>';
		}

		echo '<h3><a href="index.php">Back to Start</a></h3>';
		?>


	</body>
</html>