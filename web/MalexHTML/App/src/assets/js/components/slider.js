//=================================================
// Slider
//
// Slideshow component for cycling through elements—images or slides of text—like a carousel.
//=================================================

( function( $ ) {
    'use strict';

    // ADV swiper vars
    var advSwiperVars = {
        noSwipingClass: 'adv-swiper-no-swiping',
        containerModifierClass: 'adv-swiper-container-',
        slideClass: 'adv-swiper-slide',
        slideBlankClass: 'adv-swiper-slide-invisible-blank',
        slideActiveClass: 'adv-swiper-slide-active',
        slideDuplicateActiveClass: 'adv-swiper-slide-duplicate-active',
        slideVisibleClass: 'adv-swiper-slide-visible',
        slideDuplicateClass: 'adv-swiper-slide-duplicate',
        slideNextClass: 'adv-swiper-slide-next',
        slideDuplicateNextClass: 'adv-swiper-slide-duplicate-next',
        slidePrevClass: 'adv-swiper-slide-prev',
        slideDuplicatePrevClass: 'adv-swiper-slide-duplicate-prev',
        wrapperClass: 'adv-swiper-wrapper',
        navigation: {
            disabledClass: 'adv-swiper-button-disabled',
            hiddenClass: 'adv-swiper-button-hidden',
            lockClass: 'adv-swiper-button-lock',
        },
        pagination: {
            bulletClass: 'adv-swiper-pagination-bullet',
            bulletActiveClass: 'adv-swiper-pagination-bullet-active',
            modifierClass: 'adv-swiper-pagination-',
            currentClass: 'adv-swiper-pagination-current',
            totalClass: 'adv-swiper-pagination-total',
            hiddenClass: 'adv-swiper-pagination-hidden',
            progressbarFillClass: 'adv-swiper-pagination-progressbar-fill',
            progressbarOppositeClass: 'adv-swiper-pagination-progressbar-opposite',
            clickableClass: 'adv-swiper-pagination-clickable',
            lockClass: 'adv-swiper-pagination-lock',
        },
        scrollbar: {
            lockClass: 'adv-swiper-scrollbar-lock',
            dragClass: 'adv-swiper-scrollbar-drag',
        },
        zoom: {
            containerClass: 'adv-swiper-zoom-container',
            zoomedSlideClass: 'adv-swiper-slide-zoomed',
        },
        lazy: {
            elementClass: 'adv-swiper-lazy',
            loadingClass: 'adv-swiper-lazy-loading',
            loadedClass: 'adv-swiper-lazy-loaded',
            preloaderClass: 'adv-swiper-lazy-preloader',
        },
        a11y: {
            notificationClass: 'adv-swiper-notification',
        },
        thumbs: {
            slideThumbActiveClass: 'adv-swiper-slide-thumb-active',
            thumbsContainerClass: 'adv-swiper-container-thumbs',
        }
    };

    // Class: .slider
    var swiperSlider = new Swiper( '.slider .swiper-container', {
        navigation: {
            nextEl: '.adv-swiper-button-next',
            prevEl: '.adv-swiper-button-prev'
        }
    } );

    // Class: .adv-slider
    var swiperAdvSlider = new Swiper( '.adv-slider .adv-swiper-container', {
        noSwipingClass: 'adv-swiper-no-swiping',
        containerModifierClass: 'adv-swiper-container-',
        slideClass: 'adv-swiper-slide',
        slideBlankClass: 'adv-swiper-slide-invisible-blank',
        slideActiveClass: 'adv-swiper-slide-active',
        slideDuplicateActiveClass: 'adv-swiper-slide-duplicate-active',
        slideVisibleClass: 'adv-swiper-slide-visible',
        slideDuplicateClass: 'adv-swiper-slide-duplicate',
        slideNextClass: 'adv-swiper-slide-next',
        slideDuplicateNextClass: 'adv-swiper-slide-duplicate-next',
        slidePrevClass: 'adv-swiper-slide-prev',
        slideDuplicatePrevClass: 'adv-swiper-slide-duplicate-prev',
        wrapperClass: 'adv-swiper-wrapper',
        navigation: {
            disabledClass: 'adv-swiper-button-disabled',
            hiddenClass: 'adv-swiper-button-hidden',
            lockClass: 'adv-swiper-button-lock',
            nextEl: '.adv-2-swiper-button-next',
            prevEl: '.adv-2-swiper-button-prev'
        },
        spaceBetween: 0
    } );
} )( jQuery );
