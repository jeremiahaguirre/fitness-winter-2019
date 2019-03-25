(function($) {
  $(document).ready(function() {
    $('.flip').click(function() {
      event.preventDefault();
      $(this)
        .children()
        .toggle();
      $(this)
        .next('.faq-answer')
        .slideToggle();
    });
  });
})(jQuery);
