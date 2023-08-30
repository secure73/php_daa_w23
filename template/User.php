<?php
require_once('app/PdoConnect.php');
class User {
    // public bedeutet von instance zufriffbar
    //  ? bevor Property Typ bedeutet diese Property kann null sein
    public   int      $id;
    public   ?string  $firstName;
    public   ?string  $lastName;
    public   string   $email;
    // private kann nicht von darausen (instance) zufriffbar
    private  string $passwd;

    public function __construct()
    {
        echo "Hello , i am User Constructor";
    }

    public function setPassword($password)
    {
        $this->passwd = md5($password);
    }

    public function create(string $email , string $password):false|int
    {
        $this->email = $email;
        $this->passwd = md5($password);

        $sqlQuery = "INSERT INTO users (email, passwd) VALUES ( :email , :passwd )";


        $pdo = new PdoConnection('default');
        
        if($pdo->connect())
        {
            $pdo->query($sqlQuery);
            $pdo->bind(':email',$this->email);
            $pdo->bind(':passwd',$this->passwd);
            if($pdo->execute())
            {
                $pdo->secure();
                return $pdo->lastInsertId();
            }
        }
        $pdo->secure();
        echo $pdo->getError();

        return false;
    }

    /**
     * immer!!!! definieren rückgabe type für dein function 
     */
    public function login(string $email , string $password):bool
    {
        // Klartext   ali123
        $inSystemPassword = '984d8144fa08bfc637d2825463e184fa';
        if($email === "ali@ali.com" && (md5($password) == $inSystemPassword ))
        {
            $_SESSION['user'] = "ali@ali.com";
            $_SESSION['user_id'] = 203;
            $_SESSION['email'] = 'ali@ali.com';
            $_SESSION['konto_balance'] = 5000;
            return true;
        }
        return false;
    }

    public function loginView(string $email , string $password):string
    {
        $result = $this->login($email , $password);
        if($result)
        {
            return "wilkommen";
        }
        return "Wrong username or password";
    }
}