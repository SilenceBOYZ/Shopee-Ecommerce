<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/footer/them.php");
  }
  if($temp =="sua"){
    include("modules/footer/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/footer/lietke.php");
  
?>