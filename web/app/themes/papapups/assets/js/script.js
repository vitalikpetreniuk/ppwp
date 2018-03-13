$(function () {
    if($('.hs-items').length){
        $('.hs-items').slick({
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '430px',
            autoplay: true,
            autoplaySpeed: 1600,
            infinite: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 1620,
                    settings: {
                        centerPadding: '300px'
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        centerPadding: '150px'
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        centerPadding: '80px'
                    }
                },
                {
                    breakpoint: 567,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '0'
                    }
                }
            ]
        });
    }
    if($('.comments-slider').length){
        $('.comments-slider').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 1600,
            infinite: true
        });
    }
    if($('.btn-product').length){
        $('.btn-product').on('click', function (e) {
            e.preventDefault();
            $('.btn-product').removeClass('active');
            $('.btn-product').siblings().removeClass('active');
            $(this).addClass('active');
            $(this).siblings().addClass('active');
        });
    }
    $('.btn-tab').on('click', function (e) {
        e.preventDefault();
        $('.tab-content.active').removeClass('active').siblings('.tab-content').addClass('active');
        $(this).removeClass('not-active');
        $(this).siblings().addClass('not-active');
    });

    $(".paralax").paroller({ factor: '0.3', type: 'foreground', direction: 'horizontal' });

    $('.minus').click(function() {
        var q = $('input.num');
        var data = $(q).val();
        if(data > 0) {
            $(q).val(parseInt(data) - 1);
        }
        return false
    });
    $('.plus').click(function() {
        var q = $('input.num');
        var data = $(q).val();
        $(q).val(parseInt(data) + 1);
        return false
    });

    $('.order_form').on('click', function () {
        var title = $(this).siblings('.ct-item-title').text();
        var product_id = $(this).siblings('.product_id').text();
        var modal = $(this).data('modal');

        $("#orderForm .modal-header h3 span").text(title);

        $("#orderForm form input[name='product_name']").val(title);
        $("#orderForm form input[name='product_id']").val(product_id);

        if(modal) {
            $(modal).modal('hide');
        }

        setTimeout(function(){
            $('#orderForm').modal('show');
        },500);
    });
    $('.hero a.btn.btn-oliva').on('click', function () {
        $('#orderForm').modal('show');
    });

    $("#orderForm .modal-footer button").on('click', function () {
        $('#orderForm form input[type="submit"]').trigger('click');
    });

    $(".modal-detale .modal-body .image.small").on('click', function () {
        var src = $(this).data('src');

        $(this).parents('.modal-body').find('.col-md-8 .image img').attr('src', src);
        $(this).parents('.modal-body').find('.col-md-8 .image img').attr('srcset', '');
    });
    $('input, select').styler();

    AOS.init({
        disable: window.innerWidth < 1025
    });

    $('.contacts.subtitle').prepend('<button class="plus">x</button>');
    $('.contacts.subtitle .plus').on('click', function(){
        if($('.contacts.subtitle.up').length)
        {
            $('.contacts.subtitle').removeClass('up');
            $('.contacts.subtitle .plus').text('x');
        }else
        {
            $('.contacts.subtitle').addClass('up');
            $('.contacts.subtitle .plus').text('+');
        }
    });
});
