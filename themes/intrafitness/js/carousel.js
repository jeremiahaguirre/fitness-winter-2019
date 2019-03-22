(function($) {
  $(function() {
    $('.blog-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      percentPosition: false
    });
    //testimonial carousel
    let flickityEnabled = false;
    function testimonialsCarousel() {
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
    testimonialsCarousel();
    $(window).on('resize', () => {
      testimonialsCarousel();
    });
  });
})(jQuery);
