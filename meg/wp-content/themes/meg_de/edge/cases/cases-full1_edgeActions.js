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
         // Load All-in-One
         yepnope({
         	load: "http://cdn.edgecommons.org/an/1.0.2/js/min/EdgeCommons.js",
         	complete: function() {
         		EC.debug("Commons	ready: "+EC.VERSION);
         		EC.centerStage(sym);
         		EC.Parallax.setup(sym);
         	}
         });
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         // Hier Code einfügen
      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-176235595");