<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = '<span style="color:red;">Email or Password already exists!</span>';
   }else{
      if($pass != $cpass){
         $error[] = '<span style="color:red;">Password not matched!</span>';
      }else{
         $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--custom style-->
    <link href="css/style.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>

    <!--  Google  Fonts (regular montserrat)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Google  Font (700 montserrat) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="" method="post"
            style="display: flex; align-items:center; justify-content:center; height: 100vh; flex-direction:column; width: 50%; margin: auto; gap: 20px;">
            <h2 class="text-center">Sign Up</h2>
            <?php
         if(isset($error)){
            foreach($error as $error){
               echo ''.$error.'</span>';
            }
         }
      ?>
            <input type="email" name="usermail" placeholder="Email" class="form-control input-field" required>
            <input type="password" name="password" placeholder="Password" class="form-control input-field" required>
            <input type="password" name="cpassword" placeholder="Retype password" class="form-control input-field"
                required>
            <!-- <button class="btn btn-lg btn-primary btn-block" type="submit"></button> -->
            <input type="submit" value="Submit" class="btn btn-lg btn-primary btn-block" name="submit">
            <p>Have an account?<a href="login_form.php"> Login</a></p>
        </form>
    </div>

</body>

</html>