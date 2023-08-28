<?php
require_once('User.php');
$systemMessage = "please type username / password to login";

$user = new User(); 
//wenn sie $user->login nutzen bekommen Sie error while login is ein private function
//$user->login()

$systemMessage = $user->loginView($_POST['input_user_login'],$_POST['input_user_password']);

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
    <?= $systemMessage ?>
</body>

</html>