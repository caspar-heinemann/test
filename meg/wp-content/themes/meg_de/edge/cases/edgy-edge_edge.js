
(function($,Edge,compId){var _=null,y=true,n=false,t='transform',e15='${_Text2Copy}',c='color',x9='rgba(0,0,0,0)',e30='${_Text2}',g='image',x1='2.0.1',x17='rgba(114,114,114,1.00)',x12='rgba(50,121,186,1.00)',e21='${_Rectangle4}',tp='top',e35='${_Rectangle}',a='Base State',x19='rgba(145,145,145,0.65)',e34='${_Rectangle5}',x='text',e22='${_Text2Copy6}',e33='${_iPad-anima12Copy2}',e23='${_Group}',m='rect',x13='rgba(255,255,255,1.00)',rz='rotateZ',x2='2.0.0',r='deg',x3='2.0.1.268',i='none',e31='${_iPad-anima12Copy}',e32='${_iPad-anima12Copy3}',qoq='easeOutQuad',s='style',x29='hidden',e28='${_Stage}',lf='left',x27='rgba(255,255,255,1)',e18='${_Text2Copy2}',e26='${_Text2Copy7}',e36='${_RectangleCopy}',e20='${_RectangleCopy2}',e24='${_Text2Copy5}',x11='rgba(236,236,236,1.00)',x6='Arial, Helvetica, sans-serif',l='normal',bg='background-color',e16='${_Text2Copy3}',fs='font-size',h='height',dt='Default Timeline',w='width',x5='14',x8='24',e25='${_Text2Copy4}',ov='overflow',xc='rgba(0,0,0,1)',e37='${_iPad-anima12}',x14='stage';var im='images/';var g10='iPad-anima1.png';var s7="head2<br>",s4="Bacon ipsum dolor sit amet salami leberkas prosciutto jerky pork loin pork belly swine pork chop flank rump chuck shank doner hamburger. Meatball prosciutto ham hock shoulder kielbasa. Kielbasa t-bone beef ribs, strip steak meatball brisket tenderloin prosciutto andouille turkey. Pig tongue swine meatloaf ball tip pastrami ham hock chicken sausage pork bacon flank. Ham rump prosciutto beef shank shankle pork belly meatloaf ball tip strip steak fatback bresaola. Brisket shoulder pork pork chop biltong flank, swine shankle. Pork loin strip steak biltong, pork chop capicola cow venison pig salami meatloaf.";var fonts={};var P=Edge.P,T=Edge.T,A=Edge.A;var resources=[];var symbols={"stage":{v:x1,mv:x2,b:x3,bS:a,iS:a,gpu:n,rI:n,cn:{dom:[{id:'Group',t:'group',r:['447px','507px','996','404','auto','auto'],c:[{id:'Text2Copy7',t:x,r:['504px','99px','492px','170px','auto','auto'],text:s4,align:"left",n:[x6,x5,"rgba(114,114,114,1.00)",l,i,l]},{id:'Text2Copy6',t:x,r:['504px','46px','154px','38px','auto','auto'],text:s7,align:"left",n:[x6,x8,"rgba(50,121,186,1.00)",l,i,l]},{id:'iPad-anima12Copy3',t:g,r:['-298px','250px','400px','404px','auto','auto'],f:[x9,im+g10,'0px','0px']}]},{id:'Text2Copy2',t:x,r:['966px','1619px','154px','38px','auto','auto'],text:s7,align:"left",n:[x6,x8,"rgba(50,121,186,1.00)",l,i,l]},{id:'Rectangle',t:m,r:['6px','911px','1920px','528px','auto','auto'],f:[x11],s:[0,xc,i],boxShadow:["",0,4,9,0,"rgba(145,145,145,0.65)"]},{id:'Text2',t:x,r:['462px','1113px','492px','170px','auto','auto'],text:s4,align:"left",n:[x6,x5,"rgba(114,114,114,1.00)",l,i,l]},{id:'Text2Copy',t:x,r:['462px','1069px','154px','38px','auto','auto'],text:s7,align:"left",n:[x6,x8,"rgba(50,121,186,1.00)",l,i,l]},{id:'Rectangle5',t:m,r:['1183px','1061px','206px','84px','auto','auto'],f:[x12],s:[0,"rgb(0, 0, 0)",i]},{id:'Rectangle4',t:m,r:['1149px','1048px','258px','103px','auto','auto'],f:[x11],s:[0,"rgb(0, 0, 0)",i]},{id:'iPad-anima12',t:g,r:['316px','447px','400px','404px','auto','auto'],f:[x9,im+g10,'0px','0px']},{id:'RectangleCopy2',t:m,r:['0px','1437px','1920px','553px','auto','auto'],f:[x13],s:[0,xc,i],boxShadow:["",0,-2,3,0,"rgba(145,145,145,0.65)"]},{id:'iPad-anima12Copy',t:g,r:['456px','1583px','400px','404px','auto','auto'],f:[x9,im+g10,'0px','0px'],filter:[0,0,1,1,0,0,0,0,"rgba(0,0,0,0)",0,0,0]},{id:'Text2Copy3',t:x,r:['966px','1678px','492px','170px','auto','auto'],text:s4,align:"left",n:[x6,x5,"rgba(114,114,114,1.00)",l,i,l]},{id:'RectangleCopy',t:m,r:['0px','1987px','1920px','528px','auto','auto'],f:[x11],s:[0,xc,i],boxShadow:["",0,-2,3,0,"rgba(145,145,145,0.65)"]},{id:'Text2Copy5',t:x,r:['468px','2174px','492px','170px','auto','auto'],text:s4,align:"left",n:[x6,x5,"rgba(114,114,114,1.00)",l,i,l]},{id:'Text2Copy4',t:x,r:['468px','2126px','154px','38px','auto','auto'],text:s7,align:"left",n:[x6,x8,"rgba(50,121,186,1.00)",l,i,l]},{id:'iPad-anima12Copy2',t:g,r:['1043px','2116px','400px','404px','auto','auto'],f:[x9,im+g10,'0px','0px']}],sI:[]},s:{},tl:{"Default Timeline":{fS:a,tS:"",d:69,a:n,l:{"Beschriftung 2":0},tt:[]}}}};var S1=symbols[x14];var tl0=S1.tl[dt].tt,st1=S1.s[a]={},A1=A(_,tl0,st1);A1.A(e15).P(tp,1069).P(w,154).P(h,38).P(c,x12,c).P(lf,462).P(fs,24);A1.A(e16).P(tp,1678).P("line-height",26).P(h,170).P(c,x17,c).P(lf,966).P(fs,14);A1.A(e18).P(tp,1619).P(fs,24).P(h,38).P(c,x12,c).P(lf,966).P(w,154);A1.A(e20).P(bg,x13,c).P("boxShadow.blur",3,"subproperty").P(lf,0).P(w,1920).P(tp,1437).P("boxShadow.spread",0,"subproperty").P(h,553).P("boxShadow.offsetV",-2,"subproperty").P("boxShadow.offsetH",0,"subproperty").P("boxShadow.color",x19,"subproperty");A1.A(e21).P(tp,1048).P(h,103).P(bg,x11,c).P(lf,1149).P(w,258);A1.A(e22).P(tp,46).P(w,154).P(h,38).P(c,x12,c).P(lf,504).P(fs,24);A1.A(e23).P(tp,507).P(lf,447);A1.A(e24).P(tp,2174).P("line-height",26).P(h,170).P(c,x17,c).P(lf,468).P(fs,14);A1.A(e25).P(tp,2126).P(fs,24).P(h,38).P(c,x12,c).P(lf,468).P(w,154);A1.A(e26).P(tp,99).P(c,x17,c).P(h,170).P("line-height",26).P(lf,504).P(fs,14);A1.A(e28).P(bg,x27,c).P(ov,x29).P(h,3000).P(w,1920);A1.A(e30).P(tp,1113).P("line-height",26).P(c,x17,c).P(h,170).P(lf,462).P(fs,14);A1.A(e31).P(lf,456).P(tp,1994).T(0.026,1586,0.019,qoq);A1.A(e32).P(tp,411).T(0,0,0.009,qoq).P(lf,-852).T(0,16,0.009).P(rz,27,t,_,r).T(0,0,0.009);A1.A(e33).P(tp,2110).T(0.069,2110).P(lf,1914).T(0.045,1043,0.024,qoq);A1.A(e34).P(bg,x12,c).P(tp,1051).T(0.026,971,0.011,qoq);A1.A(e35).P(bg,x11,c).P("boxShadow.blur",9,"subproperty").P(w,1920).P(tp,911).P(h,528).P("boxShadow.offsetH",0,"subproperty").P("boxShadow.color",x19,"subproperty").P(lf,0).T(0.069,0).P("boxShadow.offsetV",-2,"subproperty").T(0.069,-2);A1.A(e36).P(bg,x11,c).P("boxShadow.blur",3,"subproperty").P(lf,0).P(w,1920).P(h,528).P("boxShadow.offsetV",-2,"subproperty").P("boxShadow.offsetH",0,"subproperty").P("boxShadow.color",x19,"subproperty").P(tp,1986).T(0.045,1987,0.024,qoq);A1.A(e37).P(tp,1436).T(0.009,1033,0.016,qoq).P(lf,2013).T(0.009,1079,0.016).P(rz,-33,t,_,r).T(0.009,0,0.016);Edge.registerCompositionDefn(compId,symbols,fonts,resources);$(window).ready(function(){ Edge.launchComposition(compId);});})(jQuery,AdobeEdge,"EDGE-176235595");

