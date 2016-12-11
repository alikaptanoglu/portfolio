// add current year to footer
var year = new Date().getFullYear();
if (year == 2016) {
    $('#year').html(year);
}
else {
    $('#year').html('2016-' + year);
}
