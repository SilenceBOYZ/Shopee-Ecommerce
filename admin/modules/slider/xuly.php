<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tenslider ="";
  $hinhbanner ="";
  if(isset($_POST["tenslider"])){
    $tenslider=$_POST["tenslider"];  
  }

if (isset($_FILES["hinhanhslide"]) ){
  $hinhanhslide=$_FILES["hinhanhslide"]["name"];
  $hinhanhslide_tmp=$_FILES["hinhanhslide"]["tmp_name"];
  
  move_uploaded_file($hinhanhslide_tmp, "upload/" .$hinhanhslide);
  
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO slider(tenslide, hinhanhslide) VALUES ('$tenslider', '$hinhanhslide')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslider&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE slider SET tenslide='$tenslider', hinhanhslide='$hinhanhslide' WHERE idslider='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslider&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM slider WHERE idslider='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlslider&ac=them");  
  }
