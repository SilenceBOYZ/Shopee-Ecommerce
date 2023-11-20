<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_dichvu = "Select * from dichvu";
  $load_dichvu = mysqli_query($connect, $sql_dichvu);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/dichvu/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên dịch vụ</td>
        <td>Hình ảnh dịch vụ</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_dichvu)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["iddichvu"]);?></td>
        <td><?php echo($row["tendichvu"]);?></td>
        <td><img style="width: 50%" src="modules/dichvu/upload/<?php echo ($row['hinhanh']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/dichvu/xuly.php?id=<?php echo($row["iddichvu"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qldichvu&ac=sua&id=<?php echo($row["iddichvu"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>