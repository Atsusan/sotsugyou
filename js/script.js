// ハンバーガーメニュー実装

jQuery('.drawer-icon').click(function() {
    jQuery('body').toggleClass('is-open');
});

jQuery('.drawer-nav-list').click(function() {
    jQuery('body').removeClass('is-open');
});

jQuery('a[href^="#"]').click(function() {
    jQuery('body').removeClass('is-open');
});

// #から始まるURLがクリックされた時

jQuery('a[href^="#"]').click(function() {
    // .headerクラスがついた要素の高さを取得
    const header = jQuery(".header").innerHeight();

    // 移動速度を指定（ミリ秒）
    const speed = 300;

    // hrefで指定されたidを取得
    const id = jQuery(this).attr("href");

    // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
    const target = jQuery("#" == id ? "html" : id);

    // ページのトップを基準にターゲットの位置を取得からトップからの距離からヘッダー分の高さを引く
    const position = jQuery(target).offset().top - header;

    // ターゲットの位置までspeedの速度で移動

    jQuery("html, body").animate(
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
jQuery('.accordion-head').click(function() {
    jQuery(this).next().slideToggle();
    jQuery(this).children('.accordion-icon').toggleClass( 'is-accordion-open' );
    jQuery(this).toggleClass( 'is-accordion-open');
  });

// Topへ戻る

jQuery(function() {
    var pagetop = jQuery('.floating');
    pagetop.hide();
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > 70) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function() {
        jQuery('body, html').animate({scrollTop: 0}, 500);
        return false;
    });
});

//   wow.js
new WOW().init();

// swiper.js

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
});