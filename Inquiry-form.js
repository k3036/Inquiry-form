function checkForm(){
    if(document.form1.input01.value == "" || document.form1.input02.value == ""){
        alert("必須項目を入力して下さい。");
	return false;
    }else{
	return true;
    }
}

jQuery(function() {
    var appear = false;
    var pageTop = $('#page_top');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 400) {  //100pxスクロールしたら
        if (appear == false) {
          appear = true;
          pageTop.stop().animate({
            'bottom': '0px' //下から0pxの位置に
          }, 300); //0.3秒かけて現れる
        }
      } else {
        if (appear) {
          appear = false;
          pageTop.stop().animate({
            'bottom': '-50px' //下から-50pxの位置に
          }, 300); //0.3秒かけて隠れる
        }
      }
    });
    pageTop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
      return false;
    });
  });




// ボタン、モダル、モダルの閉じるボタン、オーバーレイを変数に格納、モーダルウィンドウの出力
let followSpace = document.querySelector('.followSpace');

//モーダルウィンドウの出力
let followModal = document.querySelector('.followModal');

//バツ消しと外枠クリック消し
let followCloseBtn = document.querySelector('.followCloseBtn');

//モーダルウィンドウの外枠
let followOverlay = document.querySelector('.followOverlay');

// ボタンをクリックしたら、モダルとオーバーレイに.activeを付ける,モーダルウィンドウの表示。
followSpace.addEventListener('click', function(e){
  // aタグのデフォルトの機能を停止する
  e.preventDefault();
  // モーダルとオーバーレイにactiveクラスを付与する
  followModal.classList.add('active');
  followOverlay.classList.add('active');
});

// 画面以外をクリックすると消える。バツけしも消える。
followOverlay.addEventListener('click', function() {
followModal.classList.remove('active');
followOverlay.classList.remove('active');
});

// ボタン、モーダルウィンドウ、モダルの閉じるボタン、オーバーレイを変数に格納、モーダルウィンドウの出力
let space = document.querySelector('.space');

//モーダルウィンドウの出力
let modal = document.querySelector('.modal');

//バツ消しと外枠クリック消し
let closeBtn = document.querySelector('.close');

//モーダルウィンドウの外枠
let overlay = document.querySelector('.overlay');

// ボタンをクリックしたら、モダルとオーバーレイに.activeを付ける,モーダルウィンドウの表示。
space.addEventListener('click', function(e){
  // aタグのデフォルトの機能を停止する
  e.preventDefault();
  // モーダルとオーバーレイにactiveクラスを付与する
  modal.classList.add('active');
  overlay.classList.add('active');
});

// 画面以外をクリックすると消える。バツけしも消える。
overlay.addEventListener('click', function() {
  modal.classList.remove('active');
  overlay.classList.remove('active');
});
/**画面サイズにに関わらず画像サイズを固定 */
document.addEventListener('DOMContentLoaded', function () {
  const resizeFix = function () {
      const checkHeight = window.innerWidth / 1920 * 1080;
      const marginTop = window.innerHeight - checkHeight;
      const checkWidth = window.innerHeight / 1080 * 1920;
      const marginLeft = window.innerWidth - checkWidth;

      if (checkHeight > window.innerHeight) { //
          document.getElementsByClassName('sizeFixed')[0].style.transform = 'scale(' + window.innerHeight / 1080 + ')';
          document.getElementsByClassName('sizeFixed')[0].style.marginLeft = marginLeft / 2 + 'px';
          document.getElementsByClassName('sizeFixed')[0].style.marginTop = 0 + 'px';
      } else {
          document.getElementsByClassName('sizeFixed')[0].style.transform = 'scale(' + window.innerWidth / 1920 + ')';
          document.getElementsByClassName('sizeFixed')[0].style.marginLeft = 0 + 'px';
          document.getElementsByClassName('sizeFixed')[0].style.marginTop = marginTop / 2 + 'px';
      }
  }

  resizeFix();

  window.addEventListener('resize', function () {
      resizeFix();
  });
});
//追従するヘッダーの記述。
const headerMove = $('header') ;
$(window).on("load scroll" , function (){
    if($(this).scrollTop() > 100 && headerMove.hasClass("isFixed")==false){
        headerMove.css("display","block");
        headerMove.css({"top": "-80px" });
        headerMove.addClass("isFixed");
        headerMove.css({"top":0} , 600) ;
        headerMove.css({"z-index": "555" });
    }
    else if ($(this).scrollTop() < 80 && headerMove.hasClass("isFixed") == true){
        headerMove.removeClass("isFixed");
        headerMove.css("display","none");
    }
})

