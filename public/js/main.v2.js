(function ($) {

    "use strict";


    $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll'
    });


    var fullHeight = function () {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // Scrollax
    $.Scrollax();

    var carousel = function () {
        $('.home-slider').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: true,
            autoplayHoverPause: false,
            items: 1,
            navText: ["<span class='ion-ios-arrow-back'></span>", "<span class='ion-ios-arrow-forward'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('.carousel-testimony').owlCarousel({
            center: true,
            loop: true,
            items: 1,
            margin: 30,
            stagePadding: 0,
            nav: false,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    };
    carousel();

    $('nav .dropdown').hover(function () {
        var $this = $(this);
        // 	 timer;
        // clearTimeout(timer);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').addClass('show');
    }, function () {
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').removeClass('show');
        // }, 100);
    });


    $('#dropdown04').on('show.bs.dropdown', function () {
        console.log('show');
    });

    // scroll
    var scrollWindow = function () {
        $(window).scroll(function () {
            var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.ftco_navbar'),
                sd = $('.js-scroll-wrap');

            if (st > 150) {
                if (!navbar.hasClass('scrolled')) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if (navbar.hasClass('scrolled')) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if (st > 350) {
                if (!navbar.hasClass('awake')) {
                    navbar.addClass('awake');
                }

                if (sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if (st < 350) {
                if (navbar.hasClass('awake')) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if (sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();


    var counter = function () {

        $('#section-counter, .hero-wrap, .ftco-counter').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                $('.number').each(function () {
                    var $this = $(this),
                        num = $this.data('number');
                    console.log(num);
                    $this.animateNumber(
                        {
                            number: num,
                            numberStep: comma_separator_number_step
                        }, 7000
                    );
                });

            }

        }, {offset: '95%'});

    }
    counter();


    var contentWayPoint = function () {
        var i = 0;
        $('.ftco-animate').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function () {

                    $('body .ftco-animate.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn ftco-animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft ftco-animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight ftco-animated');
                            } else {
                                el.addClass('fadeInUp ftco-animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 50, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, {offset: '95%'});
    };
    contentWayPoint();

    $.magnificPopup.instance._onFocusIn = function(e) {
        // Do nothing if target element is select2 input
        if( $(e.target).is('input') ) {
            return true;
        }
        // Else call parent method
        $.magnificPopup.proto._onFocusIn.call(this,e);
    };

    // magnific popup
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').click(function (evt) {
        evt.preventDefault();

    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    const $responsePopup = $('#response-popup');
    const $chatPopup = $('#chat-popup');
    $chatPopup.on('scroll', function () {
        $chatPopup.find('.chat-container').stop().animate({
            scrollTop: $chatPopup.find('.chat-container').get(0).scrollHeight
        }, 800);
    });

    $('.btn-opc, .chat-popup .close').on('click', function (evt) {
        evt.stopPropagation();

        $chatPopup.toggle();
        $responsePopup.hide();
        $chatPopup.trigger('scroll');
    });

    $('.btn-opc2').on('click', function (evt) {
        evt.stopPropagation();

        $responsePopup.toggle();
        $chatPopup.hide();
    });

    $(document.body).on('click', function (evt) {
        if ($(evt.target).closest('#chat-popup').length === 0) {
            $chatPopup.hide();
        }
        $responsePopup.hide();
    });

    $chatPopup.data('bottom', true);
    $chatPopup.find('.chat-container').on('scroll', function (e) {
        var elem = $(e.currentTarget);
        $chatPopup.data('bottom', elem[0].scrollHeight - elem.scrollTop() === elem.outerHeight());
    });

    const base = '<div class="chat-message"><p>/text/</p><span class="time-right">/date/</span></div>';
    let timeout = null;
    $chatPopup.on('sync', function () {
        $.ajax({
            "async": true,
            "url": $chatPopup.data('sync'),
            "method": "GET",
            "data": {
                "from": $chatPopup.data('from'),
            }
        }).done(function (data) {
            for (const i in data.entries) {
                var $message = $(base.replace(/\/text\//, data.entries[i].message).replace(/\/date\//, data.entries[i].formatted_date));
                if (parseInt(data.entries[i].from_user_id) === parseInt($chatPopup.data('sender'))) {
                    $message.addClass('mine');
                }
                $chatPopup.find('.chat-container').append($message);
            }

            if ($chatPopup.data('bottom') && data.entries.length > 0) {
                $chatPopup.trigger('scroll');
            }

            $chatPopup.data('from', data.to);
            timeout = setTimeout(function () {
                $chatPopup.trigger('sync');
            }, 10000);
        });
    });

    $chatPopup.find('form').submit(function (evt) {
        evt.preventDefault();
        $chatPopup.find('form button').prop('disabled', true).find('i').addClass('fa-spin');
        $.ajax({
            "async": true,
            "url": $(this).prop('action'),
            "method": "POST",
            "data": $(this).serialize(),
        }).done(function (data) {
            console.log(data);
            clearTimeout(timeout);
            $chatPopup.trigger('sync');
        }).always(function () {
            $chatPopup.find('form input').val('').focus();
            $chatPopup.find('form button').prop('disabled', false).find('i').removeClass('fa-spin');
        });
    });

    timeout = setTimeout(function () {
        $chatPopup.trigger('sync');
    }, 1000);
})(jQuery);
