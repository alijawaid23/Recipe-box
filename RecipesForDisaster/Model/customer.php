<?php

class Customer

{
    private $customerId;
    private $name;
    private $email;
    private $phoneNumber;
    private $address;
    private $password;


function __get($name){
    return $this ->$name;
}

function __set($name,$value){
    $this->$name = $value;
}

}

?>