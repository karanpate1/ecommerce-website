<?php
include 'connections.php';

$name=$_GET['id'];


$sql="DELETE FROM `cart` WHERE  `pr_name`='$name'";
if(mysqli_query($conn,$sql))
{
    header("location:cart.php");
}




?>