
const headerMove = $('header') ;
$(window).on("load scroll" , function (){
    if($(this).scrollTop() > 100 && headerMove.hasClass("isFixed")==false){
        headerMove.css("display","block");
        headerMove.css({"top": "-80px" });
        headerMove.addClass("isFixed");
        headerMove.css({"top":0} , 600) ;
    }
    else if ($(this).scrollTop() < 80 && headerMove.hasClass("isFixed") == true){
        headerMove.removeClass("isFixed");
        headerMove.css("display","none");
    }
})



window.addEventListener('scroll', function(){
    window.scrollY
});



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
