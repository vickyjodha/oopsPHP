<?php 
 class  Parents{
    protected $name;
function getData($name){
$this->name=$name;
}
    function Prentfunction(){
     echo "Name of this ".$this->name ."<br>";
    }
}
class Child extends Parents{
    function showData(){
        echo "<h1>Childe data show now this ".$this->name."</h1>";
    }
}
class ChildA extends Child{
    function Childnam(){
        echo "<h1>data this now ".$this->name."</h1>"; 
    }
}
$child= new Child();
$child->getData("vikram singh name ");
$child->showData(); 
$child= new ChildA();
$child->getData("vikram singh name ");
$child->Childnam();
?>