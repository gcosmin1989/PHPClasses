<?php

class User{

    public static $minPassLength = 6;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return 'This Pass is valid';
        } else{
            return 'This pass should be min 6 characters';
        }
    }
}

$password = '12345';
echo User::validatePass($password);
