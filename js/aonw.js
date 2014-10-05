function scrollNav() {
  $('.nav a.slow').click(function(){  
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 10
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();