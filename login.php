<?php
include('db_connect.php');

$id = $_POST['id'];
$pw = $_POST['pw'];

// echo $id." ".$pw;

$sql = "SELECT * FROM users WHERE user_id = '$id' AND user_password = '$pw';";

$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);

if(!session_id()) {
  // id가 없을 경우 세션 시작
      session_start();
  }

if($row == 0) {
  echo "<script>alert('로그인 실패. 아이디와 비밀번호를 확인해주세요.'); location.href='login.html';</script>";
} else {
  $_SESSION['user_id'] = $id;
  $_SESSION['user_pw'] = $pw;
  echo "<script>alert('로그인 되었습니다.'); location.href='index.php';</script>";
}

?>