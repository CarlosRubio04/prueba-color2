// Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut();
}

// Bx Slider
$(document).ready(function(){
  descargar();
  $('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 10,
    slideWidth: 164,
    slideMargin: 8
  });
});