window.addEventListener('scroll', function(){
    window.scrollY;
});



      window.onload = function(){
      const btnSubmit = document.getElementById('btnSubmit');
      const chineseCharacterName = document.getElementById('chineseCharacterName');
      const howToRead = document.getElementById('howToRead');
      const phoneNumber = document.getElementById('phoneNumber');
      const emailAddress = document.getElementById('emailAddress');
      const contentsOfInquiry = document.getElementById('contentsOfInquiry');

      btnSubmit.addEventListener('click', function(event) {
        /*let message = [];*/
        /*入力値チェック*/

        if(!phoneNumber.value.match(/^([0-9]{0,})$/)){
          alert('電話番号は（0～9）の数字で入力してください。') ;
        }


/**  match(/^([0-9]{0,})$/)   [0-9]は0～9までの数字、 {0,}は文字数（桁数）、{5,}なら５文字以上   */









      if(chineseCharacterName.value =="" && howToRead.value =="" && emailAddress.value =="" && contentsOfInquiry.value ==""){
          alert("氏名とフリガナとメールアドレスとお問い合わせ内容が未入力です。");
          /*document.getElementById("btnSubmit").disabled = true;*/
          event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
        }else if(chineseCharacterName.value =="" && howToRead.value =="" && emailAddress.value ==""){
        alert("氏名とフリガナとメールアドレスが未入力です。");
        /*document.getElementById("btnSubmit").disabled = true;*/
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(chineseCharacterName.value =="" && emailAddress.value =="" && contentsOfInquiry.value ==""){
        alert("氏名とメールアドレスとお問い合わせ内容が未入力です。");
        /*document.getElementById("btnSubmit").disabled = true;*/
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }
      else if(chineseCharacterName.value =="" && contentsOfInquiry.value.value =="" && emailAddress.value ==""){
        alert("氏名とメールアドレスとお問い合わせ内容が未入力です。");
        /*document.getElementById("btnSubmit").disabled = true;*/
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(contentsOfInquiry.value =="" && howToRead.value =="" && emailAddress.value ==""){
        alert("フリガナとメールアドレスとお問い合わせ内容が未入力です。");
        /*document.getElementById("btnSubmit").disabled = true;*/
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(chineseCharacterName.value =="" && howToRead.value =="" && contentsOfInquiry.value ==""){
        alert("氏名とフリガナとお問い合わせ内容が未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(chineseCharacterName.value =="" && howToRead.value ==""){
        alert("氏名とフリガナが未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(chineseCharacterName.value =="" && emailAddress.value ==""){
        alert("氏名とアドレスが未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if( emailAddress.value =="" && howToRead.value ==""){
        alert("フリガナとアドレスが未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if( contentsOfInquiry.value =="" && howToRead.value ==""){
        alert("お問い合わせ内容とフリガナが未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if( contentsOfInquiry.value =="" && chineseCharacterName.value ==""){
        alert("お問い合わせ内容と氏名が未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if( contentsOfInquiry.value =="" && emailAddress.value ==""){
        alert("お問い合わせ内容とメールアドレスが未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(chineseCharacterName.value ==""){
        alert("氏名が未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }else if(howToRead.value ==""){
        alert("フリガナが未入力です。");
        event.preventDefault();
      }else if(emailAddress.value ==""){/**空チェックok */
        alert("メールアドレスが未入力です。");
        event.preventDefault();
      }else if(contentsOfInquiry.value ==""){
        alert("お問い合わせ内容が未入力です。");
        event.preventDefault();/**エラー発生時にページ移換せずに再度入力できるようにする */
      }


















/*

                var phoneNumberRegularExpression0 = /^(|050|070|080|090)0\d{4}0\d{4}$/
                var phoneNumberRegularExpression =/\A(((0(\d{1}[-(]?\d{4}|\d{2}[-(]?\d{3}|\d{3}[-(]?\d{2}|\d{4}[-(]?\d{1}|[5789]0[-(]?\d{4})[-)]?)|\d{1,4}\-?)\d{4}|0120[-(]?\d{3}[-)]?\d{3})\z/ ;
                let regex = /^\d{3}-\d{4}-\d{4}$/;

                if( test(phoneNumber === "" )){alert("謎")}
                  if( test(phoneNumber == phoneNumberRegularExpression0) ){
                    alert("電話番号は半角数字です。");
                  }
                  if( test(phoneNumber ==phoneNumberRegularExpression) ){
                    alert("電話番号は半角数字です。");
                  }
                  if( test(phoneNumber== regex )){
                    alert("電話番号は半角数字です。");
                  }

                  if( phoneNumberRegularExpression0 == phoneNumber){
                    alert("電話番号は半角数字です。");
                  }
                          if( regex == phoneNumber) {
                    alert("電話番号は半角数字です。");
                  }
*/








    });
  }
