<?php
$connect = mysqli_connect("localhost", "root", "", "shopeedata");
mysqli_set_charset($connect, "utf8");
$sql = "Select * from hotitem where id='$_GET[id]'";
$sql_all = "Select * from sanpham";
$kq = mysqli_query($connect, $sql);
$kq_2 = mysqli_query($connect, $sql_all);
$kq_asarray = mysqli_fetch_assoc($kq);
?>

<div class="formthaotac">
  <form class="form-dulieu" action="modules/hotitem/xuly.php?id=<?php echo $kq_asarray['id']; ?>" method="post" enctype="multipart/form-data">
    <h2>Form dữ liệu</h2>
    <div class="input-field">
      <label for="">Id</label>
      <input type="text" name="id" id="" value="<?php echo $kq_asarray['id']; ?>" require>
    </div>

    <div class="input-field">
      <label for="">Id hotitem</label>
      <td>
        <select name="idhotitem" id="">
          <?php 
          while ($row = mysqli_fetch_array($kq_2)) {
          ?>
            <option value="<?php echo $row['idsanpham']; ?>"><?php echo $row['tensanpham']; ?></option>
          <?php
          }
          ?>
        </select>
      </td>
    </div>

    <div class="input-field">
      <label for="">Đã bán</label>
      <input type="text" name="daban" id="" value="<?php echo $kq_asarray['daban']; ?>" require>
    </div>

    <div class="input-field">
      <input type="submit" name="sua" id="" value="Xử lý" require>
    </div>
  </form>
</div>