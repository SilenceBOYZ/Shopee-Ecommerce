<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/hotitem/them.php");
  }
  if($temp =="sua"){
    include("modules/hotitem/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/hotitem/lietke.php");
  
?>