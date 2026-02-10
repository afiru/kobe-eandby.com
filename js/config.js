jQuery(function ($) {
    let pos = 0;
    let isIgnoreScrollHide = false;
    let isSpMenuOpen = false;
    let isPcFixedBtnHidden = false;

    let header = $('.baseHeader');
    let jsheaderGnav = $('.headerPcGnav');
    let menuBtn = $('.jsHeaderGnavPc');
    let menuBtnSp = $('.jsBtnHeaderOpenSp');
    let menuCloseBtnSp = $('.jsBtnHeaderCloseSp');
    let headerSpGnav = $('.headerSpGnav');
    let pcFixedBtn = $('.pcFixedBtn');
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
       SP メニュー OPEN
    ========================= */
    menuBtnSp.on('click', function () {
        isSpMenuOpen = true;
        header.addClass('on').removeClass('hide');
        headerSpGnav.stop(true, true).animate({ right: '0%' }, 500);
    });

    /* =========================
       SP メニュー CLOSE
    ========================= */
    menuCloseBtnSp.on('click', function () {
        isSpMenuOpen = false;
        headerSpGnav.stop(true, true).animate({ right: '-100%' }, 500);
    });

    /* =========================
       SP メニュー内リンク
    ========================= */
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
       スクロール制御（統合）
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

        /* ---------- PC 固定CTA（ふわっと） ---------- */
        if (window.innerWidth < 768) {
            pcFixedBtn.removeClass('is-show');
            return;
        }

        if (isPcFixedBtnHidden) return;

        if (scrollTop >= kadaiTop) {
            pcFixedBtn.addClass('is-show');
        } else {
            pcFixedBtn.removeClass('is-show');
        }
    });

    /* =========================
       スムーススクロール
    ========================= */
    $(window).on('load', function () {

        let urlHash = location.hash;

        if (urlHash) {
            $('body,html').scrollTop(0);
            let target = $(urlHash);
            $('body,html').animate({
                scrollTop: target.offset().top
            }, 500);
        }

        $('a[href^="#"]').on('click', function () {
            let target = $($(this).attr('href'));
            $('body,html').animate({
                scrollTop: target.offset().top
            }, 500);
        });
    });

    /* =========================
       PC 固定CTA クリック
    ========================= */
    $('.btnCtaPcFixedBtnFxc').on('click', function () {
        isPcFixedBtnHidden = true;
        pcFixedBtn.removeClass('is-show');
    });
});
