<?php
$systemMessage = "";
$ourSecretNumber = rand();

$userNumber = $_POST['user_geuss'];

// wie kann ich einen int Random Nummer in PHP bauen;
// == ist ein Logische Operator und es bedeuted ist gleich
// aber = ist für Zuweisung

/**
 * if syntax   
 *  fängt mit ''' if '''' KEYWORD , dannach ''' (  ) '''
 * in ( )  wir können unsere logic schreiben
 * wir dürfen eine Kette von Logical Operator bauen
 * 
 *  if($use_id == 120 && $user->isActive == true || $user->isAdmin == true)
 *  
 * 
 */

if($userNumber == $ourSecretNumber)
{
    $systemMessage = "Hurra!!!!!";
}
if($userNumber < $ourSecretNumber)
{
    $systemMessage = "sorry it is smaller than target number";
}
if($userNumber > $ourSecretNumber)
{
    $systemMessage = "Sorry it is larger than target number";
}



/*
php hat folgende Logische operand 
 ==  Gleich
 <  Kleiner
 >  Größer
 =<  Gleich oder kliener
 >=  Glich oder Größer
 &&  und
 ||  oder
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number game</title>
</head>
<body>

    <h3>Game number!!! enjoy</h3>
    <p>
        you shall guess our number which is between 1 und 20
    </p>
    <hr>

    type your number
    <br/>

    <form method="post">
        <input type="number" name="user_geuss" />
        <br>
        <br>
        <button type="submit">it is my number</button>
    </form>
    
    <?php
        echo $ourSecretNumber;
    ?>
</body>
</html>