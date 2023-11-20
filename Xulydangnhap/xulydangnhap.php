<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'shopeedata');
if (isset($_POST["username"]) && $_POST["password"]) {
  $username = $_POST["username"];
  $password = $_POST["password"];
}
$_SESSION['notice'] = array();
$_SESSION['flat'] = 0;
$_SESSION['account'] = array();




$account = array($username);
// Tạo biến lưu trữ cho username dưới dạng mảng
if (isset($_SESSION['account'])) {
  $_SESSION['account'] = $account;
}

if (isset($_POST["dangnhap"])) {
  if (!empty($username) && !empty($password)) {
    $sql_Select = "SELECT * FROM account WHERE taikhoan='$username' AND matkhau='$password'";
    $success = mysqli_query($connect, $sql_Select);
    $connect_success = mysqli_num_rows($success);

    // lấy id của user trong database để kết nối với giỏ hàng
    $sql_id = "SELECT id FROM account WHERE taikhoan='$username'";
    $success_id = mysqli_fetch_assoc(mysqli_query($connect, $sql_id));
    $_SESSION['id'] = $success_id["id"];

    $sql_Selectrole = "SELECT roleaccount FROM account WHERE taikhoan='$username'";
    $sql_roles = mysqli_query($connect, $sql_Selectrole);
    $row = mysqli_fetch_assoc($sql_roles);
    $roles = $row['roleaccount'];
    // echo $roles;

    if ($connect_success > 0 && $roles == 0) {
      header('location:../admin/index.php');
    } else if ($connect_success > 0) {
      $_SESSION['flat'] = 1;
      header('location:../index.php');
    } else {
      $thongbao = 'Tài khoản hoặc mật khẩu của bạn không đúng xin vui lòng đăng nhập lại';
      $notice = array($thongbao);
      $_SESSION['flat'] = 1;
      if (isset($_SESSION['notice']) && isset($notice)) {
        $_SESSION['notice'] = $notice;
      }
      header('location: shopeelogin.php');
    }
  } else {
    $thongbao = 'Xin vui lòng đăng nhập tài khoản và mật khẩu của bạn';
    $notice = array($thongbao);
    $_SESSION['flat'] = 1;
    if (isset($_SESSION['notice']) && isset($notice)) {
      $_SESSION['notice'] = $notice;
    }
    header('location: shopeelogin.php');
  }
}
