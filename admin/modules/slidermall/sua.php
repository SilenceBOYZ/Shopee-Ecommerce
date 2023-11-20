<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_slidermall = "Select * from slidermall where idmall='$_GET[id]'";
$kq_slidermall = mysqli_query($connect, $sql_slidermall );
$kq_asarray = mysqli_fetch_assoc($kq_slidermall);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/slidermall/xuly.php?id=<?php echo $kq_asarray['idmall']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Mall</label>
          <input type="text" name="" id="" value="<?php echo $kq_asarray['idmall']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên slide</label>
          <input type="text" name="tenslider" id="" value="<?php echo $kq_asarray['tenslide']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh Slidemall</label>
          <input type="file" name="hinhanh" id="" value="<?php echo $kq_asarray['hinhanh']; ?>" require>
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>