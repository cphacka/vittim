(self.webpackChunk=self.webpackChunk||[]).push([[1649],{98430:function(t,e,r){"use strict";r.r(e);var n=r(96156),a=r(92137),o=r(28481),i=r(87757),u=r.n(i),c=r(67294),l=r(9669),s=r.n(l),p=r(14452);function f(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function d(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?f(Object(r),!0).forEach((function(e){(0,n.Z)(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):f(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var v={fillColor:"#3388ff",fillOpacity:.5,color:"#3388ff"};e.default=function(t){var e=t.settings,r=(0,c.useState)(!1),n=(0,o.Z)(r,2),i=n[0],l=n[1],f=(0,c.useState)({}),g=(0,o.Z)(f,2),y=g[0],m=g[1],b=e.query,O=e.handler,h=e.canvas,w=e.zoom,j=e.lat,P=e.lng,k=e.style_height,C=void 0===k?{}:k,E=e.style_margin,S=void 0===E?{}:E,Z=(0,c.useCallback)(function(){var t=(0,a.Z)(u().mark((function t(e){var r,n,a;return u().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return l(!0),t.next=3,s()(e);case 3:r=t.sent,n=r.data,200===r.status&&n.data?(a={type:"FeatureCollection",features:n.data.map((function(t){return{id:t.id,type:"Feature",properties:d(d({tooltip:t.name},v),t.options),geometry:{type:"Polygon",coordinates:JSON.parse(t.polygon)}}}))},m(a),l(!1)):(l(!1),m({type:"FeatureCollection",features:[]}));case 7:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}(),[]);return(0,c.useEffect)((function(){var t;if(null!=b&&null!==(t=b.dataSource)&&void 0!==t&&t.value){var e,r=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";if(!t)return"";var e=t.split("\n").map((function(t){return t.replace("|","=")})).join("&");return"?".concat(e)}(null==b?void 0:b.defaultParams);Z((null==b||null===(e=b.dataSource)||void 0===e?void 0:e.value)+r)}}),[b]),c.createElement(p.Z,{isTransformLatLng:!0,data:y,onTap:function(t){var e=t.target.feature.id,r=O.params.replace("{{id}}",e);"goto"===O.evt?window.open(r,"_blank"):"load"===O.evt&&Z(r)},isLoading:i,style:{pointerEvents:window.altrpHelpers.isEditor()?"none":"auto",height:C.size+C.unit,marginTop:S.top+S.unit,marginBottom:S.bottom+S.unit,marginLeft:S.left+S.unit,marginRight:S.right+S.unit},isEditable:!1,preferCanvas:h,zoom:+w,center:[j,P]})}}}]);
//# sourceMappingURL=AltrpMap.f639214153bf8824cb25.bundle.js.map