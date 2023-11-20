<?php 
    if(isset($_GET["ql"])){
      $temp=$_GET["ql"];
    }else {
      $temp="";
    }
    if($temp=="qlnavbar"){
      include("navbar/main.php");
    }else if($temp=="qlbanner"){
      include("banner/main.php");
    }else if ($temp=="qldanhmuc"){
      include("danhmuc/main.php");
    }else if ($temp=="qlsanpham"){
      include("sanpham/main.php");
    }else if ($temp=="qldichvu"){
      include("dichvu/main.php");
    }else if ($temp=="qlhotitem"){
      include("hotitem/main.php");
    }else if ($temp=="qlshopeemall"){
      include("shopeemall/main.php");
    }else if ($temp=="qlslider"){
      include("slider/main.php");
    }else if ($temp=="qlslidermall"){
      include("slidermall/main.php");
    }else if ($temp=="qlfooter"){
      include("footer/main.php");
    }
?>