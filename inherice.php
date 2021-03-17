<?php
class Parents{

 function Parentfun(){
        echo " i am  Parent <br>";

 }

}
class Child extends Parents {
    function Chilodfun(){
        echo " i am Child  <br>";
    }
}
$child = new Child();
$child->Chilodfun();
?>