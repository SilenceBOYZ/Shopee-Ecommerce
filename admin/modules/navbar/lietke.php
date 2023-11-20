<?php 
  $connect = mysqli_connect("localhost","root", "", "shopeedata");
  mysqli_set_charset($connect,"utf8");
  $sql_navbar = "Select * from navbar";
  $load_navbar = mysqli_query($connect, $sql_navbar);
?>

<div class="hienthi">
  <form class="formhienthi" action="modules/navbar/xuly.php" method="post" enctype="multipart/form-data">
    <table>
      <tr class="row-table">
        <td class="table-id">id</td>
        <td>Tên navbar</td>
        <td class="table-managed" colspan="2">Quản lý sản phẩm</td>
      </tr>
      <?php 
        while ($row=mysqli_fetch_array($load_navbar)){
      ?>
      <tr class="row-table">
        <td class="table-id"><?php echo($row["idnavbar"]);?></td>
        <td><?php echo($row["tennavbar"]);?></td>
        <td class="col-managed">
          <a class="deleted-input" href="modules/navbar/xuly.php?id=<?php echo($row["idnavbar"]);?>">Xóa</a>
          <span>
            |
          </span>
          <a class="update-input" href="index.php?ql=qlnavbar&ac=sua&id=<?php echo($row["idnavbar"]);?>">Sửa</a>
        </td>
      </tr>
      <?php }?>
    </table>
  </form>
</div>