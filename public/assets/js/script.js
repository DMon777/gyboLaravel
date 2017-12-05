(function($) {

    "use strict";


    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(500).fadeOut(500);
        }
    }

    // Mobile Navigation
    function mobileNavToggler() {
        if ($('header .mainmenu-container').length) {
            $('header button.mainmenu-toggler').on('click', function() {
                $('ul.mainmenu').slideToggle();
                return false;
            });
            $('.mainmenu-container ul li.dropdown').append(function() {
                return '<i class="fa fa-bars"></i>';
            });
            $('.mainmenu-container ul li.dropdown .fa').on('click', function() {
                $(this).parent('li').children('ul').slideToggle();
            });

        }
    }

    //Update Header Style + Scroll to Top
    function scrollToTop() {
        if ($('.page-wrapper').length) {
            var topHeader = $('.header-top').innerHeight();
            var windowpos = $(window).scrollTop();
            if (windowpos >= topHeader) {
                $('.page-wrapper').addClass('fixed-header');
                $('.scroll-to-top').fadeIn(300);
            } else {
                $('.page-wrapper').removeClass('fixed-header');
                $('.scroll-to-top').fadeOut(300);
            }
        }
    }

    // Header top Search button 
    function headerTopSearch() {
        if ($('header .mainmenu-container ul li.top-icons.search a').length) {
            $('header .mainmenu-container ul li.top-icons.search a').on('click', function() {
                $('header .search-box').slideToggle();
                $('header .cart-box').slideUp();
                return false;
            });
        }
    }

    // Header top Cart button 
    function headerTopCart() {
        if ($('header .mainmenu-container ul li.top-icons.cart a').length) {
            $('header .mainmenu-container ul li.top-icons.cart a').on('click', function() {
                $('header .search-box').slideUp();
                $('header .cart-box').slideToggle();
                return false;
            });
        }
    }

    // sticky header 
    function stickyHeader() {
        var headerScrollPos = $('header').next().offset().top;
        if ($(window).scrollTop() > headerScrollPos) {
            $('header').addClass('header-fixed');
        } else if ($(this).scrollTop() <= headerScrollPos) {
            $('header').removeClass('header-fixed');
        }
    }


    //Main Slider
    if ($('.main-slider .tp-banner').length) {

        jQuery('.main-slider .tp-banner').show().revolution({
            delay: 10000,
            startwidth: 1200,
            startheight: 820,
            hideThumbs: 600,

            thumbWidth: 80,
            thumbHeight: 50,
            thumbAmount: 5,

            navigationType: "bullet",
            navigationArrows: "0",
            navigationStyle: "preview4",

            touchenabled: "on",
            onHoverStop: "off",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",

            spinner: "spinner4",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "on",

            hideThumbsOnMobile: "on",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "on",
            hideArrowsOnMobile: "on",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "",
            fullScreenOffsetContainer: ".main-slider"
        });


    }

    //Adjust Footer Background
    function footerStyle() {
        if ($('.main-footer .contact-widget').length) {
            var contactWidth = $('.main-footer .contact-widget').innerWidth();
            //var windowWidth = $(window).width();
            var contWidth = $('.main-footer .auto-container').width();
            $('.main-footer .footer-bg-layer').css({ 'width': contWidth - contactWidth + 15 });
        }
    }

    //Date TimePicker
    if ($('.date-field').length) {
        $('.date-field').datepick();
    }

    //Tabs Box
    if ($('.tab-style').length) {
        $('.tab-style .tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            $('.tab-style .tab-btn').removeClass('active');
            $(this).addClass('active');
            $('.tab-style .tab').fadeOut(0);
            $('.tab-style .tab').removeClass('active-tab');
            $(target).fadeIn(300);
            $(target).addClass('active-tab');
            var windowWidth = $(window).width();
            if (windowWidth <= 700) {
                $('html, body').animate({
                    scrollTop: $('.tab-style .content-column').offset().top - 100
                }, 1000);
            }
        });

    }

    // 9 Owl Carousel
    function load_owlCarousel() {

        $(".welcome-carousel").owlCarousel({
            autoplay: 5000,
            smartSpeed: 700,
            loop: true,
            margin: 15,
            items: 3,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                600: {
                    items: 3,
                    center: false
                },
                960: {
                    items: 3
                },
                1170: {
                    items: 3
                },
                1300: {
                    items: 3
                }
            }
        });

        $('.gallery-carousel').owlCarousel({
            loop: true,
            margin: 5,
            dots: false,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            autoplayHoverPause: false,
            autoplay: 5000,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 4
                }
            }
        });

        $('.testimonials-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: true,
            nav: false,
            autoplayHoverPause: false,
            autoplay: 5000,
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 2
                },
                1100: {
                    items: 3
                }
            }
        });

        $('.sponsors-section .slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 5
                }
            }
        });

    }

    //Skill Progress Bar
    if ($('.skill-box .bar-fill').length) {
        $(".skill-box .bar-fill").each(function() {
            var progressWidth = $(this).attr('data-percent');
            $(this).css('width', progressWidth + '%');
            $(this).parents('.bar').children('.percent').html(progressWidth + '%');
        });
    }

    //Common CssJs
    if ($.length) {
        $('[data-mt]').each(function() {
            $(this).css('margin-top', $(this).data("mt"));
        });
        $('[data-bac]').each(function() {
            $(this).css("cssText", "background: " + $(this).data("bac") + " !important;");
        });
        $('[data-img-bg]').each(function() {
            $(this).css('background-image', 'url(' + $(this).data("img-bg") + ')');
        });
        $('[data-border]').each(function() {
            $(this).css('border', $(this).data("border"));
        });
        $('[data-border-top]').each(function() {
            $(this).css('border-top', $(this).data("border-top"));
        });
    }

    // Fact Counter
    function factCounter() {
        if ($('.fact-counter').length) {
            $('.fact-counter .column.animated').each(function() {

                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function() {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $t.find(".count-text").text(this.countNum);
                        }
                    });
                }

            });
        }
    }

    //Accordions
    if ($('.accordion-box').length) {
        $('.accordion-box .acc-btn').on('click', function() {
            if ($(this).hasClass('active') !== true) {
                $('.accordion-box .acc-btn').removeClass('active');
            }

            if ($(this).next('.acc-content').is(':visible')) {
                $(this).removeClass('active');
                $(this).next('.acc-content').slideUp(500);
            } else {
                $(this).addClass('active');
                $('.accordion-box .acc-content').slideUp(500);
                $(this).next('.acc-content').slideDown(500);
            }
        });
    }

    // GalleryMasonaryLayout
    function galleryMasonaryLayout() {
        if ($('.img-masonary').length) {
            $('.img-masonary').isotope({
                layoutMode: 'masonry'
            });
        }
    }

    // LightBox / Fancybox
    if ($('.lightbox-image').length) {
        $('.lightbox-image').fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
                media: {}
            }
        });
    }

    // Gallery Filters
    if ($('.filter-list').length) {
        $('.filter-list').mixItUp({});
    }

    

    // Google Map Settings
    if ($('#map-location').length) {
        var map;
        
        map = new GMaps({
            el: '#map-location',
            zoom: 14,
            scrollwheel: false,
            //Set Latitude and Longitude Here
            lat: -37.817085,
            lng: 144.955631
        });

        //Add map Marker
        map.addMarker({
            lat: -37.817085,
            lng: 144.955631,
            infoWindow: {
                content: '<p style="text-align:center;"><strong>Envato</strong><br>Melbourne VIC 3000, Australia</p>'
            }

        });
    }

    // Scroll to top
    if ($('.scroll-to-top').length) {
        $(".scroll-to-top").on('click', function() {
            // animate
            $('html, body').animate({
                scrollTop: $('html, body').offset().top
            }, 1000);

        });
    }

    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    // contact form validatio 
    if ($('.validated-contact-form').length) {
        $('.validated-contact-form').each(function() {
        	var contacForm = $(this);
            contacForm.validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function(form) {
                    // sending value with ajax request
                    $.post($(form).attr('action'), $(form).serialize(), function(response) {
                        $(form).find('.result').append(response);
                        $(form).find('input[type="text"]').val('');
                        $(form).find('input[type="email"]').val('');
                        $(form).find('textarea').val('');
                    });
                    return false;
                }
            });
        });
    }


    /* ==========================================================================
       When document is ready, do
       ========================================================================== */

    $(document).on('ready', function() {
        scrollToTop();
        stickyHeader();
        headerTopSearch();
        headerTopCart();
        mobileNavToggler();
        footerStyle();
    });

    /* ==========================================================================
       When document is Scrollig, do
       ========================================================================== */

    $(window).on('scroll', function() {
        scrollToTop();
        stickyHeader();
        load_owlCarousel();
        factCounter();
        galleryMasonaryLayout();
    });

    /* ==========================================================================
       When document is loading, do
       ========================================================================== */

    $(window).on('load', function() {
        handlePreloader();
        load_owlCarousel();
        galleryMasonaryLayout();
    });


    /* ==========================================================================
       When Window is resizing, do
       ========================================================================== */

    $(window).on('resize', function() {
        stickyHeader();
        footerStyle();
    });


})(window.jQuery);
