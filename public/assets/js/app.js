$('#menu_toggle').on('click', (function(_this) {
  return function() {
    $('.b-header_nav').addClass('b-header_nav__active');
    return $('.b-header_nav').append('<span id="b-header_nav-close"></span>');
  };
})(this));

$('body').on('click', 'span#b-header_nav-close', (function(_this) {
  return function() {
    $('#b-header_nav-close').remove();
    return $('.b-header_nav').removeClass('b-header_nav__active');
  };
})(this));
