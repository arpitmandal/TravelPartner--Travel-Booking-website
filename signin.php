<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login-TravelPartner</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="assets/css1/style.css">

  
</head>

<body>

    <div class="wrapper">
        <form class="signup" action="index.html">
            <button class="btn btn-lg btn-secondary btn-block" type="submit">HOME</button>
          </form>
      <form action="">
      </form>
    <form method="POST" action="#" class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="User Name" required="" autofocus="" />
      <br>
      <br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Login</button> 
    </form>
    <form class="signup" action="signup.php">
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Join Us</button>
    </form>
  </div>
  <div class="copyright">
      <p style="text-align:center">&copy; Copyright 2018</p>
  </div>
  <?php
    if(isset($_POST["btn"]))
    {
      $username=$_POST["username"];
      $password=$_POST["password"];
      
      include("connect.php");
      $sql="select * from users where username='". $username. "'
      and password='". $password. "'";
      $rs=mysqli_query($con,$sql);
      if(mysqli_num_rows($rs)==1)
      {
        session_start();
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        header("location:main.html");
      }
      else
      echo "<script>alert('Invalid Username Or Password')</script>";
      echo "<script>window.location.href='signin.php'</script>";
  
    }
    
  ?>
</body>

</html>
