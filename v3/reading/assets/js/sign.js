//Main page toggle form
$(document).ready(function() {

  var singleHoroscope;
  var singleName;

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
  singleHoroscope = $(this).attr('href').replace('#', '');
  console.log(singleHoroscope)
  localStorage.setItem("single",singleHoroscope);
  $('.astrology-description').removeClass('is-active');
  $(`.astrology-description[data-id="${singleHoroscope}"]`).addClass('is-active')
});

window.onload = function(){
var areas = document.getElementsByTagName( 'area' );
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

savedHoroscope = localStorage.getItem("single");
name = localStorage.getItem("name");
console.log(savedHoroscope);
document.getElementById("horoscope").innerHTML = savedHoroscope;
document.getElementById('horoscope-image').src="./assets/images/astro-signs/"+ savedHoroscope +".png";
}

});