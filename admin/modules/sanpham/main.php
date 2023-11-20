<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/sanpham/them.php");
  }
  if($temp =="sua"){
    include("modules/sanpham/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/sanpham/lietke.php");
  
?>