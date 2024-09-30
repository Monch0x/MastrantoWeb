if (screen.width < 1024) 
var pantalla = 4
else 
   if (screen.width < 1280) 
   var pantalla = 7
   else 
   var pantalla = 7

$('.slider-for').slick({
  slidesToShow: pantalla,
  slidesToScroll: pantalla,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
  autoplay: true,
  autoplaySpeed: 8000
});
$('.slider-nav').slick({
  slidesToShow: pantalla,
  slidesToScroll: pantalla,
  asNavFor: '.slider-for',
  dots: true,
  //focusOnSelect: true
});

$('a[data-slide]').click(function(e) {
  e.preventDefault();
  var slideno = $(this).data('slide');
  $('.slider-nav').slick('slickGoTo', slideno - 1);
});