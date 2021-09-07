//=================================================
// Reviews
//=================================================

( function( $ ) {
    'use strict';

    var swiperAdvReviewsThumbs = new Swiper( '.adv-slider-reviews .adv-swiper-container.reviews-thumbs', {
        // ADV swiper
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
        slidesPerView: 3,
        spaceBetween: 0,
        loop: false,
        freeMode: false
    } );

    swiperAdvReviewsThumbs.on( 'click', function() {
        if ( typeof this.clickedSlide !== 'undefined' ) {
            $( '#reviews-name' ).html( this.clickedSlide.dataset.reviewsName );
            $( '#reviews-positions' ).html( this.clickedSlide.dataset.reviewsPosition );
        }
    } );

    var swiperAdvReviewsTop = new Swiper( '.adv-slider-reviews .adv-swiper-container.reviews-text', {
        // ADV swiper
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
        thumbs: {
            slideThumbActiveClass: 'adv-swiper-slide-thumb-active',
            thumbsContainerClass: 'adv-swiper-container-thumbs',
            swiper: swiperAdvReviewsThumbs
        },
        spaceBetween: 0,
        allowTouchMove: false
    } );
} )( jQuery );
