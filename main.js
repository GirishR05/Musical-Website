jQuery(document).ready(function ($) {

    if ($('.product-info-box').length > 4) {
        $('.product-info-box:gt(3)').hide();
        $('.showmore').show();
    }

    $('.showmore button').on('click', function () {
        $('.product-info-box:gt(3)').toggle();
        $(this).text() === 'Show less' ? $(this).text('Show more') : $(this).text('Show less');
    });

});