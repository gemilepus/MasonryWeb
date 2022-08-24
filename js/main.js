$(function () {

    'use strict';

    (function () {
        // off
        var aside = $('.side-nav'),

            showAsideBtn = $('.show-side-btn'),

            contents = $('#contents');

        showAsideBtn.on("click", function () {

            $("#" + $(this).data('show')).toggleClass('show-side-nav');

            contents.toggleClass('margin');

            $('.pagination').toggleClass('margin');

        });
      
        $(window).on('resize', function () {
            if ($(window).width() > 767) {
                aside.removeClass('show-side-nav');
                contents.removeClass('margin');
            }
            if ($(window).width() <= 767) {
                aside.addClass('show-side-nav');
                $('.pagination').toggleClass('margin');

            }

        });

        // dropdown menu in the side nav
        var slideNavDropdown = $('.side-nav-dropdown');

        $('.side-nav .categories li').on('click', function () {

            $(this).toggleClass('lol').siblings().removeClass('lol');

            if ($(this).hasClass('lol')) {

                $(this).find('.side-nav-dropdown').slideToggle('fast');

                $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

            } else {

                $(this).find('.side-nav-dropdown').slideUp('fast');

            }

        });

        $('.side-nav .close-aside').on('click', function () {

            $('#' + $(this).data('close')).addClass('show-side-nav');

            // contents.removeClass('margin');

        });

        $(window).on('load', function () {

            // Viewer js
            var viewer = new Viewer(document.getElementById('container'), {
                toolbar: false
            });

        });

        $(window).on("scroll", function () {

            // if($(window).scrollTop() >= 800) {
            //
            //     $("nav").addClass("inbox");
            //
            // } else if($(window).scrollTop() < 800) {
            //
            //     $("nav").removeClass("inbox");
            //
            // }
        });

    }());

});