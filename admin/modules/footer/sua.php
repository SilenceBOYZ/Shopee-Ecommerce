<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql_footer = "Select * from footerlink where idlink='$_GET[id]'";
$kq_footer = mysqli_query($connect, $sql_footer);
$kq_asarray = mysqli_fetch_assoc($kq_footer);
?>

<div class="formthaotac">
  <form class="form-dulieu" action="modules/footer/xuly.php?id=<?php echo $kq_asarray['idlink']; ?>" method="post" enctype="multipart/form-data">
    <h2>Form dữ liệu</h2>
    <div class="input-field">
      <label for="">Id Link footer</label>
      <input type="text" name="" id="" value="<?php echo $kq_asarray['idlink']; ?>" require>
    </div>

    <div class="input-field">
      <label for="">Tên footer</label>
      <input type="text" name="tenlink" id="" value="<?php echo $kq_asarray['tenlink']; ?>" require>
    </div>

    <div class="input-field">
      <label for="">Trạng thái</label>
      <td>
        <select name="trangthai" id="" value="">
          <option value="footer">footer</option>
          <option value="Advertise">Advertise</option>
        </select>
      </td>
    </div>

    <div class="input-field">
      <input type="submit" name="sua" id="" value="Xử lý" require>
    </div>
  </form>
</div>