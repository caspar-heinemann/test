$(document).ready(function(){$window=$(window);$('section[data-type="background"]').each(function(){var e=$(this);$(window).scroll(function(){var t=-($window.scrollTop()/e.data("speed")),n="50% "+t+"px";e.css({backgroundPosition:n})})})});document.createElement("section");$elem1=$("#caseOne");var scrollState="top";jQuery(window).scroll(function(){var e=$(window).scrollTop();if(e!=0&&scrollState==="top"){$elem1.stop().animate({marginBottom:"0px",position:"absolute"},900);scrollState="scrolled"}else if(e===0&&scrollState==="scrolled"){$elem1.stop().animate({marginBottom:"-732px",position:"absolute"},500);scrollState="top"}});