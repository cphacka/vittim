(self.webpackChunk=self.webpackChunk||[]).push([[9086],{71743:function(e,t,n){"use strict";var r=n(6610),o=n(5991),a=n(83465),l=n.n(a),c=n(29208),i=n.n(c),s=n(31468),u=n.n(s),p=n(38394),d=n.n(p),h=n(96633),m=n.n(h),f=n(99245),v=n.n(f),g=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};(0,r.Z)(this,e),this.data=l()(t)}return(0,o.Z)(e,[{key:"getData",value:function(){var e=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];return e?l()(this.data):this.data}},{key:"isEmpty",value:function(){return v()(this.data)}},{key:"getProperty",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return i()(this.data,e,t)}},{key:"hasProperty",value:function(e){return d()(this.data,e)}},{key:"setProperty",value:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return n instanceof e&&(n=n.getData(!1)),u()(this.data,t,n)}},{key:"unsetProperty",value:function(e){return m()(this.data,e)}}]),e}();window.AltrpModel=g,t.Z=g},299:function(e,t,n){"use strict";n.r(t);var r,o=n(6610),a=n(5991),l=n(63349),c=n(10379),i=n(46070),s=n(77608),u=n(32465),p=n(32360);var d=window.altrpHelpers,h=d.getBreadcrumbsItems,m=d.getResponsiveSetting,f=d.isEditor,v=d.replaceContentWithData,g=window.altrpLibs.Blueprint.Breadcrumbs,y=createGlobalStyle(r||(r=(0,u.Z)(["\n  ","\n"])),(function(e){var t=e.elementId,n=e.settings,r=".altrp-portal.altrp-portal".concat(t,"{");r+=".bp3-menu-item:not(.bp3-disabled){";var o=m(n,"color");o&&o.color&&(r+="color:".concat(o.color,";"));var a=m(n,"font");a&&(r+=(0,p.typographicControllerToStyles)(a)),r+="}",r+=".bp3-menu-item:not(.bp3-disabled):hover{",(o=m(n,"color",":hover"))&&o.color&&(r+="color:".concat(o.color,";")),(a=m(n,"font",":hover"))&&(r+=(0,p.typographicControllerToStyles)(a)),r+="}",r+=".bp3-menu-item.bp3-disabled{";var l=m(n,"current_color");l&&l.color&&(r+="color:".concat(l.color,";"));var c=m(n,"current_font");return c&&(r+=(0,p.typographicControllerToStyles)(c)),(r+="}")+"}"})),b=function(e){(0,c.Z)(u,e);var t,n,r=(t=u,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,s.Z)(t);if(n){var o=(0,s.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,i.Z)(this,e)});function u(e){var t;return(0,o.Z)(this,u),(t=r.call(this,e)).state={settings:e.element.getSettings(),pending:!1},t.element=e.element,t.elementId=e.element.getId(),e.element.component=(0,l.Z)(t),window.elementDecorator&&window.elementDecorator((0,l.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,l.Z)(t))),t}return(0,a.Z)(u,[{key:"getBreadcrumbsItems",value:function(){var e=this,t=[];return t=f()?[{href:"#",icon:"folder-close",text:"Main"},{href:"#",icon:"derive-column",text:"Second Item"},{icon:"endorsed",text:"Last Item"}]:(t=h()).map((function(n,r){var o={text:v(n.title,e.props.element.getCurrentModel())};return n.icon&&(o.icon=React.createElement("span",{className:"altrp-menu-item__icon bp3-icon",dangerouslySetInnerHTML:{__html:n.icon}})),r+1<t.length&&(o.href=n.path,o.onClick=function(t){var r;t.preventDefault(),!f()&&e.props.history?null===(r=window.altrpHistory)||void 0===r||r.push(n.path):window.location.href=n.path}),o}))}},{key:"render",value:function(){var e={items:this.getBreadcrumbsItems(),collapseFrom:this.element.getResponsiveSetting("collapse")||"start",popoverProps:{portalClassName:"altrp-portal altrp-portal".concat(this.elementId)}};return React.createElement(React.Fragment,null,React.createElement(y,{settings:this.element.getSettings(),elementId:this.elementId}),React.createElement(g,e))}}]),u}(Component);t.default=b}}]);
//# sourceMappingURL=BreadcrumbsWidget.37074823bb79eb220a40.bundle.js.map