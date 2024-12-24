<?php

$conn=new mysqli("localhost:3310","root","","shop");

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>