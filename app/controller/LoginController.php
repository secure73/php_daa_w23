<?php
require_once('./app/model/UserModel.php');
class LoginController
{
    public static function login():bool
    {
        if(isset($_POST['input_user_login']) && isset($_POST['input_user_password']) )
        {
            $user = new UserModel();
            $user = $user->login($_POST['input_user_login'],$_POST['input_user_password']);
            $_POST = null;
            if($user)
            {
                $_SESSION['user'] =serialize($user);
                return true;
            }
        }
        return false;
    }

    public static function register():bool
    {
        if(isset($_POST['register_email']) && isset($_POST['register_password']) )
        {
            $user = new UserModel();
            $user = $user->register($_POST['register_email'],$_POST['register_password']);
            $_POST = null;
            if($user)
            {
                $_SESSION['user'] =serialize($user);
                return true;
            }
        }
        return false;
    }
}