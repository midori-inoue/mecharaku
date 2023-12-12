$(function () {
  $(window).scroll(function () {
    $('.fade').each(function () {
      const targetElement = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight) {
        $(this).addClass('view');
      }
    });
  });
});// JavaScript Document