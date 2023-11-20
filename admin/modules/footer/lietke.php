<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_footer = "Select * from footerlink";
  $load_footer = mysqli_query($connect, $sql_footer);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/footer/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên navbar</td>
        <td>Trạng thái</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_footer)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idlink"]);?></td>
        <td><?php echo($row["tenlink"]);?></td>
        <td><?php echo($row["trangthai"]);?></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/footer/xuly.php?id=<?php echo($row["idlink"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlfooter&ac=sua&id=<?php echo($row["idlink"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>