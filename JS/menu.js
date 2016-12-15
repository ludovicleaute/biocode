/**
 * script pour la page web
 */

// listen for scroll
$(window).scroll( function() {
  // apply css classes based on the situation
  if ($(".masthead").offset().top > 75) {
    $(".masthead").fadeOut("slow");
  } else {
    $(".masthead").fadeIn("slow");
  }
  if ($(".mastfoot").offset().top > 200) {
	  $(".mastfoot").fadeIn("slow");
  }
  else{
	  $(".mastfoot").fadeOut("slow");
  }
});

