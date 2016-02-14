<!DOCTYPE html>
<html>
<head>
    
    <link href="FancyPants.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <title>Roll the Dice</title>

</head>
<body>

<?php
echo <<<INDEX
	<h1>PHP Dice</h1>
	<form action="Roll.php" method="post">
	<h2>Amount of Dice: </h2><input type="number" name="diceCount" min="1" max="3" step="1" value="2">
	<input type="submit" value="Roll the Dice">
	</form>
INDEX;
?>

</body>
</html>