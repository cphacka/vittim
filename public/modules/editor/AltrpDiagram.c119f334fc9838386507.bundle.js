(self.webpackChunk=self.webpackChunk||[]).push([[1170],{10895:function(e,t,o){"use strict";o.d(t,{O:function(){return d}});var r=o(90484),a=o(92137),n=o(87757),l=o.n(n),i=o(9669),u=o.n(i),c=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=Object.keys(e).reduce((function(t,o,r){return[t,0===r?"?":"&",o=encodeURIComponent(o),"=",encodeURIComponent(e[o])].join("")}),"");return console.log("RESULT ==>",t),t},d=function(){var e=(0,a.Z)(l().mark((function e(t,o){var a;return l().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return a="","object"===(0,r.Z)(o)?a=c(o):void 0!==o&&(a=c(JSON.parse(o))),e.prev=2,e.next=5,u()(t+a,{});case 5:return e.abrupt("return",e.sent);case 8:return e.prev=8,e.t0=e.catch(2),console.log(e.t0),e.abrupt("return",{status:500});case 12:case"end":return e.stop()}}),e,null,[[2,8]])})));return function(t,o){return e.apply(this,arguments)}}()},57167:function(e,t,o){"use strict";var r=o(96156),a=o(92137),n=o(28481),l=o(87757),i=o.n(l),u=o(67294),c=o(33125),d=o(23233),s=o(5367),p=o(10895),v=o(64367),m=o(36968),h=o(59533),f=o(30381),g=o.n(f),y=_.find(d.Z,{value:"regagro"}).colors,b=_.find(d.Z,{value:"milk"}).colors,x=_.find(d.Z,{value:"milk2"}).colors,k="%d.%m.%Y";t.Z=function(e){var t=e.widget,o=e.width,l=void 0===o?"300px":o,d=e.height,f=void 0===d?"450px":d,S=e.dataSource,w=void 0===S?[]:S,E=e.xScaleType,M=void 0===E?"point":E,D=e.colorScheme,O=void 0===D?"red_grey":D,C=e.nodeSize,Z=void 0===C?6:C,P=e.sort,Y=void 0===P?"":P,R=e.tickRotation,j=void 0===R?0:R,I=e.bottomAxis,V=void 0===I||I,B=e.precision,G=e.enableGridX,T=void 0===G||G,N=e.enableGridY,z=void 0===N||N,L=e.keyIsDate,H=void 0!==L&&L,X=e.customColorSchemeChecker,A=void 0!==X&&X,q=e.customColors,U=void 0===q?[]:q,W=e.constantsAxises,F=void 0===W?[]:W,J=e.yScaleMax,K=e.widgetID,Q=e.useCustomTooltips,$=e.margin,ee=(0,u.useState)(!1),te=(0,n.Z)(ee,2),oe=te[0],re=te[1],ae=(0,u.useState)([]),ne=(0,n.Z)(ae,2),le=ne[0],ie=ne[1],ue=(v.YO[0],(0,u.useCallback)((0,a.Z)(i().mark((function e(){var o,r;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(re(!0),0!=w.length){e.next=8;break}return e.next=4,(0,p.O)(t.source,t.filter);case 4:200===(o=e.sent).status&&"string"!=typeof o.data&&(r=o.data.data.map((function(e){var t=e.key,o=g()(t).isValid()?g()(t).format("DD.MM.YYYY"):t;return{y:Number(e.data),x:H?o:t}})),ie([{id:"",data:r}]),re(!1)),e.next=19;break;case 8:if(null===Y||"undefined"===Y||void 0===w){e.next=17;break}e.t0=Y,e.next="value"===e.t0?12:"key"===e.t0?14:16;break;case 12:return w.forEach((function(e,t){e.data.length>0&&(w[t].data=_.sortBy(e.data,["y"]))})),e.abrupt("break",17);case 14:return le.forEach((function(e,t){e.data.length>0&&(w[t].data=_.sortBy(e.data,["x"]))})),e.abrupt("break",17);case 16:return e.abrupt("break",17);case 17:ie(w||[]),re(!1);case 19:case"end":return e.stop()}}),e)}))),[t]));return(0,u.useEffect)((function(){ue()}),[ue]),oe?u.createElement(m.Z,null):_.uniq(le.map((function(e){return e.data.length>0}))).includes(!0)?u.createElement(u.Fragment,null,u.createElement("div",{style:{width:l,height:f}},u.createElement(c.IG,(0,r.Z)({data:le,colors:A&&U.length>0?U:"regagro"===O?y:"milk"===O?b:"milk2"===O?x:{scheme:O},yScale:J?{max:J,type:"linear"}:{type:"linear"},markers:F,margin:{top:(null==$?void 0:$.top)||30,right:(null==$?void 0:$.right)||30,bottom:(null==$?void 0:$.bottom)||30,left:(null==$?void 0:$.left)||30},xFormat:"time"===M&&"time:%d.%m.%Y",nodeSize:Z,xScale:"time"===M?{type:M,format:k,precision:B}:{type:M},tooltip:function(e){return u.createElement(h.Z,{datum:e,enable:Q,widgetID:K})},enableGridX:T,enableGridY:z,axisBottom:V&&("time"===M?{format:k,tickRotation:j}:{tickRotation:j})},"colors",A&&U.length>0?U:"regagro"===O?y:"milk"===O?b:"milk2"===O?x:{scheme:O})))):u.createElement(s.Z,null)}},5367:function(e,t,o){"use strict";var r=o(67294);t.Z=function(e){var t=e.text;return r.createElement("div",{className:"spinner-container"},r.createElement("div",{className:"spinner-container__text"},t||"Данные обрабатываются"))}},59533:function(e,t,o){"use strict";var r=o(96156),a=o(6610),n=o(5991),l=o(10379),i=o(46070),u=o(77608),c=o(67294);function d(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),o.push.apply(o,r)}return o}function s(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?d(Object(o),!0).forEach((function(t){(0,r.Z)(e,t,o[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):d(Object(o)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))}))}return e}var p=function(e){(0,l.Z)(d,e);var t,o,r=(t=d,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,u.Z)(t);if(o){var a=(0,u.Z)(this).constructor;e=Reflect.construct(r,arguments,a)}else e=r.apply(this,arguments);return(0,i.Z)(this,e)});function d(e){var t,o,n,l,i,u;return(0,a.Z)(this,d),(u=r.call(this,e)).state={indexValue:null===(t=e.datum)||void 0===t?void 0:t.indexValue,value:null===(o=e.datum)||void 0===o?void 0:o.value,color:null===(n=e.datum)||void 0===n?void 0:n.color,enable:null==e?void 0:e.enable,settings:null==e?void 0:e.settings,data:null===(l=e.datum)||void 0===l||null===(i=l.node)||void 0===i?void 0:i.data},u}return(0,n.Z)(d,[{key:"componentDidUpdate",value:function(e,t){var o=this;_.isEqual(e.enable,this.props.enable)||this.setState((function(e){var t;return s(s({},e),{},{enable:null===(t=o.props)||void 0===t?void 0:t.enable})}))}},{key:"render",value:function(){var e,t,o,r;return this.state.enable?c.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font altrp-dashboard__tooltip--label-background altrp-dashboard__tooltip--width altrp-dashboard__tooltip--label-background-shadow altrp-dashboard__tooltip--border-type altrp-dashboard__tooltip--border-width altrp-dashboard__tooltip--border-color col-12"),style:{padding:"5px 9px"}},c.createElement("div",null,c.createElement("div",{style:{color:"white",display:"flex"}},c.createElement("div",{style:{height:"100%",display:"flex",alignItems:"center"}},c.createElement("div",{style:{width:"15px",height:"15px",background:this.props.datum.datum.color||"#000000",marginRight:"3px",marginTop:"1px"}})),null===(e=this.props.datum)||void 0===e||null===(t=e.datum)||void 0===t?void 0:t.label,":",c.createElement("strong",null,null===(o=this.props.datum)||void 0===o||null===(r=o.datum)||void 0===r?void 0:r.value)))):c.createElement(c.Fragment,null,c.createElement("div",{style:{background:"white",color:"inherit",fontSize:"{{SIZE}}px",borderRadius:"2px",boxShadow:"rgba(0, 0, 0, 0.25) 0px 1px 2px",padding:"5px 9px"}},c.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},c.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.datum.color,marginRight:"7px"}}),c.createElement("span",null,this.props.datum.datum.label,":"," ",c.createElement("strong",null,this.props.datum.datum.value)))))}}]),d}(c.PureComponent);t.Z=p},37276:function(e,t,o){"use strict";o.r(t);var r=o(67294),a=o(86817),n=o(14494),l=o(57167),i=o(23233),u=o(18354),c=o(30381),d=o.n(c);t.default=(0,n.connect)((function(e){return{currentDataStorage:e.currentDataStorage}}))((function(e){var t,o,c,s,p,v,m,h,f,g=e.settings,y=e.id,b=(0,n.useDispatch)(),x=null==g?void 0:g.margin,k=(null==g?void 0:g.widget_name)||y,S=null==g?void 0:g.isCustomColor,w=null==g||null===(t=g.customScheme)||void 0===t?void 0:t.map((function(e){return _.get(e,"color.colorPickedHex")})),E=null==g?void 0:g.yScaleMax,M=null==g?void 0:g.axisY,D=null==g||null===(o=g.repTooltips)||void 0===o?void 0:o.map((function(e){var t;return{label:_.get(e,"label"),field:_.get(e,"value"),color:null===(t=_.get(e,"color"))||void 0===t?void 0:t.colorPickedHex}})),O=null==g?void 0:g.customTooltip,C=(null==M?void 0:M.map((function(e){var t=(0,u.getDataByPath)(e.yMarkerValue);return{axis:"y",value:Number(null!==t?t:e.yMarkerValue),lineStyle:{stroke:null!=e.yMarkerColor?e.yMarkerColor.colorPickedHex:"#000000",strokeWidth:e.yMarkerWidth},textStyle:{fill:null!=e.yMarkerLabelColor?e.yMarkerLabelColor.colorPickedHex:"#000000"},legend:e.yMarkerLabel,legendOrientation:e.yMarkerOrientation}})))||[],Z=null==g?void 0:g.axisX,P=(null==Z?void 0:Z.map((function(e){var t=(0,u.getDataByPath)(e.xMarkerValue);return{axis:"x",value:null!==t?t:e.xMarkerIsDate?d()(e.xMarkerValue).format("DD.MM.YYYY"):e.xMarkerValue,lineStyle:{stroke:null!=e.xMarkerColor?e.xMarkerColor.colorPickedHex:"#000000",strokeWidth:e.xMarkerWidth},textStyle:{fill:null!=e.xMarkerLabelColor?e.xMarkerLabelColor.colorPickedHex:"#000000"},legend:e.xMarkerLabel,legendOrientation:e.xMarkerOrientation}})))||[],Y=[];P.length>0&&(Y.push(P),Y=Y.flat()),C.length>0&&(Y.push(C),Y=Y.flat());var R=null===(c=g.query)||void 0===c||null===(s=c.dataSource)||void 0===s?void 0:s.value,j=g.isMultiple,I=g.isCustomColors,V=g.key_is_date,B=null==g?void 0:g.sort,G=null==g?void 0:g.tickRotation,T=null==g?void 0:g.bottomAxis,N=null==g?void 0:g.enableGridX,z=null==g?void 0:g.enableGridY,L=(null==g?void 0:g.xScaleType)||"point",H=(null==g?void 0:g.precision)||"month",X=null==g?void 0:g.colorScheme,A=null==g?void 0:g.pointSize,q=[],U=function(e,t){return e.map((function(e,o){var r=_.get(e,t.key),a=d()(r).isValid()?d()(r).format("DD.MM.YYYY"):r,n=void 0!==D?null==D?void 0:D.map((function(t){return{label:null==t?void 0:t.label,value:_.get(e,t.field),color:null==t?void 0:t.color}})):[];return{y:Number(_.get(e,t.data)),x:V?a:r,tooltip:n}}))},W=[],F=I?w:_.find(i.Z,{value:null==g?void 0:g.colorScheme}).colors,J=F.length;if((0,u.isEditor)())q=[{id:"Demo data",data:[{x:"2020-01",y:50},{x:"2020-02",y:140},{x:"2013-03",y:40},{x:"2013-04",y:20},{x:"2013-05",y:60},{x:"2013-06",y:30}]},{id:"Demo data 2",data:[{x:"2020-01",y:60},{x:"2020-02",y:200},{x:"2013-03",y:20},{x:"2013-04",y:10},{x:"2013-05",y:50},{x:"2013-06",y:31}]}];else if(j)q=_.cloneDeep(g.rep,[]).map((function(e,t){var o=(0,u.getDataByPath)(e.path,[]);return o.length>0&&(o=U(o,e)),W.push({color:F[t%J],label:e.title||e.path}),{id:e.title||e.path,data:o}}));else if(null!=g.datasource_path)try{q=(0,u.getDataByPath)(g.datasource_path,[]);var K={key:g.key_name,data:g.data_name};W.push({color:F[0],label:g.datasource_title||g.datasource_path}),q=[{id:g.datasource_title||g.datasource_path,data:U(q,K)}]}catch(e){console.log("===================================="),console.error(e),console.log("===================================="),q=[{id:g.datasource_title||g.datasource_path,data:[]}]}if(!R&&0===q.length)return r.createElement("div",{className:"altrp-chart ".concat(g.legendPosition)},"Идет загрузка данных...");var Q={source:R+function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";if(!e)return"";var t=e.split("\n"),o=t.map((function(e){return e.replace("|","=")})).join("&");return"?".concat(o)}(null===(p=g.query)||void 0===p?void 0:p.defaultParams),options:{colorScheme:g.colorScheme,legend:g.legend,animated:g.animated,isVertical:g.isVertical},filter:{}};return(0,r.useEffect)((function(){W.length>0&&function(e){b((0,a.Xe)(k,{legend:e}))}(W)}),[W]),console.log("===================================="),console.log(q),console.log("===================================="),r.createElement(l.Z,{widgetID:y,margin:x,useCustomTooltips:O,yScaleMax:E,customColorSchemeChecker:S,customColors:w,dataSource:q,constantsAxises:Y,colorScheme:X,width:"".concat(null===(v=g.width)||void 0===v?void 0:v.size).concat(null===(m=g.width)||void 0===m?void 0:m.unit),height:"".concat(null===(h=g.height)||void 0===h?void 0:h.size).concat(null===(f=g.height)||void 0===f?void 0:f.unit),widget:Q,nodeSize:A,xScaleType:L,precision:H,sort:B,tickRotation:G,bottomAxis:T,enableGridX:N,enableGridY:z})}))}}]);
//# sourceMappingURL=AltrpDiagram.c119f334fc9838386507.bundle.js.map