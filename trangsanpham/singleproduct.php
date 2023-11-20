<?php
session_start();
// $_SESSION['id']="";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/query.css" />
  <link rel="stylesheet" href="../css/singleproduct.css" />
  <script src="../js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>Document</title>
</head>

<body>
  <script defer src="../js/script.js"></script>
  <?php
  include("../config.php");
  include("../modules/singlePageHeader/header.php");
  if (isset($_GET["id"])) {
    $idproduct = $_GET["id"];
  }

  $sql_product = "Select * from sanpham where idsanpham = $idproduct";
  $load_product = mysqli_query($connect, $sql_product);
  $row = mysqli_fetch_assoc($load_product);
  $gia = $row["gia"];
  $giatang = $gia + ($gia * 0.3);
  ?>

  <div class="product-wrap">
    <div class="single-product">
      <div class="single-product-img">
        <img src="../admin/modules/sanpham/upload/<?php echo ($row["hinhanhsanpham"]); ?>" alt="" srcset="" />
      </div>

      <div class="single-product-title">
        <h2 class="product-title">
          <span class="like-stamp">Yêu thích</span><?php echo ($row["tensanpham"]); ?>
        </h2>
        <div class="feed-back">
          <div class="like"><span class="value-feedback">4.7</span></div>
          <div class="icon-wrap">
            <div class="star-icon"></div>
            <div class="star-icon"></div>
            <div class="star-icon"></div>
            <div class="star-icon"></div>
            <div class="star-icon"></div>
          </div>

          <div class="comment">
            <span class="value-feedback" style="color: black; border-bottom: 1px solid black">1,3k</span>
            Đánh giá
          </div>

          <div class="comment sold-sg">
            <span class="value-feedback" style="color: black; border-bottom: 1px solid black">3,8k</span>
            Đã bán<ion-icon name="help-circle-outline"></ion-icon>
          </div>

          <a class="report-link" href="http://">Tố Cáo</a>
        </div>

        <div class="sgproduct-price">
          <i class="sg-price"><s><sup>đ</sup><?php echo  number_format(($giatang), 0, ","); ?></s></i>
          <i class="sg-price-final"> <?php echo number_format(($row["gia"]), 0, ","); ?>đ</i>
          <span class="like-stamp icon-sale">Giảm 60%</span>
        </div>

        <?php
        if (isset($_SESSION['flat']) == 1) {
        ?>
          <form action="../cart.php?idaccount=<?php echo $_SESSION['id']; ?>&ac=add" method="post">
            <div class="purchase">
              <p style="font-size: 1.6rem">Số Lượng</p>
              <input id="input-soluong" type="text" name="soluong[<?php echo ($row['idsanpham']); ?>]" value="1" onkeypress="return isNumberKey(event)" maxlength="2" />
            </div>


            <div class="buy-item">
              <div>
                <input class="btn-buy btn-add" type="submit" value="Thêm vào giỏ hàng">
              </div>
              <input class="btn-buy" type="submit" value="Mua Ngay">
            </div>
          </form>
        <?php
        } else {
        ?>
          <div class="purchase">
            <p style="font-size: 1.6rem">Số Lượng</p>
            <input id="input-soluong" type="text" name="soluong[<?php echo ($row['idsanpham']); ?>]" value="1" onkeypress="return isNumberKey(event)" maxlength="2" />
          </div>

          <div class="buy-item">
            <a class="btn-buy btn-add" href="../Xulydangnhap/shopeelogin.php">
              <ion-icon name="cart-outline"></ion-icon> Thêm vào giỏ hàng
            </a>
            <a class="btn-buy" href="../Xulydangnhap/shopeelogin.php">Mua Ngay</a>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>

  <section class="main-content">
    <?php include("productRecommend.php"); ?>
  </section>

</body>

</html>