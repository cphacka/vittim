(self.webpackChunk=self.webpackChunk||[]).push([[2288],{50676:function(e,t,r){"use strict";function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}r.d(t,{Z:function(){return n}})},63349:function(e,t,r){"use strict";function n(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}r.d(t,{Z:function(){return n}})},96156:function(e,t,r){"use strict";function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,{Z:function(){return n}})},77608:function(e,t,r){"use strict";function n(e){return(n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}r.d(t,{Z:function(){return n}})},10379:function(e,t,r){"use strict";r.d(t,{Z:function(){return a}});var n=r(14665);function a(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&(0,n.Z)(e,t)}},96410:function(e,t,r){"use strict";function n(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}r.d(t,{Z:function(){return n}})},46070:function(e,t,r){"use strict";r.d(t,{Z:function(){return o}});var n=r(90484),a=r(63349);function o(e,t){return!t||"object"!==(0,n.Z)(t)&&"function"!=typeof t?(0,a.Z)(e):t}},14665:function(e,t,r){"use strict";function n(e,t){return(n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}r.d(t,{Z:function(){return n}})},32465:function(e,t,r){"use strict";function n(e,t){return t||(t=e.slice(0)),Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(t)}}))}r.d(t,{Z:function(){return n}})},85061:function(e,t,r){"use strict";r.d(t,{Z:function(){return s}});var n=r(50676),a=r(96410),o=r(82961);function s(e){return function(e){if(Array.isArray(e))return(0,n.Z)(e)}(e)||(0,a.Z)(e)||(0,o.Z)(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},90484:function(e,t,r){"use strict";function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}r.d(t,{Z:function(){return n}})},82961:function(e,t,r){"use strict";r.d(t,{Z:function(){return a}});var n=r(50676);function a(e,t){if(e){if("string"==typeof e)return(0,n.Z)(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?(0,n.Z)(e,t):void 0}}},30411:function(__unused_webpack_module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_11__=__webpack_require__(85061),_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__(92137),_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(96156),_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(6610),_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_10__=__webpack_require__(5991),_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__(63349),_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(10379),_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(46070),_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(77608),_babel_runtime_helpers_taggedTemplateLiteral__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(32465),_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(87757),_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default=__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__),_front_app_src_js_store_forms_data_storage_actions__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__(48379),_templateObject;function ownKeys(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ownKeys(Object(r),!0).forEach((function(t){(0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1__.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ownKeys(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function _createSuper(e){var t=_isNativeReflectConstruct();return function(){var r,n=(0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__.Z)(e);if(t){var a=(0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__.Z)(this).constructor;r=Reflect.construct(n,arguments,a)}else r=n.apply(this,arguments);return(0,_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_3__.Z)(this,r)}}function _isNativeReflectConstruct(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}var _window$altrpHelpers=window.altrpHelpers,isEditor=_window$altrpHelpers.isEditor,parseOptionsFromSettings=_window$altrpHelpers.parseOptionsFromSettings,replaceContentWithData=_window$altrpHelpers.replaceContentWithData,renderAssetIcon=_window$altrpHelpers.renderAssetIcon,moment=_window$altrpHelpers.moment,getDataFromLocalStorage=_window$altrpHelpers.getDataFromLocalStorage,_window$altrpLibs$Blu=window.altrpLibs.BlueprintDatetime,DateInput=_window$altrpLibs$Blu.DateInput,TimePrecision=_window$altrpLibs$Blu.TimePrecision;(window.globalDefaults=window.globalDefaults||[]).push("\n  .altrp-date-field-container .bp3-popover-wrapper, .altrp-date-field-container .bp3-popover-target {\n    width: 100%;\n  }\n\n  .altrp-date-picker-popover .bp3-datepicker-caption select + .bp3-icon {\n    right: 2px !important;\n  }\n\n  .altrp-date-picker-popover .bp3-datepicker-year-select select {\n    padding: 0 0 0 2px;\n  }\n");var AltrpFieldContainer=styled.div(_templateObject||(_templateObject=(0,_babel_runtime_helpers_taggedTemplateLiteral__WEBPACK_IMPORTED_MODULE_4__.Z)(["\n  ","\n"])),(function(e){switch(e.settings.content_label_position_type){case"left":return"display: flex";case"right":return"display:flex;flex-direction:row-reverse;justify-content:flex-end;"}return""})),InputDateWidget=function(_Component){(0,_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5__.Z)(InputDateWidget,_Component);var _super=_createSuper(InputDateWidget),_updateOptions,_componentDidUpdate2,_componentDidMount2;function InputDateWidget(e){var t;switch((0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.Z)(this,InputDateWidget),(t=_super.call(this,e)).timeInput=null,t.onChange=function(e,r){var n="";if(e)if(n=new Date(e),t.props.element.getSettings("content_timestamp"))n=n.getTime();else{var a=t.props.element.getSettings("content_format")||"YYYY-MM-DD";n=(n=moment(n,a)).isValid()?n.format(a):""}t.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n})})),t.dispatchFieldValueToStore(n,r)},t.dispatchFieldValueToStore=function(){var e=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_7__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark((function e(r){var n,a,o,s,i,p=arguments;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(n=p.length>1&&void 0!==p[1]&&p[1],a=t.props.element.getFormId(),-1!==(o=t.props.element.getFieldId()).indexOf("{{")&&(o=replaceContentWithData(o)),!(_.isObject(t.props.appStore)&&o&&a)){e.next=14;break}if(t.props.appStore.dispatch((0,_front_app_src_js_store_forms_data_storage_actions__WEBPACK_IMPORTED_MODULE_8__.Az)(o,r,a,n)),!n){e.next=14;break}if(!(s=t.props.element.getSettings("change_actions"))||isEditor()){e.next=14;break}return e.next=11,Promise.all([__webpack_require__.e(4279),__webpack_require__.e(6593),__webpack_require__.e(2167),__webpack_require__.e(6737)]).then(__webpack_require__.bind(__webpack_require__,2167));case 11:return i=e.sent.default,e.next=14,i.callAllWidgetActions(t.props.element.getIdForAction(),"change",s,t.props.element);case 14:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),t.getValue=function(){var e,r=t.props.element.getFormId(),n=t.props.element.getFieldId(),a=t.props.element.getSettings("content_format")||"YYYY-MM-DD",o=t.props.element.getSettings("content_timestamp"),s=t.props.element.getSettings("nullable");return isEditor()?s||(e=new Date):(e=_.get(appStore.getState().formsStore,"".concat(r),""),(e=_.get(e,n,""))?e=o?new Date(e):(e=moment(e,a)).toDate():s||(e=new Date)),e},e.element.component=(0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_9__.Z)(t),window.elementDecorator&&window.elementDecorator((0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_9__.Z)(t)),t.defaultValue=t.getContent("content_default_value")||"",t.timePrecision=null,t.typeDate=e.element.getSettings("content_time_type","date"),t.locale=t.props.element.getSettings("content_locale","en"),t.typeDate){case"date":t.typeDate="LL";break;case"time":t.typeDate="LT",t.timePrecision=TimePrecision.MINUTE;break;case"dateTime":t.typeDate="llll",t.timePrecision=TimePrecision.MINUTE}var r=moment().locale(t.locale).toDate(),n=t.props.element.getSettings("content_format")||"YYYY-MM-DD";return t.defaultValue&&(r=(r=moment(t.defaultValue,n)).isValid()?r.format(n):""),t.state={settings:_objectSpread({},e.element.getSettings()),options:parseOptionsFromSettings(e.element.getSettings("content_options")),paramsForUpdate:null},t.altrpSelectRef=React.createRef(),t.dispatchFieldValueToStore(r),t}return(0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_10__.Z)(InputDateWidget,[{key:"clearValue",value:function(){this.onChange(""),this.dispatchFieldValueToStore("",!0)}},{key:"_componentDidMount",value:(_componentDidMount2=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_7__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark((function e(t,r){var n,a,o,s,i,p=this;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(this.props.element.getSettings("content_options")&&(n=parseOptionsFromSettings(this.props.element.getSettings("content_options")),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{options:n})}))),a=this.state.value,_.get(a,"dynamic")&&this.props.currentModel.getProperty("altrpModelUpdated")&&(a=this.getContent("content_default_value")),!t||t.currentModel.getProperty("altrpModelUpdated")||!this.props.currentModel.getProperty("altrpModelUpdated")){e.next=11;break}return(a=this.getContent("content_default_value"))?(a=moment(a).locale(this.locale).toDate(),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:a,contentLoaded:!0})}),(function(){p.dispatchFieldValueToStore(a)}))):this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{contentLoaded:!0})})),o=this.props.element.getSettings("content_format")||"YYYY-MM-DD",a=(a=moment(a,o)).isValid()?a.format(o):"",this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:a,contentLoaded:!0})}),(function(){p.dispatchFieldValueToStore(a)})),e.abrupt("return");case 11:if(!this.props.currentModel.getProperty("altrpModelUpdated")||!this.props.currentDataStorage.getProperty("currentDataStorageLoaded")||this.state.contentLoaded){e.next=19;break}return(a=this.getContent("content_default_value"))?(s=this.props.element.getSettings("content_format")||"YYYY-MM-DD",a=(a=moment(a,s)).isValid()?a.format(s):"",this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:a,contentLoaded:!0})}),(function(){p.dispatchFieldValueToStore(a)}))):this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{contentLoaded:!0})})),i=this.props.element.getSettings("content_format")||"YYYY-MM-DD",a=(a=moment(a,i)).isValid()?a.format(i):"",this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:a,contentLoaded:!0})}),(function(){p.dispatchFieldValueToStore(a)})),e.abrupt("return");case 19:this.state.value!==a&&this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:a})}),(function(){p.dispatchFieldValueToStore(a)}));case 20:case"end":return e.stop()}}),e,this)}))),function(e,t){return _componentDidMount2.apply(this,arguments)})},{key:"_componentDidUpdate",value:(_componentDidUpdate2=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_7__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark((function e(t,r){var n,a,o,s=this;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t&&!t.currentDataStorage.getProperty("currentDataStorageLoaded")&&this.props.currentDataStorage.getProperty("currentDataStorageLoaded")&&((n=this.getContent("content_default_value"))?(a=this.props.element.getSettings("content_format")||"YYYY-MM-DD",n=(n=moment(n,a)).isValid()?n.format(a):"",this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n,contentLoaded:!0})}),(function(){s.dispatchFieldValueToStore(n)}))):this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{contentLoaded:!0})})),o=this.props.element.getSettings("content_format")||"YYYY-MM-DD",n=(n=moment(n,o)).isValid()?n.format(o):"",this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n,contentLoaded:!0})}),(function(){s.dispatchFieldValueToStore(n)}))),this.updateValue(t);case 2:case"end":return e.stop()}}),e,this)}))),function(e,t){return _componentDidUpdate2.apply(this,arguments)})},{key:"updateValue",value:function updateValue(prevProps){var _this4=this;if(!isEditor()){var content_calculation=this.props.element.getSettings("content_calculation"),altrpforms=this.props.formsStore,fieldName=this.props.element.getFieldId(),formId=this.props.element.getFormId();if(content_calculation){var prevContext={},altrpdata=this.props.currentDataStorage.getData(),altrpmodel=this.props.currentModel.getData(),altrpuser=this.props.currentUser.getData(),altrppagestate=this.props.altrpPageState.getData(),altrpresponses=this.props.altrpresponses.getData(),altrpmeta=this.props.altrpMeta.getData(),context=this.props.element.getCurrentModel().getData();if(-1!==content_calculation.indexOf("altrpdata")&&(context.altrpdata=altrpdata,altrpdata.currentDataStorageLoaded?prevContext.altrpdata=prevProps.currentDataStorage.getData():prevContext.altrpdata=altrpdata),-1!==content_calculation.indexOf("altrpforms")&&(context.altrpforms=altrpforms,"".concat(formId,".").concat(fieldName)===altrpforms.changedField?prevContext.altrpforms=altrpforms:prevContext.altrpforms=prevProps.formsStore),-1!==content_calculation.indexOf("altrpmodel")&&(context.altrpmodel=altrpmodel,prevContext.altrpmodel=prevProps.currentModel.getData()),-1!==content_calculation.indexOf("altrpuser")&&(context.altrpuser=altrpuser,prevContext.altrpuser=prevProps.currentUser.getData()),-1!==content_calculation.indexOf("altrpuser")&&(context.altrpuser=altrpuser,prevContext.altrpuser=prevProps.currentUser.getData()),-1!==content_calculation.indexOf("altrppagestate")&&(context.altrppagestate=altrppagestate,prevContext.altrppagestate=prevProps.altrpPageState.getData()),-1!==content_calculation.indexOf("altrpmeta")&&(context.altrpmeta=altrpmeta,prevContext.altrpmeta=prevProps.altrpMeta.getData()),-1!==content_calculation.indexOf("altrpresponses")&&(context.altrpresponses=altrpresponses,prevContext.altrpresponses=prevProps.altrpresponses.getData()),-1!==content_calculation.indexOf("altrpstorage")&&(context.altrpstorage=getDataFromLocalStorage("altrpstorage",{})),!(_.isEqual(prevProps.currentDataStorage,this.props.currentDataStorage)&&_.isEqual(prevProps.currentUser,this.props.currentUser)&&_.isEqual(prevProps.formsStore,this.props.formsStore)&&_.isEqual(prevProps.altrpPageState,this.props.altrpPageState)&&_.isEqual(prevProps.altrpMeta,this.props.altrpMeta)&&_.isEqual(prevProps.altrpresponses,this.props.altrpresponses)&&_.isEqual(prevProps.currentModel,this.props.currentModel))&&(_.isEqual(prevProps.formsStore,this.props.formsStore)||"".concat(formId,".").concat(fieldName)!==altrpforms.changedField)){var value="";try{if(content_calculation=content_calculation.replace(/}}/g,"')").replace(/{{/g,"_.get(context, '"),value=eval(content_calculation),value===this.state.value)return;this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:value})}),(function(){_this4.dispatchFieldValueToStore(value)}))}catch(e){console.error("Evaluate error in Input: '"+e.message+"'",this.props.element.getId())}}}else{var path="".concat(formId,".").concat(fieldName);this.props.formsStore!==prevProps.formsStore&&_.get(altrpforms,path)!==this.state.value&&this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:moment(_.get(altrpforms,path)).locale(_this4.locale).toDate()})}))}}}},{key:"updateOptions",value:(_updateOptions=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_7__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark((function e(){var t,r,n,a;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t=this.props.element.getFormId(),r=this.props.element.getSettings("params_for_update"),n=_.get(this.props.formsStore,[t],{}),r=parseParamsFromString(r,new AltrpModel(n)),a=(0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_11__.Z)(this.state.options),_.isEqual(r,this.state.paramsForUpdate)){e.next=28;break}if(_.isEmpty(r)){e.next=21;break}if(!this.props.element.getSettings("params_as_filters",!1)){e.next=14;break}return r=JSON.stringify(r),e.next=11,new Resource({route:this.getRoute()}).getQueried({filters:r});case 11:a=e.sent,e.next=17;break;case 14:return e.next=16,new Resource({route:this.getRoute()}).getQueried(r);case 16:a=e.sent;case 17:a=_.isArray(a)?a:a.data,a=_.isArray(a)?a:[],e.next=27;break;case 21:if(!this.state.paramsForUpdate){e.next=27;break}return e.next=24,new Resource({route:this.getRoute()}).getAll();case 24:a=e.sent,a=_.isArray(a)?a:a.data,a=_.isArray(a)?a:[];case 27:this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{paramsForUpdate:r,options:a})}));case 28:case"end":return e.stop()}}),e,this)}))),function(){return _updateOptions.apply(this,arguments)})},{key:"getName",value:function(){return"".concat(this.props.element.getFormId(),"[").concat(this.props.element.getFieldId(),"]")}},{key:"render",value:function(){var e,t=this,r=this.props.element.getSettings(),n=r.label_icon,a="",o={},s=this.props.element.getResponsiveSetting("content_label_position_type");switch(s){case"top":o={marginBottom:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},a="";break;case"bottom":o={marginTop:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},a="";break;case"left":o={marginRight:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},a="altrp-field-label-container-left";break;case"absolute":o={position:"absolute",zIndex:2},a=""}e=this.state.settings.content_label?React.createElement("div",{className:"altrp-field-label-container "+a,style:o},React.createElement("label",{className:"altrp-field-label ".concat(this.state.settings.content_required?"altrp-field-label--required":"")},this.state.settings.content_label),n&&n.type&&React.createElement("span",{className:"altrp-label-icon"},renderAssetIcon(n))):null;var i=document.body;isEditor()&&(i=document.getElementById("editorContent").contentWindow.document.body);var _=this.locale,p=this.props.element.getSettings("content_time_type","date"),l=this.timePrecision,c={firstDayOfWeek:1,className:"time"===this.typeDate?"altrp-hidden":""};switch(_){case"ru":c.months=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],c.weekdaysShort=["Вс","Пн","Вт","Ср","Чт","Пт","Сб"]}var u=this.props.element.getResponsiveSetting("picker_minimal",!1),d={showArrowButtons:!0,precision:l,onChange:"date"===p?this.onChange:void 0,className:"date"===p?"altrp-hidden":""},m=this.props.element.getSettings("content_format")||"YYYY-MM-DD",f=React.createElement("div",{className:"altrp-input-wrapper"},React.createElement(DateInput,{name:this.getName(),minDate:new Date(0),maxDate:moment().add(20,"year").toDate(),dayPickerProps:c,popoverProps:{portalContainer:i,minimal:u,popoverClassName:"altrp-date-picker-popover altrp-date-picker-popover-"+this.props.element.getId()},onChange:"LT"!==this.typeDate?this.onChange:void 0,className:"altrp-date-picker"+this.props.element.getId(),timePrecision:l,canClearSelection:!1,parseDate:function(e,r){return moment(e,t.typeDate).locale(r).toDate()},timePickerProps:d,disabled:this.state.settings.content_readonly,placeholder:this.state.settings.content_placeholder,formatDate:function(e,t){return moment(e).locale(t).format(m)},value:this.getValue()||null,locale:_}));return React.createElement(AltrpFieldContainer,{settings:r,className:"altrp-field-container altrp-date-field-container "},"top"===s?e:"","left"===s?e:"","right"===s?e:"","absolute"===s?e:"",f,"bottom"===s?e:"")}}]),InputDateWidget}(Component);__webpack_exports__.default=InputDateWidget},48379:function(e,t,r){"use strict";r.d(t,{sc:function(){return n},Yw:function(){return a},Az:function(){return o}});var n="CHANGE_FORM_FIELD_VALUE",a="CHANGE_FORM_FIELD_VALUE";function o(e,t,r,a){return{type:n,fieldName:e,value:t,formId:r,changedField:a?"".concat(r,".").concat(e):null}}}}]);
//# sourceMappingURL=InputDate.d1c19823668d3b72589c.bundle.js.map