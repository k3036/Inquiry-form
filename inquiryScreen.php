<?php
session_start();
/***/
if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  empty($_POST["phoneNumber"])){

}else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}
	// リダイレクトを実行
else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) )  {
  /*初回値空のとき何もしない*/
}else if( !$_POST["chineseCharacterName"]  && !$_POST["howToRead"]  && !$_POST["emailAddress"]  && !$_POST["contentsOfInquiry"]  ) {
  /*戻ってきて空だった場合*/
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] && $_POST["emailAddress"] && $_POST["contentsOfInquiry"] ) {
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];		//右が左に入。
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
  if( empty($_POST["phoneNumber"])  ){

  }else if( $_POST["phoneNumber"]){
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
  }
    header("Location: confirm.php") ;
  // exit ;
}else if( $_POST["phoneNumber"] && $_POST["howToRead"] && $_POST["emailAddress"]) {/** 電話 読仮名 アド */
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] && $_POST["emailAddress"]) {/** 名前 読仮名 電話 */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["chineseCharacterName"] && $_POST["phoneNumber"] && $_POST["emailAddress"]) {/** 名前 電話 アド */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["chineseCharacterName"] && $_POST["phoneNumber"] ) {/** 電話  名前  */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}else if( $_POST["howToRead"] && $_POST["phoneNumber"] ) {/** 電話 読仮名  */
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}else if( $_POST["emailAddress"] && $_POST["phoneNumber"] ) {/** 電話 アド */
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] ) {
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
}else if($_POST["phoneNumber"] ) {/** 電話 アド */
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] && $_POST["emailAddress"]) {/** 名前 読仮名 アド */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] && $_POST["contentsOfInquiry"] ) {/** 名前、読仮名、お問合せ内容*/
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"] ;
}else if( $_POST["emailAddress"] && $_POST["howToRead"] && $_POST["contentsOfInquiry"] ) {/**アド、読み仮名、お問合せ内容 */
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"] ;
}else if( $_POST["emailAddress"] && $_POST["chineseCharacterName"] && $_POST["contentsOfInquiry"] ) {/**アド、名前、お問合せ内容    ☆各３種類づつで一周*/
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"] ;
}else if( $_POST["chineseCharacterName"] && $_POST["howToRead"] ) {/** 名前 読仮名  */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["howToRead"]	= $_POST["howToRead"];
}else if( $_POST["chineseCharacterName"] && $_POST["emailAddress"]) {/** 名前  アド */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["chineseCharacterName"] && $_POST["contentsOfInquiry"]) {/** 名前 お問合せ内容 */
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"] ;
}else if( $_POST["howToRead"] && $_POST["emailAddress"] ) {/**  読仮名、アド  *//** 読仮名、名前  */
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["howToRead"] && $_POST["contentsOfInquiry"] ) {/**  読仮名、お問合せ内容 */
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"] ;
}else if( $_POST["howToRead"] && $_POST["emailAddress"] ) {/**アド,読仮名  */
  $_SESSION["howToRead"]	= $_POST["howToRead"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if( $_POST["contentsOfInquiry"] && $_POST["emailAddress"] ) {/**アド,お問合せ内容*/
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if($_POST["chineseCharacterName"]){
  $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
}else if($_POST["howToRead"]){
  $_SESSION["howToRead"]	= $_POST["howToRead"];
}else if($_POST["emailAddress"]){
  $_SESSION["emailAddress"]	= $_POST["emailAddress"];
}else if($_POST["contentsOfInquiry"]){
  $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
}else if($_POST["phoneNumber"]){
  $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
}
/**  必須入力チェック   */
$mailAdd ="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$" ;
$pattern = "^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$";
$pattern2 = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
if (empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])&&empty($_SESSION["phoneNumber"])) {
    if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {
        echo <<<EOM
      <script type="text/javascript">
        alert( "※[氏名、フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
      </script>
      EOM;
    }
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
<script type="text/javascript">
  alert( "※[氏名、フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
</script>
EOM;
} else if (isset($_POST['send']) && empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
} else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"]) && empty($_SESSION["emailAddress"]) && empty($_SESSION["contentsOfInquiry"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
} else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"]) && empty($_SESSION["howToRead"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、フリガナ、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、フリガナ、メールアドレス]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、フリガナ]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["emailAddress"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、メールアドレス]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
} else if (isset($_POST['send']) && empty($_SESSION["howToRead"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[フリガナ、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["howToRead"]) &&empty($_SESSION["emailAddress"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[フリガナ、メールアドレス]は必須入力です。" )
  </script>
  EOM;
} else if (isset($_POST['send']) && empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {
  echo <<<EOM
  <script type="text/javascript">
    alert( "※[メールアドレス、お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[氏名]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) && empty($_SESSION["howToRead"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[フリガナ ]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) &&empty($_SESSION["emailAddress"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[メールアドレス]は必須入力です。" )
  </script>
  EOM;
}else if (isset($_POST['send']) &&empty($_SESSION["contentsOfInquiry"])) {
    echo <<<EOM
  <script type="text/javascript">
    alert( "※[お問い合わせ内容 ]は必須入力です。" )
  </script>
  EOM;
}
/** 電話番号のチェック */
if(empty($_SESSION["phoneNumber"])){

}else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){/**電話番号が半角数字0-9じゃなければ表示しない */
  echo <<<EOM
  <script type="text/javascript">
    alert( "※電話番号は、半角数字0-9でご入力ください。" )
  </script>
  EOM;
}
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
  <?php include "inquiryHeader3.php";?>
  <main>
    <div class="contentOfTransmission">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <div class="fillInTheFollowingItems">
        <p class="enter">下記の項目をご記入の上送信ボタンを押してください</p>
        <p class="enter1">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
        <p class="enter2">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。 </p>
        <p class="asterisk00">* </p>
        <p class="enter3"> は必須項目となります。</p>
        <div class="fillInTheFollowingItems2">
          <p class="enter5">下記の項目をご記入の上送信ボタンを押してください</p>
        </div>
      </div>
      <form method="POST" action="inquiryScreen.php" name="inquiryScreen.php">
        <div class="entryName">
          <p class="fillInYourName0">氏名</p>
          <p class="asterisk0">* </p>
          <div class="nameNote">
            <?php
              if(empty($_SESSION["chineseCharacterName"])){
                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])) {/** 送信buttonを押したときに発火 → isset($_POST['buttonの name 名']) */
                    $result = "※氏名は必須入力です。１０文字以内でご入力ください。";
                    echo $result ;
                }
              }else if(mb_strlen($_SESSION["chineseCharacterName"])>10){
                $result = "※氏名は,１０文字以内でご入力ください。";
                echo $result ;
                echo <<<EOM
                <script type="text/javascript">
                  alert( "※氏名は10文字以内で入力して下さい。" )
                </script>
                EOM;
                unset($_SESSION["chineseCharacterName"]);
              }
            ?>
          </div>
          <div class=nameMove><input value="<?php  if( isset($_SESSION["chineseCharacterName"])){
                echo $_SESSION["chineseCharacterName"] ;/**値が入っていれば出力 */
              } ?>" class=" entryPlace" type=" text" placeholder="山田 太郎" id="chineseCharacterName"
              name="chineseCharacterName"></div>
        </div>
        <div class="entryName2">
          <p class="howToRead0">フリガナ</p>
          <p class="asterisk1">*</p>
          <div class="phoneticNote">
            <?php
                      if(empty($_SESSION["howToRead"])){
                        $result = "";
                        if (isset($_POST['send']) && empty($_SESSION["howToRead"])) {
                            $result = "※フリガナは必須入力です。１０文字以内でご入力ください。";
                            echo $result ;
                        }
                      }else if(isset($_POST['send']) && mb_strlen($_SESSION["howToRead"])>10){
                        $result = "※フリガナは,１０文字以内でご入力ください。";
                        echo $result ;
                        echo <<<EOM
                        <script type="text/javascript">
                          alert( "※フリガナは10文字以内で入力して下さい。" )
                        </script>
                        EOM;
                        unset($_SESSION["howToRead"]);
                      }
            ?>
          </div>
          <div class=howToReadReeding> <input
              value="<?php if( isset($_SESSION["howToRead"])){ echo $_SESSION["howToRead"] ;/**値が入っていれば出力 */ }?>"
              class="entryPlace" type=" text" name="howToRead" placeholder="ヤマダタロウ" id="howToRead"></div>
        </div>
        <div class="entryNumber">
          <p class="fillInThePhoneNumber0">電話番号</p>
          <div class="phoneNumberNote">
            <?php           /**下記if文の記述で初回値なしの際のエラーを消す。これで既定の履歴ができた際のみ反応する。 */
                      if(empty($_SESSION["phoneNumber"])){
                        $result ="";
                      }else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){/**電話番号が半角数字0-9じゃなければ表示しない */
                        $result = "※電話番号は、半角数字0-9でご入力ください。";
                        echo $result ;
                        unset($_SESSION["phoneNumber"]);
                      }
              ?>
          </div>
          <div class=movePhoneNumber><input
              value="<?php if( isset($_SESSION["phoneNumber"])){echo $_SESSION["phoneNumber"] ;/**値が入っていれば出力 */}/*else{/**入っていなければ空 }*/?>"
              class="entryPlace" type=" tel" name="phoneNumber" placeholder="09012345678" id="phoneNumber"></div>
        </div>
        <div class="addressMovement">
          <p class="fillInYourEmailAddress0">メールアドレス</p>
          <p class="asterisk2">*</p>
          <div class="EmailAddressIsRequired">
            <?php
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
          <div class=addressMove>
            <input
              value="<?php if( isset($_SESSION["emailAddress"])){echo $_SESSION["emailAddress"] ;/**値が入っていれば出力 */} ?>"
              class="entryPlace" type="email" name="emailAddress" placeholder="test@test.co.jp" id="emailAddress">
          </div>
          <div class="detail">
            <p class="asterisk3">*</p>
            <div class="theContentOfYourInquiryIsEssential">
              <?php
            if(empty($_SESSION["contentsOfInquiry"])){ $result = ""; if (isset($_POST['send']) && empty($_SESSION["contentsOfInquiry"])) { $result = "※お問い合わせ内容は必須入力です。"; echo $result ; } }
            ?>
            </div>
          </div>
          <div class="inquiryMove">
            <textarea class="entryDetail" name="contentsOfInquiry"
              id="contentsOfInquiry"><?php if( isset($_SESSION["contentsOfInquiry"])){ echo($_SESSION["contentsOfInquiry"]) ;/**値が入っていれば出力 textareaは改行するとBOX内に変な空白が入る  nl2br*/} ?></textarea>
          </div>
          <button class="submitButton3" type="submit" id="btnSubmit" name="send">
            <p class="sendSize2">送 &nbsp;&nbsp;&nbsp; 信</p>
          </button>
      </form>
  </main>
  <div class="FooterList"></div>
  </main>
  <div class="FooterLine"></div>
  <?php include "footer.php";?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>
