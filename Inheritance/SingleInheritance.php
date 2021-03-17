<?php 
class Parents{
    function  Parentfun(){
        echo "I am Parent ";
    }
}
class Child extends Parents{
    function  Childfun(){
        echo "I am Child ";
    }
}
$child = new Child();
$child->Parentfun();
?>