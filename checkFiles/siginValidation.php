<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "travelagency");
} catch (Exception $exception) {
    echo $exception;
}
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($link,$query);
if ($result->num_rows > 0)
{
    $_SESSION['active']=true;
    $_SESSION['email']=$email;
    $_SESSION['successLogin']=true;
    header("Location: http://localhost/travelAgency/index.php");
}
else
{
    $_SESSION['invalidSignin']=true;
    header("Location: http://localhost/travelAgency/login.php");
}
?>