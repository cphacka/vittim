(self.webpackChunk=self.webpackChunk||[]).push([[7435],{71743:function(e,t,r){"use strict";var _=r(6610),a=r(5991),n=r(83465),s=r.n(n),o=r(29208),i=r.n(o),l=r(31468),p=r.n(l),u=r(38394),c=r.n(u),d=r(96633),f=r.n(d),h=r(99245),b=r.n(h),g=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};(0,_.Z)(this,e),this.data=s()(t)}return(0,a.Z)(e,[{key:"getData",value:function(){var e=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];return e?s()(this.data):this.data}},{key:"isEmpty",value:function(){return b()(this.data)}},{key:"getProperty",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return i()(this.data,e,t)}},{key:"hasProperty",value:function(e){return c()(this.data,e)}},{key:"setProperty",value:function(t){var r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return r instanceof e&&(r=r.getData(!1)),p()(this.data,t,r)}},{key:"unsetProperty",value:function(e){return f()(this.data,e)}}]),e}();window.AltrpModel=g,t.Z=g},14114:function(e,t,r){"use strict";r.d(t,{Z:function(){return b}});var _=r(6610),a=r(5991),n=r(10379),s=r(46070),o=r(77608),i=r(67294),l=r(72757),p=r(98804),u=r.n(p),c=r(38773),d=function(){function e(t){(0,_.Z)(this,e),this.loader=t,this.resource=new c.Z({route:"/admin/ajax/media"})}return(0,a.Z)(e,[{key:"upload",value:function(){var e=this;return new Promise((function(t,r){e.loader.file.then((function(r){e.resource.postFiles([r]).then((function(e){t({default:e[0].url})}))}))}))}}]),e}();function f(e){e.plugins.get("FileRepository").createUploadAdapter=function(e){return new d(e)}}var h=["heading","undo","redo","bold","italic","blockQuote","indent","outdent","link","numberedList","bulletedList","imageTextAlternative","imageUpload","mediaEmbed","insertTable","tableColumn","tableRow","mergeTableCells"],b=function(e){(0,n.Z)(c,e);var t,r,p=(t=c,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,_=(0,o.Z)(t);if(r){var a=(0,o.Z)(this).constructor;e=Reflect.construct(_,arguments,a)}else e=_.apply(this,arguments);return(0,s.Z)(this,e)});function c(e){var t;return(0,_.Z)(this,c),(t=p.call(this,e)).body=window.EditorFrame?window.EditorFrame.contentWindow.document.body:document.body,t}return(0,a.Z)(c,[{key:"render",value:function(){var e=this,t={extraPlugins:[f],body:this.body,toolbar:h};return this.props.textWidget?i.createElement(i.Fragment,null,i.createElement(l.CKEditor,{config:t,body:this.body,editor:u(),disabled:!this.props.readOnly,data:this.props.text||"Type text here",onReady:function(e){e.plugins.get("TextTransformation").isEnabled=!1},onChange:function(t,r){return e.props.changeText(r.getData())}})):i.createElement(l.CKEditor,{config:t,body:this.body,editor:u(),data:this.props.text||"Type text here",disabled:this.props.readOnly,onReady:function(e){e.plugins.get("TextTransformation").isEnabled=!1},onChange:function(t,r){return e.props.onChange(t,r)},onBlur:function(t,r){return e.props.onBlur(t,r)}})}}]),c}(i.Component)},89691:function(__unused_webpack_module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_13__=__webpack_require__(85061),_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(96156),_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__=__webpack_require__(92137),_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_10__=__webpack_require__(6610),_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_15__=__webpack_require__(5991),_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__=__webpack_require__(63349),_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__(10379),_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(46070),_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(77608),_babel_runtime_helpers_taggedTemplateLiteral__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__(32465),_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(87757),_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default=__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1__),_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(76593),_classes_Resource__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(38773),_front_app_src_js_store_forms_data_storage_actions__WEBPACK_IMPORTED_MODULE_12__=__webpack_require__(48379),_classes_AltrpModel__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(71743),_ckeditor_CKeditor__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__(14114),_templateObject;function ownKeys(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var _=Object.getOwnPropertySymbols(e);t&&(_=_.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,_)}return r}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ownKeys(Object(r),!0).forEach((function(t){(0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ownKeys(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function _createSuper(e){var t=_isNativeReflectConstruct();return function(){var r,_=(0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__.Z)(e);if(t){var a=(0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_2__.Z)(this).constructor;r=Reflect.construct(_,arguments,a)}else r=_.apply(this,arguments);return(0,_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_3__.Z)(this,r)}}function _isNativeReflectConstruct(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}var moment=window.altrpHelpers.moment;(window.globalDefaults=window.globalDefaults||[]).push("\n /*здесь css стилей по умолчанию с селекторами*/\n");var AltrpFieldContainer=styled.div(_templateObject||(_templateObject=(0,_babel_runtime_helpers_taggedTemplateLiteral__WEBPACK_IMPORTED_MODULE_8__.Z)(["\n  ","\n"])),(function(e){switch(e.settings.content_label_position_type){case"left":return"display: flex";case"right":return"display:flex;flex-direction:row-reverse;justify-content:flex-end;"}return""})),InputWysiwygWidget=function(_Component){(0,_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_9__.Z)(InputWysiwygWidget,_Component);var _super=_createSuper(InputWysiwygWidget),_updateOptions,_componentDidUpdate2,_componentDidMount2;function InputWysiwygWidget(e){var t;return(0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_10__.Z)(this,InputWysiwygWidget),(t=_super.call(this,e)).timeInput=null,t.handleEnter=function(e){if(13===e.keyCode){e.preventDefault();var r=Array.from(document.querySelectorAll("input,select")),_=r.indexOf(e.target);if(void 0===_)return;r[_+1]&&r[_+1].focus();var a=t.props.element.getSettings(),n=a.create_allowed,s=a.create_label,o=a.create_url;n&&s&&o&&t.createItem(e)}},t.debounceDispatch=_.debounce((function(e){return t.dispatchFieldValueToStore(e,!0)}),150),t.onFocus=function(){var e=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(r){var _,a;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!(_=t.props.element.getSettings("focus_actions"))||(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()){e.next=7;break}return e.next=4,Promise.all([__webpack_require__.e(4279),__webpack_require__.e(6593),__webpack_require__.e(2167),__webpack_require__.e(6737)]).then(__webpack_require__.bind(__webpack_require__,2167));case 4:return a=e.sent.default,e.next=7,a.callAllWidgetActions(t.props.element.getIdForAction(),"focus",_,t.props.element);case 7:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),t.onBlur=function(){var e=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(r){var a,n,s=arguments;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(a=s.length>1&&void 0!==s[1]?s[1]:null,_.get(a,"getData")&&t.dispatchFieldValueToStore(a.getData(),!0),!t.props.element.getSettings("actions",[])||(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()){e.next=8;break}return e.next=5,Promise.all([__webpack_require__.e(4279),__webpack_require__.e(6593),__webpack_require__.e(2167),__webpack_require__.e(6737)]).then(__webpack_require__.bind(__webpack_require__,2167));case 5:return n=e.sent.default,e.next=8,n.callAllWidgetActions(t.props.element.getIdForAction(),"blur",t.props.element.getSettings("actions",[]),t.props.element);case 8:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),t.dispatchFieldValueToStore=function(){var e=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(r){var a,n,s,o,i,l=arguments;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(a=l.length>1&&void 0!==l[1]&&l[1],n=t.props.element.getFormId(),-1!==(s=t.props.element.getFieldId()).indexOf("{{")&&(s=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.replaceContentWithData)(s)),!(_.isObject(t.props.appStore)&&s&&n)){e.next=14;break}if(t.props.appStore.dispatch((0,_front_app_src_js_store_forms_data_storage_actions__WEBPACK_IMPORTED_MODULE_12__.Az)(s,r,n,a)),!a){e.next=14;break}if(!(o=t.props.element.getSettings("change_actions"))||(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()){e.next=14;break}return e.next=11,Promise.all([__webpack_require__.e(4279),__webpack_require__.e(6593),__webpack_require__.e(2167),__webpack_require__.e(6737)]).then(__webpack_require__.bind(__webpack_require__,2167));case 11:return i=e.sent.default,e.next=14,i.callAllWidgetActions(t.props.element.getIdForAction(),"change",o,t.props.element);case 14:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),t.createItem=function(){var e=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(r){var a,n,s,o,i,l,p,u,c,d,f,h,b;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(a=r.keyCode,n=r.target.value,13===a&&n){e.next=4;break}return e.abrupt("return");case 4:if(s=t.props.element.getSettings(),o=s.create_url,i=s.create_label,l=s.create_data,p=s.select2_multiple,i||o){e.next=7;break}return e.abrupt("return");case 7:return u=t.props.element.getCurrentModel(),(c=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseParamsFromString)(l,u,!0))[i]=n,d=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseURLTemplate)(o,u.getData()),t.setState((function(e){return _objectSpread(_objectSpread({},e),{},{isDisabled:!0})})),e.prev=12,f=new _classes_Resource__WEBPACK_IMPORTED_MODULE_5__.Z({route:d}),e.next=16,f.post(c);case 16:(h=e.sent).success&&_.get(h,"data.id")&&(b={label:n,value:_.get(h,"data.id")},t.setState((function(e){return _objectSpread(_objectSpread({},e),{},{isDisabled:!1})}),(function(){var e=(0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_13__.Z)(t.state.options);e.unshift(b);var r=t.state.value;p?(r=r?(0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_13__.Z)(r):[]).push(_.get(h,"data.id")):r=_.get(h,"data.id"),t.setState((function(t){return _objectSpread(_objectSpread({},t),{},{options:e,value:r})}),(function(){var e=_.get((0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__.Z)(t),"altrpSelectRef.current.selectRef.current");e&&e.setState({menuIsOpen:!1,inputValue:""})}))}))),t.setState((function(e){return _objectSpread(_objectSpread({},e),{},{isDisabled:!1})})),e.next=25;break;case 21:e.prev=21,e.t0=e.catch(12),console.error(e.t0),t.setState((function(e){return _objectSpread(_objectSpread({},e),{},{isDisabled:!1})}));case 25:case"end":return e.stop()}}),e,null,[[12,21]])})));return function(t){return e.apply(this,arguments)}}(),e.element.component=(0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__.Z)(t),window.elementDecorator&&window.elementDecorator((0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__.Z)(t)),t.onChange=t.onChange.bind((0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__.Z)(t)),t.debounceDispatch=t.debounceDispatch.bind((0,_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_14__.Z)(t)),t.defaultValue=t.getContent("content_default_value")||(t.valueMustArray()?[]:""),t.valueMustArray()&&!_.isArray(t.defaultValue)&&(t.defaultValue=[]),t.state={settings:_objectSpread({},e.element.getSettings()),value:t.defaultValue,options:(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseOptionsFromSettings)(e.element.getSettings("content_options")),paramsForUpdate:null},t.altrpSelectRef=React.createRef(),t.getContent("content_default_value")&&t.dispatchFieldValueToStore(t.getContent("content_default_value")),t}return(0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_15__.Z)(InputWysiwygWidget,[{key:"valueMustArray",value:function(){return!1}},{key:"clearValue",value:function(){this.onChange(""),this.dispatchFieldValueToStore("",!0)}},{key:"_componentDidMount",value:(_componentDidMount2=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(t,r){var a,n,s=this;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(this.props.element.getSettings("content_options")&&(a=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseOptionsFromSettings)(this.props.element.getSettings("content_options")),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{options:a})}))),n=this.state.value,_.get(n,"dynamic")&&this.props.currentModel.getProperty("altrpModelUpdated")&&(n=this.getContent("content_default_value")),!t||t.currentModel.getProperty("altrpModelUpdated")||!this.props.currentModel.getProperty("altrpModelUpdated")){e.next=7;break}return n=this.getContent("content_default_value"),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n,contentLoaded:!0})}),(function(){s.dispatchFieldValueToStore(n)})),e.abrupt("return");case 7:if(!this.props.currentModel.getProperty("altrpModelUpdated")||!this.props.currentDataStorage.getProperty("currentDataStorageLoaded")||this.state.contentLoaded){e.next=11;break}return n=this.getContent("content_default_value"),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n,contentLoaded:!0})}),(function(){s.dispatchFieldValueToStore(n)})),e.abrupt("return");case 11:this.state.value!==n&&this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n})}),(function(){s.dispatchFieldValueToStore(n)}));case 12:case"end":return e.stop()}}),e,this)}))),function(e,t){return _componentDidMount2.apply(this,arguments)})},{key:"getRoute",value:function(){var e=this.props.element.getSettings("model_for_options");return-1===e.indexOf("/")?"/ajax/models/".concat(e,"_options"):(-1!==e.indexOf("{{")&&(e=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.replaceContentWithData)(e)),e)}},{key:"_componentDidUpdate",value:(_componentDidUpdate2=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(t,r){var a,n,s,o,i,l=this;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:a=this.state.settings,n=a.content_options,s=a.model_for_options,t&&!t.currentDataStorage.getProperty("currentDataStorageLoaded")&&this.props.currentDataStorage.getProperty("currentDataStorageLoaded")&&(o=this.getContent("content_default_value",this.props.element.getSettings("select2_multiple")),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:o,contentLoaded:!0})}),(function(){l.dispatchFieldValueToStore(o)}))),!_.isEqual(this.props.currentModel,t.currentModel)&&this.state.value&&this.state.value.dynamic&&this.dispatchFieldValueToStore(this.getContent("content_default_value")),this.props.formsStore===t.formsStore&&this.props.currentModel===t.currentModel&&this.props.currentDataStorage===t.currentDataStorage||this.updateOptions(),n&&!s&&(i=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseOptionsFromSettings)(n),_.isEqual(i,this.state.options)||this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{options:i})}))),this.updateValue(t);case 6:case"end":return e.stop()}}),e,this)}))),function(e,t){return _componentDidUpdate2.apply(this,arguments)})},{key:"updateValue",value:function updateValue(prevProps){var _this4=this;if(!(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()){var content_calculation=this.props.element.getSettings("content_calculation"),altrpforms=this.props.formsStore,fieldName=this.props.element.getFieldId(),formId=this.props.element.getFormId();if(content_calculation){var prevContext={},altrpdata=this.props.currentDataStorage.getData(),altrpmodel=this.props.currentModel.getData(),altrpuser=this.props.currentUser.getData(),altrppagestate=this.props.altrpPageState.getData(),altrpresponses=this.props.altrpresponses.getData(),altrpmeta=this.props.altrpMeta.getData(),context=this.props.element.getCurrentModel().getData();if(-1!==content_calculation.indexOf("altrpdata")&&(context.altrpdata=altrpdata,altrpdata.currentDataStorageLoaded?prevContext.altrpdata=prevProps.currentDataStorage.getData():prevContext.altrpdata=altrpdata),-1!==content_calculation.indexOf("altrpforms")&&(context.altrpforms=altrpforms,"".concat(formId,".").concat(fieldName)===altrpforms.changedField?prevContext.altrpforms=altrpforms:prevContext.altrpforms=prevProps.formsStore),-1!==content_calculation.indexOf("altrpmodel")&&(context.altrpmodel=altrpmodel,prevContext.altrpmodel=prevProps.currentModel.getData()),-1!==content_calculation.indexOf("altrpuser")&&(context.altrpuser=altrpuser,prevContext.altrpuser=prevProps.currentUser.getData()),-1!==content_calculation.indexOf("altrpuser")&&(context.altrpuser=altrpuser,prevContext.altrpuser=prevProps.currentUser.getData()),-1!==content_calculation.indexOf("altrppagestate")&&(context.altrppagestate=altrppagestate,prevContext.altrppagestate=prevProps.altrpPageState.getData()),-1!==content_calculation.indexOf("altrpmeta")&&(context.altrpmeta=altrpmeta,prevContext.altrpmeta=prevProps.altrpMeta.getData()),-1!==content_calculation.indexOf("altrpresponses")&&(context.altrpresponses=altrpresponses,prevContext.altrpresponses=prevProps.altrpresponses.getData()),-1!==content_calculation.indexOf("altrpstorage")&&(context.altrpstorage=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.getDataFromLocalStorage)("altrpstorage",{})),!(_.isEqual(prevProps.currentDataStorage,this.props.currentDataStorage)&&_.isEqual(prevProps.currentUser,this.props.currentUser)&&_.isEqual(prevProps.formsStore,this.props.formsStore)&&_.isEqual(prevProps.altrpPageState,this.props.altrpPageState)&&_.isEqual(prevProps.altrpMeta,this.props.altrpMeta)&&_.isEqual(prevProps.altrpresponses,this.props.altrpresponses)&&_.isEqual(prevProps.currentModel,this.props.currentModel))&&(_.isEqual(prevProps.formsStore,this.props.formsStore)||"".concat(formId,".").concat(fieldName)!==altrpforms.changedField)){var value="";try{if(content_calculation=content_calculation.replace(/}}/g,"')").replace(/{{/g,"_.get(context, '"),value=eval(content_calculation),value===this.state.value)return;this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:value})}),(function(){_this4.dispatchFieldValueToStore(value)}))}catch(e){console.error("Evaluate error in Input: '"+e.message+"'",this.props.element.getId())}}}else{var path="".concat(formId,".").concat(fieldName);this.props.formsStore!==prevProps.formsStore&&_.get(altrpforms,path)!==this.state.value&&this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:_.get(altrpforms,path)})}))}}}},{key:"updateOptions",value:(_updateOptions=(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_11__.Z)(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().mark((function e(){var t,r,a,n;return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_1___default().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t=this.props.element.getFormId(),r=this.props.element.getSettings("params_for_update"),a=_.get(this.props.formsStore,[t],{}),r=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.parseParamsFromString)(r,new _classes_AltrpModel__WEBPACK_IMPORTED_MODULE_6__.Z(a)),n=(0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_13__.Z)(this.state.options),_.isEqual(r,this.state.paramsForUpdate)){e.next=28;break}if(_.isEmpty(r)){e.next=21;break}if(!this.props.element.getSettings("params_as_filters",!1)){e.next=14;break}return r=JSON.stringify(r),e.next=11,new _classes_Resource__WEBPACK_IMPORTED_MODULE_5__.Z({route:this.getRoute()}).getQueried({filters:r});case 11:n=e.sent,e.next=17;break;case 14:return e.next=16,new _classes_Resource__WEBPACK_IMPORTED_MODULE_5__.Z({route:this.getRoute()}).getQueried(r);case 16:n=e.sent;case 17:n=_.isArray(n)?n:n.data,n=_.isArray(n)?n:[],e.next=27;break;case 21:if(!this.state.paramsForUpdate){e.next=27;break}return e.next=24,new _classes_Resource__WEBPACK_IMPORTED_MODULE_5__.Z({route:this.getRoute()}).getAll();case 24:n=e.sent,n=_.isArray(n)?n:n.data,n=_.isArray(n)?n:[];case 27:this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{paramsForUpdate:r,options:n})}));case 28:case"end":return e.stop()}}),e,this)}))),function(){return _updateOptions.apply(this,arguments)})},{key:"onChange",value:function(e){var t,r=this,a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n="";this.props.element.getSettings(),e&&e.target&&(n=e.target.value),e&&e.value&&(n=e.value),_.get(a,"getData")&&(n='<div class="ck ck-content" style="width:100%">'.concat(a.getData(),"</div>")),_.isArray(e)&&(n=_.cloneDeep(e)),this.props.element.getSettings("content_options_nullable")&&e&&"<null>"===e.value&&(n=null),this.setState((function(e){return _objectSpread(_objectSpread({},e),{},{value:n})}),(function(){var e=r.props.element.getSettings("change_actions"),_=r.props.element.getSettings("change_change_end"),a=r.props.element.getSettings("change_change_end_delay");r.dispatchFieldValueToStore(void 0!==t?t:n,!0),!e||_||(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()||r.debounceDispatch(void 0!==t?t:n),e&&_&&!(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.isEditor)()&&(r.timeInput&&clearTimeout(r.timeInput),r.timeInput=setTimeout((function(){r.debounceDispatch(void 0!==t?t:n)}),a))}))}},{key:"getOptions",value:function(){var e=(0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_13__.Z)(this.state.options),t=this.props.element.getDynamicSetting("content_options");return t&&(e=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.convertData)(t,e)),this.props.element.getSettings("sort_default")||(e=_.sortBy(e,(function(e){return e&&(e.label?e.label.toString():e)}))),e}},{key:"getName",value:function(){return"".concat(this.props.element.getFormId(),"[").concat(this.props.element.getFieldId(),"]")}},{key:"render",value:function(){var e,t=this.props.element.getSettings(),r=(t.select2_multiple,t.label_icon),a=this.state.value;_.get(a,"dynamic")&&this.props.currentModel.getProperty("altrpModelUpdated")&&(a=this.getContent("content_default_value")),a&&a.dynamic&&(a="");var n,s="",o={},i=this.props.element.getResponsiveSetting("content_label_position_type");switch(i){case"top":o={marginBottom:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},s="";break;case"bottom":o={marginTop:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},s="";break;case"left":o={marginRight:this.state.settings.label_style_spacing?this.state.settings.label_style_spacing.size+this.state.settings.label_style_spacing.unit:"2px"},s="altrp-field-label-container-left";break;case"absolute":o={position:"absolute",zIndex:2},s=""}return e=this.state.settings.content_label?React.createElement("div",{className:"altrp-field-label-container "+s,style:o},React.createElement("label",{className:"altrp-field-label ".concat(this.state.settings.content_required?"altrp-field-label--required":"")},this.state.settings.content_label),r&&r.assetType&&React.createElement("span",{className:"altrp-label-icon"},(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.renderAssetIcon)(r))):null,this.state.settings.content_autocomplete,n=this.renderWysiwyg(),React.createElement(AltrpFieldContainer,{settings:t,className:"altrp-field-container "},"top"===i?e:"","left"===i?e:"","right"===i?e:"","absolute"===i?e:"",n,"bottom"===i?e:"")}},{key:"renderWysiwyg",value:function(){return React.createElement(_ckeditor_CKeditor__WEBPACK_IMPORTED_MODULE_7__.Z,{onChange:this.onChange,onBlur:this.onBlur,changeText:this.dispatchFieldValueToStore,text:this.getContent("content_default_value"),name:this.getName(),readOnly:this.getContent("read_only")})}}]),InputWysiwygWidget}(Component);__webpack_exports__.default=InputWysiwygWidget}}]);
//# sourceMappingURL=InputWysiwyg.0f3f31a52c5837287492.bundle.js.map