<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/navbar/them.php");
  }
  if($temp =="sua"){
    include("modules/navbar/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/navbar/lietke.php");
  
?>