$(function()
{

});
$(document).ready(function() {
     var owl = $("#slider-carousel");
     owl.owlCarousel({
       items: 4,
       itemsDesktop: [1000, 4],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600, 1],
       itemsMobile: false,
       pagination: false
     });
     $(".next").click(function() {
       owl.trigger('owl.next');
     })
     $(".prev").click(function() {
       owl.trigger('owl.prev');
     })
   });

/*-----------------------blog js---------------------------*/
    $(document).ready(function() {
      var owl = $("#owl-demo");
      owl.owlCarousel({
      autoPlay: 1500,
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      pagination:false
      });
      $(".next").click(function(){
          owl.trigger('owl.next');
      })
      $(".prev").click(function(){
          owl.trigger('owl.prev');
      })
    });

 /*=============================video js=================*/
 $("iframe[src*='youtube']").css("width", "100%");
var vidWidth = $("iframe[src*='youtube']").width();
var vidHeight = vidWidth / 16 * 9;
$("iframe[src*='youtube']").css("height", vidHeight);   

 