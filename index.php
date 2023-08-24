<?php
   $username = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Document</h1>

    <hr>
    <p>start php</p>
    <hr>

    <form method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">login</button>
    </form>

    <?php
    
    //just for test
    $myHtmlElements = "<br><br><hr><span style='background-color:red'>good .!!!! ..... good</span></br>";
    $myFamilyName = "Khorsandfard";
    $myFirstName = "Ali";

    $thinkAboutIt = ' Hello Mr $myFirstName $myFamilyName  ';

    
    echo "it is username user gave:  $username";


    //echo $thinkAboutIt;
    
    ?>
</body>

</html>