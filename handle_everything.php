<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       center {
            margin-top: 250px;
        }

        #del {
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            background-color:;
            color: black;
        }

        #del:hover {
            transform: scale(1.1);
            transition: 0.3s;
        }
        
        .manage{
            padding-top: 50px;
            font-size: 3rem;
            text-align: center;
            margin-left: 43%;
        }

    </style>
</head>
<body>

<label class="manage">MANAGE</label>


<center >
<br>
<a href="handle_electronics.php?id=fashion"><button id="del">fashion</button></a>    
<a href="handle_electronics.php?id=electronics1"><button id="del">electronics</button></a>
<a href="handle_electronics.php?id=painting"><button id="del">grocery</button></a>



</center>







</body>
</html>