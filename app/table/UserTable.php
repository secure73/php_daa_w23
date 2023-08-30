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

    public function delete(int $id):int|null
    {
        $sqlQuery = "DELETE FROM users WHERE id = :id";
        $array=[':id'=>$id];
        return $this->deleteQuery($sqlQuery,$array);
    }

    public function update():int|null
    {
        $sqlQuery = " UPDATE users SET firstName = :firstName, lastName = :lastName , passwd = :passwd  WHERE id = :id";
        $array = [':firstName'=>$this->firstName,':lastName'=>$this->lastName,':email'=>$this->email , 
                    ':passwd'=>$this->passwd , ':id'=>$this->id];
        return $this->updateQuery($sqlQuery,$array);
    }

    public function selectByEmail(string $email):array|null
    {
        $sqlQuery = "SELECT * FROM users WHERE email = :email";
        $array =[':email'=>$email];
        return $this->selectQuery($sqlQuery,$array);
    }





}