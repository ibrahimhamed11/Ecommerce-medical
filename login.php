<?php
//connect to db 

@include 'config.php';
// require_once("connection.php");
// 1-get data ---->form
// 2-validate----->check users
// 3-session
// $_POST=["email"=>"fffffff"];
session_start();
print_r($_SESSION);



if (!empty($_POST)) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];


    $email = mysqli_query($conn, "SELECT * FROM users");



    foreach ($email as $value) {
        if ($email == $value['email'] && $pass == $value['pass']) {
            $_SESSION["user"] = $value;
         header("Location:admin_page.php");
            echo "your data is corect ";
        }
    }

    // echo "email & password doesn't match";


 } else {

   header("Location:login.php");

} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="wrapper">
        <form class="form-signin" method="post" action="" enctype="multipart/form-data">
            <h2 class="form-signin-heading"> login</h2>
            <input class="form-control" name="email" type="email" placeholder="Email Address" required=""
                autofocus="" />
            <input name="pass" type="password" class="form-control" name="password" placeholder="Password"
                required="" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>

</body>

</html>