(window.onload = function () {

    $('.jstitleFlow').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });

    $('.h2Made').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });

    $('.txtMade').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });

    $('.txtLastMade').on('inview', function (event, isInView) {

        if (isInView) {
            $(this).addClass('active');
        } else {}
    });
})();