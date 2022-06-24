<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>thankYouForYourInquiry</title>
  <link rel="stylesheet" href="form0css.php">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php include "inquiryHeader2.php";?>




  <form method=“POST”>
    <?php
        /*session_start();
        $session_id = session_id();
        echo $session_id;*/
        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'confirm.php';
          if(!strstr($referer,$url)){
            die("正規の画面からアクセスしてください");
            exit;
          }
      ?>
    <div class=contentOfTransmission3>
      <p class="inquirySendCompletely">お問い合わせ</p>
      <p class="inquirySendCompletelyLine"></p>
      <p class="thankYouText0">お問い合わせ頂きありがとうございます。</p>
      <p class="thankYouText1">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
      <p class="thankYouText2">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください</p>
      <a href="contact.php" class="backToTopButton">トップへ戻る</a>
    </div>
  </form>

  <div class=inquiryFooter3>
    <div class=" FooterLine3"></div>
    <div class="FooterList3"></div>
    <?php include "footer.php";?>
  </div>
</body>

</html>
