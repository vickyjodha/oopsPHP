<?php 
// class Student{
//   private $break,$data;  
//   function getData($name,$rollno){
//       $this->name=$name;
//       $this->rollno=$rollno;
//   }
//   function showData(){
//       echo "<h1>My name this is    $this->name </h1> ";
//       echo "<h2>My Rollnumber this is  $this->rollno </h2>";
//   }
// }
// $st = new Student();
// $st->getData("Vikram singh","18ERCCS202");
// $st->showData();
class Student{
 private $name,$adders,$contact_no;
 function getData($name,$number,$adders){
   $this->name=$name;
   $this->contact_no=$number;
   $this->adders=$adders;
 }
 function showData(){
   echo "name $this->name";
 }
}
$vikram = new Student();
$vikram->getData("vikram singh","8696993716","khamiyad");
$vikram->showData();
?>
