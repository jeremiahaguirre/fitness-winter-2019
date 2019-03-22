(function($) {
  $(function() {
    $('.blog-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      percentPosition: false
    });
<<<<<<< HEAD
    // setGallerySize: false,

    //testimonial carosel
=======
    //testimonial carousel
>>>>>>> 6e6e44c1dc8dc5d85cc5d724699e725d9fa858cc
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
