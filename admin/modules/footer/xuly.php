<?php 
    $connect = mysqli_connect("localhost", "root", "", "shopeedata");
    mysqli_set_charset($connect, "utf8");
    $tenlink="";
    $trangthai = "";
    if( isset($_POST["tenlink"]) && isset($_POST["trangthai"])){
      $tenlink = $_POST["tenlink"];
      $trangthai = $_POST["trangthai"];
    }
    
    //echo "$tendv" . ' '. "$thutu ";

    if(isset($_POST["them"])){
      $sql="INSERT INTO footerlink (tenlink, trangthai) VALUES ('$tenlink', '$trangthai')";
      mysqli_query($connect, $sql);
      header("localtion:../../index.php?ql=qlfooter&ac=them");
    }
   if(isset($_POST["sua"])){
      $id=$_GET["id"];
      $sql="UPDATE footerlink SET tenlink='$tenlink', trangthai='$trangthai' WHERE idlink='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlfooter&ac=sua&id=".$id);
    
    }else{
      $id=$_GET["id"];
      $sql ="DELETE FROM footerlink WHERE idlink='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlfooter&ac=them");  
    }
?>