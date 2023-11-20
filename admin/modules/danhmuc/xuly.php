<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tendanhmuc ="";
  $hinhdanhmuc ="";
  if(isset($_POST["tendanhmuc"])){
    $tendanhmuc=$_POST["tendanhmuc"];  
  }

if (isset($_FILES["hinhanhdanhmuc"]) ){
  $hinhdanhmuc=$_FILES["hinhanhdanhmuc"]["name"];
  $hinhdanhmuc_tmp=$_FILES["hinhanhdanhmuc"]["tmp_name"];
  
  $hinhdanhmuc_error = $_FILES["hinhanhdanhmuc"]["error"];
  $hinhdanhmuc_type = $_FILES["hinhanhdanhmuc"]["type"];
  $hinhdanhmuc_size = $_FILES["hinhanhdanhmuc"]["size"];

  $hinhdanhmucExt = explode('.',  $hinhdanhmuc); // Tách ra  2 mảng"Tên file ảnh" , "định dạng file" 
  $hinhdanhmucAtualExt = strtolower(end($hinhdanhmucExt)); // Lấy mảng cuối (extension) 

  $allowed = array('jpg', 'jpeg', 'png', 'webp', 'pdf');

  if (in_array($hinhdanhmucAtualExt, $allowed)){
    if($hinhdanhmuc_error === 0){
      if ($hinhdanhmuc_size > 500000){
        //Tạo ra một id để phân biệt dữ file ảnh này với file ảnh khác
        // Người dùng sẽ không ghi đè lên file ảnh của nhau
        // Upload ảnh
        $thongbao = "File ảnh bạn vừa tải quá lớn !";
      }else{
        move_uploaded_file($hinhdanhmuc_tmp, "upload/" .$hinhdanhmuc);
      }
    } else {
      $thongbao =  "Bạn không thể tải hình vào thư mục";
    }
  }else {
    $thongbao =  "File bạn vừa tải không phải là file ảnh";
  }
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO danhmuc(tendanhmuc, hinhanhdanhmuc) VALUES ('$tendanhmuc', '$hinhdanhmuc')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldanhmuc&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE danhmuc SET tendanhmuc='$tendanhmuc', hinhanhdanhmuc='$hinhdanhmuc' WHERE iddanhmuc='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldanhmuc&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM danhmuc WHERE iddanhmuc='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldanhmuc&ac=them");  
  }
