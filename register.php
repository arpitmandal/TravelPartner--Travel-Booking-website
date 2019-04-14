<?php
    echo "Redirecting to home page";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
	$conn=mysqli_connect('localhost','root','','project');
	$query="INSERT INTO users (username, email, password, contact) 
    values('$username','$email','$password','$contact')";
    echo mysqli_query($conn,$query);
?>