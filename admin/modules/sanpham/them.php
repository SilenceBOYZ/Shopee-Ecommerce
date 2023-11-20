<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_all = "Select * from danhmuc";
$kq_2 = mysqli_query($connect, $sql_all);
?>

<div class="formthaotac">
  <form class="form-dulieu" action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
    <h2>Form dữ liệu</h2>

    <div class="input-field">
      <label for="">Tên sản phẩm</label>
      <input type="text" name="tensanpham" value="" id="" require>
    </div>

    <div class="input-field">
      <label for="">Giá tiền</label>
      <input type="text" name="gia" value="" id="" require>
    </div>

    <div class="input-field">
      <label for="">Số lượng bán</label>
      <input type="text" name="soluongban" value="" id="" require>
    </div>


    <div class="input-field">
      <label for="">Hình ảnh sản phẩm</label>
      <input type="file" name="hinhanhsanpham" value="" id="" require>
      <input type="hidden" name="hinhanhsanpham-old" value="" id="" require>
    </div>

    

    <div class="input-field">
      <label for="">Danh mục</label>
      <td>
        <select name="iddanhmuc" id="" value="">
          <?php
          while ($row = mysqli_fetch_array($kq_2)) {
          ?>
            <option value="<?php echo $row['iddanhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></option>
          <?php
          }
          ?>
        </select>
      </td>
    </div>


    <div class="input-field">
      <input type="submit" name="them" id="" value="Xử lý" require>
    </div>
  </form>
</div>