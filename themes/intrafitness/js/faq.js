(function($) {
<<<<<<< HEAD
  $(function() {
    $('.flip').click(function() {
      $(this)
        .next()
=======
  $(document).ready(function() {
    $('.flip').click(function() {
      event.preventDefault();
      $(this)
        .children()
        .toggle();
      $(this)
        .parent()
        .next('.faq-answer')
>>>>>>> 0c7c5d4a4944e60db28b1001fd05c4bf19c86186
        .slideToggle();
    });
  });
})(jQuery);
