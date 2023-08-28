<?php
//Wir definieren Variablen in PHP mit $ 
//immer Variablen mussen camelCase sein : $myVar , $car , $user
//Wrong :    Niemals nutzt Capitals , numbers , - in dien variable Name.
//camelCase:   $usersAuto ,   $autoDriver , $hospitalDoctors 
// Wir Nutzen ALL Capital nur für CONSTANT : $SERVER_KEY
//immer nutzt ein Name für dein Variable das bedeutung hast. 
//Wrong :  $xBtz 
//vermeindem wie möglig nummer in variable : z.B.   $user1 , $deliveryCar56 


/*
Aufgabe:
1: definiren für sich 5 variablen mit gut und eindeutigen Name. 
2. geben sie zwei erste variablen ein integer . 
3. versuchen Sie vier Grundrechnenarten auf diese zwei variablen und zeigen sie ergibness mit echo command
4. versuchen Sie ergibness am ende Hello World Zeigen. 

beim andere 3 variablen , geben Sie paar hrml tags als Value und Zeigen die in Page. 
*/ 


$mySpanTag = "<br><hr/><span>it is my span</span>";

$myFirstNumber = 5;
$mySecondNumer = 13; 

echo $myFirstNumber + $mySecondNumer;

echo "<br>";
$myName = "Ali";
$myFamilyName = "Khorsandfard";
echo "Hello World ".$myName ." ". $myFamilyName;
echo $mySpanTag;




