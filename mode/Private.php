<?php 

class Food{
    private $name;
    function getData($name){
         $this->name=$name;
     }
    function showData(){
       echo "My name is ".$this->name."<br>";
    }
}

class Child extends Food {
    private $jname="sandwich";
    function newfa(){
        $this->getData($this->jname);
}
}
$ff= new Food();
$ff->getData("vikram Singh");
$ff->showData();
$ffa= new Child();
$ffa->newfa();
$ffa->showData();

?>