<?php
$sql_hotitem = "Select * from sanpham, hotitem where idsanpham = idhotitem order by rand()";
$load_hotitem = mysqli_query($connect, $sql_hotitem);
?>

<div class="flashsale">
  <div class="container flashsale-wrap">
    <div class="flashsale-title">
      <div class="title-flsh">
        <img class="flashsale-img" src="img/flashsale.png" alt="" srcset="">
        <div class="count-clock">00</div>
        <div class="count-clock">04</div>
        <div class="count-clock">06</div>
      </div>
      <a class="flash-link" href="http://">Xem Tất Cả ></a>
    </div>

    <div class="item-flashsale">
      <?php
      for ($i = 1; $i <= 6; $i++) {
        $row = mysqli_fetch_array($load_hotitem);
      ?>
        <div class="item-fls">
          <img class="fls-img" src="admin/modules/sanpham/upload/<?php echo ($row["hinhanhsanpham"]); ?>" alt="">
          <p class="fls-price"><sup>đ</sup> <?php echo number_format(($row["gia"]), 0, ",")   ; ?> đ</p>
          <p class="value-item">Đã Bán</p>
        </div>
      <?php } ?>
    </div>
    <button class="next-btn"><a href="http://">></a></button>
  </div>
</div>


