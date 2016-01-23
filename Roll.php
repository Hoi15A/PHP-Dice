<!DOCTYPE html>
<html>
<head>
    
    <link href="FancyPants.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <title>The Dice has Spoken</title>

</head>
<body>

<?php
echo "<h1>PHP Dice</h1>";

$rngNum1 = mt_rand(1,6);
$rngNum2 = mt_rand(1,6);
$rngNum3 = mt_rand(1,6);
$rngTotal = 0;

if($_POST["diceCount"] == 1){

    switch($rngNum1){
        
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
elseif($_POST["diceCount"] == 2){

    switch($rngNum1){
        
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

    switch($rngNum2){
        
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

    $rngTotal = $rngNum1 + $rngNum2;

    echo "<h3>Total: $rngTotal";

}
elseif($_POST["diceCount"] == 3){

    switch($rngNum1){
        
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

    switch($rngNum2){
        
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

    switch($rngNum3){
        
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

    $rngTotal = $rngNum1 + $rngNum2 + $rngNum3;

    echo "<h3>Total: $rngTotal";

}
else{

    echo '<div id="fail">ERROR:<br/>No valid dice count entered!</div>';

}

echo '<h3><a href="index.php">Back to Start</a></h3>';

?>


</body>
</html>