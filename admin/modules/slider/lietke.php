<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_slider = "Select * from slider";
  $load_slider= mysqli_query($connect, $sql_slider);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/slider/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên slide</td>
        <td>Hình ảnh slide</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_slider)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idslider"]);?></td>
        <td><?php echo($row["tenslide"]);?></td>
        <td><img style="width: 50%" src="modules/slider/upload/<?php echo ($row['hinhanhslide']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/slider/xuly.php?id=<?php echo($row["idslider"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlslider&ac=sua&id=<?php echo($row["idslider"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>