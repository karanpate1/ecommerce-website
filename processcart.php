


<?php
include 'connections.php';

$name=$_GET['id'];
$table_use=$_GET['table_use'];

if($table_use=="electronics1")
{$x="location:main.php";}

if($table_use=="fashion")
{$x="location:main2.php";}

if($table_use=="painting")
{$x="location:main3.php";}


$sql1="SELECT * FROM `$table_use` WHERE  `pr_name`='$name'";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();
$pr_price=$row1['pr_price'];
$pr_image=$row1['pr_image'];

$sql2="INSERT INTO `cart` (`pr_name`, `pr_price`, `pr_image`) VALUES ('$name','$pr_price','$pr_image');";

if($conn->query($sql2))
{
    header($x);
}




?>