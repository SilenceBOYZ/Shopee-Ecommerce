<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_banner = "Select * from banner where idbanner='$_GET[id]'";
$kq_banner = mysqli_query($connect, $sql_banner);
$kq_asarray = mysqli_fetch_assoc($kq_banner);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/banner/xuly.php?id=<?php echo $kq_asarray['idbanner']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Navbar</label>
          <input type="text" name="idbanner" id="" value="<?php echo $kq_asarray['idbanner']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Navbar</label>
          <input type="text" name="tenbanner" id="" value="<?php echo $kq_asarray['tenbanner']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh banner</label>
          <input type="file" name="hinhanhbanner" id="" value="" require>
          <input type="hidden" name="hinhanhbanner_old" id="" value="<?php echo $kq_asarray['hinhanhbanner']; ?>">
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>