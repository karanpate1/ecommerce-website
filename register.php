<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <center>
        <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p class="title">Register</p>
            <div class="input-field">
                <input required="" class="input" type="text" name="username" />
                <label class="label" for="input">Enter Username</label>
            </div>
            <div class="input-field">
                <input required="" class="input" type="password" name="password" />
                <label class="label" for="input">Enter Password</label>
            </div>
            <a href="login.php"><h7>Go back to login page</h7></a>
            <button class="submit-btn" type="submit">Register</button>
        </form>
    </center>

    <?php
    $con = new mysqli("localhost:3310", "root", "", "shop");

    // Check if username and password are provided
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (!empty($username) && !empty($password)) {
        $query = "INSERT INTO `register` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password');";
        if ($con->query($query) === TRUE) {
            echo "Successfully registered";
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
            echo "Error: " . $con->error;
        
        }
    }
    ?>
</body>
</html> 
