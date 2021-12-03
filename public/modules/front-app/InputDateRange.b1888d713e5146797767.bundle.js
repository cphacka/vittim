(self.webpackChunk=self.webpackChunk||[]).push([[3389],{71743:function(e,t,n){"use strict";var r=n(6610),o=n(5991),a=n(83465),i=n.n(a),s=n(29208),l=n.n(s),c=n(31468),p=n.n(c),u=n(38394),d=n.n(u),f=n(96633),h=n.n(f),m=n(99245),g=n.n(m),v=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};(0,r.Z)(this,e),this.data=i()(t)}return(0,o.Z)(e,[{key:"getData",value:function(){var e=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];return e?i()(this.data):this.data}},{key:"isEmpty",value:function(){return g()(this.data)}},{key:"getProperty",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return l()(this.data,e,t)}},{key:"hasProperty",value:function(e){return d()(this.data,e)}},{key:"setProperty",value:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return n instanceof e&&(n=n.getData(!1)),p()(this.data,t,n)}},{key:"unsetProperty",value:function(e){return h()(this.data,e)}}]),e}();window.AltrpModel=v,t.Z=v},31766:function(e,t,n){"use strict";n.r(t);var r=n(96156),o=n(92137),a=n(6610),i=n(5991),s=n(63349),l=n(10379),c=n(46070),p=n(77608),u=n(87757),d=n.n(u),f=n(67294),h=n(5805),m=n(37875),g=n(48379),v=n(76593);function y(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function b(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?y(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):y(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var w=window.altrpHelpers.moment,O=function(e){(0,l.Z)(u,e);var t,n,r=(t=u,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,p.Z)(t);if(n){var o=(0,p.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,c.Z)(this,e)});function u(e){var t;(0,a.Z)(this,u),(t=r.call(this,e)).dispatchFieldValueToStore=function(){var e=(0,o.Z)(d().mark((function e(n,r){var o,a,i,s=arguments;return d().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:o=s.length>2&&void 0!==s[2]&&s[2],0===r?(a=t.props.element.getFormId("form_id_start"),i=t.props.element.getFieldId("field_id_start")):1===r&&(a=t.props.element.getFormId("form_id_end"),i=t.props.element.getFieldId("field_id_end")),-1!==i.indexOf("{{")&&(i=replaceContentWithData(i)),_.isObject(t.props.appStore)&&i&&a&&t.props.appStore.dispatch((0,g.Az)(i,n,a,o));case 4:case"end":return e.stop()}}),e)})));return function(t,n){return e.apply(this,arguments)}}(),t.getValue=function(){var e=t.props.element.getFormId("form_id_start"),n=t.props.element.getFieldId("field_id_start"),r=t.props.element.getFormId("form_id_end"),o=t.props.element.getFieldId("field_id_end");return(0,v.isEditor)()?t.state.value:[_.get(appStore.getState().formsStore,"".concat(e),"")[n]||null,_.get(appStore.getState().formsStore,"".concat(r),"")[o]||null]};var n=e.element.getSettings();switch(t.state={settings:n,value:[null,null]},e.element.component=(0,s.Z)(t),window.elementDecorator&&window.elementDecorator((0,s.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,s.Z)(t))),t.locale=t.props.element.getSettings("content_locale","en"),t.typeDate){case"date":t.typeDate="LL";break;case"time":t.typeDate="LT",t.timePrecision=h.O.MINUTE;break;case"dateTime":t.typeDate="llll",t.timePrecision=h.O.MINUTE}return t.handleChange=t.handleChange.bind((0,s.Z)(t)),t}return(0,i.Z)(u,[{key:"handleChange",value:function(e){(0,v.isEditor)()?this.setState((function(t){return b(b({},t),{},{value:e})})):(this.dispatchFieldValueToStore(e[0],0,!0),this.dispatchFieldValueToStore(e[1],1,!0))}},{key:"render",value:function(){var e=this,t=this.props.element.getSettings("content_format")||"YYYY-MM-DD",n={},r=this.getValue(),o=this.locale||"ru";switch(o){case"ru":n.months=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],n.weekdaysShort=["Вс","Пн","Вт","Ср","Чт","Пт","Сб"]}var a=document.body;return(0,v.isEditor)()&&(a=document.getElementById("editorContent").contentWindow.document.body),f.createElement(m.b,{formatDate:function(e){return w(e).locale(o).format(t)},parseDate:function(t){return w(t,e.typeDate).locale(o).toDate()},onChange:this.handleChange,dayPickerProps:n,value:r,startInputProps:{placeholder:this.props.element.getResponsiveSetting("start_placeholder","","start date")},endInputProps:{placeholder:this.props.element.getResponsiveSetting("end_placeholder","","end date")},popoverProps:{usePortal:!0,popoverClassName:"altrp-portal"+this.props.element.getId(),portalContainer:a}})}}]),u}(Component);t.default=O}}]);
//# sourceMappingURL=InputDateRange.b1888d713e5146797767.bundle.js.map