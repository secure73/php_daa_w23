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
            //alle controlling email, password länge
            $user = new UserModel();
            //this is snake_case var definition
            $created_new_user = $user->register($_POST['register_email'],$_POST['register_password']);
            //folgende line vermeindet mehrfach ausfürung beim refresh in View!
            $_POST = null;
            if($created_new_user)
            {
                //function serilazed : convert object to string, weil session cann nur string und int behalten
                //wir müssen serielized object in session speichern
                $_SESSION['user'] =serialize($created_new_user);
                
                // wie man kann geschpeichertes Objekt in SESSION wieder bekommen 
                //$obj = unserialize($_SESSION['user']);
                return true;
            }
        }
        return false;
    }
}