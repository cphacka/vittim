(self.webpackChunk=self.webpackChunk||[]).push([[9515],{41788:function(e,t,r){"use strict";r.d(t,{Z:function(){return a}});var n=r(14665);function a(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,(0,n.Z)(e,t)}},81253:function(e,t,r){"use strict";r.d(t,{Z:function(){return a}});var n=r(19756);function a(e,t){if(null==e)return{};var r,a,o=(0,n.Z)(e,t);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(e);for(a=0;a<c.length;a++)r=c[a],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}},14665:function(e,t,r){"use strict";function n(e,t){return(n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}r.d(t,{Z:function(){return n}})},81352:function(e,t,r){"use strict";r.r(t),r.d(t,{TemplateLoader:function(){return p}});var n=r(92137),a=r(6610),o=r(5991),c=r(87757),s=r.n(c),i=r(38773),u=r(71743),l=r(85009),p=function(){function e(){(0,a.Z)(this,e),this.resource=new i.Z({route:"/ajax/templates"}),this.templatesCache=new u.Z(_.get(window.__altrp_settings__,"templates_data",{}))}var t,r;return(0,o.Z)(e,[{key:"loadTemplate",value:(r=(0,n.Z)(s().mark((function t(r){var n,a,o,c=arguments;return s().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(n=c.length>1&&void 0!==c[1]&&c[1],a=n,r=Number(r)?Number(r):r,a||(a=!this.templatesCache.hasProperty(r)),"loading"!==_.get(e,"statuses.".concat(r))){t.next=6;break}return t.abrupt("return",new Promise((function(t,n){e.pendingCallbacks[r]=e.pendingCallbacks[r]||[],e.pendingCallbacks[r].push(t)})));case 6:if(e.statuses[r]="loading",t.prev=7,o=null,!a){t.next=16;break}return t.next=12,this.resource.get(r);case 12:o=t.sent,this.templatesCache.setProperty(r,o),t.next=17;break;case 16:o=this.templatesCache.getProperty(r);case 17:return _.isArray(e.pendingCallbacks[r])&&e.pendingCallbacks[r].forEach((function(e){e(o)})),e.statuses[r]="loaded",e.pendingCallbacks[r]=[],t.abrupt("return",o);case 23:return t.prev=23,t.t0=t.catch(7),_.isArray(e.pendingCallbacks[r])&&e.pendingCallbacks[r].forEach((function(e){e(null)})),e.statuses[r]="loaded",e.pendingCallbacks[r]=[],t.abrupt("return",null);case 29:case"end":return t.stop()}}),t,this,[[7,23]])}))),function(e){return r.apply(this,arguments)})},{key:"loadParsedTemplate",value:(t=(0,n.Z)(s().mark((function e(t){var r,n,a=arguments;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(r=a.length>1&&void 0!==a[1]&&a[1],t){e.next=3;break}return e.abrupt("return",null);case 3:return t=Number(t)?Number(t):t,e.t0=_,e.next=7,this.loadTemplate(t,r);case 7:return e.t1=e.sent,n=e.t0.get.call(e.t0,e.t1,"data"),n=JSON.parse(n),e.abrupt("return",l.default.parseData(n));case 11:case"end":return e.stop()}}),e,this)}))),function(e){return t.apply(this,arguments)})},{key:"mbGetParsedTemplate",value:function(e){if(!this.templatesCache.hasProperty(e))return null;var t=_.get(this.templatesCache.getProperty(e),"data");return t=JSON.parse(t),l.default.parseData(t)}}]),e}();p.statuses={},p.pendingCallbacks={},window.templateLoader=new p,t.default=window.templateLoader},55022:function(e,t,r){"use strict";r.r(t),r.d(t,{default:function(){return b}});var n=r(6610),a=r(5991),o=r(63349),c=r(10379),s=r(46070),i=r(77608),u=r(96156),l=r(92137),p=r(87757),f=r.n(p),d=(r(81352),r(89878)),m=r(85009);function y(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function h(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?y(Object(r),!0).forEach((function(t){(0,u.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):y(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var g=function(e){(0,c.Z)(p,e);var t,r,o,u=(r=p,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=(0,i.Z)(r);if(o){var n=(0,i.Z)(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return(0,s.Z)(this,e)});function p(e){var t;(0,n.Z)(this,p),t=u.call(this,e);var r=window.templateLoader.mbGetParsedTemplate(t.props.settings.template);return r&&(r=m.default.cloneElement(r)),t.state={template:r,templateGUID:t.props.settings.template},t.template=r,t}return(0,a.Z)(p,[{key:"componentDidMount",value:function(){this.updateTemplate()}},{key:"componentDidUpdate",value:function(){this.updateTemplate()}},{key:"updateTemplate",value:(t=(0,l.Z)(f().mark((function e(){var t,r;return f().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if((t=this.props.settings.template)===this.state.templateGUID&&(this.state.template||this.loading)){e.next=13;break}if(t){e.next=6;break}return e.abrupt("return");case 6:return this.loading=!0,e.next=9,window.templateLoader.loadParsedTemplate(t);case 9:r=e.sent,this.loading=!1,this.template=null;case 12:this.setState((function(e){return h(h({},e),{},{template:r,templateGUID:t})}));case 13:case"end":return e.stop()}}),e,this)}))),function(){return t.apply(this,arguments)})},{key:"render",value:function(){if(!this.props.settings.template)return null;if(_.get(this.state,"template.componentClass")){var e=this.template||m.default.cloneElement(this.state.template);return this.template=e,React.createElement("div",{className:"altrp-posts"},React.createElement("div",{className:"altrp-post"},React.createElement(e.componentClass,{element:e,ElementWrapper:d.default,children:e.children})))}return null}}]),p}(Component);var b=function(e){(0,c.Z)(l,e);var t,r,u=(t=l,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,n=(0,i.Z)(t);if(r){var a=(0,i.Z)(this).constructor;e=Reflect.construct(n,arguments,a)}else e=n.apply(this,arguments);return(0,s.Z)(this,e)});function l(e){var t;return(0,n.Z)(this,l),(t=u.call(this,e)).state={templateGUID:t.props.element.getSettings("template")},window.elementDecorator&&window.elementDecorator((0,o.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,o.Z)(t))),t}return(0,a.Z)(l,[{key:"render",value:function(){return React.createElement(g,{settings:this.props.element.getSettings()||{}})}}]),l}(Component)},85009:function(e,t,r){"use strict";r.r(t);var n=r(96156),a=r(6610),o=r(5991),c=r(67576);function s(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function i(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?s(Object(r),!0).forEach((function(t){(0,n.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):s(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function u(e,t){var r="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!r){if(Array.isArray(e)||(r=function(e,t){if(e){if("string"==typeof e)return l(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?l(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,a=function(){};return{s:a,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,c=!0,s=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return c=e.done,e},e:function(e){s=!0,o=e},f:function(){try{c||null==r.return||r.return()}finally{if(s)throw o}}}}function l(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var p=function(){function e(){(0,a.Z)(this,e)}return(0,o.Z)(e,[{key:"parseData",value:function(e,t,r,n){var a=[],o=new c.default(e);if(r&&o.addModelInfo({modelName:"page",modelId:r}),_.isArray(n)){var s,l=u(n);try{for(l.s();!(s=l.n()).done;){var p=s.value;o.addModelInfo(i({},p))}}catch(e){l.e(e)}finally{l.f()}}if(e.children&&e.children.length){var f,d=u(e.children);try{for(d.s();!(f=d.n()).done;){var m=f.value;window.frontElementsManager.checkElementExists(m.name)&&a.push(this.parseData(m,o))}}catch(e){d.e(e)}finally{d.f()}}return o.id=e.id,o.lastElement=e.lastElement,o.children=a,o.settings=e.settings,o.name=e.name,o.type=e.type,o.dynamicContentSettings=e.dynamicContentSettings,t&&o.setParent(t),o.update(),o}},{key:"cloneElement",value:function(e){if(!e)return null;var t=_.cloneDeep(e);return delete t.idForAction,this.updateParents(t),t}},{key:"updateParents",value:function(e){var t=this;_.isArray(e.children)&&e.children.forEach((function(r){r.setParent(e),t.updateParents(r)}))}}]),e}();window.frontElementsFabric=new p,t.default=window.frontElementsFabric},44020:function(e){"use strict";var t="%[a-f0-9]{2}",r=new RegExp(t,"gi"),n=new RegExp("("+t+")+","gi");function a(e,t){try{return decodeURIComponent(e.join(""))}catch(e){}if(1===e.length)return e;t=t||1;var r=e.slice(0,t),n=e.slice(t);return Array.prototype.concat.call([],a(r),a(n))}function o(e){try{return decodeURIComponent(e)}catch(o){for(var t=e.match(r),n=1;n<t.length;n++)t=(e=a(t,n).join("")).match(r);return e}}e.exports=function(e){if("string"!=typeof e)throw new TypeError("Expected `encodedURI` to be of type `string`, got `"+typeof e+"`");try{return e=e.replace(/\+/g," "),decodeURIComponent(e)}catch(t){return function(e){for(var t={"%FE%FF":"��","%FF%FE":"��"},r=n.exec(e);r;){try{t[r[0]]=decodeURIComponent(r[0])}catch(e){var a=o(r[0]);a!==r[0]&&(t[r[0]]=a)}r=n.exec(e)}t["%C2"]="�";for(var c=Object.keys(t),s=0;s<c.length;s++){var i=c[s];e=e.replace(new RegExp(i,"g"),t[i])}return e}(e)}}},92806:function(e){"use strict";e.exports=function(e,t){for(var r={},n=Object.keys(e),a=Array.isArray(t),o=0;o<n.length;o++){var c=n[o],s=e[c];(a?-1!==t.indexOf(c):t(c,s,e))&&(r[c]=s)}return r}},17563:function(e,t,r){"use strict";const n=r(70610),a=r(44020),o=r(80500),c=r(92806);function s(e){if("string"!=typeof e||1!==e.length)throw new TypeError("arrayFormatSeparator must be single character string")}function i(e,t){return t.encode?t.strict?n(e):encodeURIComponent(e):e}function u(e,t){return t.decode?a(e):e}function l(e){return Array.isArray(e)?e.sort():"object"==typeof e?l(Object.keys(e)).sort(((e,t)=>Number(e)-Number(t))).map((t=>e[t])):e}function p(e){const t=e.indexOf("#");return-1!==t&&(e=e.slice(0,t)),e}function f(e){const t=(e=p(e)).indexOf("?");return-1===t?"":e.slice(t+1)}function d(e,t){return t.parseNumbers&&!Number.isNaN(Number(e))&&"string"==typeof e&&""!==e.trim()?e=Number(e):!t.parseBooleans||null===e||"true"!==e.toLowerCase()&&"false"!==e.toLowerCase()||(e="true"===e.toLowerCase()),e}function m(e,t){s((t=Object.assign({decode:!0,sort:!0,arrayFormat:"none",arrayFormatSeparator:",",parseNumbers:!1,parseBooleans:!1},t)).arrayFormatSeparator);const r=function(e){let t;switch(e.arrayFormat){case"index":return(e,r,n)=>{t=/\[(\d*)\]$/.exec(e),e=e.replace(/\[\d*\]$/,""),t?(void 0===n[e]&&(n[e]={}),n[e][t[1]]=r):n[e]=r};case"bracket":return(e,r,n)=>{t=/(\[\])$/.exec(e),e=e.replace(/\[\]$/,""),t?void 0!==n[e]?n[e]=[].concat(n[e],r):n[e]=[r]:n[e]=r};case"comma":case"separator":return(t,r,n)=>{const a="string"==typeof r&&r.includes(e.arrayFormatSeparator),o="string"==typeof r&&!a&&u(r,e).includes(e.arrayFormatSeparator);r=o?u(r,e):r;const c=a||o?r.split(e.arrayFormatSeparator).map((t=>u(t,e))):null===r?r:u(r,e);n[t]=c};default:return(e,t,r)=>{void 0!==r[e]?r[e]=[].concat(r[e],t):r[e]=t}}}(t),n=Object.create(null);if("string"!=typeof e)return n;if(!(e=e.trim().replace(/^[?#&]/,"")))return n;for(const a of e.split("&")){if(""===a)continue;let[e,c]=o(t.decode?a.replace(/\+/g," "):a,"=");c=void 0===c?null:["comma","separator"].includes(t.arrayFormat)?c:u(c,t),r(u(e,t),c,n)}for(const e of Object.keys(n)){const r=n[e];if("object"==typeof r&&null!==r)for(const e of Object.keys(r))r[e]=d(r[e],t);else n[e]=d(r,t)}return!1===t.sort?n:(!0===t.sort?Object.keys(n).sort():Object.keys(n).sort(t.sort)).reduce(((e,t)=>{const r=n[t];return Boolean(r)&&"object"==typeof r&&!Array.isArray(r)?e[t]=l(r):e[t]=r,e}),Object.create(null))}t.extract=f,t.parse=m,t.stringify=(e,t)=>{if(!e)return"";s((t=Object.assign({encode:!0,strict:!0,arrayFormat:"none",arrayFormatSeparator:","},t)).arrayFormatSeparator);const r=r=>t.skipNull&&null==e[r]||t.skipEmptyString&&""===e[r],n=function(e){switch(e.arrayFormat){case"index":return t=>(r,n)=>{const a=r.length;return void 0===n||e.skipNull&&null===n||e.skipEmptyString&&""===n?r:null===n?[...r,[i(t,e),"[",a,"]"].join("")]:[...r,[i(t,e),"[",i(a,e),"]=",i(n,e)].join("")]};case"bracket":return t=>(r,n)=>void 0===n||e.skipNull&&null===n||e.skipEmptyString&&""===n?r:null===n?[...r,[i(t,e),"[]"].join("")]:[...r,[i(t,e),"[]=",i(n,e)].join("")];case"comma":case"separator":return t=>(r,n)=>null==n||0===n.length?r:0===r.length?[[i(t,e),"=",i(n,e)].join("")]:[[r,i(n,e)].join(e.arrayFormatSeparator)];default:return t=>(r,n)=>void 0===n||e.skipNull&&null===n||e.skipEmptyString&&""===n?r:null===n?[...r,i(t,e)]:[...r,[i(t,e),"=",i(n,e)].join("")]}}(t),a={};for(const t of Object.keys(e))r(t)||(a[t]=e[t]);const o=Object.keys(a);return!1!==t.sort&&o.sort(t.sort),o.map((r=>{const a=e[r];return void 0===a?"":null===a?i(r,t):Array.isArray(a)?a.reduce(n(r),[]).join("&"):i(r,t)+"="+i(a,t)})).filter((e=>e.length>0)).join("&")},t.parseUrl=(e,t)=>{t=Object.assign({decode:!0},t);const[r,n]=o(e,"#");return Object.assign({url:r.split("?")[0]||"",query:m(f(e),t)},t&&t.parseFragmentIdentifier&&n?{fragmentIdentifier:u(n,t)}:{})},t.stringifyUrl=(e,r)=>{r=Object.assign({encode:!0,strict:!0},r);const n=p(e.url).split("?")[0]||"",a=t.extract(e.url),o=t.parse(a,{sort:!1}),c=Object.assign(o,e.query);let s=t.stringify(c,r);s&&(s=`?${s}`);let u=function(e){let t="";const r=e.indexOf("#");return-1!==r&&(t=e.slice(r)),t}(e.url);return e.fragmentIdentifier&&(u=`#${i(e.fragmentIdentifier,r)}`),`${n}${s}${u}`},t.pick=(e,r,n)=>{n=Object.assign({parseFragmentIdentifier:!0},n);const{url:a,query:o,fragmentIdentifier:s}=t.parseUrl(e,n);return t.stringifyUrl({url:a,query:c(o,r),fragmentIdentifier:s},n)},t.exclude=(e,r,n)=>{const a=Array.isArray(r)?e=>!r.includes(e):(e,t)=>!r(e,t);return t.pick(e,a,n)}},80500:function(e){"use strict";e.exports=(e,t)=>{if("string"!=typeof e||"string"!=typeof t)throw new TypeError("Expected the arguments to be of type `string`");if(""===t)return[e];const r=e.indexOf(t);return-1===r?[e]:[e.slice(0,r),e.slice(r+t.length)]}},70610:function(e){"use strict";e.exports=e=>encodeURIComponent(e).replace(/[!'()*]/g,(e=>`%${e.charCodeAt(0).toString(16).toUpperCase()}`))}}]);
//# sourceMappingURL=TemplateWidget.ea24214398725aade743.bundle.js.map