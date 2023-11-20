<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_banner = "Select * from banner";
  $load_banner = mysqli_query($connect, $sql_banner);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/banner/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên navbar</td>
        <td>Hình ảnh banner</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_banner)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idbanner"]);?></td>
        <td><?php echo($row["tenbanner"]);?></td>
        <td><img src="modules/banner/upload/<?php echo ($row['hinhanhbanner']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/banner/xuly.php?id=<?php echo($row["idbanner"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlbanner&ac=sua&id=<?php echo($row["idbanner"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>