<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/shopeemall/them.php");
  }
  if($temp =="sua"){
    include("modules/shopeemall/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/shopeemall/lietke.php");
  
?>