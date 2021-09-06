<?php

class User{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age =$age;
    }

    public function SayHello(){
        return $this->name .' Say Hello!';
    }
}

$user1 = new User('Cosmin',22);

echo '<br>';
echo $user1->SayHello().$user1->age;
echo'<br>';
$user2 = new User('Vicentiu',23);

echo '<br>';
echo $user2->SayHello().$user2->age;