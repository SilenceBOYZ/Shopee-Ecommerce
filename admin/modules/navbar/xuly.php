<?php 
    $connect = mysqli_connect("localhost", "root", "", "shopeedata");
    mysqli_set_charset($connect, "utf8");
    $tennavbar="";
    $idnavbar = "";
    if( isset($_POST["tennavbar"])){
      $tennavbar = $_POST["tennavbar"];
    }
    
    //echo "$tendv" . ' '. "$thutu ";

    if(isset($_POST["them"])){
      $sql="INSERT INTO navbar(tennavbar) VALUES ('$tennavbar')";
      mysqli_query($connect, $sql);
      header("localtion:../../index.php?ql=qlnavbar&ac=them");
    }
   if(isset($_POST["sua"])){
      $id=$_GET["id"];
      $sql="UPDATE navbar SET tennavbar='$tennavbar' WHERE idnavbar='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlnavbar&ac=sua&id=".$id);
    
    }else{
      $id=$_GET["id"];
      $sql ="DELETE FROM navbar WHERE idnavbar='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlnavbar&ac=them");  
    }
?>