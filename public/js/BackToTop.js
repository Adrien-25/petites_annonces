// BOUTON REMONTER HAUT DE LA PAGE
var btn = $('#backToTop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.removeClass('d-none');
  } else {
    btn.addClass('d-none');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});