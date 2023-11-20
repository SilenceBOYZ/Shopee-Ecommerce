<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/dichvu/them.php");
  }
  if($temp =="sua"){
    include("modules/dichvu/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/dichvu/lietke.php");
  
?>