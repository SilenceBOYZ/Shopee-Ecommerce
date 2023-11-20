<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_mall = "Select * from mall";
  $load_mall = mysqli_query($connect, $sql_mall);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/shopeemall/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên Mall</td>
        <td>Hình ảnh mall</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_mall)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idmall"]);?></td>
        <td><?php echo($row["tenmall"]);?></td>
        <td><img style="width: 50%" src="modules/shopeemall/upload/<?php echo ($row['hinhanhmall']); ?>" alt="" srcset=""></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/shopeemall/xuly.php?id=<?php echo($row["idmall"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlshopeemall&ac=sua&id=<?php echo($row["idmall"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>