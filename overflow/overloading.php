<?php

class Additions {
    function Add($num1,$num2){
        echo($num1+$num2);
    }
    function Add($num1,$num2,$num3){
        echo($num1+$num2+$num3);
    }
}
$add = new Additions();
$add->Add(5,6);
?>