/***********************
* Adobe Edge Animate-Aktionen für Composition
*
* Bearbeiten Sie diese Datei mit Vorsicht. Achten Sie darauf, dass 
* Funktionssignaturen und Kommentare, die mit „Edge“ anfangen, beibehalten werden, 
* damit Sie mit diesen Aktionen weiterhin in Adobe Edge Animate interagieren können.
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // Aliase für häufig verwendete Edge-Klassen

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindSymbolAction(compId, symbolName, "creationComplete", function(sym, e) {
          console.log('Start');
          
           	//http://stackoverflow.com/a/488073/52160
         		function isScrolledIntoView(elem)
         		{
         			var docViewTop = $(window).scrollTop();
         			var docViewBottom = docViewTop + $(window).height();
         
         			var elemTop = $(elem).offset().top;
         			var elemBottom = elemTop + $(elem).height();
         
         			return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom)
         			  && (elemBottom <= docViewBottom) &&  (elemTop >= docViewTop) );
         		}		  
         
         		if(isScrolledIntoView(sym.element)) {
         			sym.play(0) 
         		} else {
         			$(window).on("scroll", function(e) {
         			if(isScrolledIntoView(sym.element)) {
         				console.log('Start me up');	
         				sym.play(0);
         				$(window).off("scroll");
         			}
         		});
         		}
         

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-192115992");