<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/slider/them.php");
  }
  if($temp =="sua"){
    include("modules/slider/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/slider/lietke.php");
  
?>