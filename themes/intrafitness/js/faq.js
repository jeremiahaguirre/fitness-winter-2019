(function($) {
  $(document).ready(function() {
    $('.flip').click(function() {
      event.preventDefault();
      $(this)
        .children()
        .toggle();
      $(this)
        .parent()
        .next('.faq-answer')
        .slideToggle();
    });
  });
})(jQuery);
