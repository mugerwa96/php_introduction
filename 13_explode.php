<?php

$allowed_ext=['png','com'];
$name="mugerwa.COM";
$ext= explode('.',$name);
// explode splits a string basing  on the split point(like . , :) and returns an array 
// [
        // mugerwa
        // COM
// ]


// to access last element in an arrat created, we use end()
$ext=strtolower(end($ext));
if(in_array($ext,$allowed_ext))
// checking if the extension is found in that array
{

}
?>