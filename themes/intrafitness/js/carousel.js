(function($) {
  $(function() {
    $('.blog-carousel').flickity({
<<<<<<< HEAD
        // options
        cellAlign: 'left',
        contain: true,
        percentPosition: false,
      });
      // setGallerySize: false,
});

})(jQuery);
=======
      // options
      cellAlign: 'left',
      contain: true
    });
    //testimonial carosel
    let flickityEnabled = false;
    function testimonyCarosel() {
      if ($(window).width() < 640) {
        $('#tesitmonial-carosel').flickity({
          freeScroll: true,
          cellAlign: 'left',
          prevNextButtons: false,
          pageDots: false
        });
        flickityEnabled = true;
      } else {
        if (flickityEnabled) {
          $('#tesitmonial-carosel').flickity('destroy');
          flickityEnabled = false;
        }
      }
    }
    testimonyCarosel();
    $(window).on('resize', () => {
      testimonyCarosel();
    });
  });
})(jQuery);
>>>>>>> b0baa8c96e0e7702e21f2ddf346bc93cc5cd3332
