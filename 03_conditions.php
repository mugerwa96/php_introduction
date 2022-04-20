<?php

$hour=date("h");
if($hour<12)
{
    echo "Good morning";
}elseif($hour<17){
    echo "Good Afternoon";
}
    else{
    echo "Good evening";
}
?>