<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql=" delete from `crud` where id=$id";
    $ruselt=mysqli_query($con,$sql);
    if($ruselt){
       // echo "deleted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

$sql
?>