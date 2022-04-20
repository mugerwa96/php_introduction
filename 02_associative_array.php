<?php
// with an associative array, you define the  index 

$colors=[
    1=>"red",
    2=>"yellow",
    6=>"black"
];
// echo $colors[6];
?>

<!-- u can define keys as strings -->
<br>

<!-- its like a javascript object or python dictionary -->
<?php
$colors=[
    "red"=>"#ff0000",
    "green" =>"#00ff00",
    "blue"=>"#0000ff"
];
// echo $colors["blue"];

?>

<br>
<br>


<!-- =====associative array -->
<?php
$person=[
    "first_name"=>"cyrix",
    "last_name" =>"pro"

];
// echo $person["first_name"];

?>

<!-- =====associative array -->





<!-- multidimensional array -->
<?php

$users=[

    [
        "first_name"=>"cyrix",
        "last_name" =>"pro"
    
    ],
    [
        "first_name"=>"mugerwa",
        "last_name" =>"obadiah"
    
    ]

    ];

// echo $users[1]['last_name'];



// converting that into json
echo json_encode($users);


// coverting a JSON objec into multidemisonal array
// NOTE:::::::::echo json_decode($users)
?>




<!-- multidimensional array -->