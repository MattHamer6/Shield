// jQuery Start
jQuery(function ($) {
  // Check is elements are inside the viewport
  (function($) {
    $.fn.visible = function(partial) {
      var $t        = $(this),
      $w            = $(window),
      viewTop       = $w.scrollTop(),
      viewBottom    = viewTop + $w.height(),
      _top          = $t.offset().top,
      _bottom       = _top + $t.height(),
      compareTop    = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;

      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };  
  })(jQuery);

  // Make header appear onLoad 
  $(document).ready(function() { 
    anime({
      targets: '.header .header-wrapper',
      translateY: 0,
      opacity: 1,
      duration: 750,
      easing: 'easeInOutBack'
    });
  });

  // Add animation to navbar links
  anime({
    targets: '.nav .main-nav ul li',
    translateX: -450,
    opacity: 1,
    duration: 100,
    delay: anime.stagger(0),
    easing: 'easeInOutBack'
  });
  $('.navbar-toggle').click(function () {
      $('.nav').toggleClass('open');
      if ($('.nav').hasClass('open')) {
          anime({
              targets: '.nav .main-nav ul li',
              translateX: 0,
              opacity: 1,
              duration: 1000,
              delay: anime.stagger(150),
              easing: 'easeInOutBack'
          });
      } else {
          anime({
              targets: '.nav .main-nav ul li',
              translateX: -450,
              opacity: 1,
              duration: 750,
              delay: anime.stagger(150),
              easing: 'easeInOutBack'
          });
      }
  });

  // Hero Slider
  $(document).ready(function(){
    $('.hero-slider-slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 1000,
      fade: true,
      autoplay:true,
      autoplaySpeed:3500,
      cssEase: 'linear',
      arrows:false,
      dots:true,
      appendDots: $('.slider-dots-wrapper'),
    });
  });

  // Hero Slider, slide up on load
  $(document).ready(function() { 
    anime({
      targets: '.hero-slider-slides .content',
      translateY: 0,
      opacity: 1,
      duration: 750,
      easing: 'easeInOutBack'
    });
  });

  // Slide elements up on scroll (Add class 'module' to elements)
  var win = $(window);
  var allMods = $(".module");
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("already-visible"); 
    } 
  });
  
  win.scroll(function(event) {
    allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in"); 
      } 
    });
  });

  // Property Filter (Homepage)
  $(function() {
    var filterList = {

      init: function() {
        $('#view-properties').mixItUp({
          selectors: {
            target: '.property',
            filter: '.filter'
          },
          load: {
            filter: '.available-now'
          }
        });
      }
      
    };
    filterList.init();
  });

  // Simple Hero, slide up content on load
  $(document).ready(function() { 
    anime({
      targets: '.simple-hero .content',
      translateY: 0,
      opacity: 1,
      duration: 750,
      easing: 'easeInOutBack'
    });
  });

  // Small Property Filter (Block)
  $(function() {
    var filterList = {

      init: function() {
        $('#small-properties').mixItUp({
          selectors: {
            target: '.property',
            filter: '.filter'
          },
          load: {
            filter: '.properties'
          }
        });
      }
      
    };
    filterList.init();
  });

  // Archive projects filter
  $(function() {
    var filterList = {

      init: function() {
        $('#archive-properties').mixItUp({
          selectors: {
            target: '.property',
            filter: '.filter'
          },
          load: {
            filter: '.properties'
          }
        });
      }
      
    };
    filterList.init();
  });

  // Project Slider
  $(document).ready(function(){
    $('.projects-slider-slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 1000,
      fade: true,
      autoplay:true,
      autoplaySpeed:3500,
      cssEase: 'linear',
      arrows:false,
      dots:true,
      appendDots: $('.slider-dots-wrapper'),
    });
  });

    // Projects Slider, slide up on load
    $(document).ready(function() { 
      anime({
        targets: '.projects-slider-slides .content',
        translateY: 0,
        opacity: 1,
        duration: 750,
        easing: 'easeInOutBack'
      });
    });

    // Hide arrows on Fancybox
    $('[data-fancybox="images"]').fancybox({
      arrows: false
   });

   // Gallery Slider
  $(document).ready(function(){
    $('.project-gallery-wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 1000,
      fade: true,
      autoplay:true,
      autoplaySpeed:3500,
      cssEase: 'linear',
      arrows:false,
      dots:true,
      appendDots: $('.slider-dots-wrapper-gallery'),
    });
  });

// jQuery End
});