(function($) {
  $(function() {
    $('.blog-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      percentPosition: false
    });
    // setGallerySize: false,

    //testimonial carosel
    let flickityEnabled = false;
    function testimonyCarosel() {
      if ($(window).width() < 640) {
        $('#testimonial-carousel').flickity({
          freeScroll: true,
          cellAlign: 'left',
          prevNextButtons: false,
          pageDots: false
        });
        flickityEnabled = true;
      } else {
        if (flickityEnabled) {
          $('#testimonial-carousel').flickity('destroy');
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
