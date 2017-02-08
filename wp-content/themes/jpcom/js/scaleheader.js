(function($) {
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 30) {
      $('header').addClass('scale-header');
    } else {
      $('header').removeClass('scale-header');
    }
}
  })(jQuery);

