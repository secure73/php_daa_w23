<?php

$systemMessage = "please type username / password to login";
$inSystemExistedEmail = "ali@ali.com";
$inSystemExistedPassword = md5("ali123");

$email = $_POST['input_user_login'];
$password = $_POST['input_user_password'];



/*
* folgende code bedwuted alle außer fase , 0 , null oder enpty string wie "" ist acceptable
*/
if($email && $password)
{
    if($email === $inSystemExistedEmail  && md5($password) == $inSystemExistedPassword)
    {
        $systemMessage = "Welcome";
    }
    else
    {
        $systemMessage = "username or password is wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login php</title>
</head>

<body>
    <h1>Login to website</h1>

    <form method="post">
        <label>username:</label> <input type="email" name="input_user_login" placeholder="something@dummy.com" required/>
        <br />
        <br />
        <label>password:</label><input type="password" name="input_user_password" placeholder="your password"  required/>
        <br />
        <br />
        <button type="submit">login</button>
    </form>
    <br>
    <?= $inSystemExistedPassword ?>
</body>

</html>