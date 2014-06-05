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
            id:'Rectangle',
            type:'rect',
            rect:['185px','91px','255px','118px','auto','auto'],
            fill:["rgba(232,232,232,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'iphone-main',
            type:'image',
            rect:['470px','6px','325px','622px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"iphone-main.png",'0px','0px']
         },
         {
            id:'Text',
            type:'text',
            rect:['205px','102px','216px','26px','auto','auto'],
            text:"Lorem Ipsum",
            font:['Arial, Helvetica, sans-serif',18,"rgba(84,87,89,1.00)","normal","none",""]
         },
         {
            id:'TextCopy5',
            type:'text',
            rect:['205px','128px','216px','70px','auto','auto'],
            text:"Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum",
            font:['Arial, Helvetica, sans-serif',14,"rgba(84,87,89,1.00)","normal","none",""]
         },
         {
            id:'TextCopy',
            type:'text',
            rect:['205px','231px','292px','43px','auto','auto'],
            text:"Lorem Ipsum",
            font:['Arial, Helvetica, sans-serif',18,"rgba(84,87,89,1.00)","normal","none",""]
         },
         {
            id:'TextCopy2',
            type:'text',
            rect:['205px','274px','292px','43px','auto','auto'],
            text:"Lorem Ipsum",
            font:['Arial, Helvetica, sans-serif',18,"rgba(84,87,89,1.00)","normal","none",""]
         },
         {
            id:'TextCopy3',
            type:'text',
            rect:['205px','317px','292px','43px','auto','auto'],
            text:"Lorem Ipsum",
            font:['Arial, Helvetica, sans-serif',18,"rgba(84,87,89,1.00)","normal","none",""]
         },
         {
            id:'TextCopy4',
            type:'text',
            rect:['205px','360px','292px','43px','auto','auto'],
            text:"Lorem Ipsum",
            font:['Arial, Helvetica, sans-serif',18,"rgba(84,87,89,1.00)","normal","none",""]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_TextCopy4}": [
            ["style", "top", '360px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "left", '205px'],
            ["style", "font-size", '18px']
         ],
         "${_TextCopy3}": [
            ["style", "top", '317px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "left", '205px'],
            ["style", "font-size", '18px']
         ],
         "${_TextCopy5}": [
            ["style", "top", '128px'],
            ["style", "line-height", '18px'],
            ["style", "font-size", '14px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "height", '70px'],
            ["style", "left", '205px'],
            ["style", "width", '216px']
         ],
         "${_Text}": [
            ["style", "top", '102px'],
            ["style", "width", '216px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "height", '26px'],
            ["style", "left", '205px'],
            ["style", "font-size", '18px']
         ],
         "${_TextCopy2}": [
            ["style", "top", '274px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "left", '205px'],
            ["style", "font-size", '18px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '940px'],
            ["style", "height", '600px'],
            ["style", "overflow", 'hidden']
         ],
         "${_Rectangle}": [
            ["style", "height", '118px'],
            ["color", "background-color", 'rgba(232,232,232,1.00)'],
            ["style", "left", '185px'],
            ["style", "top", '91px']
         ],
         "${_TextCopy}": [
            ["style", "top", '231px'],
            ["color", "color", 'rgba(84,87,89,1.00)'],
            ["style", "left", '205px'],
            ["style", "font-size", '18px']
         ],
         "${_iphone-main}": [
            ["style", "top", '6px'],
            ["style", "height", '622px'],
            ["style", "left", '470px'],
            ["style", "width", '325px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
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
})(jQuery, AdobeEdge, "EDGE-298425944");
