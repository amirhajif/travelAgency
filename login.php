<?php
session_start();
if (isset($_SESSION['invalidSignin']))
{
    echo '<script>alert("نام کاربری یا رمزعبور درست نمی باشد")</script>';
    unset($_SESSION['invalidSignin']);
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Travel gency site" />
  <meta name="keywords" content="تور،مسارفت،تور مسافرتی" />

  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>

<body class="beach-bg">
  <div class="main">
    <p class="sign" align="center">ورود</p>
    <form class="form1" action="checkFiles/siginValidation.php" method="post">
      <input class="un " type="email" name="email"  align="center" placeholder="ایمیل">
      <input class="pass" type="password" name="password"  align="center" placeholder="رمز عبور">
        <button class="submit" align="center" type=submit>ورود</button>
      <p align="center" class="forgot"><a href="signup.php" class="forgot">اکانت ندارید؟برای ثبت نام کلیک کنید</a></p>
    </div>
     
</body>

</html>