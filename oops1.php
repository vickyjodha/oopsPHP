<?php
class Student{
    private $name,$contact_no;
    function getDetails($n,$c){
        $this->name=$n;
        $this->contact_no =$c;
    }
    function showDetails(){
        echo $this->name;
    } 
}
$stu = new Student();
$stu->getDetails("vikram singh","8696993716");
$stu->showDetails();
?>