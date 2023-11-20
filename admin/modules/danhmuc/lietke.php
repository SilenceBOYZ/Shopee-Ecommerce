<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_danhmuc = "Select * from danhmuc";
  $load_danhmuc = mysqli_query($connect, $sql_danhmuc);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/danhmuc/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên danh mục</td>
        <td>Hình ảnh danh mục</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_danhmuc)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["iddanhmuc"]);?></td>
        <td><?php echo($row["tendanhmuc"]);?></td>
        <td><img style="width: 50%" src="modules/danhmuc/upload/<?php echo ($row['hinhanhdanhmuc']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/danhmuc/xuly.php?id=<?php echo($row["iddanhmuc"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qldanhmuc&ac=sua&id=<?php echo($row["iddanhmuc"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>