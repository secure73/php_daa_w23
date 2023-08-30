<?php
require_once('table/UserTable.php');

class UserModel extends UserTable
{
    public  function __construct()
    {
       parent::__construct(); 
    }


    public function register()
    {

    }

    public function login()
    {

    }

    public function updateInformation( string $newFirstName , string $newLastName)
    {

    }

}
