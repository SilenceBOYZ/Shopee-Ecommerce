<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tenslider ="";
  $hinhanh ="";
  if(isset($_POST["tenslider"])){
    $tenslider=$_POST["tenslider"];  
  }

if (isset($_FILES["hinhanh"]) ){
  $hinhanhslide=$_FILES["hinhanh"]["name"];
  $hinhanhslide_tmp=$_FILES["hinhanh"]["tmp_name"];
  
  move_uploaded_file($hinhanhslide_tmp, "upload/" .$hinhanhslide);
  
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO slidermall(tenslide, hinhanh) VALUES ('$tenslider', '$hinhanhslide')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslidermall&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE slidermall SET tenslide='$tenslider', hinhanh='$hinhanhslide' WHERE idmall='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslidermall&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM slidermall WHERE idmall='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslidermall&ac=them");  
  }
