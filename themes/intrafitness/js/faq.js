(function($) {
  $(function() {
    $('.flip').click(function() {
      $(this)
        .next()
        .slideToggle();
    });
  });
})(jQuery);
