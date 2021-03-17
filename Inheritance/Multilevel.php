<?php 
 class Parents{
     function Parentsfucn(){
         echo " I am Parent ";
     }
 }
  class Child1 extends Parents{
     function Child1fucn(){
         echo " I am Child1 ";
     }
 }
 class Child2 extends Child1{
     function Child2fucn(){
         echo " I am Child2 ";
     }
 }

$child2 = new Child2();
$child2->Parentsfucn();


?>