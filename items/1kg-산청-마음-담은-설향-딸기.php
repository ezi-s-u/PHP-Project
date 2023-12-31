<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="items.css">
  <link rel="icon" href="../images/icon.png">
  <title>1kg 산청 마음 담은 설향 딸기 - 난이몰</title>
</head>

<body>
  <header>
    <nav class="menu">
    <a href="index.php"><img class="icon" src="../images/nanimall.png" alt="못난이몰"></a>
      <ul>
        <li><a href="../seasonal.php">제철상품</a></li>
        <li><a href="../time-special.php">타임특가</a></li>
        <li><a href="../new-items.php">신규상품</a></li>
        <li><a href="../all-items.php">전체상품</a></li>
      </ul>
      <a href="../login.html"><img src="../images/login.png" class="login"></img></a>
      <a href="../basket.html"><img src="../images/cart.png" class="cart"></img></a>
    </nav>
  </header>
  
  <main>
    <div class="payment">
    <?php
    include('../db_connect.php');

    $sql = "select * from nanimall where item_name = '1kg 산청 마음 담은 설향 딸기'";
    $data = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($data);

    $arr = mysqli_fetch_array($data);
    echo "<img src='".$arr['item_img']."'>";
    ?> 
      <div class="explan">
        <h2><?php echo $arr['item_name'];?></h2>
        <span class="price"><span id="price"><?php echo $arr['item_price'];?></span> 원</span>
        <div class="summary"><?php echo $arr['item_description'];?></div>
        <table class="deliver">
          <tr>
            <td>국내·해외배송</td>
            <td>국내배송</td>
          </tr>
          <tr>
            <td>배송방법</td>
            <td>택배</td>
          </tr>
          <tr>
            <td>배송비</td>
            <td>무료</td>
          </tr>
        </table>
        <br><br><br><br><hr><br>
        <span class="count">
          <input type="button" onclick="count('minus')" value="-" class="countBtn">
          <div id="result">1</div>
          <input type="button" onclick="count('plus')" value="+" class="countBtn">
        </span><br>
        <hr><br>
        <div class="totalPrice">
          <div class="deliver" style="font-weight: bold;">총 상품금액</div>
          <div class="amount"><span id="total"><?php echo $arr['item_price'];?></span> 원</div>
        </div>
        <div class="buttons">
          <button type="submit" class="btn_basket">장바구니</button>
          <button type="submit" class="btn_buy">구매하기</button>
        </div>
      </div>
    </div>
    <img style="margin:0 auto; display: block; max-width:100%;" src="../images/item-img/strawberry.png">
  </main>
  <footer>
    <div class="content_left">
      <a href="../index.html"><img class="icon_footer" src="../images/nanimall.png" alt="못난이몰"></a>
      <p>대표 : 김형민 전화 : 010-4560-6444 FAX : 032-623-6448<br>
        상호 : 주식회사 성창에이치비케이 사업자등록번호 : 210-88-02243 통신판매업 신고 2022경기파주1874 [사업자정보확인]<br>
        개인정보보호책임자 : 주식회사성창에이치비케이(sc6444@korea.com)호스팅제공업체 : cafe24 카페24(주)<br>
        소재지: 경기도 파주시 탄현면 동오리길 138-14
        <br><br><br><br>Copyright © 못난이몰 . All rights reserved</p>
    </div>
  </footer>
</body>
<script>
  function count(type) {
    const count = document.getElementById('result'); // 상품 개수
    const price = document.getElementById('price');  // 상품 금액
    const amount = document.getElementById('total'); // 총 금액
  
  // 현재 화면에 표시된 값
  let number = count.innerText;
  let resultAmount = parseInt(amount.innerText);
  
  // 더하기/빼기
  if(type === 'plus') {
    resultAmount = parseInt(parseInt(resultAmount) + parseInt(price.innerText));
    number = parseInt(number) + 1;
  }else if(type === 'minus' && number > 1)  {
    console.log(price.innerText);
    resultAmount = parseInt(parseInt(resultAmount) - parseInt(price.innerText));
    number = parseInt(number) - 1;
  }
  
  // 결과 출력
  count.innerText = number;
  amount.innerText = resultAmount;
  }
</script>
</html>