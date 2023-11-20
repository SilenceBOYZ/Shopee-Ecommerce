<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tenmall ="";
  $hinhdanhmall ="";
  if(isset($_POST["tenmall"])){
    $tenmall=$_POST["tenmall"];  
  }

if (isset($_FILES["hinhanhmall"]) ){
  $hinhdanhmall=$_FILES["hinhanhmall"]["name"];
  $hinhdanhmall_tmp=$_FILES["hinhanhmall"]["tmp_name"];
  
  move_uploaded_file($hinhdanhmall_tmp, "upload/" .$hinhdanhmall);
  
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO mall(tenmall, hinhanhmall) VALUES ('$tenmall', '$hinhdanhmall')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlshopeemall&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE mall SET tenmall='$tenmall', hinhanhmall='$hinhdanhmall' WHERE idmall='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlshopeemall&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM mall WHERE idmall='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qlshopeemall&ac=them");  
  }
