/* --------------------------------------------------------
        36. Header menu sticky
    -------------------------------------------------------- */
    (function ($) {
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 445) {
          $(".ltn__header-sticky").removeClass("sticky-active");
        } else {
          $(".ltn__header-sticky").addClass("sticky-active");
        }
      });
    
      $(window).on("load", function () {
        /*-----------------
                preloader
            ------------------*/
        if ($("#preloader").length) {
          var preLoder = $("#preloader");
          preLoder.fadeOut(1000);
        }
      });
    })(jQuery);
    