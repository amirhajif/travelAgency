<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "travelagency");
} catch (Exception $exception) {
    echo $exception;
}
mysqli_query($link,"SET NAMES utf8");
$name=$_POST['name'];
$phoneNumber=$_POST['phoneNumber'];
$tour=$_POST['tours'];
$description=$_POST['description'];
$query="INSERT INTO passengers (name,phoneNumber,tour,descript) VALUES ('$name','$phoneNumber','$tour','$description')";
mysqli_query($link,$query);
$_SESSION['submitReserve']=true;
header("Location: http://localhost/travelAgency/index.php");
?>