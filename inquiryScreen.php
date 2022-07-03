<?php
session_start();
// $_SESSION["chineseCharacterName"] = "" ;
	// リダイレクトを実行
if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) )  {
  /*初回値空のとき何もしない*/
}else if( !$_POST["chineseCharacterName"]  && !$_POST["howToRead"]  && !$_POST["emailAddress"]  && !$_POST["contentsOfInquiry"]  ) {
  /*戻ってきて空だった場合*/
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] && $_POST["emailAddress"] && $_POST["contentsOfInquiry"] ) {
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];		//お名前 右が左に入。
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
  if( !$_POST["phoneNumber"]  ){
    unset($_SESSION["phoneNumber"]) ;
  }else{
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
  }
    header("Location: confirm.php") ;
  // exit ;
}





/** print_r($_POST); *//** header("Location: confirm.php") ; → 指定ページに飛ばすコード */
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>inquiryScreen</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php function XssOCuntermeasure($XssMeasures){
            echo htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8") ;
        }
  ?>
  <?php
  /**スーパーグローバル変数を使うときの最初の記述 */
  /**ファイルの先頭部に書かないとエラーが出る。 */
  /*
  if( isset($_SESSION["chineseCharacterName"])){
  }else{}
  if( isset($_SESSION["howToRead"])){

  }
  if( isset($_SESSION["phoneNumber"])){

  }
  if( isset($_SESSION["emailAddress"])){

  }
  if( isset($_SESSION["contentsOfInquiry"])){

  }
  */
  $Within10Characters = 10 ;
    ?>

  <?php include "inquiryHeader2.php";?>

  <main>
    <div class="contentOfTransmission">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <div class="fillInTheFollowingItems">
        <p class="enter">下記の項目をご記入の上送信ボタンを押してください</p>
        <p class="enter1">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
        <p class="enter2">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。 </p>
        <p class="enter3"> は必須項目となります。</p>
        <p class="asterisk0">*</p>
        <p class="asterisk1">*</p>
        <p class="asterisk2">*</p>
        <p class="asterisk3">*</p>


        <div class="fillInTheFollowingItems2">
          <p class="enter">下記の項目をご記入の上送信ボタンを押してください</p>
        </div>
      </div>

      <form method="POST" action="inquiryScreen.php" name="inquiryScreen.php">
        <div class="entryName">
          <div class="nameNote">
            <?php
          /**下記if文の記述で初回値なしの際のエラーを消す。これで履歴ができた際のみ反応する。 */
              if(empty($_SESSION["chineseCharacterName"])){
                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])) {/** 送信buttonを押したときに発火 → isset($_POST['buttonの name 名']) */
                    $result = "※氏名は必須入力です。１０文字以内でご入力ください。";
                    echo $result ;
                }
              }else if(mb_strlen($_SESSION["chineseCharacterName"])>10){
                $result = "※氏名は,１０文字以内でご入力ください。";
                echo $result ;
              }
            ?>
          </div>
          <input value="<?php  if( isset($_SESSION["chineseCharacterName"])){
                echo $_SESSION["chineseCharacterName"] ;/**値が入っていれば出力 */
              } ?>" class=" entryPlace" type=" text" placeholder="山田 太郎" id="chineseCharacterName"
            name="chineseCharacterName">
        </div>

        <div class="entryName2">
          <div class="phoneticNote">
            <?php
                      /**下記if文の記述で初回値なしの際のエラーを消す。これで履歴ができた際のみ反応する。 */
                      if(empty($_SESSION["howToRead"])){
                        $result = "";
                        if (isset($_POST['send']) && empty($_SESSION["howToRead"])) {
                            $result = "※フリガナは必須入力です。１０文字以内でご入力ください。";
                            echo $result ;
                        }
                      }else if(mb_strlen($_SESSION["howToRead"])>10){
                        $result = "※フリガナは,１０文字以内でご入力ください。";
                        echo $result ;
                      }
            ?>
          </div>
          <input value="<?php if( isset($_SESSION["howToRead"])){ echo $_SESSION["howToRead"] ;/**値が入っていれば出力 */ }?>"
            class="entryPlace" type=" text" name="howToRead" placeholder="ヤマダタロウ" id="howToRead">
        </div>

        <div class="entryNumber">
          <div class="phoneNumberNote">
            <?php           /**下記if文の記述で初回値なしの際のエラーを消す。これで既定の履歴ができた際のみ反応する。 */
                      if(empty($_SESSION["phoneNumber"])){

                      }else if(!preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){/**電話番号が半角数字0-9じゃなければ表示しない */
                        echo "※電話番号は、半角数字0-9でご入力ください。" ;
                      }
              ?>
          </div>
          <input
            value="<?php if( isset($_SESSION["phoneNumber"])){echo $_SESSION["phoneNumber"] ;/**値が入っていれば出力 */}/*else{/**入っていなければ空 }*/?>"
            class="entryPlace" type=" tel" name="phoneNumber" placeholder="09012345678" id="phoneNumber">
        </div>

        <div class="entryAddress">
          <div class="EmailAddressIsRequired">
            <?php          /**下記if文の記述で初回値なしの際のエラーを消す。これで履歴ができた際のみ反応する。 */
          $pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
              if(empty($_SESSION["emailAddress"])){
                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["emailAddress"])) {
                    $result = "※メールアドレスは必須入力です。";
                    echo $result ;
                }
              }else if ($_SESSION["emailAddress"] === $pattern ){

              }
            ?>
          </div>
          <input
            value="<?php if( isset($_SESSION["emailAddress"])){echo $_SESSION["emailAddress"] ;/**値が入っていれば出力 */} ?>"
            class="entryPlace" type="email" name="emailAddress" placeholder="test@test.co.jp" id="emailAddress">
        </div>

        <div class="detail">
          <div class="theContentOfYourInquiryIsEssential">
            <?php
            if(empty($_SESSION["contentsOfInquiry"])){ $result = ""; if (isset($_POST['send']) && empty($_SESSION["contentsOfInquiry"])) { $result = "※お問い合わせ内容は必須入力です。"; echo $result ; } }
            ?>
          </div>
          <textarea class="entryDetail" name="contentsOfInquiry"
            id="contentsOfInquiry"><?php if( isset($_SESSION["contentsOfInquiry"])){ echo $_SESSION["contentsOfInquiry"] ;/**値が入っていれば出力 textareaは改行するとBOX内に変な空白が入る*/} ?></textarea>
        </div>



        <p class="fillInYourName0">氏名</p>
        <p class="howToRead0">フリガナ</p>
        <p class="fillInThePhoneNumber0">電話番号</p>
        <p class="fillInYourEmailAddress0">メールアドレス</p>
        <button class="submitButton3" type="submit" id="btnSubmit" name="send">
          <p class="sendSize2">送 &nbsp;&nbsp;&nbsp; 信</p>
        </button>
      </form>

  </main>
  <div class=inquiryFooter>
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
