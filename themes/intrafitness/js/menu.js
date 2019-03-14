(function($) {
  $(function() {
    // $('.primary-menu').hide();
    $('.menu-toggle').click(function() {
      $('#primary-menu').slideToggle({
        duration: 'fast',
        start: function() {
          $(this).css({ display: 'flex' });
        }
      });
    });
  });
})(jQuery);
