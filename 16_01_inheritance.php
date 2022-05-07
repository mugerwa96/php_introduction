<?php

class User{
    public $name;
    public $email;
    public function display(){
    echo $this->name ."<br>".$this->email;
    }

}
// we use the extends word to inherite from the base class

class Employee extends User{
 
        public function __construct($name,$email)
        {
            $this->name=$name;
            $this->email=$email;    
        }
        
};

$employee1=new Employee("derrick","mugera@gmil.com");
$employee1->display();

?>