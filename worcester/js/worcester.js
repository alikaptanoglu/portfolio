(function ($) {

  // add current year to footer
  var year = new Date().getFullYear();
  if (year == 2017) {
      $("#year").html(year);
  }
  else {
      $("#year").html("2017-" + year);
  }

}(jQuery));
