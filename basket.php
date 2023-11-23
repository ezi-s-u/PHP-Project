<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/icon.png">
  <title>장바구니 - 난이몰</title>
  <style>
    main {
      text-align: center;
    }

    hr {
      margin: 20px ;
    }

    .basket-explan {
      margin-top: 70px;
      font-size: 13px;
      text-align: left;
    }

    .basket-items {
      margin-top: 100px;
      margin-bottom: 100px;
    }

    .btnOrder {
      padding: 15px 50px 15px 50px;
      color: rgb(255, 255, 255);
      font-weight: bold;
      border: 0px;
      background-color: #929292;
      border-radius: 5px;
      margin-top: 20px;
    }

    .btnOrder:hover {
      background-color: #5a5a5a;
      cursor: pointer;
    }
  </style>
</head>
<?php

include('db_connect.php');

if(!isset($_SESSION['user_id'])) {
  echo "<script>location.href='login.html';</script>";
} else {
  $user_id = $_SESSION['user_id'];
  $user_pw = $_SESSION['user_pw'];
}

$sql = "SELECT";


?>

<body>
  <header>
    <nav class="menu">
      <a href="index.php"><img class="icon" src="images/nanimall.png" alt="못난이몰"></a>
      <ul>
        <li><a href="seasonal.php">제철상품</a></li>
        <li><a href="time-special.php">타임특가</a></li>
        <li><a href="new-items.php">신규상품</a></li>
        <li><a href="all-items.php">전체상품</a></li>
      </ul>
      <a href="login.html"><img src="images/login.png" class="login"></img></a>
      <a href="basket.html"><img src="images/cart.png" class="cart"></img></a>
    </nav>
  </header>
  
  <main>
    <h2>장바구니</h2>
    <hr>
    <!-- 상품 넣는 곳-->
    <div class="basket-items">장바구니가 비었습니다</div>
    <hr>
    <button type="submit" class="btnOrder">상품 주문하기</button>
    <div class="basket-explan">
      장바구니 이용안내<br>
      해외배송 상품과 국내배송 상품은 함께 결제하실 수 없으니 장바구니 별로 따로 결제해 주시기 바랍니다.<br>
      해외배송 가능 상품의 경우 국내배송 장바구니에 담았다가 해외배송 장바구니로 이동하여 결제하실 수 있습니다.<br>
      파일첨부 옵션은 동일상품을 장바구니에 추가할 경우 마지막에 업로드 한 파일로 교체됩니다.<br><br>
      무이자할부 이용안내<br>
      상품별 무이자할부 혜택을 받으시려면 무이자할부 상품만 선택하여 [주문하기] 버튼을 눌러 주문/결제 하시면 됩니다.<br>
      단, 전체 상품을 주문/결제하실 경우, 상품별 무이자할부 혜택을 받으실 수 없습니다.<br>
      무이자할부 상품은 장바구니에서 별도 무이자할부 상품 영역에 표시되어, 무이자할부 상품 기준으로 배송비가 표시됩니다.<br>
      실제 배송비는 함께 주문하는 상품에 따라 적용되오니 주문서 하단의 배송비 정보를 참고해주시기 바랍니다.<br>
    </div>
  </main>

  <footer>
    <div class="content_left">
      <a href="#"><img class="icon_footer" src="images/nanimall.png" alt="못난이몰"></a>
      <p>대표 : 김형민 전화 : 010-4560-6444 FAX : 032-623-6448<br>
        상호 : 주식회사 성창에이치비케이 사업자등록번호 : 210-88-02243 통신판매업 신고 2022경기파주1874 [사업자정보확인]<br>
        개인정보보호책임자 : 주식회사성창에이치비케이(sc6444@korea.com)호스팅제공업체 : cafe24 카페24(주)<br>
        소재지: 경기도 파주시 탄현면 동오리길 138-14
        <br><br><br><br>Copyright © 못난이몰 . All rights reserved</p>
    </div>
  </footer>
</body>
</html>