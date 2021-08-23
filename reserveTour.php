<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Travel gency site" />
    <meta name="keywords" content="تور،مسارفت،تور مسافرتی" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />

    <title>رجا سفر</title>
  </head>
  <body>
    <nav id="navbar" class="bg-dark">
      <h1 class="log">
        <a href="#"><span class="text-primary">رجا</span>سفر</a>
      </h1>
      <ul>
        <li>
          <a href="index.php"
            ><span> خانه </span><i class="fas fa-home"></i
          ></a>
        </li>
        <li>
            <a
                <?php
                if (isset($_SESSION['active']))
                {
                    ?>
                    href="reserveTour.php"
                    <?php
                }

                else{
                    ?>
                    href="login.php"
                    <?php
                }
                ?>

            >
              <span>
                  <?php
                  if (isset($_SESSION['active']))
                  {
                      ?>
                      شروع سفر
                      <?php
                  }

                  else{
                      ?>
                      ورود/ثبت نام
                      <?php
                  }
                  ?>
              </span>

                <i class="fas fa-user"></i
                ></a>
        </li>
        <li>
          <a href="checkFiles/logout.php"><span> خروج </span><i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </nav>

    <section id="reserve" class="py-2">
      <div class="reserve-form">
        <hr class="seperator" />
        <br />
        <h2 class="text-center">رزرو تور</h2>
        <br />
        <hr class="seperator" />
        <br>

        <form action="checkFiles/reserveProcess.php" method="post">
          <div class="form-group">
            <label for="name">نام و نام خانوادگی</label>
            <input type="text" id="name" name="name" class="rtl" required />
          </div>
          <br>
          <div class="form-group">
            <label for="phoneNumber">شماره تماس</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required />
          </div>
          <br>
          <div class="form-group">
            <label for="tours">انتخاب تور</label>

            <select name="tours" id="tours" required>
              <option selected disabled value="">-- انتخاب تور --</option>
              <option value="jungle">جنگل گردی</option>
              <option value="dessert">کویر گردی</option>
              <option value="mountain">کوه نوردی</option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="name">نکته خاص یا توضیحات(اختیاری)</label>
            <textarea class="rtl" rows=5 name="description"></textarea>
          </div>
          <br>
          <button class="btn" type="submit">ارسال</button>
        </form>
      </div>
    </section>

    <footer class="bg-dark py-2 my">
      <div id="main-footer" class="container">
        <div>
          <p>Copyright &copy; 2021</p>
        </div>
        <div>
          <i class="fab fa-instagram fa-2x"></i>
          <i class="fab fa-telegram fa-2x"></i>
          <i class="fab fa-twitter fa-2x"></i>
          <i class="fab fa-facebook-square fa-2x"></i>
        </div>
      </div>
    </footer>
  </body>
</html>
