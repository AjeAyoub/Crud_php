<?php 

$con = new mysqli('localhost','root','','crud_adduser');
   if(!$con){
    die(mysqli_error($con));
        
    }
 
?>