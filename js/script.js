// ハンバーガーメニュー実装

$('.drawer-icon').click(function() {
    $('body').toggleClass('is-open');
});

$('.drawer-nav-list').click(function() {
    $('body').removeClass('is-open');
});

$('a[href^="#"]').click(function() {
    $('body').removeClass('is-open');
});

// #から始まるURLがクリックされた時

$('a[href^="#"]').click(function() {
    // .headerクラスがついた要素の高さを取得
    const header = $(".header").innerHeight();

    // 移動速度を指定（ミリ秒）
    const speed = 300;

    // hrefで指定されたidを取得
    const id = $(this).attr("href");

    // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
    const target = $("#" == id ? "html" : id);

    // ページのトップを基準にターゲットの位置を取得からトップからの距離からヘッダー分の高さを引く
    const position = $(target).offset().top - header;

    // ターゲットの位置までspeedの速度で移動

    $("html, body").animate(
    {
        scrollTop: position
    },
    speed
    );
    return false;

});

// selectタグカラー設定
function Color(name){
    if( name.value == 0 ){
     name.style.color = '';
    }else{
     name.style.color = 'black';
    }
   }


//　アコーディオン実装
$('.accordion-head').click(function() {
    $(this).next().slideToggle();
    $(this).children('.accordion-icon').toggleClass( 'is-accordion-open' );
    $(this).toggleClass( 'is-accordion-open');
  });

// Topへ戻る

$(function() {
    var pagetop = $('.floating');
    pagetop.hide();
    $(window).scroll(function() {
        if($(this).scrollTop() > 70) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function() {
        $('body, html').animate({scrollTop: 0}, 500);
        return false;
    });
});

//   wow.js
// new WOW().init();

// swiper.js

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
});