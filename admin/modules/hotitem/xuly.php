<?php 
    $connect = mysqli_connect("localhost", "root", "", "shopeedata");
    mysqli_set_charset($connect, "utf8");
    $idhotitem="";
    $daban = "";
    if( isset($_POST["idhotitem"]) && isset($_POST["daban"])){
      $idhotitem= $_POST["idhotitem"];
      $daban=$_POST["daban"];
    }
    
    //echo "$tendv" . ' '. "$thutu ";

    if(isset($_POST["them"])){
      $sql="INSERT INTO hotitem(idhotitem, daban) VALUES ('$idhotitem', '$daban')";
      mysqli_query($connect, $sql);
      header("localtion:../../index.php?ql=qlhotitem&ac=them");
    }
   if(isset($_POST["sua"])){
      $id=$_GET["id"];
      $sql="UPDATE hotitem SET idhotitem='$idhotitem', daban='$daban' WHERE id='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlhotitem&ac=sua&id=".$id);
    
    }else{
      $id=$_GET["id"];
      $sql ="DELETE FROM hotitem WHERE id='$id'";
      mysqli_query($connect, $sql);
      header("location:../../index.php?ql=qlhotitem&ac=them");  
    }
?>