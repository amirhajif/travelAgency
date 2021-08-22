<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "travelagency");
} catch (Exception $exception) {
    echo $exception;
}
$email=$_POST['email'];
$query="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($link,$query);
if ($result->num_rows > 0){
$_SESSION['invalidSignup']=true;
header("Location: http://localhost/travelAgency/signup.php");
}
else{
    $phoneNumber=$_POST['phoneNumber'];
    $password=$_POST['password'];
    $_SESSION['active']=true;
    $_SESSION['email']=$email;
    $query="INSERT INTO users (email,phoneNumber,password) VALUES ('$email','$phoneNumber','$password')";
    mysqli_query($link,$query);
    $_SESSION['successSignup']=true;
    header("Location: http://localhost/travelAgency/index.php");
}

?>
