(function ($) {

  // collapse open navigation
  $(".navbar a").click(function() {
    $(".navbar-collapse").collapse("hide");
  });

  // smooth scrolling to top anchor
  $("a[href='#top']").click(function(event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, "slow");
  });

  // smooth scrolling to other anchors
  $("a[href^=\\#]").click(function(event) {
    var target = $(this.getAttribute("href"));
    if (target.length) {
      event.preventDefault();
      $("html, body").animate({
        scrollTop: target.offset().top - 70
      }, "slow");
    }
  });

}(jQuery));
