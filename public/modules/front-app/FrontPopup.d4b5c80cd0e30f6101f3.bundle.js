(self.webpackChunk=self.webpackChunk||[]).push([[3825],{41788:function(t,e,n){"use strict";n.d(e,{Z:function(){return r}});var o=n(14665);function r(t,e){t.prototype=Object.create(e.prototype),t.prototype.constructor=t,(0,o.Z)(t,e)}},81253:function(t,e,n){"use strict";n.d(e,{Z:function(){return r}});var o=n(19756);function r(t,e){if(null==t)return{};var n,r,i=(0,o.Z)(t,e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);for(r=0;r<a.length;r++)n=a[r],e.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(t,n)&&(i[n]=t[n])}return i}},14665:function(t,e,n){"use strict";function o(t,e){return(o=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}n.d(e,{Z:function(){return o}})},1866:function(t,e,n){"use strict";n.d(e,{Z:function(){return N}});var o,r,i,a=n(96156),s=n(6610),c=n(5991),u=n(10379),l=n(46070),p=n(77608),f=n(22122),h=n(32465),d=n(71893),g="#eee",m=d.ZP.span(r||(r=(0,h.Z)(["\n  animation: "," 1.2s ease-in-out infinite;\n  background-color: ",";\n  background-size: 200px 100%;\n  background-repeat: no-repeat;\n  background-image: linear-gradient(90deg, ",");\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  height: 100%;\n"])),(function(t,e){return(0,d.F4)(o||(o=(0,h.Z)(["\n  0% {\n    background-position: -200px 0;\n  }\n  ","\n  100% {\n    background-position: calc(200px + 100%) 0;\n  }\n"])),e>0?"".concat(Math.floor(1/(t+e)*t*100),"% {\n    background-position: calc(200px + 100%) 0;\n  }"):void 0)}),(function(t){var e=t.color;return"".concat(e||g)}),(function(t){var e=t.highlightColor,n=t.color;return"".concat(n||g,", ").concat(e||"#f5f5f5",", ").concat(n||g)})),b=function(t){return React.createElement("div",{className:t.className},React.createElement(m,(0,f.Z)({},t,{className:"altrp-skeleton__span"})))},v=n(76593),y=d.ZP.div(i||(i=(0,h.Z)(["& {\n  position: relative;\n  max-width: 100%;\n  overflow: hidden;\n  width:",";\n","\n\n  background-color: ",";\n}\n&::before{\n  display: block;\n  content: '';\n  width: 100%;\n",";\n}\n&& .altrp-skeleton,\n&& .altrp-image{\n  position:absolute;\n  top:0;\n  left:0;\n  right:0;\n  bottom:0;\n  height:100%;\n  width:100%;\n}\n"])),(function(t){return _.isNumber(t.width)?t.width+"px":t.width?t.width:"100%"}),(function(t){var e=t.settings,n=(0,v.getResponsiveSetting)(e,"aspect_ratio_size");return 0!==Number(n)&&"custom"===n||Number(n)?"height:auto;":t.height&&-1===t.height.indexOf("%")?"height:".concat(t.height?t.height:"auto",";"):"height:auto;"}),(function(t){return t.color?t.color:"#fff"}),(function(t){var e=t.settings,n=t.height,o="",r=(0,v.getResponsiveSetting)(e,"aspect_ratio_size");if(0!==Number(r)){if("custom"===r){var i=(0,v.getResponsiveSetting)(e,"custom_aspect");i=Number(i)||100,o+="padding-top:".concat(i,"%;")}else Number(r)&&(o+="padding-top:".concat(r,"%;"));return o}return n&&_.isString(n)&&-1===n.indexOf("%")||Number(t.mediaWidth)&&Number(t.mediaHeight)&&(o+="padding-top:".concat(t.mediaHeight/t.mediaWidth*100,"%;")),o})),w=n(29459);function O(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(t);e&&(o=o.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,o)}return n}function R(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?O(Object(n),!0).forEach((function(e){(0,a.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):O(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}var k=window.altrpHelpers,P=k.isEditor,S=k.isSSR,Z=k.renderAsset,j=function(t){(0,u.Z)(r,t);var e,n,o=(e=r,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,o=(0,p.Z)(e);if(n){var r=(0,p.Z)(this).constructor;t=Reflect.construct(o,arguments,r)}else t=o.apply(this,arguments);return(0,l.Z)(this,t)});function r(t){var e,n,i;(0,s.Z)(this,r),(i=o.call(this,t)).imageRef=React.createRef();var a=!0;return(!S()||null!==(e=t.element)&&void 0!==e&&e.getResponsiveSetting("lazyload_disable"))&&(P()||!1===t.lazy||!window.altrpImageLazy||"none"===window.altrpImageLazy||!t.element||null!==(n=t.element)&&void 0!==n&&n.getResponsiveSetting("lazyload_disable"))||(a=!1),i.state={visible:a,update:0},i.timeoutId=setTimeout((function(){return i.setState((function(t){return R(R({},t),{},{update:t.update++})}))}),500),i}return(0,c.Z)(r,[{key:"componentWillUnmount",value:function(){clearTimeout(this.timeoutId)}},{key:"componentDidUpdate",value:function(t,e){var n,o,r;if(this.state.visible&&clearTimeout(this.timeoutId),!this.state.visible&&this.imageRef.current&&(null!==(n=this.props)&&void 0!==n&&null!==(o=n.element)&&void 0!==o&&null!==(r=o.getRoot())&&void 0!==r&&r.popupGUID&&this.props.element.getRoot().popupGUID===this.props.popupTrigger.popupID&&this.setState((function(t){return R(R({},t),{},{visible:!0})})),t.scrollPosition!==this.props.scrollPosition||e.update!==this.state.update)){var i=window.mainScrollbars;i||(i=document.querySelector(".front-app-content")),i||(i=document.querySelector(".front-app")),this.imageRef.current&&(0,w.nX)(this.imageRef.current,i)&&(clearTimeout(this.timeoutId),this.setState((function(t){return R(R({},t),{},{visible:!0})})))}}},{key:"render",value:function(){var t,e=R({},this.props.image),n=this.state.visible,o=this.props.noDefault||!1,r={},i=this.props.width,a=this.props.height;if(!S()&&this.props.image instanceof File)e=this.props.image;else if(this.props.default)0===Object.keys(e).length&&(e=this.props.default);else{if(o)return"";e.url=e.url||"/img/nullImage.png",e.name=e.name||"null",e.assetType=e.assetType||void 0}var s=Z(e);(n||"skeleton"===window.altrpImageLazy)&&(r.background="transparent");var c=React.createElement(y,{color:e.main_color,className:"altrp-image-placeholder ",ref:this.imageRef,settings:(null===(t=this.props.element)||void 0===t?void 0:t.getSettings())||{},height:a,width:i,style:r,mediaWidth:e.width||100,mediaHeight:e.height||75},"skeleton"===window.altrpImageLazy&&!n&&React.createElement(b,{className:"altrp-skeleton",color:window.altrpSkeletonColor,highlightColor:window.altrpSkeletonHighlightColor}),n&&React.cloneElement(s,{className:this.props.className,id:this.props.id||null,style:this.props.style}));return React.createElement(React.Fragment,null,c)}}]),r}(Component),N=P()?j:window.reactRedux.connect((function(t){return{scrollPosition:t.scrollPosition,popupTrigger:t.popupTrigger}}))(j)},54534:function(t,e,n){"use strict";n.d(e,{$:function(){return o},z:function(){return r}});var o="TRIGGER_POPUP",r=function(t){return{type:o,payload:t}}}}]);
//# sourceMappingURL=FrontPopup.d4b5c80cd0e30f6101f3.bundle.js.map