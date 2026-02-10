jQuery(function ($) {
    let pos = 0;
    let header = $('.baseHeader');
    let jsheaderGnav = $('.headerPcGnav');
    let menuBtn = $('.jsHeaderGnavPc');
    let menuBtnSp = $('.jsBtnHeaderOpenSp');
    let menuCloseBtnSp = $('.jsBtnHeaderCloseSp');
    let headerSpGnav = $('.headerSpGnav');

    // メニューボタンを押したとき
    menuBtn.on('click', function () {
        if ($(this).hasClass('off')) {
            $(this).removeClass('off').addClass('on');
            header.addClass('on'); // メニュー開いたら必ず on
            jsheaderGnav.animate({
                'right': '0%'
            }, 500);
        } else {
            $(this).removeClass('on').addClass('off');
            jsheaderGnav.animate({
                'right': '-100%'
            }, 500);

            // メニュー閉じた時点でスクロール位置に応じて判定
            if ($(window).scrollTop() >= 150) {
                header.addClass('on');
            } else {
                header.removeClass('on');
            }
        }
    });

    menuBtnSp.on('click', function () {
        header.addClass('on'); // メニュー開いたら必ず on
        headerSpGnav.animate({
            'right': '0%'
        }, 500);
    });
    menuCloseBtnSp.on('click', function () {
        headerSpGnav.animate({
            'right': '-100%'
        }, 500);
        // メニュー閉じた時点でスクロール位置に応じて判定
        if ($(window).scrollTop() >= 150) {
            header.addClass('on');
        } else {
            header.removeClass('on');
        }
    });

    // スクロールで制御
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();

        if (menuBtn.hasClass('on')) {
            // メニュー開いてるときは強制 on
            header.addClass('on');
        } else {
            // メニュー閉じてるときだけスクロールで判定
            if (scrollTop >= 150) {
                header.addClass('on');
            } else {
                header.removeClass('on');
            }
        }

        // 上下スクロールでの hide/show
        if (scrollTop < pos) {
            header.removeClass('hide');

        } else if (pos <= 0) {
            header.fadeIn();

        } else {
            header.addClass('hide');

        }

        pos = scrollTop;
    });

    header.removeClass('hide');
    //スムーススクロール
    $(window).on('load', function () {
        let urlHash = location.hash;
        if (urlHash) {
            $('body,html').stop().scrollTop(0);
            var target = $(urlHash);
            var position = target.offset().top;
            $('body,html').stop().animate({
                scrollTop: position
            }, 500);
        }
        $('a[href^="#"]').click(function () {
            var href = $(this).attr("href");
            var target = $(href);
            var position = target.offset().top;
            $('body,html').stop().animate({
                scrollTop: position
            }, 500);
        });
    });

    //追従スクロールしたら表示
    $(window).on('scroll', function () {
        // PC判定（例：768px以上）
        if (window.innerWidth >= 768) {
            if ($(this).scrollTop() >= $('.kadai').offset().top) {
                $('.pcFixedBtn').fadeIn(500);
            } else {
                $('.pcFixedBtn').fadeOut(500);
            }
        } else {
            // SPでは常に非表示にしたい場合
            $('.pcFixedBtn').hide();
        }
    });
});
