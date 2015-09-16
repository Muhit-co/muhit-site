$(document).ready(function() {

  // initiating smooth scroll functionality
  $('a[href^="#"]').smoothScroll( { speed: 800, afterScroll: function() { location.hash = $(this).attr('href'); } });


  // mobile navigation menu functionality
  $('.nav-button').click(function() {
    $('header').toggleClass('isExpanded');
  });
  $('nav ul a').click(function() {
    $('header').removeClass('isExpanded');
  });

  // slides.js functionality
  $('.slides').slidesjs({
    width: 300,
    height: 150,
    play: {
      interval: $(this).attr('data-interval'),
      auto: true
    },
    navigation: {
      active: false
    },
    pagination: {
      active: true
    }
  });

  scrollActions();

});

function scrollActions() {
  scroll = $(window).scrollTop();
  windowH = $(window).height();

  if($('body').hasClass('home')) {
    if(scroll + $('header').outerHeight() > $('#intro').outerHeight()) {
      $('header').removeClass('isTransparent');
    } else {
      $('header').addClass('isTransparent');
    }
  }
}

$(window).scroll(function() { scrollActions(); });
$(window).resize(function() { scrollActions(); });
$(document).bind("scrollstart", function() { scrollActions(); });
$(document).bind("scrollstop", function() { scrollActions(); });