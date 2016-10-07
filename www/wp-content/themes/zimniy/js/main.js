$(document).ready(function() {
    // div0 code
    var fotogalleryView = new FotogalleryView();
    fotogalleryView.init();



    $('.anhor a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
      scrollTop: $(anchor.attr('href')).offset().top -50
      }, 1000);
      e.preventDefault();
    });

    $('.anhor2').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top -50
      }, 1000);
      e.preventDefault();
    });

    $(document).ready(function(){
          var $menu = $("#menu");

          $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default-menu") ){
              $menu.fadeOut('fast',function(){
                $(this).removeClass("default-menu")
                     .addClass("fixed-menu transbg")
                     .fadeIn('fast');
              });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed-menu")) {
              $menu.fadeOut('fast',function(){
                $(this).removeClass("fixed-menu transbg")
                     .addClass("default-menu")
                     .fadeIn('fast');
              });
            }
          });
    });

    $('#dir1').hover(
        function() {
            $('.room-1').addClass('color-box');
        }, function() {
            $('.room-1').removeClass('color-box');
        });

    $('.room-1').mouseover(function(e) {
        $('#dir1').mouseover();
    }).mouseout(function(e) {
        $('#dir1').mouseout();
    });

    $('#dir2').hover(
        function() {
            $('.room-2').addClass('color-box');
        }, function() {
            $('.room-2').removeClass('color-box');
        });
    $('.room-2').mouseover(function(e) {
        $('#dir2').mouseover();
    }).mouseout(function(e) {
        $('#dir2').mouseout();
    });


    $('#dir3').hover(
        function() {
            $('.room-3').addClass('color-box');
        }, function() {
            $('.room-3').removeClass('color-box');
        });

    $('.room-3').mouseover(function(e) {
        $('#dir3').mouseover();
    }).mouseout(function(e) {
        $('#dir3').mouseout();
    });

    $('#dir3-1').hover(
        function() {
            $('.room-3').addClass('color-box');
        }, function() {
            $('.room-3').removeClass('color-box');
        });
    $('.room-3').mouseover(function(e) {
        $('#dir3-1').mouseover();
    }).mouseout(function(e) {
        $('#dir3-1').mouseout();
    });


    $('#dir5').hover(
        function() {
            $('.room-4').addClass('color-box');
        }, function() {
            $('.room-4').removeClass('color-box');
        });
    $('.room-4').mouseover(function(e) {
        $('#dir5').mouseover();
    }).mouseout(function(e) {
        $('#dir5').mouseout();
    });

    $('.map').maphilight();

    $('.modalbox').fancybox();

    $( function() {
      $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
      $( ".datepicker" ).datepicker();
    });

    $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
       $('.bxslider2').bxSlider({
        pager:false
       });
      var  W = $(window).width();
    
      if( W <= 760){
        $('.bxslider3').bxSlider({
          minSlides: 1,
          maxSlides: 1,
          pager:false
        });    
      } else{
      $('.bxslider3').bxSlider({
          minSlides: 1,
          maxSlides: 3,
          slideWidth: 220,
          slideMargin: 66,
          pager:false
        });    
      }
      $('.bxslider').bxSlider({
          minSlides: 1,
          maxSlides: 2,
          slideWidth: 540,
          slideMargin: 30,
          pager: false
      });

      $( "#tabs" ).tabs({
        show: { effect: "fadeIn", duration: 800 },
        active: 0
      });

         var touch = $('.trigger_menu');
        var menu = $('.menu');
     
        $(touch).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function(){
            var wid = $(window).width();
            if(wid > 760 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });

      $('.select').styler();
      $('.chekstyle').styler();
      $('input, select').styler();

      $('.online-img a').click(function(){
        $.fancybox.close();
      });
      $('input[type=file]').styler('destroy');
  });
