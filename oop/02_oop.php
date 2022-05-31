<!-- ACCESSING OITEMS WITHIN THE CLASS WITHOUT USING AN OBKJECT -->
<!-- we use :: -->
<?php
class Product{
    static public $price=10;
    public $total=0;
    public $color="green";
    // methods- functions
     function calculate_area()
    {
        echo "Calculate Area";
    }
   static function generate_Id()
    {
        return rand(0,9999999);
    }
};

echo Product::generate_Id();   //:: it enables to access methods without  an instance
echo "<br>";
// to access a property directly , a static keyword is used
echo Product::$price;
?>