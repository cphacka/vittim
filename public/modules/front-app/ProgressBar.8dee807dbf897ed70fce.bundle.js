(self.webpackChunk=self.webpackChunk||[]).push([[2334],{63349:function(t,e,n){"use strict";function r(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}n.d(e,{Z:function(){return r}})},77608:function(t,e,n){"use strict";function r(t){return(r=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}n.d(e,{Z:function(){return r}})},10379:function(t,e,n){"use strict";n.d(e,{Z:function(){return o}});var r=n(14665);function o(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&(0,r.Z)(t,e)}},46070:function(t,e,n){"use strict";n.d(e,{Z:function(){return u}});var r=n(90484),o=n(63349);function u(t,e){return!e||"object"!==(0,r.Z)(e)&&"function"!=typeof e?(0,o.Z)(t):e}},14665:function(t,e,n){"use strict";function r(t,e){return(r=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}n.d(e,{Z:function(){return r}})},90484:function(t,e,n){"use strict";function r(t){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}n.d(e,{Z:function(){return r}})},7092:function(t,e,n){"use strict";n.r(e);var r=n(22122),o=n(6610),u=n(5991),i=n(63349),c=n(10379),s=n(46070),f=n(77608),a=n(67294);var l=window.altrpLibs.Blueprint.ProgressBar,p=function(t){(0,c.Z)(y,t);var e,n,p=(e=y,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,r=(0,f.Z)(e);if(n){var o=(0,f.Z)(this).constructor;t=Reflect.construct(r,arguments,o)}else t=r.apply(this,arguments);return(0,s.Z)(this,t)});function y(t){var e;return(0,o.Z)(this,y),(e=p.call(this,t)).state={settings:t.element.getSettings()},t.element.component=(0,i.Z)(e),window.elementDecorator&&window.elementDecorator((0,i.Z)(e)),t.baseRender&&(e.render=t.baseRender((0,i.Z)(e))),e}return(0,u.Z)(y,[{key:"render",value:function(){var t=this.props.element.getContent("value")||"100";isNaN(t)||(t=.01*parseInt(t));var e={stripes:this.props.element.getResponsiveSetting("stripes","",!0),animate:this.props.element.getResponsiveSetting("animate","",!0)};return a.createElement(l,(0,r.Z)({},e,{value:_.isString(t)?100:t}))}}]),y}(Component);e.default=p}}]);
//# sourceMappingURL=ProgressBar.8dee807dbf897ed70fce.bundle.js.map