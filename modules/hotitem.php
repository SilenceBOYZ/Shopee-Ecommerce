<?php
 $sql_hotitem = "Select * from sanpham, hotitem where idsanpham = idhotitem";
 $load_hotitem = mysqli_query($connect, $sql_hotitem);
?>

<div class="flashsale">
  <div class="container flashsale-wrap hot-item-wrap">
    <div class="flashsale-title">
      <div class="title-flsh">
        <h2 class="mall-tittle">TÌM KIẾM HÀNG ĐẦU </h2>
      </div>
      <a class="flash-link" href="http://">Xem Tất Cả ></a>
    </div>

    <div class="item-flashsale hot-item">
    <?php 
      for ($i = 1; $i <= 6; $i++) {
      $row = mysqli_fetch_array($load_hotitem);
    ?>
      <div class="item-fls hot-item">
        <a class="link-item-hot" href="http://">
          <img class="fls-img" src="admin/modules/sanpham/upload/<?php echo($row["hinhanhsanpham"]); ?>" alt="">
          <p class="content-item-hot">Bán <?php echo($row["daban"]);?>+ / tháng</p>
          <img class="hot-icon" src="img/topicon.png" alt="" srcset="">
        </a>
        <p class="fls-price hot-item-tittle"><?php echo($row["tensanpham"]); ?></p>
      </div>
      <?php }?>
    </div>
    <button class="next-btn"><a href="http://">></a></button>
  </div>
</div>