<?php
class A
{
    public $User;
    public function display()
    {
        echo "Hello ,welcome Mr $this->User";
    }
}
class B extends A
{
        public  $User ="Mugerwa";
}
class C extends B 
{
    public $User="Derrick";
}

$obj=new B;
$obj->display();
echo "<br>";
$obj=new C;
$obj->display();



?>