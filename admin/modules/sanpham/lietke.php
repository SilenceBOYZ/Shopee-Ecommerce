<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_sanpham = "Select * from sanpham, danhmuc where iddanhmuc = danhmucsanpham";
  $load_sanpham = mysqli_query($connect, $sql_sanpham);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Số lượng bán</td>
        <td>Danh mục sản phẩm</td>
        <td>Hình ảnh sản phẩm</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_sanpham)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idsanpham"]);?></td>
        <td><?php echo($row["tensanpham"]);?></td>
        <td><?php echo($row["gia"]);?></td>
        <td><?php echo($row["soluongban"]);?></td>
        <td><?php echo($row["tendanhmuc"]);?></td>
        <td><img style="width: 50%" src="modules/sanpham/upload/<?php echo ($row['hinhanhsanpham']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/sanpham/xuly.php?id=<?php echo($row["idsanpham"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlsanpham&ac=sua&id=<?php echo($row["idsanpham"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>