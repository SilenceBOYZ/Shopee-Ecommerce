<?php 
    $connect = mysqli_connect("localhost", "root", "", "shopeedata");
    mysqli_set_charset($connect, "utf8");
    $tensanpham="";
    $gia = "";
    $soluongban = ""; 
    $hinhanhsanpham = ""; 
    if( isset($_POST["tensanpham"]) && isset($_POST["gia"]) && isset($_POST["soluongban"]) && isset($_POST["iddanhmuc"])){
      $tensanpham = $_POST["tensanpham"];
      $gia = $_POST["gia"];
      $soluongban = $_POST["soluongban"];
      $danhmuc = $_POST["iddanhmuc"];
    }

    if (isset($_FILES["hinhanhsanpham"]) ){
      $hinhsanpham=$_FILES["hinhanhsanpham"]["name"];
      $hinhsanpham_tmp=$_FILES["hinhanhsanpham"]["tmp_name"];
      
      move_uploaded_file($hinhsanpham_tmp, "upload/" .$hinhsanpham);
    }
    
    //echo "$tendv" . ' '. "$thutu ";

    if(isset($_POST["them"])){
      $sql="INSERT INTO sanpham(tensanpham, gia, soluongban, hinhanhsanpham, danhmucsanpham) VALUES ('$tensanpham' , $gia, '$soluongban', '$hinhsanpham', '$danhmuc')";
      mysqli_query($connect, $sql);
      header("localtion:../../index.php?ql=qlsanpham&ac=them");
    }
   if(isset($_POST["sua"])){
      $id=$_GET["id"];
      $sql="UPDATE sanpham SET tensanpham='$tensanpham', gia=$gia, soluongban='$soluongban', hinhanhsanpham ='$hinhsanpham', danhmucsanpham = '$danhmuc' WHERE idsanpham='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlsanpham&ac=sua&id=".$id);
    
    }else{
      $id=$_GET["id"];
      $sql ="DELETE FROM sanpham WHERE idsanpham='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlsanpham&ac=them");  
    }
?>