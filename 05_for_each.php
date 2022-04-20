<?php


// you can use other loops like for ,while ,do while to loop through an array (count() is required to get the array length)
// but foreach loop is simplier
$posts=["Introduction to programming","database adminsitration","graphics design"];
foreach($posts as $post)
{
    // echo $post."<br>";
}



?>


<?php
$person=[
    "first_name"=>"cyrix",
    "last_name" =>"pro"

];
foreach($person as $key=>$value)
{
    echo $key.": ".$value."<br>";
}

?>