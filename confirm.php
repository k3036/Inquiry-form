<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>confirm.php</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php
    include "inquiryHeader2.php";
    ?>


  <main>
    <div class="contentOfTransmission2">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <p class=Notes0>下記の内容をご確認の上送信ボタンを押してください</p>
      <p class=Notes1>内容を訂正する場合は戻るを押してください。</p>



      <form method="POST" action="complete.php">
        <?php
          /*session_start();
          $session_id = session_id();
          echo $session_id;*/


        /*  $referer = $_SERVER["HTTP_REFERER"];   ダイレクトアクセスの禁止
          $url = 'inquiryScreen.php';
            if(!strstr($referer,$url)){
              die("正規の画面からアクセスしてください");
              exit;
            }
        ?>


        <?php
          /**スーパーグローバル変数を使うときの最初の記述 */
          /**ファイルの先頭部に書かないとエラーが出る。 */
          function XssOCuntermeasure($XssMeasures)
          {
              echo htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8") ;
          }
        ?>

        <?php
        /* echo $_SESSION["chineseCharacterName"] ; */
              /* データの受け取り */
              // $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];		//お名前
              // $_SESSION["howToRead"]	= $_POST["howToRead"];        //読み仮名
              // $_SESSION["phoneNumber"]		= $_POST["phoneNumber"];  //電話番号
              // $_SESSION["emailAddress"]		= $_POST["emailAddress"];  //メールアドレス
              // $_SESSION["contentsOfInquiry"]		= $_POST["contentsOfInquiry"];//お問い合わせ内容
              $ten = 10 ;
              if($_SESSION["chineseCharacterName"] === ""){
                header("Location: inquiryScreen.php") ;
                // echo "<FONT COLOR=\"RED\">※氏名は必須入力です。１０文字以内でご入力ください。</FONT>" ."</br>";
              }else if(mb_strlen( $_SESSION["chineseCharacterName"]) >= $ten){
                header("Location: inquiryScreen.php") ;
                // echo "<FONT COLOR=\"RED\">※氏名は必須入力です。１０文字以内でご入力ください。</FONT>" ."</br>";
              }
              if($_SESSION["howToRead"] === ""){
                header("Location: inquiryScreen.php") ;
                // echo"<FONT COLOR=\"RED\">※フリガナは必須入力です。１０文字以内でご入力ください。</FONT>"."</br>" ;
              }else if( mb_strlen($_SESSION["howToRead"]) >= $ten){
                header("Location: inquiryScreen.php") ;
                // echo"<FONT COLOR=\"RED\">※フリガナは必須入力です。１０文字以内でご入力ください。</FONT>"."</br>" ;
              }
              if(empty($_SESSION["phoneNumber"])){

              }else if( !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){
                header("Location: inquiryScreen.php") ;
                // echo"<FONT COLOR=\"RED\">※電話番号は半角数字0-9のみでご入力ください。</FONT>" ."</br>";
              }
              if($_SESSION["emailAddress"]	 === ""){
                header("Location: inquiryScreen.php") ;
                // echo"<FONT COLOR=\"RED\">※メールアドレスは正しくご入力ください。</FONT>" ."</br>";
              }
              if( $_SESSION["contentsOfInquiry"] === ""){
                header("Location: inquiryScreen.php") ;
                // echo"<FONT COLOR=\"RED\">※お問い合わせ内容は必須入力です</FONT>" ;
              }
        ?>

        <p class="fillInYourName">氏名</p>
        <div class="Inquiry0LinesBelow"></div>
        <div class="Confirmation0"><?php  XssOCuntermeasure($_SESSION["chineseCharacterName"] ); ?>
        </div>

        <p class="fillInThePhoneNumber">フリガナ</p>
        <div class="Inquiry1LinesBelow"></div>
        <div class="Confirmation1"><?php XssOCuntermeasure($_SESSION["howToRead"]); ?></div>

        <p class="fillInThePhoneNumber">電話番号</p>
        <div class="Inquiry2LinesBelow"></div>
        <div class="Confirmation2">
          <?php
            if( empty($_SESSION["phoneNumber"])){

            }else{
                XssOCuntermeasure($_SESSION["phoneNumber"]);
            }
          ?>
        </div>
        <p class="fillInYourEmailAddress">メールアドレス</p>
        <div class="Inquiry3LinesBelow"></div>
        <div class="Confirmation3"><?php XssOCuntermeasure($_SESSION["emailAddress"]	); ?></div>

        <p class="ContentsOfInquiry">お問い合わせ内容</p>
        <div class="Inquiry4LinesBelow"></div>
        <div class="Confirmation4"><?php XssOCuntermeasure($_SESSION["contentsOfInquiry"] ); ?></div>
      </form>
      <div class="sendOrBack">
        <a href="complete.php" input type=" submit" class="submitButton4" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
        </a>
        <a href="inquiryScreen.php" input type=" submit" class="submitButton5" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="sendSize2"> 戻&nbsp;&nbsp;る</p>
        </a>
      </div>

    </div>




  </main>
  <div class=inquiryFooter2>
    <div class=" FooterLine2">
    </div>
    <div class="FooterList2"></div>
    <div class="footerMove"><?php include "footer.php";?>
    </div>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script> -->
</body>

</html>
