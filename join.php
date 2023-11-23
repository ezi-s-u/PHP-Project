<?php // TODO : 입력하지 않았을 때, 중복 처리
include('db_connect.php');

$id = $_POST['id'];
$pw = $_POST['pw'];

  if($id == "" || $pw == ""){
    echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
  }else{

  $sql2 = "select user_id from users where user_id = '$id'";
  
  $sql1 = "insert into users values('$id', '$pw');";
  
  mysqli_query($conn, $sql1); // insert
 //
  echo "<script>alert('회원가입이 완료되었습니다. 다시 로그인 해주세요 :)'); location.href='login.html';</script>";
  // $result2 = mysqli_query($conn, $sql2); // error
// if($result) {
//   echo "<script>alert('회원가입이 완료되었습니다.'); location.href='login.php';</script>";

// } else if (!$result2) {
//   echo "<script>alert('아이디가 중복됩니다.');</script>";
// }
// }
}
?>