<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>inquiryHeader.php</title>
  <link rel="stylesheet" href="inquiryHeaderCss.php">
</head>


<body>

  <a href="#AtTheBeginning" style=text-decoration:none;>始めに</a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#Next" style=text-decoration:none;>体験</a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="inquiryScreen.php" style=text-decoration:none;>お問い合わせ</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- クリックしたらモーダルを表示するボタン -->
  <a href="" style=text-decoration:none; class="followSpace">サインイン</a>
  <!-- オーバーレイ -->
  <div class="followOverlay"></div>
  <!-- モーダルウィンドウ -->
  <div class="followModal">
    <p class="Login">ログイン</p>
    <div class="modalLine0"> </div>
    <div class="mailAddress"> <input class="sizeTextBox" type=" text" placeholder="メールアドレス"></div>
    <div class="passWord"> <input class="sizePassWord" type=" text" placeholder="パスワード"></div>
    <a href="" input type=" submit" class="submitButton0" style=text-decoration:none;>
      <p class="sendSize"> 送&nbsp;&nbsp;信</p>
    </a>
    <div class="modalLine1"> </div>
    <a href="" input type=" submit" class="twitterButton" style=text-decoration:none;>
      <p class="markSize"><img src="cafe\img\twitter.png" height="35px" width=35px></p>
    </a>
    <a href="" input type=" submit" class="fbButton" style=text-decoration:none;>
      <p class="markSize"><img src="cafe\img\fb.png" height="30px" width=30px></p>
    </a>
    <a href="" input type=" submit" class="googleButton" style=text-decoration:none;>
      <p class="markSize"><img src="cafe\img\google.png" height="30px" width=30px></p>
    </a>
    <a href="" input type=" submit" class="appleButton" style=text-decoration:none;>
      <p class="markSize"><img src="cafe\img\apple.png" height="30px" width=30px></p>
    </a>
  </div>
  </div>

</body>

</html>
