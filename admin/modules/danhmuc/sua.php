<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_danhmuc = "Select * from danhmuc where iddanhmuc='$_GET[id]'";
$kq_danhmuc = mysqli_query($connect, $sql_danhmuc);
$kq_asarray = mysqli_fetch_assoc($kq_danhmuc);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/danhmuc/xuly.php?id=<?php echo $kq_asarray['iddanhmuc']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Navbar</label>
          <input type="text" name="iddanhmuc" id="" value="<?php echo $kq_asarray['iddanhmuc']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Navbar</label>
          <input type="text" name="tendanhmuc" id="" value="<?php echo $kq_asarray['tendanhmuc']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh banner</label>
          <input type="file" name="hinhanhdanhmuc" id="" value="<?php echo $kq_asarray['hinhanhdanhmuc']; ?>" require>
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>