<?php
  $sql_product = "Select * from sanpham order by rand() limit 0,6";
  $load_product = mysqli_query($connect, $sql_product);
  mysqli_set_charset($connect, "UTF8");
?>

<div class="sales fix-sales">
  <div class="container sales-product">
    <h3 class="title-sale">Sản phẩm liên quan</h3>
    <div class="product-item">
      <?php 
        while($row = mysqli_fetch_array($load_product)) {
      ?>
      <a class="item-sales" href="singleproduct.php?id=<?php echo ($row["idsanpham"]);?>">
        <img class="product-image" src="../admin/modules/sanpham/upload/<?php echo ($row["hinhanhsanpham"]) ?>" alt="" srcset="">
        <div class="product-detail">
          <h4 class="product-tittle"><?php echo ($row["tensanpham"]) ?></h4>
          <div class="price">
            <p class="price"><sub><u>đ</u></sub><?php echo ($row["gia"]) ?></p>
            <p class="sold"><?php echo ($row["soluongban"]) ?></p>
          </div>
          <div class="find-product">Tìm Sản Phẩm Tương Tự</div>
          
        </div>
        <!-- <p class="discount">Yêu thích</p> -->
      </a>
      <?php } ?>
    </div>
  </div>
</div>