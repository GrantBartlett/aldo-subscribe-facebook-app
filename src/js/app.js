$(function () {
  $('input').placeholder();

  $('.show_ar_terms').click('on', function (e) {
    e.preventDefault();
    $('.ar_terms').toggleClass('hidden').fadeIn(500);
  });

  $('.close_ar_terms').click('on', function () {
    $('.ar_terms').toggleClass('hidden').fadeOut(500);
  });
});

