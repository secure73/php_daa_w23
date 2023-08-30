<?php

require_once('../vendor/easydb/QueryProvider.php');

class UserTable extends QueryProvider
{
    public int $id;
    public string $email;
    public string $passwd;
    public ?string $firstName;
    public ?string $lastName;

    public function __construct()
    {
        //wenn wir extends von Vater class mussen wir dise code schreiben
        parent::__construct();
    }

    public function insert(): null|int
    {
        $sqlQuery = "INSERT INTO users (email, passwd, firstName, lastName) VALUES (:email, :passwd, :firstName, :lastName)";
        $array = [':email'=>$this->email,':passwd'=>$this->passwd,':firstName'=>$this->firstName,':lastName'=>$this->lastName];
        return $this->insertQuery($sqlQuery,$array);
    }


}