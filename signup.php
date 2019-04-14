<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up-TravelPartner</title>
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="assets/css1/style.css">
      <script src="assets/js/validate.js"></script>
</head>

<body>

    <div class="wrapper">
        <form class="signup" action="index.html">
            <button class="btn btn-lg btn-secondary btn-block" type="submit">HOME</button>
          </form>
    <form method="POST" action="#" class="form-signin">       
      <h2 class="form-signin-heading">Please Sign Up</h2>
      <pre>
      <input type="text" class="form-control" name="username" id="id1" placeholder="Enter your User Name" required/><br>
      <input type="email" class="form-control" name="email" id="id2" placeholder="Enter your Email" required/><br>
      <input type="password" class="form-control" name="password" id="id3" required placeholder="Enter your Password" minlength="6" />
      <input type="password" class="form-control" name="password" id="id4" required placeholder="Confirm your Password" minlength="6"/>
      <input type="text" class="form-control" name="contact" id="id5" required placeholder="Enter your Phone Number" minlength="10"/>   
      <input class="btn btn-lg btn-primary btn-block" id="id6" name="btn" type="submit" value="Sign-In"></button>
      </pre>
    </form>
    <form class="signup" action="signin.php">
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Log In</button>
    </form>
  </div>
  
  <div class="copyright">
      <p style="text-align:center">&copy; Copyright 2018</p>
    </div>

</body>

</html>

<?php
if(isset($_POST["btn"]))
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $contact=$_POST["contact"];

    include("connect.php");
    $sql="insert into users (username,email,password,contact) values('".$username."','".$email."','".$password."','".$contact."')";
    $n=mysqli_query($con,$sql);
    if($n==1)
    {
        echo "<script>alert('User Registered Sucessfully')</script>";
        echo "<script>window.location.href='index.html'</script>";
    }
}

?>
