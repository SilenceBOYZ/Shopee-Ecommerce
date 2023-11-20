<?php
$sql_navbar = "Select * from danhmuc order by rand() limit 0,7";
$load_navbar = mysqli_query($connect, $sql_navbar);
?>

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

    <div class="nav-bar">
      <div class="logo-shopee">
        <img class="image-logo" src="img/shopeelogo.png" alt="" srcset="" />
      </div>

      <div class="search-nav">
        <div class="search-tool">
          <input class="input-search" type="text" name="" value="" placeholder="Đăng ký và nhận voucher bạn mới đến 70k" />
          <button class="btn-search">
            <ion-icon class="icon icon-search" name="search-outline"></ion-icon>
          </button>
        </div>
        <!-- load dữ liệu ở đây -->
        <nav class="nav-bar">
          <ul class="list-link lst-linkFix nav-link">
            <?php
            while ($row = mysqli_fetch_array($load_navbar)) {
            ?>
              <li><a href="catergories.php?id=<?= $row["iddanhmuc"]; ?>" class="link"><?php echo ($row["tendanhmuc"]); ?></a></li>
            <?php } ?>
          </ul>

        </nav>
      </div>

      <?php
      if (isset($_SESSION['flat']) == 1) {
        $sql_cart = "SELECT * FROM sanpham, orderdetail WHERE idsanpham = idproduct and idcart in (SELECT idcart FROM cart, account WHERE id=idaccount AND idaccount ='" . $_SESSION['id'] . "')";
        $load_cart = mysqli_query($connect, $sql_cart);
        $count = mysqli_num_rows($load_cart);
      ?>
        <div class="cart">
          <a href="http://"><ion-icon class="icon" name="cart-outline"></ion-icon></a>
          <div class="notice-board cart-select">
            <div class="content-board cart-tittle product-cartDetail">
              <?php
              if ($count > 0) {
                while ($row = mysqli_fetch_array($load_cart)) {
              ?>
                  <a href="http://" class="product-cart">
                    <img src="admin/modules/sanpham/upload/<?php echo ($row["hinhanhsanpham"]); ?>" alt="" srcset="">
                    <div class="product-priceDetail">
                      <h4><?= $row["tensanpham"]; ?></h4>
                      <p><?= number_format($row["price"], 0, ","); ?></p>
                    </div>
                  </a>
                <?php }
              } else { ?>
                <div class="content-board cart-tittle fixing-cart">
                  <img class="content-img" src="img/cart-item.png" alt="" srcset="">
                  <h3 class="content-title">Hãy chọn đồ của bạn</h3>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="cart">
          <a href="http://"><ion-icon class="icon" name="cart-outline"></ion-icon></a>
          <div class="notice-board cart-select">
            <div class="content-board cart-tittle">
              <img class="content-img" src="img/cart-item.png" alt="" srcset="">
              <h3 class="content-title">Chọn đồ thoải mái</h3>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</header>