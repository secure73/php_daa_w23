<?php

require_once('./vendor/easydb/QueryProvider.php');

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
        $this->firstName = null;
        $this->lastName = null;
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


    public function selectByEmail(string $email):object|null
    {
        $sqlQuery = "SELECT * FROM users WHERE email = :email";
        $array =[':email'=>$email];
        // return type from selectQuery is Associative Array or null
        $queryResult = $this->selectQuery($sqlQuery,$array);
        if(is_array($queryResult))
        {
            if(isset($queryResult[0]))
            {
                //conver to object
                $row = $queryResult[0];
                
                /*was kommt zurück ist etwas wie dass
                $array ['id'] = 1;
                $array['firstName'] = null;
                $array['lastName'] = null;
                
                $array['email'] = 'ali@ali.com';
                $array['passwd'] = 'lksajlksljd';
                */
                foreach($row as $key => $value)
                {
                    $this->$key = $value;
                }
                return $this;
            }


        }
        return null;
    }

    /**
     * like method
     */
    public function selectByLastName(string $lastName):array|null
    {
        $sqlQuery = "SELECT * FROM users WHERE lastName LIKE :lastName";
        $array =[':lastName'=> $lastName.'%'];
        return $this->selectQuery($sqlQuery,$array);
    }

}