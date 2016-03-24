$(document).ready(function(){

var 
  fullFooterMap = $('#map')
, direction = $('body').css("direction")
, _window = $(window)
;


$('#map').css('display', 'block');

$(window).resize(
   function(){
      mainResizer();
   }
).trigger('resize');


function mainResizer(){
  if(direction == "ltr"){
    fullFooterMap.css({width: _window.width(), "margin-left": (_window.width()/-2),"left":"50%"});
  }else{
    fullFooterMap.css({width: _window.width(), "margin-right": (_window.width()/-2),"right":"50%"});
  }
}

});