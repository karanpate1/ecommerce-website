<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #del {
            border-radius: 5px;
            background-color:#e64c3e;
            color: white;

        }
        #add {
            border-radius: 5px;

            background-color:#4154bf;
            color: white;
        }
        </style>
</head>





<body>





<table border="1" >
    <tr>
        <td>name</td>
        <td>price</td>
        <td>discription</td>
        <td>image</td>
        <td>action</td>
    </tr>


    <?php
    echo $_GET['id'];
    $table_use=$_GET['id'];
    include 'connections.php';
    $sql="SELECT * FROM $table_use";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
    ?>

    <tr>

        <td><?php echo $row['pr_name']; ?></td>
        <td><?php echo $row['pr_price']; ?></td>
        <td><?php echo $row['pr_discription']; ?></td> 
        <td><img src="<?php echo $row['pr_image']; ?>" width="50" height="50"></td>  
        <td><a href="delete_electronics.php?id=<?php echo $row['pr_name'];?>&table_use=<?php echo $table_use;?>"><button id="del">delete</button></a>
        
        
        
        
    </tr>
    
 


    <?php
    }
    }
    ?>




</table>
<br>


<a href="productupdate.php?id=<?php echo $table_use; ?>"><button id="add">Add NEW ITEM</button></a>   




</body>






</html>