<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted"> </div>
                        </div>
                    </div>    
                   



                    <?php
                    include 'connections.php';
                    $table_use="cart";
                    $total=0;
                    $item=0;
                    $sql="SELECT * FROM $table_use";
                    $result=$conn->query($sql);
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            $total=$total+$row["pr_price"];
                            $item=$item+1;
                    ?>
                  
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo $row["pr_image"]; ?>" height="100px" width="100px"></div>
                            <div class="col">
                                <div class="row"><?php echo $row["pr_name"]; ?></div>
                            </div>
                            <!-- <div class="col">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div> -->
                            &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;
                            <div class="col">&#8377; <?php echo $row["pr_price"]; ?>
                             
                             <a href="deletecart.php?id=<?php echo $row['pr_name'];?>"><span class="close">&#10005;</span></a>
                             </div>
                        </div>
                    </div>
                    
                    

                    <?php
                        }
                    }
                    ?>








                    <div class="back-to-shop"><a href="select.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                    
                        <div class="col" style="padding-left:0;">&nbsp; ITEMS <?php echo $item; ?></div>
                        <div class="col text-right">&nbsp; </div>
                    </div>
                    <form>
                        
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&#8377; <?php echo $total; ?></div>
                    </div>
                             
                     <a href="checkout.php?id=<?php echo $total;?>&items=<?php echo $item;?>"><button class="pay">PAY</button>  </a>


                </div>
            </div>
            
        </div>


        
    
</body>
</html>