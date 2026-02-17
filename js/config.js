/* =========================
   グローバル変数
========================= */
let pcFixedBtn;


/* =========================
   メイン処理
========================= */
jQuery(function ($) {

    /* ----- 重要：ここで代入 ----- */
    pcFixedBtn = $('.pcFixedBtn');

    let pos = 0;
    let isIgnoreScrollHide = false;
    let isSpMenuOpen = false;

    let header = $('.baseHeader');
    let jsheaderGnav = $('.headerPcGnav');
    let menuBtn = $('.jsHeaderGnavPc');
    let menuBtnSp = $('.jsBtnHeaderOpenSp');
    let menuCloseBtnSp = $('.jsBtnHeaderCloseSp');
    let headerSpGnav = $('.headerSpGnav');
    let kadaiTop = $('.kadai').offset().top;



    /* =========================
       PC メニュー
    ========================= */
    menuBtn.on('click', function () {
        if ($(this).hasClass('off')) {
            $(this).removeClass('off').addClass('on');
            jsheaderGnav.stop(true, true).animate({ right: '0%' }, 500);
        } else {
            $(this).removeClass('on').addClass('off');
            jsheaderGnav.stop(true, true).animate({ right: '-100%' }, 500);
        }
    });

    $('.headerPcGnav a').on('click', function () {
        menuBtn.removeClass('on').addClass('off');
        jsheaderGnav.stop(true, true).animate({ right: '-100%' }, 500);
    });



    /* =========================
       SP メニュー
    ========================= */
    menuBtnSp.on('click', function () {
        isSpMenuOpen = true;
        header.addClass('on').removeClass('hide');
        headerSpGnav.stop(true, true).animate({ right: '0%' }, 500);
    });

    menuCloseBtnSp.on('click', function () {
        isSpMenuOpen = false;
        headerSpGnav.stop(true, true).animate({ right: '-100%' }, 500);
    });

    $('.headerSpGnav a').on('click', function () {
        isIgnoreScrollHide = true;
        isSpMenuOpen = false;

        headerSpGnav.stop(true, true).animate({ right: '-100%' }, 500);
        header.addClass('on').removeClass('hide');

        setTimeout(() => {
            isIgnoreScrollHide = false;
        }, 300);
    });



    /* =========================
       スクロール制御
    ========================= */
    $(window).on('scroll', function () {

        let scrollTop = $(this).scrollTop();

        /* ---------- header ---------- */
        if (!isSpMenuOpen) {

            if (scrollTop >= 150) {
                header.addClass('on');
            } else {
                header.removeClass('on');
            }

            if (!isIgnoreScrollHide) {
                if (scrollTop < pos) {
                    header.removeClass('hide');
                } else if (pos <= 0) {
                    header.fadeIn();
                } else {
                    header.addClass('hide');
                }
            }
        }

        pos = scrollTop;

        /* ---------- PC 固定CTA ---------- */
        if (window.innerWidth < 768) {
            pcFixedBtn.removeClass('is-show');
            return;
        }

        if (scrollTop > kadaiTop) {
            pcFixedBtn.addClass('is-show');
        } else {
            pcFixedBtn.removeClass('is-show');
        }
    });



    /* =========================
       スムーススクロール
    ========================= */
    $('a[href^="#"]').on('click', function (e) {

        let href = $(this).attr('href');

        if (!href || href === '#') return;

        let target = $(href);
        if (!target.length) return;

        e.preventDefault();

        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);
    });



    /* =========================
       ページ読み込み時ハッシュ対応
    ========================= */
    $(window).on('load', function () {

        let urlHash = location.hash;

        if (urlHash) {

            let target = $(urlHash);
            if (!target.length) return;

            $('html, body').scrollTop(0);

            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
        }
    });

});



/* =========================
   PC 固定CTA クリック（外に出したままOK）
========================= */
$('.jsbtnCtaPcFixedBtnFxc02').on('click', function (e) {

    let href = $(this).attr('href');

    if (href && href !== '#') {
        let target = $(href);
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
        }
    }

    if (pcFixedBtn) {
        pcFixedBtn.removeClass('is-show');
    }
});