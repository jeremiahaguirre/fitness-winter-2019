(function($) {
  $(function() {
    // $('.primary-menu').hide();
    $('.menu-toggle').click(function() {
      $('#primary-menu').slideToggle({
        duration: 'fast',
        start: function() {
          $(this).css({ display: 'flex' });
        },
        done: function() {
          if ($('#primary-menu').is(':visible')) {
            $('body').addClass('menu-show');
          } else {
            $('body').removeClass('menu-show');
          }
        }
      });
    });
  });
})(jQuery);
