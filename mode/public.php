<?php 
 class Food {
     public $Fname;
     
     function showData(){
         echo "Item is ".$this->Fname."<br>";
     }
 }
 $name=new Food();
 $name->Fname="Apple";
 $name->showData();

?>