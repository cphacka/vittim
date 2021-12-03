/*! For license information please see 5820.e68c00f1b69baa210f36.bundle.js.LICENSE.txt */
(self.webpackChunk=self.webpackChunk||[]).push([[5820],{75346:function(t){function i(t,i){if(!(t instanceof i))throw new TypeError("Cannot call a class as a function")}function e(t,i){for(var e=0;e<i.length;e++){var s=i[e];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}var s;s=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",s=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};i(this,t),this.selector=e,this.elements=[],this.version="1.3.0",this.vp=this.getViewportSize(),this.body=document.querySelector("body"),this.options={wrap:s.wrap||!1,wrapWith:s.wrapWith||"<span></span>",marginTop:s.marginTop||0,marginBottom:s.marginBottom||0,stickyFor:s.stickyFor||0,stickyClass:s.stickyClass||null,stickyContainer:s.stickyContainer||"body"},this.updateScrollTopPosition=this.updateScrollTopPosition.bind(this),this.updateScrollTopPosition(),window.addEventListener("load",this.updateScrollTopPosition),window.addEventListener("scroll",this.updateScrollTopPosition),this.run()}var s,c;return s=t,(c=[{key:"run",value:function(){var t=this,i=setInterval((function(){if("complete"===document.readyState){clearInterval(i);var e=document.querySelectorAll(t.selector);t.forEach(e,(function(i){return t.renderElement(i)}))}}),10)}},{key:"renderElement",value:function(t){var i=this;t.sticky={},t.sticky.active=!1,t.sticky.marginTop=parseInt(t.getAttribute("data-margin-top"))||this.options.marginTop,t.sticky.marginBottom=parseInt(t.getAttribute("data-margin-bottom"))||this.options.marginBottom,t.sticky.stickyFor=parseInt(t.getAttribute("data-sticky-for"))||this.options.stickyFor,t.sticky.stickyClass=t.getAttribute("data-sticky-class")||this.options.stickyClass,t.sticky.wrap=!!t.hasAttribute("data-sticky-wrap")||this.options.wrap,t.sticky.stickyContainer=this.options.stickyContainer,t.sticky.container=this.getStickyContainer(t),t.sticky.container.rect=this.getRectangle(t.sticky.container),t.sticky.rect=this.getRectangle(t),"img"===t.tagName.toLowerCase()&&(t.onload=function(){return t.sticky.rect=i.getRectangle(t)}),t.sticky.wrap&&this.wrapElement(t),this.activate(t)}},{key:"wrapElement",value:function(t){t.insertAdjacentHTML("beforebegin",t.getAttribute("data-sticky-wrapWith")||this.options.wrapWith),t.previousSibling.appendChild(t)}},{key:"activate",value:function(t){t.sticky.rect.top+t.sticky.rect.height<t.sticky.container.rect.top+t.sticky.container.rect.height&&t.sticky.stickyFor<this.vp.width&&!t.sticky.active&&(t.sticky.active=!0),this.elements.indexOf(t)<0&&this.elements.push(t),t.sticky.resizeEvent||(this.initResizeEvents(t),t.sticky.resizeEvent=!0),t.sticky.scrollEvent||(this.initScrollEvents(t),t.sticky.scrollEvent=!0),this.setPosition(t)}},{key:"initResizeEvents",value:function(t){var i=this;t.sticky.resizeListener=function(){return i.onResizeEvents(t)},window.addEventListener("resize",t.sticky.resizeListener)}},{key:"destroyResizeEvents",value:function(t){window.removeEventListener("resize",t.sticky.resizeListener)}},{key:"onResizeEvents",value:function(t){this.vp=this.getViewportSize(),t.sticky.rect=this.getRectangle(t),t.sticky.container.rect=this.getRectangle(t.sticky.container),t.sticky.rect.top+t.sticky.rect.height<t.sticky.container.rect.top+t.sticky.container.rect.height&&t.sticky.stickyFor<this.vp.width&&!t.sticky.active?t.sticky.active=!0:(t.sticky.rect.top+t.sticky.rect.height>=t.sticky.container.rect.top+t.sticky.container.rect.height||t.sticky.stickyFor>=this.vp.width&&t.sticky.active)&&(t.sticky.active=!1),this.setPosition(t)}},{key:"initScrollEvents",value:function(t){var i=this;t.sticky.scrollListener=function(){return i.onScrollEvents(t)},window.addEventListener("scroll",t.sticky.scrollListener)}},{key:"destroyScrollEvents",value:function(t){window.removeEventListener("scroll",t.sticky.scrollListener)}},{key:"onScrollEvents",value:function(t){t.sticky&&t.sticky.active&&this.setPosition(t)}},{key:"setPosition",value:function(t){this.css(t,{position:"",width:"",top:"",left:""}),this.vp.height<t.sticky.rect.height||!t.sticky.active||(t.sticky.rect.width||(t.sticky.rect=this.getRectangle(t)),t.sticky.wrap&&this.css(t.parentNode,{display:"block",width:t.sticky.rect.width+"px",height:t.sticky.rect.height+"px"}),0===t.sticky.rect.top&&t.sticky.container===this.body?(this.css(t,{position:"fixed",top:t.sticky.rect.top+"px",left:t.sticky.rect.left+"px",width:t.sticky.rect.width+"px"}),t.sticky.stickyClass&&t.classList.add(t.sticky.stickyClass)):this.scrollTop>t.sticky.rect.top-t.sticky.marginTop?(this.css(t,{position:"fixed",width:t.sticky.rect.width+"px",left:t.sticky.rect.left+"px"}),this.scrollTop+t.sticky.rect.height+t.sticky.marginTop>t.sticky.container.rect.top+t.sticky.container.offsetHeight-t.sticky.marginBottom?(t.sticky.stickyClass&&t.classList.remove(t.sticky.stickyClass),this.css(t,{top:t.sticky.container.rect.top+t.sticky.container.offsetHeight-(this.scrollTop+t.sticky.rect.height+t.sticky.marginBottom)+"px"})):(t.sticky.stickyClass&&t.classList.add(t.sticky.stickyClass),this.css(t,{top:t.sticky.marginTop+"px"}))):(t.sticky.stickyClass&&t.classList.remove(t.sticky.stickyClass),this.css(t,{position:"",width:"",top:"",left:""}),t.sticky.wrap&&this.css(t.parentNode,{display:"",width:"",height:""})))}},{key:"update",value:function(){var t=this;this.forEach(this.elements,(function(i){i.sticky.rect=t.getRectangle(i),i.sticky.container.rect=t.getRectangle(i.sticky.container),t.activate(i),t.setPosition(i)}))}},{key:"destroy",value:function(){var t=this;window.removeEventListener("load",this.updateScrollTopPosition),window.removeEventListener("scroll",this.updateScrollTopPosition),this.forEach(this.elements,(function(i){t.destroyResizeEvents(i),t.destroyScrollEvents(i),delete i.sticky}))}},{key:"getStickyContainer",value:function(t){for(var i=t.parentNode;!i.hasAttribute("data-sticky-container")&&!i.parentNode.querySelector(t.sticky.stickyContainer)&&i!==this.body;)i=i.parentNode;return i}},{key:"getRectangle",value:function(t){this.css(t,{position:"",width:"",top:"",left:""});var i=Math.max(t.offsetWidth,t.clientWidth,t.scrollWidth),e=Math.max(t.offsetHeight,t.clientHeight,t.scrollHeight),s=0,c=0;do{s+=t.offsetTop||0,c+=t.offsetLeft||0,t=t.offsetParent}while(t);return{top:s,left:c,width:i,height:e}}},{key:"getViewportSize",value:function(){return{width:Math.max(document.documentElement.clientWidth,window.innerWidth||0),height:Math.max(document.documentElement.clientHeight,window.innerHeight||0)}}},{key:"updateScrollTopPosition",value:function(){this.scrollTop=(window.pageYOffset||document.scrollTop)-(document.clientTop||0)||0}},{key:"forEach",value:function(t,i){for(var e=0,s=t.length;e<s;e++)i(t[e])}},{key:"css",value:function(t,i){for(var e in i)i.hasOwnProperty(e)&&(t.style[e]=i[e])}}])&&e(s.prototype,c),t}(),t.exports=s},75820:function(t,i,e){var s=e(75346);t.exports=s}}]);
//# sourceMappingURL=5820.e68c00f1b69baa210f36.bundle.js.map