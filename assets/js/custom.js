//Main page toggle form
$(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").toggle();
     if ($("#form1").is(':visible')) {
     $("html, body").animate({scrollTop: $("#form1").offset().top});
  }
  });

$('map[name="astrology-map"] area').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();

    $('#soulreading-form').show();
  selectedHoroscope = $(this).attr('href').replace('#', '');
  console.log(selectedHoroscope)
  $('.astrology-description').removeClass('is-active');
  $(`.astrology-description[data-id="${selectedHoroscope}"]`).addClass('is-active')
  if (selectedHoroscope != null & selectedHoroscope2 != null)
    $(`.hide`).addClass('is-active')
});

$('map[name="astrology-map2"] area').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();

$('#soulreading-form').show();
  selectedHoroscope2 = $(this).attr('href').replace('#', '');
  console.log(selectedHoroscope2)
  $('.astrology-description2').removeClass('is-active');
  $(`.astrology-description2[data-id2="${selectedHoroscope2}"]`).addClass('is-active')
  if (selectedHoroscope != null & selectedHoroscope2 != null)
    $(`.hide`).addClass('is-active')
});

});

window.onload = function(){
var areas = document.getElementsByTagName( 'area' );
var selectedHoroscope;
var selectedHoroscope2;
console.log(areas);

for( var index = 0; index < areas.length; index++ ) {    
    areas[index].addEventListener( 'mouseover', function () {this.focus();}, false );
    areas[index].addEventListener( 'mouseout', function () {this.blur();}, false );
    areas[index].addEventListener( 'click', function () {
//var fullname = document.getElementById("fullname"); fullname.scrollIntoView();
$('html,body').animate({
        scrollTop: $("#fullname ").offset().top},
        'slow');
}, false );
};
}