<?php
session_start();
if (isset($_SESSION['invalidSignup'])){
    unset($_SESSION['invalidSignup']);
    echo '<script>alert("این نام کاربری موجود هست")</script>';
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
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Sign up</title>
    <script>
        function passCheck(){
            let pass=document.getElementById("password").value;
            let verifypass=document.getElementById("verifypass").value;
            if (pass!==verifypass)
            {
                window.alert("فیلد های رمزعبور را چک کنید");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
  </head>

  <body class="beach-bg2">
    <div class="main">
      <p class="sign" align="center">ثبت نام</p>
      <form class="form1" method="post" action="checkFiles/signupValidation.php" onsubmit="return passCheck()">
        <input name="email"  id="email" class="un" type="email" align="center" placeholder="ایمیل" />
        <input name="phoneNumber" id="phoneNumber"  class="un" type="text" align="center" placeholder="شماره تماس" />
        <input
          name="password"
          id="password"
          class="un"
          type="password"
          align="center"
          placeholder="رمز عبور"
        />
        <input
          id="verifypass"
          class="un"
          type="password"
          align="center"
          placeholder="تایید رمز عبور"
        />
        <button class="submit" align="center" type="submit">ثبت نام</button>
      </form>
    </div>
  </body>
</html>
