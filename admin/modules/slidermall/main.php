<?php
  if(isset($_GET['ac'])){
    $temp=$_GET['ac'];
  }else{
    $temp='';
  }
  if($temp =="them"){
    include("modules/slidermall/them.php");
  }
  if($temp =="sua"){
    include("modules/slidermall/sua.php");
  }
  // Hiển thị trang liệt kê
  include("modules/slidermall/lietke.php");
  
?>