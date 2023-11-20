<?php
$sql_linkchinhsach = "select * from footerlink where (idlink >1 and idlink <=10) and trangthai = 'footer'";
$sql_shopee = "select * from footerlink where idlink >11 and trangthai = 'footer'";


$load_loadchinhsach = mysqli_query($connect, $sql_linkchinhsach);
$load_shopee = mysqli_query($connect, $sql_shopee);


?>

<footer class="footer">
  <div class="container footer-wrap">
    <div class="footer-information">
      <h4 class="information-title">CHĂM SÓC KHÁCH HÀNG</h4>
      <ul>
        <?php while ($row = mysqli_fetch_array($load_loadchinhsach)) {

        ?>
          <li><a class="link-footer" href="#"><?php echo ($row["tenlink"]) ?></a></li>
        <?php } ?>
      </ul>
    </div>

    <div class="footer-information">
      <h4 class="information-title">VỀ SHOPEE</h4>
      <ul>
        <?php while ($row2 = mysqli_fetch_array($load_shopee)) {

        ?>
          <li><a class="link-footer" href="#"><?php echo ($row2["tenlink"]); ?></a></li>
        <?php } ?>
      </ul>
    </div>

    <div class="footer-information">
      <div class="credit-cards">
        <h4 class="information-title">Thanh Toán</h4>
        <div class="card-item">
          <a href="http://"><img class="card-link" src="../img/card-item/visa.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard2.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard3.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard4.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard5.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard6.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard7.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/card-item/creditcard8.png" alt="" srcset=""></a>
        </div>
      </div>

      <div class="logistic">
        <h4 class="information-title">Đơn vị vận chuyển</h4>
        <div class="card-item">
          <a href="http://"><img class="card-link" src="../img/logictist/deliver1.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver2.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver3.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver4.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver5.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver6.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver7.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver8.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver9.png" alt="" srcset=""></a>
          <a href="http://"><img class="card-link" src="../img/logictist/deliver10.png" alt="" srcset=""></a>
        </div>
      </div>
    </div>

    <div class="footer-information">
      <h4 class="information-title">Theo dõi chúng tôi trên</h4>
      <div class="footer-socialMedia">
        <a class="icon-link" href="http://">
          <p class="icon-media"><ion-icon name="logo-facebook"></ion-icon></p>
          <h5>Facebook</h5>
        </a>

        <a class="icon-link" href="http://">
          <p class="icon-media"><ion-icon name="logo-instagram"></ion-icon></p>
          <h5>Instagram</h5>
        </a>

        <a class="icon-link" href="http://">
          <p class="icon-media">
            <ion-icon name="logo-linkedin"></ion-icon>
          </p>
          <h5>LinkedIn</h5>
        </a>
      </div>
    </div>

    <div class="footer-information">
      <h4 class="information-title">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</h4>
      <div class="footer-app">
        <div class="qr-code">
          <a class="qr-code-link" href="http://"><img class="qr-image" src="../img/footer-app/qrcode.png" alt=""></a>
        </div>
        <div class="phone-app">
          <a class="app-link" href="http://"><img class="app-image" src="../img/footer-app/gallery.png" alt="" srcset=""></a>
          <a class="app-link" href="http://"><img class="app-image" src="../img/footer-app/googleplay.png" alt="" srcset=""></a>
          <a class="app-link" href="http://"><img class="app-image" src="../img/footer-app/appstore.png" alt="" srcset=""></a>
        </div>
      </div>
    </div>
  </div>


</footer>