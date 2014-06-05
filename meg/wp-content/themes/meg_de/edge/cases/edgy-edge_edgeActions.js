
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindSymbolAction(compId,symbolName,"creationComplete",function(sym,e){yepnope({load:"http://cdn.edgecommons.org/an/1.0.2/js/min/EdgeCommons.js",complete:function(){EC.debug("Commons ready: "+EC.VERSION);EC.centerStage(sym);EC.Parallax.setup(sym);}});});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-176235595");