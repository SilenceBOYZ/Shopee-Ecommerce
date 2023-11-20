<?php
  $sql_danhmuc = "Select * from danhmuc order by rand() limit 0,20";
  $load_danhmuc = mysqli_query($connect, $sql_danhmuc);
?>



<div class="container catergories-wrap">
  <div class="catergories">
    <h2 class="catergories-tittle">DANH MỤC</h2>
    <div class="catergories-item">
      <?php
        for($i = 1; $i <=20; $i++){
          $row=mysqli_fetch_array($load_danhmuc);
      ?>
      <a class="ctg-item" href="catergories.php?id=<?= $row["iddanhmuc"]; ?>">
        <img class="ctg-img" src="admin/modules/danhmuc/upload/<?php echo($row["hinhanhdanhmuc"]); ?>" alt="" srcset="">
        <p class="ctg-tittle"><?php echo($row["tendanhmuc"]); ?></p>
      </a>
      <?php } ?>
    </div>
    <button class="next-btn"><a href="http://">></a></button>
  </div>
</div>