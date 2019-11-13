(function ($) {
	"use strict";
    jQuery(document).ready(function($){

        /*---------------------------------
            Latest Work Masonry activation
        ----------------------------------*/
        var Container = $('#latest-work-masonry-wrapper');
        if (Container.length > 0) {
            Container.imagesLoaded(function () {
                var latestWorkMasonry = $('#latest-work-masonry-wrapper').isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    gutter:0,
                    masonry: {
                        columnWidth: 0
                    }
                });
                $(document).on('click', '.latest-work-menu-wrapper li', function () {
                    var filterValue = $(this).attr('data-filter');
                    latestWorkMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
        }
        /*---------------------------------
            Latest Work Menu Active class
        ----------------------------------*/
        var lastestWorkMenu = '.latest-work-menu-wrapper li';
        $(document).on('click', lastestWorkMenu, function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
        /*---------------------------------
            Projects Masonry activation
        ----------------------------------*/
        var Container = $('#project-masonry');
        if (Container.length > 0) {
            Container.imagesLoaded(function () {
                var projectsMasonry = $('#project-masonry').isotope({
                    masonry: {
                        columnWidth: 0,
                        gutter: 30
                    }
                });
                $(document).on('click', '.project-menu-wrapper li', function () {
                    var filterValue = $(this).attr('data-filter');
                    projectsMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
        }
        /*---------------------------------
            Projects Active class
        ----------------------------------*/
        var projectsMenu = '.project-menu-wrapper li';
        $(document).on('click', projectsMenu, function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });

        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();

        /*-------------------------
            magnific popup activation
        -------------------------*/
        $('.video-play-btn,.video-popup,.small-vide-play-btn,.video-btn-new').magnificPopup({
            type: 'video'
        });
        $('.image-popup').magnificPopup({
            type: 'image'
        });
        /*------------------
            back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });
        /*-------------------------
            counter section activation
        ---------------------------*/
        var counternumber = $('.count-num,.count-numb');
        counternumber.counterUp({
            delay: 20,
            time: 5000 
        });
        /*---------------------------
            Header carousel
        ---------------------------*/
        var $headerCarousel = $('#header-carousel');
        if ($headerCarousel.length > 0) {
            $headerCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: true,
                navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav:false
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
            $headerCarousel.on('translate.owl.carousel', function () {
                $('.single-slider-item .title,.single-slider-item .header-list').removeClass('animated fadeInDown').css('opaciry', '0');
                $('.single-slider-item p').removeClass('animated fadeInUp').css('opaciry', '0');
                $('.single-slider-item .btn-wrapper').removeClass('animated fadeInLeft').css('opaciry', '0');
            });
            $headerCarousel.on('translated.owl.carousel', function () {
                $('.single-slider-item .title,.single-slider-item .header-list').addClass('animated fadeInDown').css('opaciry', '1');
                $('.single-slider-item p').addClass('animated fadeInUp').css('opaciry', '1');
                $('.single-slider-item .btn-wrapper').addClass('animated fadeInLeft').css('opaciry', '1');
            });
        }
        /*---------------------------
            testimonial carousel
        ---------------------------*/
        var $tesitmonialCarousel = $('#testimonial-carousel');
        if ($tesitmonialCarousel.length > 0) {
            $tesitmonialCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: true,
                navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    },
                    1920: {
                        items:2
                    }
                }
            });
        }
        /*---------------------------
            Team carousel
        ---------------------------*/
        var $teamCarousel = $('#team-carousel');
        if ($teamCarousel.length > 0) {
            $teamCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    },
                    1920: {
                        items: 4
                    }
                }
            });
        }
        /*---------------------------
                    Team carousel
                ---------------------------*/
        var $brandCarousel = $('#brand-carousel');
        if ($brandCarousel.length > 0) {
            $brandCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    },
                    1920: {
                        items: 5
                    }
                }
            });
        }
    });
    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
       /*--------------------------
        sticky menu activation
       -------------------------*/
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() >= 60) {
            mainMenuTop.addClass('nav-fixed');
        } else {
            mainMenuTop.removeClass('nav-fixed ');
        }
       
    });
           
    $(window).on('load',function(){
        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);
    });

}(jQuery));	
