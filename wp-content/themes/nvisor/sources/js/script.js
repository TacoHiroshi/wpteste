/*---------------------------------------------
Template name:  Nvizor
Version:        1.0

[Table of Content]

01: Preloader
02: ...
----------------------------------------------*/

(function ($) {
    var win = $(window);
    var windowOn = $(window);
    /* ======= Preloader ======= */
    win.on("load", function () {
        $("#loading-area").delay("500").fadeOut(500);
    });

    // animated menu
    // $(window).scroll(function () {
    //     var scrolling = $(this).scrollTop();
    //     if (scrolling > 400) {
    //         (".navbar").addClass("navbg")
    //     }
    // });

    // banner-section
    $(".slider-carousel").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
    });

    // wow.js use in banner content
    wow = new WOW({
        boxClass: "wow", // default
        animateClass: "animated", // default
        offset: 0, // default
        mobile: true, // default
        live: true, // default
    });
    wow.init();

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
    // case-carousel
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

    // testimonial-blog-carousel
    $(".testimonial-blog-one").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: ' <span class="prev-arrow">PREV <i class="fas fa-long-arrow-alt-right"></i> </span>',
        nextArrow: ' <span class="next-arrow"> NEXT <i class="fas fa-long-arrow-alt-right"></i></span>',
        autoplay: true,
        autoplaySpeed: 2000,
    });

    // testimonial-blog-carousel
    $(".case-single-img").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: ' <span class="prev-arrow">PREV <i class="fas fa-long-arrow-alt-right"></i> </span>',
        nextArrow: ' <span class="next-arrow"> NEXT <i class="fas fa-long-arrow-alt-right"></i></span>',
        autoplay: true,
        autoplaySpeed: 2000,
    });

    // testimonial-blog-carousel
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

    // brand-carousel
    $(".brand").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: ' <span class="prev-arrow"> <i class="fa fa-angle-left"></i></span>',
        nextArrow: ' <span class="next-arrow"> <i class="fa fa-angle-right"></i></span>',
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
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

    $(document).ready(function () {
        // ========== odometer initialize==========
        $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    });

    //canvas sidebar
    var canva_expander = $("#canva_expander");
    if (canva_expander.length) {
        $("#canva_expander, #canva_close, #sc-overlay-bg2").on("click", function (e) {
            e.preventDefault();
            $("body").toggleClass("canvas_expanded");
        });
    }

    //canvas sidebar
    var canva_expander2 = $("#canva_expander2");
    if (canva_expander2.length) {
        $("#canva_expander2, #canva_close2, #sc-overlay-bg2").on("click", function (e) {
            e.preventDefault();
            $("body").toggleClass("canvas_expanded2");
        });
    }

    if ($(".sc-catagory-slider").length) {
        $(".sc-catagory-slider").slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            loop: true,
            prevArrow: '<a class="slide-arrow prev-arrow"><i class="ri-arrow-left-line"></i></a>',
            nextArrow: '<a class="slide-arrow  next-arrow"><i class="ri-arrow-right-line"></i></a>',
            autoplaySpeed: 2000,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1599,
                    settings: {
                        slidesToShow: 4,
                    },
                },
            ],
        });
        $('.nav-pills button[data-bs-toggle="pill"]').on("shown.bs.tab", function (e) {
            e.target;
            e.relatedTarget;
            $(".sc-catagory-slider").slick("setPosition");
        });
    }
    if ($(".categories-tab .nav-link").length) {
        $(".categories-tab .nav-link").click(function () {
            $("#overlay").fadeIn().delay(100).fadeOut();
        });
    }

    // scrollTop init
    // scrollTop init
    var totop = $("#scrollUp");
    windowOn.on("scroll", function () {
        if (windowOn.scrollTop() > 150) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }
    });
    totop.on("click", function () {
        $("html,body").animate(
            {
                scrollTop: 0,
            },
            500
        );
    });

    // Header Sticky  Js
    windowOn.on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $("#sc-header-sticky").removeClass("sc-header-sticky");
        } else {
            $("#sc-header-sticky").addClass("sc-header-sticky");
        }
    });

    /******** Mobile Menu Start ********/
    $(".mobile-navbar-menu a").each(function () {
        var href = $(this).attr("href");
        if ((href = "#")) {
            $(this).addClass("hash");
        } else {
            $(this).removeClass("hash");
        }
    });

    $.fn.menumaker = function (options) {
        var mobile_menu = $(this),
            settings = $.extend(
                {
                    format: "dropdown",
                    sticky: false,
                },
                options
            );

        return this.each(function () {
            mobile_menu.find("li ul").parent().addClass("has-sub");
            var multiTg = function () {
                mobile_menu.find(".has-sub").prepend('<span class="submenu-button"><em></em></span>');
                mobile_menu.find(".hash").parent().addClass("hash-has-sub");
                mobile_menu.find(".submenu-button").on("click", function () {
                    $(this).toggleClass("submenu-opened");
                    if ($(this).siblings("ul").hasClass("open-sub")) {
                        $(this).siblings("ul").removeClass("open-sub").hide("fadeIn");
                        $(this).siblings("ul").hide("fadeIn");
                    } else {
                        $(this).siblings("ul").addClass("open-sub").hide("fadeIn");
                        $(this).siblings("ul").slideToggle().show("fadeIn");
                    }
                });
            };

            if (settings.format === "multitoggle") multiTg();
            else mobile_menu.addClass("dropdown");
            if (settings.sticky === true) mobile_menu.css("position", "fixed");
            var resizeFix = function () {
                if ($(window).width() > 991) {
                    mobile_menu.find("ul").show("fadeIn");
                    mobile_menu.find("ul.sub-menu").hide("fadeIn");
                }
            };
            resizeFix();
            return $(window).on("resize", resizeFix);
        });
    };

    $(document).ready(function () {
        $("#mobile-navbar-menu").menumaker({
            format: "multitoggle",
        });
    });
})(jQuery);
