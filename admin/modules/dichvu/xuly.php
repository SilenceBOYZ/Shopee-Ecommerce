<?php 
  $connect = mysqli_connect("localhost", "root", "", "shopeedata");
  mysqli_set_charset($connect, "utf8");
  $tendichvu ="";
  $hinhdichvu ="";
  if(isset($_POST["tendichvu"])){
    $tendichvu=$_POST["tendichvu"];  
  }

if (isset($_FILES["hinhanhdichvu"]) ){
  $hinhdichvu=$_FILES["hinhanhdichvu"]["name"];
  $hinhdichvu_tmp=$_FILES["hinhanhdichvu"]["tmp_name"];
  
  move_uploaded_file($hinhdichvu_tmp, "upload/" .$hinhdichvu);
  
}

  if(isset($_POST["them"])){
    $sql="INSERT INTO dichvu(tendichvu, hinhanh) VALUES ('$tendichvu', '$hinhdichvu')";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldichvu&ac=them");
  }
  if(isset($_POST["sua"])){
    $id = $_GET['id'];
    $sql="UPDATE dichvu SET tendichvu='$tendichvu', hinhanh='$hinhdichvu' WHERE iddichvu='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldichvu&ac=sua&id=".$id);
  }else{
    $id = $_GET['id'];
    $sql = "DELETE FROM dichvu WHERE iddichvu='$id'";
    mysqli_query($connect, $sql);
    header("location:../../index.php?ql=qldichvu&ac=them");  
  }
