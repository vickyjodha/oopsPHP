<?php 
abstract class  Speak{
   abstract public function Sayhello();
      public function Sayhellow(){
        echo "hello Vikram Singh";
    }
}
class Child1 extends Speak{
    public function Sayhello(){
        echo "hello vikram singh";
    }
}
$new= new Child1();
$new->Sayhello();
?>