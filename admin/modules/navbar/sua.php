<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_navbar = "Select * from navbar where idnavbar='$_GET[id]'";
$kq_navbar = mysqli_query($connect, $sql_navbar);
$kq_asarray = mysqli_fetch_assoc($kq_navbar);
?>

<div class="formthaotac">
      <form class="form-dulieu" action="modules/navbar/xuly.php?id=<?php echo $kq_asarray['idnavbar']; ?>" method="post" enctype="multipart/form-data">
        <h2>Form dữ liệu</h2>
        <div class="input-field">
          <label for="">Id Navbar</label>
          <input type="text" name="idnavbar" id="" value="<?php echo $kq_asarray['idnavbar']; ?>" require>
        </div>

        <div class="input-field">
          <label for="">Tên Navbar</label>
          <input type="text" name="tennavbar" id="" value="<?php echo $kq_asarray['tennavbar']; ?>" require>
        </div>

        <div class="input-field">
          <input type="submit" name="sua" id="" value="Xử lý" require>
        </div>
      </form>
</div>