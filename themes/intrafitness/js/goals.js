(function($) {
  $(function() {
    function addValues() {
      if ($(window).width() < 640) {
        $('.health-click').on('click', () => {
          $('.happy').hide();
          $('.freedom').hide();
          $('.health').show();
        });
        $('.happy-click').on('click', () => {
          $('.freedom').hide();
          $('.health').hide();
          $('.happy').show();
        });
        $('.freedom-click').on('click', () => {
          $('.health').hide();
          $('.happy').hide();
          $('.freedom').show();
        });
      }
    }
    addValues();
    $(window).on('resize', () => {
      if ($(window).width() >= 640) {
        $('.happy').show();
        $('.freedom').show();
        $('.health').show();
      } else {
        $('.happy').hide();
        $('.freedom').hide();
        $('.health').show();
        addValues();
      }
    });
  });
})(jQuery);
