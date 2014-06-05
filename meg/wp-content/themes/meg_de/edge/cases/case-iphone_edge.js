/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "2.0.1",
   minimumCompatibleVersion: "2.0.0",
   build: "2.0.1.268",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'iphone-main',
            type:'image',
            rect:['145px','-12px','259px','496px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"iphone-main.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '550px'],
            ["style", "height", '400px'],
            ["style", "overflow", 'hidden']
         ],
         "${_iphone-main}": [
            ["style", "top", '387px'],
            ["transform", "rotateZ", '35deg'],
            ["style", "height", '496px'],
            ["style", "left", '-305px'],
            ["style", "width", '259px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 708.49609375,
         autoPlay: true,
         timeline: [
            { id: "eid2", tween: [ "style", "${_iphone-main}", "left", '145px', { fromValue: '-305px'}], position: 0, duration: 708, easing: "easeOutQuad" },
            { id: "eid6", tween: [ "transform", "${_iphone-main}", "rotateZ", '0deg', { fromValue: '35deg'}], position: 0, duration: 708, easing: "easeOutQuad" },
            { id: "eid4", tween: [ "style", "${_iphone-main}", "top", '-12px', { fromValue: '387px'}], position: 0, duration: 708, easing: "easeOutQuad" }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-192115992");
