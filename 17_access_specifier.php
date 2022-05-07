<?php


class Person
{
    protected $username="mugerwa";
    protected function display()
    {
        echo "Hello welcome Mr $this->username";
    }
    public function run()
    {
        $this->display();
    }
}

$obj=new Person;
echo $obj->run();



?>