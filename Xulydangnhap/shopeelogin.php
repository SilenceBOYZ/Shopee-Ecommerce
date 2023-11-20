<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/loginstyle.css" />
  <link rel="stylesheet" href="../css/icofont.min.css" />
  <link rel="stylesheet" href="../css/style.css" />

  <title>Trang Đăng nhập</title>
</head>

<body>
  <?php include("../config.php"); ?>
  <header class="header">
    <div class="container wrap-header">
      <img src="../admin/img/shopeelogo.png" alt="" srcset="" />
      <section class="login-title">
        <h2>Chào mừng bạn đến trang đăng nhập</h2>
        <p>Đăng nhập để nhận được nhiều ưu đãi của chúng tôi</p>
      </section>
    </div>
  </header>

  <main class="login-content">
    <div class="container container-login">
      <img src="../img/banner/banner-shopee-4-2.jpg" alt="" srcset="" />
      <div class="form-login">
        <form class="form-login" action="xulydangnhap.php" method="post" enctype="multipart/form-data">
          <h2>Đăng nhập</h2>
          <fieldset class="login-field">
            <input type="text" value="" name="username" placeholder="Tên đăng nhập" />
          </fieldset>

          <fieldset class="login-field">
            <input type="password" value="" name="password" placeholder="Mật khẩu" />
          </fieldset>

          <fieldset class="login-field">
            <input type="submit" value="Đăng nhập" name="dangnhap" />
          </fieldset>

          <div class="straight-line">
            <hr />
            <span>Hoặc</span>
            <hr />
          </div>
          <div class="social-link">
            <a class="social-media" href="http://"><i class="icofont-facebook icofont-css"></i>Facebook</a>
            <a class="social-media" href="http://"><i class="icofont-google-plus"></i>Google</a>
          </div>

          <h3 href="http://"><a class="link-signup" href="shopeesignup.php">Đăng Ký</a> nếu bạn chưa là thành viên của chúng tôi</h3>

          <?php
          if (isset($_SESSION['flat']) == 1) {
          ?>
            <p class="notice">
              <?php
              if (isset($_SESSION['notice'][0])) {
                echo $_SESSION['notice'][0];
              }
              ?>
            <?php
          }
          session_destroy();
            ?>
            </p>
        </form>
      </div>
    </div>
  </main>

  <?php
  include("../modules/xulydangnhap/footer.php");
  ?>
</body>

</html>