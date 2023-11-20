<?php
$sql_slidermall = "Select * from slidermall order by rand()";
$sql_mall = "Select * from mall order by rand()";
$load_slidermall = mysqli_query($connect, $sql_slidermall);
$load_mall = mysqli_query($connect, $sql_mall);
$row_count = mysqli_num_rows($load_slidermall);

?>

<div class="flashsale">
  <div class="container flashsale-wrap mall-wrap">
    <div class="flashsale-title title-mall">
      <div class="title-flsh">
        <a href="" class="mall-tittle">SHOPEE MALL <span class="straight-line line-color"></span></a>
        <ul class="list-mall">
          <li><ion-icon style="color:red;" name="return-up-back-outline"></ion-icon> 7 Ngày Miễn Phí Trả Hàng </li>
          <li><ion-icon style="color:red"  name="shield-checkmark-outline"></ion-icon>Hàng Chính Hãng 100%</li>
          <li><ion-icon style="color:red" name="bus-outline"></ion-icon>Miễn Phí Vận Chuyển</li>
        </ul>
      </div>
      <a class="flash-link mall-link" href="http://">Xem Tất Cả ></a>
    </div>

    <div class="mall-item">
      <div class="mall-items">
        <div class="ml-items ml-items1 ">
          <div id="carouselExampleDark" class="carousel carousel-dark slide slider-img">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <?php for ($i = 1; $i <= $row_count; $i++) {
                $row = mysqli_fetch_array($load_slidermall);
                if ($i == 1) { ?>
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="admin/modules/slidermall/upload/<?php echo ($row["hinhanh"]); ?>" class="d-block w-100 mall-slide" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                  </div>
                <?php } else { ?>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/bannermall/<?php echo ($row["hinhanh"]); ?>" class="d-block w-100 mall-slide" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                <?php }
              } ?>
                  </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="ml-items ml-items2">
          <div class="item2-detail">
          <?php for ($i = 1; $i <= 8; $i++) {
            $row2 = mysqli_fetch_array($load_mall);  
          ?>
            <a class="brand-image" href="http://">
              <img src="admin/modules/shopeemall/upload/<?php echo($row2 ["hinhanhmall"]); ?>" alt="">
              <p class="brand-tittle"><?php echo($row2 ["tenmall"]); ?></p>
            </a>
          <?php 
          }
          ?>
          </div>
          <button class="next-btn btn-brand"><a href="http://">></a></button>
        </div>
      </div>
    </div>
  </div>
</div>