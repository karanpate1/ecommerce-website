<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maincss.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
<link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<?php
$table_use="fashion";
include 'connections.php';
$sql="SELECT * FROM $table_use";
$result=$conn->query($sql);
?>


f
<div class="head">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; PERCEPT PURCHASE &nbsp; &nbsp; &nbsp; 
<i class="fa-solid fa-cart-shopping" onclick="window.location.href='cart.php?id=main2'"></i>    </div> 


    
<main>  

<?php

    
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           ?>
     

    <div class="card">
   
        <div class="image">
            <br>    
          <img src="<?php echo $row['pr_image']; ?>" height="240px" width="240px" >

          <div class="discription"> <?php echo $row['pr_discription']; ?></div>
        </div>

         



        <div class="caption">
            <p class="pro_name"><?php echo $row['pr_name']; ?></p>
            <p class="price"><?php echo $row['pr_price']; ?> &#8377;</p>
            
        </div> 
        <div class="btn">
            
            <a href="processcart.php?id=<?php echo $row['pr_name'];?>&table_use=<?php echo $table_use;?>"><button class="btn1">Add to cart</button></a>

        </div>
    </div>
<?php

}
}
?>






    
</main>

<a href="select.php"><center><div class="footer">GO BACK</div></center></a>





</body>
</html>