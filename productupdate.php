<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productupdate.css">
</head>
<body>
    
<div class="container">
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Product name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product price</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="price" placeholder="price..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
        <!-- <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select> -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Product discription</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="discription" placeholder="discription.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product image</label>
      </div>
      <div class="col-75">
      <input type="file" name="uploadfile">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>


<?php
$category=$_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($category=="electronics1"){
        $_folder_="electronics";
    }
    else{
    $_folder_=$category;}
        if (isset($_FILES['uploadfile'])) {
            $folder =$_folder_. "/"; // Make sure this folder exists and is writable
        // if($_POST['category']=='electronics'){
        //     $category = "electronics1";
        // }
        // else if($_POST['category']=='fashion'){
        //     $category = "fashion";
        // }

            $file_path = $folder . basename($_FILES["uploadfile"]["name"]);
            $filename=$_FILES["uploadfile"]["name"];
            $tempname=$_FILES["uploadfile"]["tmp_name"];
            $imgpath=$_folder_."/".$filename;
     
            move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path);
        }}

    // echo "<img src='images/$filename' height='100px' width='100px' >";
   
    

    $conn=new mysqli("localhost:3310","root","","shop");
    
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $discription=$_POST['discription'];
        $sql="INSERT INTO `".$category."` (`pr_name`, `pr_price`, `pr_image`, `pr_discription`) VALUES ('$name', '$price', '$imgpath', '$discription');";
        $result=$conn->query($sql);
        
        if($result){
            header("Location: handle_everything.php");
            exit;
        }
    }
   ?>

</body>
</html>

