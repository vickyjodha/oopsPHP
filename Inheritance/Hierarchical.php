<?php 
class Parents {
    function ParentFund(){
        echo "I am Prents ";
    }
}
class ChildA extends Parents {
    function ChildAFund(){
        echo "I am ChildA ";
    }
}
class ChildB extends Parents {
    function ChildBFund(){
        echo "I am ChildB ";
    }
}
$ChildA= new ChildA();
$ChildA->Parentfun();
$ChildB= new ChildB();
$ChildB->Parentfun();

?>
