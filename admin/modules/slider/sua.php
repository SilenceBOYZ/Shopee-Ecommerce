<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_slider = "Select * from slider where idslider='$_GET[id]'";
$kq_slider = mysqli_query($connect, $sql_slider);
$kq_asarray = mysqli_fetch_assoc($kq_slider);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/slider/xuly.php?id=<?php echo $kq_asarray['idslider']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Navbar</label>
          <input type="text" name="" id="" value="<?php echo $kq_asarray['idslider']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Navbar</label>
          <input type="text" name="tenslider" id="" value="<?php echo $kq_asarray['tenslide']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh banner</label>
          <input type="file" name="hinhanhslide" id="" value="<?php echo $kq_asarray['hinhanhslide']; ?>" require>
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>