<?php
namespace Vikram\Profile{
    class vikram{
        private $user_id,$user_name;
        function getProfile($name,$id){
            $this->user_id=$id;
            $this->user_name=$name;
            
        }
function ShowProfile(){
    echo "<h1>user this  is ".$this->user_id."</h1>";
    echo "<h1>user name this is ".$this->user_name."</h1>";
}
    }
}

$user= new Vikram\Profile\vikram();
?>