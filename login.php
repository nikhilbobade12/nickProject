<?php 
define("emailPattern","/^[a-zA-Z\.]{3,}+[0-9\.]*[a-zA-Z\.]*@.[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/");
define("PasswordPattern","/^[a-zA-Z0-9]{5,10}+$/");
if(isset($_POST['submit']))
{
    if(!preg_match(emailPattern,$_POST['email']) || !preg_match(PasswordPattern,$_POST['password']))
    {
        echo"<script>alert('invalid email! or password!')</script>";
    }else{
        echo"<script>alert('successful!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<link rel="stylesheet" href="signup.css">
<body>
    <div class="login">
    <h1>Login</h1>
    <form action="#" method="POST">
        <label for="">Email</label>
        <input type="email" name="email"  placeholder="">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="">
        <input type="submit" id="button" name="submit" value="submit">
    </form>
    </div>
    <p class="p1">Not have an account? <a href="signup.php">Sign Up Here</a></p>
</body>
</html>