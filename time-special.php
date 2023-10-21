<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/icon.png">
  <title>타임특가 - 난이몰</title>
</head>

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
    <h2>타임특가</h2>
    <div class="items">
      <?php include('db_connect.php');
  
      $sql = "select * from nanimall";
      $data = mysqli_query($conn, $sql);
      $cnt = mysqli_num_rows($data);
  
      for($i = 5; $i < $cnt; $i++){
        $arr = mysqli_fetch_array($data);
        echo "<div class='item'><a href='items/".$arr['item_src']."'><img src='".$arr['item_img']."'>";
        echo "<div class='description'><span>".$arr['item_name']."</span></a><br><div class='summary'>".$arr['item_description']."</div><span class='price'>".$arr['item_price']."</span></div></div>";
      }
      ?>
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