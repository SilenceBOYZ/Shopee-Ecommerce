<header class="header">
  <div class="container">
    <div class="information-link">
      <div class="header-link">
        <ul class="list-link">
          <li>
            <a href="" class="link">Kênh người bán</a>
            <span class="straight-line"></span>
          </li>
          <li>
            <a href="" class="link">Trở thành người bán shoppee</a>
            <span class="straight-line"></span>
          </li>
          <li>
            <a href="" class="link">Tải ứng dụng</a>
            <span class="straight-line"></span>
          </li>
          <li>
            <span href="" class="link">Kết nối</span>
            <a href="http://"><ion-icon name="logo-facebook"></ion-icon>
            </a> <a href="http://"><ion-icon name="logo-instagram"></ion-icon></a>
          </li>
        </ul>
      </div>
      <div class="support-link">
        <ul class="list-link lst-linkFix">
          <li class="list-notice"><a class="sp-link" href="" class="link">
              <ion-icon name="notifications-outline"></ion-icon>
              Thông báo
            </a>
            <div class="notice-board">
              <div class="content-board">
                <img class="content-img" src="img/profile.png" alt="" srcset="">
                <?php
                if (isset($_SESSION['flat']) == 1) {
                ?>
                  <h3 class="content-title">Chào mừng bạn <b><?php echo $_SESSION['account'][0]; ?></b></h3>
                <?php
                } else {
                ?>
                  <h3 class="content-title">Hãy cho em điểm mười</h3>
                  <div class="signup">
                    <a href="./Xulydangnhap/shopeelogin.php">Đăng Nhập</a>
                    <a href="./Xulydangnhap/shopeesignup.php">Đăng Ký</a>
                  </div>
                <?php
                }
                ?>
              </div>


            </div>
          </li>
          <li><a class="sp-link" href="" class="link"><ion-icon name="help-circle-outline"></ion-icon>Hỗ trợ</a></li>
          <li><a class="sp-link" href="" class="link"><ion-icon name="globe-outline"></ion-icon>Tiếng Việt</a></li>
          <?php
          if (isset($_SESSION['flat']) == 1) {
          ?>
            <li id="username" class="username">
              <?php
              if (isset($_SESSION['account'][0])) {
                echo $_SESSION['account'][0];
              }
              ?>
              <div class="information-account">
                <a href="cart.php?idaccount=<?php echo $_SESSION['id'];?>">Giỏ Hàng</a>
                <a href="Xulydangnhap/logout.php">Đăng Xuất</a>
              </div>
            </li>
          <?php
          } else {
          ?>
            <li>
              <a href="./Xulydangnhap/shopeesignup.php" class="link">Đăng ký</a>
              <span class="straight-line stline-fix"></span>
            </li>
            <li><a href="./Xulydangnhap/shopeelogin.php" class="link">Đăng nhập</a></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</header>

