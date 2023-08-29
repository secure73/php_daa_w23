<?php
session_start();
require_once('src/User.php');
if(isset($_POST['input_user_login']) && isset($_POST['input_user_password']))
{
    $user = new User();
    if($user->login($_POST['input_user_login'] ,$_POST['input_user_password'] ))
    {
        header('location:dashboard.php');
        die;
    }
}

if(isset($_POST['register_email']))
{
    //Insert Process
    //User instance 
    $user = new User();
    $user->create($_POST['register_email'],$_POST['register_password']);
    //user insert
    //if successfull show success
    //else show error

}

include('src/header.php');
?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Login to website</h1>
                <form method="post">
                    <label>username:</label> <input type="email" name="input_user_login" placeholder="something@dummy.com" required />
                    <br />
                    <br />
                    <label>password:</label><input type="password" name="input_user_password" placeholder="your password" required />
                    <br />
                    <br />
                    <button class="btn btn-primary" type="submit">login</button>
                </form>
            </div>
    <br>
                <hr/>

            <div class="col-lg-6">
                <h1>Register to website</h1>
                <form method="post">
                    <label>email:</label> <input type="email" name="register_email" placeholder="something@dummy.com" required />
                    <br />
                    <br />
                    <label>password:</label><input type="password" name="register_password" placeholder="your password" required />
                    <br />
                    <br />
                    <button class="btn btn-primary" type="submit">register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('src/footer.php');
?>