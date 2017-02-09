(function($) {
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 30) {
      $('.logo').addClass('scale-header');
    } else {
      $('.logo').removeClass('scale-header');
    }
}
  })(jQuery);

