<?php
class Bank{
    public function display()
    {
        echo "Hello you're welcom";
    }
}

// function overide/constructor overide
class Saving extends Bank{
    public function display()
    {
        echo "Am an employee";
    }
}


$obj=new Saving;
$obj->display();


?>