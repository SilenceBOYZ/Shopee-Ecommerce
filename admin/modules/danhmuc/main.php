<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/danhmuc/them.php");
  }
  if($temp =="sua"){
    include("modules/danhmuc/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/danhmuc/lietke.php");
  
?>