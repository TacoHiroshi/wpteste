;(function($){
    
    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/hero.default',function(scope,$){
            $(".slider-carousel").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
    });
        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/counter.default',function(scope,$){
            $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/testimonial.default',function(scope,$){
            $(".testimonial-blog").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: ' <span class="prev-arrow">PREV <i class="fas fa-long-arrow-alt-right"></i> </span>',
        nextArrow: ' <span class="next-arrow"> NEXT <i class="fas fa-long-arrow-alt-right"></i></span>',
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/blog.default',function(scope,$){
            $(".sc-blog-slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
        });
    });
   
    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/hero2.default',function(scope,$){

        $(".slider-carousel").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
    });

        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/about2.default',function(scope,$){
            $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/case.default',function(scope,$){
            // case-carousel
$(".case-carousel").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: ' <span class="prev-arrow"> <i class="fas fa-long-arrow-alt-left"></i></span>',
    nextArrow: ' <span class="next-arrow"> <i class="fas fa-long-arrow-alt-right"></i></span>',
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ],
});
        });
    });

    $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/testimonial2.default',function(scope,$){
            $(".testimonial-blog-one").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: ' <span class="prev-arrow">PREV <i class="fas fa-long-arrow-alt-right"></i> </span>',
        nextArrow: ' <span class="next-arrow"> NEXT <i class="fas fa-long-arrow-alt-right"></i></span>',
        autoplay: true,
        autoplaySpeed: 2000,
    });
        });
    });

     $(window).on('elementor/frontend/init',function(){
        elementorFrontend.hooks.addAction('frontend/element_ready/about3.default',function(scope,$){
            $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
        });
    });
    

})(jQuery);
