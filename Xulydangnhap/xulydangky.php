<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'shopeedata');
// Ràng buộc lỗi undefine variable
$_SESSION['notice'] = array();
$_SESSION['flat'] = 0;

if (isset($_POST["username"]) && $_POST["password"]) {
  $username = $_POST["username"];
  $password = $_POST["password"];
}


if (isset($_POST["dangky"])) {
  if (!empty($username) && !empty($password)){
  $sql_accountInsert = "INSERT INTO  account(taikhoan, matkhau) VALUES ('$username', '$password')";
  $sql_query = mysqli_query($connect, $sql_accountInsert);
  // Tạo biến thông báo cho trang login
  $thongbao = "<i class='icofont-wink-smile'></i> Chào mừng thành viên mới của Shoppee <i class='icofont-wink-smile'></i>";
  $notice = array($thongbao);
  $_SESSION['flat'] = 1;
  // Ràng buộc lỗi undefine variable
  if (isset($_SESSION['notice']) && isset($notice)) {
    $_SESSION['notice'] = $notice;
  }
  header('location: shopeesignup.php');
  }else {
    $thongbao = 'Vui lòng điền đầy đủ thông tin để đăng ký';
    $notice = array($thongbao);
    $_SESSION['flat'] = 1;
    if (isset($_SESSION['notice']) && isset($notice)) {
      $_SESSION['notice'] = $notice;
    }
    header('location: shopeesignup.php');
  }
}
