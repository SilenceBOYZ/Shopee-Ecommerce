<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_all = "Select * from sanpham";
$kq_2 = mysqli_query($connect, $sql_all);
?>

<div class="formthaotac">
  <form class="form-dulieu" action="modules/hotitem/xuly.php" method="post" enctype="multipart/form-data">
    <h2>Form dữ liệu</h2>

    <div class="input-field">
      <label for="">Tên hotitem</label>
      <td>
        <select name="idhotitem" id="" value="">
          <?php
          while ($row = mysqli_fetch_array($kq_2)) {
          ?>
            <option value="<?php echo $row['idsanpham']; ?>"><?php echo $row['tensanpham']; ?></option>
          <?php
          }
          ?>
        </select>
      </td>
    </div>

    <div class="input-field">
          <label for="">Đã bán</label>
          <input type="text" name="daban" value="" id="" require>
    </div>

    <div class="input-field">
      <input type="submit" name="them" id="" value="Xử lý" require>
    </div>
  </form>
</div>