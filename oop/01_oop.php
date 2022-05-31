<!-- class is a blue print -->
<?php
class Product{
    public $price=10;
    public $total=0;
    public $color="green";
    // methods- functions
    public function calculate_area()
    {

    }
};
// instating
$book=new Product(); // we use new because we need a new VERSION  of the PRoduct class
$price=$book->price; 
echo $price;                //book is a product having price ,total  and color values by default

// accessing properties in the  class we use an ARROW and we dont put the dollar sign


// NOTE::: when we buy a product from the factory,the product  has a factory price.
// The retailer can decide to sell  the product at a different price.This cant change the factory price
// Working example
$phone=new Product();
$phone_price=$phone->price=24; 
echo $phone_price;
?>