<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_mall = "Select * from mall where idmall='$_GET[id]'";
$kq_mall = mysqli_query($connect, $sql_mall);
$kq_asarray = mysqli_fetch_assoc($kq_mall);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/shopeemall/xuly.php?id=<?php echo $kq_asarray['idmall']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Mall</label>
          <input type="text" name="idmall" id="" value="<?php echo $kq_asarray['idmall']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Mall</label>
          <input type="text" name="tenmall" id="" value="<?php echo $kq_asarray['tenmall']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Hình ảnh banner</label>
          <input type="file" name="hinhanhmall" id="" value="<?php echo $kq_asarray['hinhanhmall']; ?>" require>
        </div>
        
        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>