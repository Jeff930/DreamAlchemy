//Main page toggle form
$(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").toggle();
     if ($("#form1").is(':visible')) {
     $("html, body").animate({scrollTop: $("#form1").offset().top});
  }
  });
});

