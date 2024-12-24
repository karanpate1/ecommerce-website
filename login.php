<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>

  <center>
  <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  
  <p class="title">Login</p>
  <div class="input-field">
    <input required="" class="input" type="text" name="username" />
    <label  class="label" for="input" >Enter Username</label> </div>
  <div class="input-field">
    <input required="" class="input" type="password"  name="password"/>
    <label class="label" for="input">Enter Password</label>
  </div>
  
  <a href="register.php">Want to create an account?</a>
  <button class="submit-btn">Sign In</button>
</form></center>    

<?php
$username = $password = "";
$username_err = $password_err = "";

$con = new mysqli("localhost:3310", "root", "", "shop");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error); 

}

$query2 = "SELECT `username`, `password` FROM `register`";
$result2 = $con->query($query2);

$usersnames = array();
$passarr = array();

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $usersnames[] = $row['username'];
        $passarr[] = $row['password'];
    }
}



$checkarr = array();
foreach ($usersnames as $key => $value) {
    $checkarr[$value] = $passarr[$key];
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (trim($_POST["username"])=="admin" && trim($_POST["password"])=="admin") {
        header("Location: handle_everything.php");
            exit;
    }
    else{

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } elseif (!in_array($_POST["username"], $usersnames)) {
        echo "register first";
        die();
    } else {
        $username = trim($_POST["username"]);
    }


    // Check if password is emptyd
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        if ($password == $checkarr[$username]) {
            header("Location: select.php");
            exit;
        } else {
            echo "incorrect password";
        }
    } 
}}
?>

</body>
</html>
