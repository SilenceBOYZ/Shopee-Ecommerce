<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_slidermall = "Select * from slidermall";
  $load_slidermall= mysqli_query($connect, $sql_slidermall);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/slidermall/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên slide mall</td>
        <td>Hình ảnh slide</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_slidermall)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idmall"]);?></td>
        <td><?php echo($row["tenslide"]);?></td>
        <td><img style="width: 50%" src="modules/slidermall/upload/<?php echo ($row['hinhanh']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/slidermall/xuly.php?id=<?php echo($row["idmall"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlslidermall&ac=sua&id=<?php echo($row["idmall"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>