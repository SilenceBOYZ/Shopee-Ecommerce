<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_dichvu = "Select * from dichvu where iddichvu='$_GET[id]'";
$kq_dichvu = mysqli_query($connect, $sql_dichvu);
$kq_asarray = mysqli_fetch_assoc($kq_dichvu);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/dichvu/xuly.php?id=<?php echo $kq_asarray['iddichvu']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Navbar</label>
          <input type="text" name="" id="" value="<?php echo $kq_asarray['iddichvu']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Navbar</label>
          <input type="text" name="tendichvu" id="" value="<?php echo $kq_asarray['tendichvu']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh banner</label>
          <input type="file" name="hinhanhdichvu" id="" value="<?php echo $kq_asarray['hinhanh']; ?>" require>
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>