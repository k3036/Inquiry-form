<?php
/**入力値のリセット */
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>form</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <p class="header0"><a href="" class="corona">新型コロナウイルスに対する取り組みの最新情報をご案内</a></p>
  <div style="text-align: center" class="waitingRoom">
    <img src="cafe\img\eyecatch.jpg" alt="" width="100%" height="700" class="wr">
  </div>
  <div class=Logo0>
    <p class="logo0">
      <a href="#"><img src="cafe\img\logo.png" alt="" width="220px" height="35px"></a>
    </p>
  </div>
  <div class="topMenu0">
    <p class="example">
      <!-- クリックしたらモーダルを表示するボタン -->
      <a href="" style=text-decoration:none; class="space">サインイン</a>
      <!-- オーバーレイ -->
    <div class="overlay"></div>
    <!-- モーダルウィンドウ -->
    <div class="modal">
      <p class="Login2">ログイン</p>
      <div class="modalLine3"> </div>
      <div class="mailAddress2"> <input class="sizeTextBox2" type=" text" placeholder="メールアドレス"></div>
      <div class="passWord2"> <input class="sizePassWord2" type=" text" placeholder="パスワード"></div>
      <a href="" input type=" submit" class="submitButton2" style=text-decoration:none;>
        <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
      </a>
      <div class="modalLine4"> </div>
      <a href="" input type=" submit" class="twitterButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\twitter.png" height="35px" width=35px top="35px"></p>
      </a>
      <a href="" input type=" submit" class="fbButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\fb.png" height="30px" width=30px></p>
      </a>
      <a href="" input type=" submit" class="googleButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\google.png" height="30px" width=30px></p>
      </a>
      <a href="" input type=" submit" class="appleButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\apple.png" height="30px" width=30px></p>
      </a>
    </div>
  </div>
  </p>
  </div>
  <div class="topMenu1">
    <a href="#AtTheBeginning" style=text-decoration:none;>始めに</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#Next" style=text-decoration:none;>体験</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="inquiryScreen.php" style=text-decoration:none;>お問い合わせ</a>
  </div>
  <header class="header">

    <div class=" class = headMenu0"><a href="#">
        <img src="cafe\img\logo.png" alt="" width="220px" height="35px"></a>
    </div>

    <?php include "header.php";?>

  </header>

  <main>

    <div class="createYourFavoriteSpace">
      <?php
          echo "あなたの" ."</br>";
          echo "好きな空間を作る。" ."</br>";
      ?>
    </div>
    <div class="font0" id="AtTheBeginning">
      <div class="tokyo">
        <img src="cafe\img\cafe1.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle">東京<br>車で15分</p>
      </div>
      <br><br>
      <div class="okayama">
        <img src="cafe\img\cafe5.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle">岡山<br>車で1.5時間</p>
      </div>
    </div>
    <div class="font1">
      <div class="Kanagawa">
        <img src="cafe\img\cafe2.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle0">神奈川<br>車で30分</p>
      </div>
      <br><br>
      <div class="Kagoshima">
        <img src="cafe\img\cafe6.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle0">鹿児島<br>車で50分</p>
      </div>
    </div>
    <div class="font2">
      <div class="aichi">
        <img src="cafe\img\cafe3.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle0">愛知<br>車で1時間</p>
      </div>
      <div class="okinawa">
        <img src="cafe\img\cafe7.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="accessTitle0">沖縄<br>車で2時間</p>
      </div>
    </div>
    <div class="font3">
      <div class="Kyoto">
        <img src="cafe\img\cafe4.jpg" alt="" width="66px" height="66px" class="fot0">
        <p class="title2">京都<br>車で40分</p>
      </div>
    </div>

    <div class=favoriteLocation>好きなロケーションを選ぼう</div>
    <div class="fourTypesOfLocations">
      <div class=fontClassic>
        <img src="cafe\img\intro1.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontClassicName>クラシック</p>
      </div>
      <div class=fontBar>
        <img src="cafe\img\intro2.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontBarName>バー</p>
      </div>
      <div class=fontCamp>
        <img src="cafe\img\intro3.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontCampName>キャンプ</p>
      </div>
      <div class=fontResort>
        <img src="cafe\img\intro4.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class="ResortName">リゾート</p>
      </div>
    </div>

    <div class=goToEats>
      <p class="go">Go To Eats</p>
      <img src="cafe\img\goto.jpg" alt="" width="93%" height="320px" class="fot0-0"></img>
      <h1 class="clearBox">
        <br><br><br>
        <p class="useTheCampaign">
          &nbsp; キャンペーンを利用して、全国で食事しよう。<br>
          &nbsp;&nbsp;いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
        </p>
      </h1>
    </div>

    <section class="ExperienceMakingACafe" id="Next">
      <div class="MakingACafe">
        <p class=Experience>カフェ作りを体験しよう</p>
        <p class=Expert>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
      </div>
      <div class="cooking3">
        <div class=Cooking0>
          <img src="cafe\img\exp1.jpg" alt="" class="Size3"></img>
        </div>
        <div class=Cooking1>
          <img src="cafe\img\exp2.jpg" alt="" class="Size3"></img>
        </div>
        <div class=Cooking2>
          <img src="cafe\img\exp3.jpg" alt="" class="Size3"></img>
        </div>
      </div>
      <div class="CookWord3">
        <div class=CookWord0>
          ジョブ体験
        </div>
        <div class=CookWord1>
          レシピ体験<br>
        </div>
        <div class=CookWord2>
          プロモーション体験<br>
        </div>
      </div>
      <div class="CookWord32">
        <p class=CookWord00>
          カフェカウンターを体験しよう。<br>
        </p>
        <p class=CookWord11>
          美味しいレシピを考えてみよう。
        </p>
        <p class=CookWord22>
          お店の宣伝を手伝ってみよう。<br>
        </p>
      </div>
    </section>

    <div class=HostsNationwide>
      全国のホストに仲間入りしよう
    </div>
    <div class="Business3">
      <span class=Business>
        <img src="cafe\img\host1.jpg" alt="" class="Size33"></img>
        <p class=BusinessWord00>ビジネス</p>
      </span>

      <span class=CommunityImage>
        <img src="cafe\img\host2.jpg" alt="" class="Size33"></img>
        <p class=BusinessWord00>コミュニティ</p>
      </span>
      <span class=EatingAround>
        <img src="cafe\img\host3.jpg" alt="" class="Size33"></img>
        <p class=BusinessWord00>食べ歩き</p>
      </span>
    </div>
  </main>
  <div class="FooterListMain"></div>
  <div class="FooterUp"><?php include "footerTwo.php";?></div>
  <div class="FooterLineMain"></div>
  <div id="page_top"><a href="" style=text-decoration:none;>
      <p class=JumpTop>Jump To Top</p>
    </a></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>
