<?php 
  $sql_dichvu = "Select * from dichvu";
  $load_dichvu = mysqli_query($connect,  $sql_dichvu);

?>


<div class="item-collection">
  <?php  for ($i = 1; $i <= 9; $i++) {
      $row = mysqli_fetch_array($load_dichvu);
    ?>
  <a class="item" href="">
    <img class="image-item" src="admin/modules/dichvu/upload/<?php echo ($row["hinhanh"]);?>" alt="" srcset="">
    <p class="item-title">
      <?php echo ($row["tendichvu"]); ?>
    </p>
  </a>
  <?php }?>
</div>