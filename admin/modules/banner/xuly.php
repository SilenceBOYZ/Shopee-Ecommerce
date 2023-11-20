<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tenbanner ="";
  $hinhbanner ="";
 
  if(isset($_POST["tenbanner"])){
    $tenbanner=$_POST["tenbanner"];  
  }

if (isset($_FILES["hinhanhbanner"]) ){
  $hinhbanner=$_FILES["hinhanhbanner"]["name"];
  $hinhbanner_tmp=$_FILES["hinhanhbanner"]["tmp_name"];
  
  move_uploaded_file($hinhbanner_tmp, "upload/" .$hinhbanner);
  
}

if (isset($_FILES["hinhanhbanner"]) ){
  $hinhbanner=$_FILES["hinhanhbanner"]["name"];
  $hinhbanner_tmp=$_FILES["hinhanhbanner"]["tmp_name"];
  $hinhbanner_error = $_FILES["hinhanhbanner"]["error"];
  $hinhbanner_type = $_FILES["hinhanhbanner"]["type"];
  $hinhbanner_size = $_FILES["hinhanhbanner"]["size"];

  $hinhbannerExt = explode('.',  $hinhbanner); // Tách ra  2 mảng"Tên file ảnh" , "định dạng file" 
  $hinhbannerAtualExt = strtolower(end($hinhbannerExt)); // Lấy mảng cuối (extension) 
  echo $hinhbannerAtualExt;

  $allowed = array('jpg', 'jpeg', 'png', 'webp', 'pdf');

  if (in_array($hinhdaidienAtualExt, $allowed)){
    if($hinhbanner_error === 0){
      if ($hinhbanner_size  > 500){
        //Tạo ra một id để phân biệt dữ file ảnh này với file ảnh khác
        // Người dùng sẽ không ghi đè lên file ảnh của nhau
        // Upload ảnh
        $thongbao = "File ảnh bạn vừa tải quá lớn !";
      }else{
        move_uploaded_file($hinhbanner_tmp, "upload/" .$hinhbanner);
      }
    } else {
      $thongbao =  "Bạn không thể tải hình vào thư mục";
    }
  }else {
    $thongbao =  "File bạn vừa tải không phải là file ảnh";
  }
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO banner(tenbanner, hinhanhbanner) VALUES ('$tenbanner', '$hinhbanner')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlbanner&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE banner SET tenbanner='$tenbanner', hinhanhbanner='$hinhbanner' WHERE idbanner='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlbanner&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM banner WHERE idbanner='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlbanner&ac=them");  
  }
