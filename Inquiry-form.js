jQuery(function () {
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
followSpace.addEventListener('click', function (e) {
  // aタグのデフォルトの機能を停止する
  e.preventDefault();
  // モーダルとオーバーレイにactiveクラスを付与する
  followModal.classList.add('active');
  followOverlay.classList.add('active');
});

// 画面以外をクリックすると消える。バツけしも消える。
followOverlay.addEventListener('click', function () {
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
space.addEventListener('click', function (e) {
  // aタグのデフォルトの機能を停止する
  e.preventDefault();
  // モーダルとオーバーレイにactiveクラスを付与する
  modal.classList.add('active');
  overlay.classList.add('active');
});

// 画面以外をクリックすると消える。バツけしも消える。
overlay.addEventListener('click', function () {
    modal.classList.remove('active');
    overlay.classList.remove('active');
});

//追従するヘッダーの記述。
  const headerMove = $('header');
  $(window).on("load scroll", function () {
    if ($(this).scrollTop() > 100 && headerMove.hasClass("isFixed") == false) {
        headerMove.css("display", "block");
        headerMove.css({ "top": "-80px" });
        headerMove.addClass("isFixed");
        headerMove.css({ "top": 0 }, 600);
        headerMove.css({ "z-index": "555" });
  }
    else if ($(this).scrollTop() < 80 && headerMove.hasClass("isFixed") == true) {
        headerMove.removeClass("isFixed");
        headerMove.css("display", "none");
  }
})

// window.addEventListener('scroll', function () {
//   window.scrollY;
// });

  window.addEventListener('load', (event) => {

    document.querySelectorAll('a[href^="#"]').forEach(e => e.addEventListener('click', function(e){

      //a要素のクリックイベントをキャンセル。
      e.preventDefault();

      //a要素が持つhref属性の値を取得。（#content1のように先頭に#が付いた状態で取得される。）
      let target = e.target.getAttribute("href");

      //指定した要素までの距離を取得。
      let targetTop = document.querySelector(target).getBoundingClientRect().top  + window.pageYOffset;

      let scrollOptions = {
        left: 0,
        top: targetTop,
        behavior: 'smooth'
      }

      //指定した要素へスクロールする。
      window.scrollTo(scrollOptions);
    }));

  });

