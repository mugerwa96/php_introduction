<?php

class Person{
    public $name;
    public $email;
    // function toset name its known as a SETTER  
    function set_name($name){
        $this->name=$name;
    }

    // GETTER to get the name after setting it
    function get_name(){
       echo  $this->name;
    }
};

$user1=new Person;
$user1->set_name("MUgerwa");
$user1->get_name();
?> 

