
<!-- $this refers to the current object  -->
<?php

class Product{
    static public $price=10;
    public $total=0;
    public $color="green";
    // methods- functions
     function calculate_area()
    {
        $this->total=10*30;
    }
    function generate_Id()
    {
        return rand(0,9999999);
    }
    function total(){
        return $this->total;
    }
};

$book= new Product();
$book->calculate_area();
echo $book->total();


?>