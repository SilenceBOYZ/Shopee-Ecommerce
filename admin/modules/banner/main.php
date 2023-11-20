<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/banner/them.php");
  }
  if($temp =="sua"){
    include("modules/banner/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/banner/lietke.php");
  
?>