<?php

class User{
  public $name;
  public $email;

//   constructor its called hen an object is created
public function __construct($name,$email)
{
   $this->name=$name;
   $this->email=$email;
}

}
// objects
$user1=new User("mugerwa","mugerwa@gmail.com");
$user2=new User("alpha","mugerwa@gmail.com");

echo $user1->name;
echo $user2->email;

?>