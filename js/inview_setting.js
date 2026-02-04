(window.onload = function() {

    $('.jstitleFlow').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });
})();