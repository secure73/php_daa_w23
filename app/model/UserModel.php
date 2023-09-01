<?php
require_once('./app/table/UserTable.php');

class UserModel extends UserTable
{
    public  function __construct()
    {
       parent::__construct(); 
    }


    public function register(string $email , string $passwd):false|UserModel
    {
         $found = $this->getUserByEmail($email);
        if(!$found)
        {
            $this->passwd = password_hash($passwd, PASSWORD_ARGON2I);
            $this->email = $email;
            $last_inserted_id = $this->insert();
            if($last_inserted_id)
            {
                $new_registered_user = $this->getUserByEmail($email);
                return $new_registered_user;
            }
        }
        return false;
    }

    public function login(string $email , string $passwd):false|UserModel
    {
        $user = $this->getUserByEmail($email);
        if($user)
        {
            if(password_verify($passwd,$user->passwd))
            {
                return $user;
            }
        }
        return false;
    }

    public function updateInformation( string $newFirstName , string $newLastName)
    {

    }

    public function getUserByEmail(string $email):null|UserModel
    {
        /**
         * array definition
         * $userArray = [];
         * Associative Array sind Key Value Array
         * $userArray = [];
         *
         * $userArray[] = 'firstUser'; //index 0
         * $userArray[] = 'secondUser'; //index 1
         * $userArray[] = '3rd User'; //index 2
         * $userArray[] = 55; //index 3
         * 
         */
       return $this->selectByEmail($email);
    }

}
