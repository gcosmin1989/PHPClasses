<?php

class User
{
    private $name;
    private $age;

    /**
     * @return mixed
     */
    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
}
public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property=$value;
        }
        return $this;
}

}

$user1 = new User('cosmin', '23');

echo $user1->__get('name');

$user1->__set('age',24);

echo $user1->__get('age');
