(window.onload = function() {

    $('.jstitleFlow').addClass('poyoyon');
    $('.jstitleFlow').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });
})();