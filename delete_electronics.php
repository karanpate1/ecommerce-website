<?php
include 'connections.php';

$name=$_GET['id'];
$table_use=$_GET['table_use'];

$sql="DELETE FROM `$table_use` WHERE  `pr_name`='$name'";
if(mysqli_query($conn,$sql))
{
    header("location:handle_everything.php");
}




?>