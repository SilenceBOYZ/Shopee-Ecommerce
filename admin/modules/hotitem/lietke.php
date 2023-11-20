<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_hotitem = "Select * from hotitem, sanpham where idhotitem=idsanpham";
  $load_hotitem = mysqli_query($connect, $sql_hotitem);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/hotitem/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td >idhotitem</td>
        <td>Số Lượng bán</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_hotitem)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["id"]);?></td>
        <td class="table-id"><?php echo($row["tensanpham"]);?></td>
        <td><?php echo($row["daban"]);?></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/hotitem/xuly.php?id=<?php echo($row["id"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlhotitem&ac=sua&id=<?php echo($row["id"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>