<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_sanpham = "Select * from sanpham where idsanpham='$_GET[id]'";
$kq_sanpham = mysqli_query($connect, $sql_sanpham);
$kq_asarray = mysqli_fetch_assoc($kq_sanpham);
$sql_all = "Select * from danhmuc";
$kq_2 = mysqli_query($connect, $sql_all);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/sanpham/xuly.php?id=<?php echo $kq_asarray['idsanpham']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id sản Phẩm</label>
          <input type="text" name="idnavbar" id="" value="<?php echo $kq_asarray['idsanpham']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="tensanpham" id="" value="<?php echo $kq_asarray['tensanpham']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Giá Tiền</label>
          <input type="text" name="gia" id="" value="<?php echo $kq_asarray['gia']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Số lượng đã bán</label>
          <input type="text" name="soluongban" id="" value="<?php echo $kq_asarray['soluongban']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh sản phẩm</label>
          <input type="file" name="hinhanhsanpham" id="" value="<?php echo $kq_asarray['hinhanhsanpham']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Danh mục sản phẩm</label>
          <td>
        <select name="iddanhmuc" id="">
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
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>