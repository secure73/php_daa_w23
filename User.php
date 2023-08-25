<?php

class User {
    // public bedeutet von instance zufriffbar
    //  ? bevor Property Typ bedeutet diese Property kann null sein
    public   ?string $firstName;
    public   ?string $lastName;
    public   string $email;
    // private kann nicht von darausen (instance) zufriffbar
    private  string $password;

    
    public function __construct()
    {
        echo "Hello , i am User Constructor";
    }

    /**
     * immer!!!! definieren rückgabe type für dein function 
     */
    private function login(string $email , string $password):bool
    {
        $inSystemPassword = '984d8144fa08bfc637d2825463e184fa';
        if($email === "ali@ali.com" && (md5($password) == $inSystemPassword ))
        {
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