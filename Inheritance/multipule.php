<?php
class Dish {
    function Roti(){
        echo "this roti nmae of data ";
    }
    function Sbaji(){
        echo "sbaji name this data ";
    }
}

trait Sweet {
    function Sweet(){
        echo "Sweet Name of this data";
    }
    
}
trait ButterMilk{
   function ButterMilk() {
       echo " butter milk name this";
   }
}
class Dish2 extends Dish{
    use Sweet,ButterMilk;

}
$dish = new Dish2();
$dish->ButterMilk();
?>