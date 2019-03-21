(function($) {
  $(function() {
    $('.blog-carousel').flickity({
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
