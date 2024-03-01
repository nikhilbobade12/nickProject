<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    $name=$_POST['first'];
    echo"<script>alert('form submitted!')</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
       <h4>It's free and only takes a minute</h4>
       <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="">First Name</label>
        <input type="text" name="first" placeholder="" value="<?php if(isset($name))echo$name;?>">
        <label for="">Last Name</label>
        <input type="text" placeholder="">
        <label for="">Email</label>
        <input type="email"  placeholder="">
        <label for="">Password</label>
        <input type="password" placeholder="">
        <label for="">Confirm Password</label>
        <input type="password" placeholder="">
        <input type="submit" name="submit" id="button" value="submit">
       </form>
        <p>By clicking the sign Up button,you agree to our </p>
        <a href="#">Terms and condition </a> and <a href="#">Policy And privacy</a>
    </div>
    <p class="p1">Already have an account?  <a href="login.php">Login here</a></p>
</body>
</html>