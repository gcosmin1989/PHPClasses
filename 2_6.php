<?php

class User
{
protected $name;
protected $age;

public function __construct($name,$age){
    $this->name=$name;
    $this->age =$age;
}
}

class Customer extends User{
    private $balance;

    public function __construct($name, $age, $balance)
    {
        $this->balance=$balance;

        parent::__construct($name, $age);
    }

    public function pay($amount){
        return $this->name . ' paid $' .$amount. ' his balance is '.$this->balance;
    }
}

$customer1 = new Customer('Cosmiin',23, 300);

echo $customer1->pay(320);

