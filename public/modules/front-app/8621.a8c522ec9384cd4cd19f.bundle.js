(self.webpackChunk=self.webpackChunk||[]).push([[8621],{55224:function(e,t,n){"use strict";n.d(t,{R:function(){return s}});var i=n(70655),r=n(67294),o=n(90322),s=function(e){function t(t,n){var i=e.call(this,t,n)||this;return i.timeoutIds=[],i.requestIds=[],i.clearTimeouts=function(){if(i.timeoutIds.length>0){for(var e=0,t=i.timeoutIds;e<t.length;e++){var n=t[e];window.clearTimeout(n)}i.timeoutIds=[]}},i.cancelAnimationFrames=function(){if(i.requestIds.length>0){for(var e=0,t=i.requestIds;e<t.length;e++){var n=t[e];window.cancelAnimationFrame(n)}i.requestIds=[]}},(0,o.KV)("production")||i.validateProps(i.props),i}return(0,i.ZT)(t,e),t.prototype.componentDidUpdate=function(e,t,n){(0,o.KV)("production")||this.validateProps(this.props)},t.prototype.componentWillUnmount=function(){this.clearTimeouts(),this.cancelAnimationFrames()},t.prototype.requestAnimationFrame=function(e){var t=window.requestAnimationFrame(e);return this.requestIds.push(t),function(){return window.cancelAnimationFrame(t)}},t.prototype.setTimeout=function(e,t){var n=window.setTimeout(e,t);return this.timeoutIds.push(n),function(){return window.clearTimeout(n)}},t.prototype.validateProps=function(e){},t}(r.Component)},18621:function(e,t,n){"use strict";n.r(t),n.d(t,{Classes:function(){return i},MultiSelect:function(){return x},Omnibar:function(){return F},QueryList:function(){return S},Select:function(){return V},Suggest:function(){return B},executeItemsEqual:function(){return f},getActiveItem:function(){return P},getCreateNewItem:function(){return I},getFirstEnabledItem:function(){return D},isCreateNewItem:function(){return y},renderFilteredItems:function(){return m}});var i={};n.r(i),n.d(i,{MULTISELECT:function(){return s},MULTISELECT_POPOVER:function(){return l},MULTISELECT_TAG_INPUT_INPUT:function(){return p},OMNIBAR:function(){return u},OMNIBAR_OVERLAY:function(){return a},SELECT:function(){return d},SELECT_MATCH_TARGET_WIDTH:function(){return v},SELECT_POPOVER:function(){return c}});var r=n(40451),o=r.getClassNamespace(),s=o+"-multi-select",l=s+"-popover",p=s+"-tag-input-input",u=o+"-omnibar",a=u+"-overlay",d=o+"-select",c=d+"-popover",v=d+"-match-target-width";function m(e,t,n){if(0===e.query.length&&void 0!==n)return n;var i=e.filteredItems.map(e.renderItem).filter((function(e){return null!=e}));return i.length>0?i:t}var h=n(23251);function f(e,t,n){return void 0===e||null==t||null==n?t===n:h.mf(e)?e(t,n):t[e]===n[e]}function I(){return{__blueprintCreateNewItemBrand:"blueprint-create-new-item"}}function y(e){if(null==e)return!1;var t=Object.keys(e);return 1===t.length&&"__blueprintCreateNewItemBrand"===t[0]&&"blueprint-create-new-item"===e.__blueprintCreateNewItemBrand}function P(e){return null==e||y(e)?null:e}var g=n(70655),O=n(94184),C=n.n(O),R=n(67294),T=n(37102),E=n(72778),w=n(9421),A=n(55224),L=n(48261),S=function(e){function t(t,n){var i,r,o=e.call(this,t,n)||this;o.refHandlers={itemsParent:function(e){return o.itemsParentRef=e}},o.shouldCheckActiveItemInViewport=!1,o.expectedNextActiveItem=null,o.isEnterKeyPressed=!1,o.renderItemList=function(e){var t=o.props,n=t.initialContent,i=t.noResults,r=e.renderCreateItem(),s=m(e,null!=r?null:i,n);if(null==s&&null==r)return null;var l=o.isCreateItemFirst();return R.createElement(T.v2,{ulRef:e.itemsParentRef},l&&r,s,!l&&r)},o.renderItem=function(e,t){if(!0!==o.props.disabled){var n=o.state,i=n.activeItem,r=n.query,s=o.state.filteredItems.indexOf(e)>=0,l={active:f(o.props.itemsEqual,P(i),e),disabled:Q(e,t,o.props.itemDisabled),matchesPredicate:s};return o.props.itemRenderer(e,{handleClick:function(t){return o.handleItemSelect(e,t)},index:t,modifiers:l,query:r})}return null},o.renderCreateItemMenuItem=function(){if(o.isCreateItemRendered()){var e=o.state,t=e.activeItem,n=e.query.trim(),i=y(t);return o.props.createNewItemRenderer(n,i,(function(e){o.handleItemCreate(n,e)}))}return null},o.handleItemCreate=function(e,t){var n,i,r,s,l=null===(i=(n=o.props).createNewItemFromQuery)||void 0===i?void 0:i.call(n,e);null!=l&&(null===(s=(r=o.props).onItemSelect)||void 0===s||s.call(r,l,t),o.maybeResetQuery())},o.handleItemSelect=function(e,t){var n,i;o.setActiveItem(e),null===(i=(n=o.props).onItemSelect)||void 0===i||i.call(n,e,t),o.maybeResetQuery()},o.handlePaste=function(e){for(var t,n=o.props,i=n.createNewItemFromQuery,r=n.onItemsPaste,s=[],l=[],p=0,u=e;p<u.length;p++){var a=u[p],d=N(a,o.props);if(void 0!==d)t=d,l.push(d);else if(o.canCreateItems()){var c=null==i?void 0:i(a);void 0!==c&&l.push(c)}else s.push(a)}o.setQuery(s.join(", "),!1),void 0!==t&&o.setActiveItem(t),null==r||r(l)},o.handleKeyDown=function(e){var t,n,i=e.keyCode;if(i===w.ARROW_UP||i===w.ARROW_DOWN){e.preventDefault();var r=o.getNextActiveItem(i===w.ARROW_UP?-1:1);null!=r&&o.setActiveItem(r)}else i===w.ENTER&&(o.isEnterKeyPressed=!0);null===(n=(t=o.props).onKeyDown)||void 0===n||n.call(t,e)},o.handleKeyUp=function(e){var t=o.props.onKeyUp,n=o.state.activeItem;e.keyCode===w.ENTER&&o.isEnterKeyPressed&&(e.preventDefault(),null==n||y(n)?o.handleItemCreate(o.state.query,e):o.handleItemSelect(n,e),o.isEnterKeyPressed=!1),null==t||t(e)},o.handleInputQueryChange=function(e){var t,n,i=null==e?"":e.target.value;o.setQuery(i),null===(n=(t=o.props).onQueryChange)||void 0===n||n.call(t,i,e)};var s=t.query,l=void 0===s?"":s,p=null===(i=t.createNewItemFromQuery)||void 0===i?void 0:i.call(t,l),u=q(l,t);return o.state={activeItem:void 0!==t.activeItem?t.activeItem:null!==(r=t.initialActiveItem)&&void 0!==r?r:D(u,t.itemDisabled),createNewItem:p,filteredItems:u,query:l},o}return(0,g.ZT)(t,e),t.ofType=function(){return t},t.prototype.render=function(){var e=this.props,t=e.className,n=e.items,i=e.renderer,r=e.itemListRenderer,o=void 0===r?this.renderItemList:r,s=this.state,l=(s.createNewItem,(0,g._T)(s,["createNewItem"]));return i((0,g.pi)((0,g.pi)({},l),{className:t,handleItemSelect:this.handleItemSelect,handleKeyDown:this.handleKeyDown,handleKeyUp:this.handleKeyUp,handlePaste:this.handlePaste,handleQueryChange:this.handleInputQueryChange,itemList:o((0,g.pi)((0,g.pi)({},l),{items:n,itemsParentRef:this.refHandlers.itemsParent,renderCreateItem:this.renderCreateItemMenuItem,renderItem:this.renderItem}))}))},t.prototype.componentDidUpdate=function(e){var t=this;void 0!==this.props.activeItem&&this.props.activeItem!==this.state.activeItem&&(this.shouldCheckActiveItemInViewport=!0,this.setState({activeItem:this.props.activeItem})),null!=this.props.query&&this.props.query!==e.query?this.setQuery(this.props.query,this.props.resetOnQuery,this.props):L.ms(this.props,e,{include:["items","itemListPredicate","itemPredicate"]})||this.setQuery(this.state.query),this.shouldCheckActiveItemInViewport&&(this.requestAnimationFrame((function(){return t.scrollActiveItemIntoView()})),this.shouldCheckActiveItemInViewport=!1)},t.prototype.scrollActiveItemIntoView=function(){var e=!1!==this.props.scrollToActiveItem,t=!f(this.props.itemsEqual,P(this.expectedNextActiveItem),P(this.props.activeItem));if(this.expectedNextActiveItem=null,e||!t){var n=this.getActiveElement();if(null!=this.itemsParentRef&&null!=n){var i=n.offsetTop,r=n.offsetHeight,o=this.itemsParentRef,s=o.offsetTop,l=o.scrollTop,p=o.clientHeight,u=this.getItemsParentPadding(),a=u.paddingTop,d=i+r+u.paddingBottom-s,c=i-a-s;d>=l+p?this.itemsParentRef.scrollTop=d+r-p:c<=l&&(this.itemsParentRef.scrollTop=c-r)}}},t.prototype.setQuery=function(e,t,n){var i;void 0===t&&(t=this.props.resetOnQuery),void 0===n&&(n=this.props);var r=n.createNewItemFromQuery;this.shouldCheckActiveItemInViewport=!0,e!==this.state.query&&(null===(i=n.onQueryChange)||void 0===i||i.call(n,e));var o=e.trim(),s=q(o,n),l=null!=r&&""!==o?r(o):void 0;this.setState({createNewItem:l,filteredItems:s,query:e});var p=this.getActiveIndex(s);(t||p<0||Q(P(this.state.activeItem),p,n.itemDisabled))&&(this.isCreateItemRendered()&&this.isCreateItemFirst()?this.setActiveItem({__blueprintCreateNewItemBrand:"blueprint-create-new-item"}):this.setActiveItem(D(s,n.itemDisabled)))},t.prototype.setActiveItem=function(e){var t,n,i,r;this.expectedNextActiveItem=e,void 0===this.props.activeItem&&(this.shouldCheckActiveItemInViewport=!0,this.setState({activeItem:e})),y(e)?null===(n=(t=this.props).onActiveItemChange)||void 0===n||n.call(t,null,!0):null===(r=(i=this.props).onActiveItemChange)||void 0===r||r.call(i,e,!1)},t.prototype.getActiveElement=function(){var e=this.state.activeItem;if(null!=this.itemsParentRef){if(y(e)){var t=this.isCreateItemFirst()?0:this.state.filteredItems.length;return this.itemsParentRef.children.item(t)}var n=this.getActiveIndex();return this.itemsParentRef.children.item(n)}},t.prototype.getActiveIndex=function(e){void 0===e&&(e=this.state.filteredItems);var t=this.state.activeItem;if(null==t||y(t))return-1;for(var n=0;n<e.length;++n)if(f(this.props.itemsEqual,e[n],t))return n;return-1},t.prototype.getItemsParentPadding=function(){var e=getComputedStyle(this.itemsParentRef),t=e.paddingTop;return{paddingBottom:K(e.paddingBottom),paddingTop:K(t)}},t.prototype.getNextActiveItem=function(e,t){return void 0===t&&(t=this.getActiveIndex()),this.isCreateItemRendered()&&(0===t&&-1===e||t===this.state.filteredItems.length-1&&1===e)?{__blueprintCreateNewItemBrand:"blueprint-create-new-item"}:D(this.state.filteredItems,this.props.itemDisabled,e,t)},t.prototype.isCreateItemRendered=function(){return this.canCreateItems()&&""!==this.state.query&&!this.wouldCreatedItemMatchSomeExistingItem()},t.prototype.isCreateItemFirst=function(){return"first"===this.props.createNewItemPosition},t.prototype.canCreateItems=function(){return null!=this.props.createNewItemFromQuery&&null!=this.props.createNewItemRenderer},t.prototype.wouldCreatedItemMatchSomeExistingItem=function(){var e=this;return this.state.filteredItems.some((function(t){return f(e.props.itemsEqual,t,e.state.createNewItem)}))},t.prototype.maybeResetQuery=function(){this.props.resetOnSelect&&this.setQuery("",!0)},t.displayName=E.g+".QueryList",t.defaultProps={disabled:!1,resetOnQuery:!0},t}(A.R);function K(e){return null==e?0:parseInt(e.slice(0,-2),10)}function N(e,t){var n=t.items,i=t.itemPredicate;if(h.mf(i))for(var r=0;r<n.length;r++){var o=n[r];if(i(e,o,r,!0))return o}}function q(e,t){var n=t.items,i=t.itemPredicate,r=t.itemListPredicate;return h.mf(r)?r(e,n):h.mf(i)?n.filter((function(t,n){return i(e,t,n)})):n}function Q(e,t,n){return null!=n&&null!=e&&(h.mf(n)?n(e,t):!!e[n])}function D(e,t,n,i){if(void 0===n&&(n=1),void 0===i&&(i=e.length-1),0===e.length)return null;var r,o,s=i,l=e.length-1;do{if(o=l,!Q(e[s=(r=s+n)<0?o:r>o?0:r],s,t))return e[s]}while(s!==i&&-1!==i);return null}var F=function(e){function t(){var t=null!==e&&e.apply(this,arguments)||this;return t.TypedQueryList=S.ofType(),t.renderQueryList=function(e){var n=t.props,i=n.inputProps,r=void 0===i?{}:i,o=n.isOpen,s=n.overlayProps,l=void 0===s?{}:s,p=e.handleKeyDown,d=e.handleKeyUp,c=o?{onKeyDown:p,onKeyUp:d}:{};return R.createElement(T.aV,(0,g.pi)({hasBackdrop:!0},l,{isOpen:o,className:C()(a,l.className),onClose:t.handleOverlayClose}),R.createElement("div",(0,g.pi)({className:C()(u,e.className)},c),R.createElement(T.BZ,(0,g.pi)({autoFocus:!0,large:!0,leftIcon:"search",placeholder:"Search..."},r,{onChange:e.handleQueryChange,value:e.query})),e.itemList))},t.handleOverlayClose=function(e){var n,i,r,o;null===(i=null===(n=t.props.overlayProps)||void 0===n?void 0:n.onClose)||void 0===i||i.call(n,e),null===(o=(r=t.props).onClose)||void 0===o||o.call(r,e)},t}return(0,g.ZT)(t,e),t.ofType=function(){return t},t.prototype.render=function(){var e=this.props,t=(e.isOpen,e.inputProps,e.overlayProps,(0,g._T)(e,["isOpen","inputProps","overlayProps"])),n="initialContent"in this.props?this.props.initialContent:null;return R.createElement(this.TypedQueryList,(0,g.pi)({},t,{initialContent:n,renderer:this.renderQueryList}))},t.displayName=E.g+".Omnibar",t}(R.PureComponent),b=n(4408),U=n(53766),_=n(35307),x=function(e){function t(){var t,n=e.apply(this,arguments)||this;return n.state={isOpen:n.props.popoverProps&&n.props.popoverProps.isOpen||!1},n.TypedQueryList=S.ofType(),n.input=null,n.queryList=null,n.refHandlers={input:(0,b.Km)(n,"input",null===(t=n.props.tagInputProps)||void 0===t?void 0:t.inputRef),queryList:function(e){return n.queryList=e}},n.renderQueryList=function(e){var t,i=n.props,r=i.fill,o=i.tagInputProps,u=void 0===o?{}:o,a=i.popoverProps,d=void 0===a?{}:a,c=i.selectedItems,v=void 0===c?[]:c,m=i.placeholder,h=e.handlePaste,f=e.handleKeyDown,I=e.handleKeyUp;r&&(d.fill=!0,u.fill=!0);var y=(0,g.pi)((0,g.pi)({},u.inputProps),{className:C()(null===(t=u.inputProps)||void 0===t?void 0:t.className,p)});return R.createElement(T.J2,(0,g.pi)({autoFocus:!1,canEscapeKeyClose:!0,enforceFocus:!1,isOpen:n.state.isOpen,position:U.Ly.BOTTOM_LEFT},d,{className:C()(e.className,d.className),interactionKind:T.V3.CLICK,onInteraction:n.handlePopoverInteraction,popoverClassName:C()(l,d.popoverClassName),onOpened:n.handlePopoverOpened}),R.createElement("div",{onKeyDown:n.getTagInputKeyDownHandler(f),onKeyUp:n.getTagInputKeyUpHandler(I)},R.createElement(T.EG,(0,g.pi)({placeholder:m},u,{className:C()(s,u.className),inputRef:n.refHandlers.input,inputProps:y,inputValue:e.query,onAdd:function(e,t){"paste"===t&&h(e)},onInputChange:e.handleQueryChange,onRemove:n.handleTagRemove,values:v.map(n.props.tagRenderer)}))),R.createElement("div",{onKeyDown:f,onKeyUp:I},e.itemList))},n.handleItemSelect=function(e,t){var i,r;null!=n.input&&n.input.focus(),null===(r=(i=n.props).onItemSelect)||void 0===r||r.call(i,e,t)},n.handleQueryChange=function(e,t){var i,r;n.setState({isOpen:e.length>0||!n.props.openOnKeyDown}),null===(r=(i=n.props).onQueryChange)||void 0===r||r.call(i,e,t)},n.handlePopoverInteraction=function(e,t){return n.requestAnimationFrame((function(){var i,r,o=n.input===document.activeElement;null==n.input||o?n.props.openOnKeyDown||n.setState({isOpen:!0}):n.setState({isOpen:!1}),null===(r=null===(i=n.props.popoverProps)||void 0===i?void 0:i.onInteraction)||void 0===r||r.call(i,e,t)}))},n.handlePopoverOpened=function(e){var t,i;null!=n.queryList&&n.queryList.scrollActiveItemIntoView(),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onOpened)||void 0===i||i.call(t,e)},n.handleTagRemove=function(e,t){var i,r=n.props,o=r.selectedItems,s=void 0===o?[]:o,l=r.onRemove,p=r.tagInputProps;null==l||l(s[t],t),null===(i=null==p?void 0:p.onRemove)||void 0===i||i.call(p,e,t)},n.getTagInputKeyDownHandler=function(e){return function(t){var i=t.which;i===w.ESCAPE||i===w.TAB?(null!=n.input&&n.input.blur(),n.setState({isOpen:!1})):i!==w.BACKSPACE&&i!==w.ARROW_LEFT&&i!==w.ARROW_RIGHT&&n.setState({isOpen:!0});var o=null!=t.target.closest("."+r.TAG_REMOVE);n.state.isOpen&&!o&&(null==e||e(t))}},n.getTagInputKeyUpHandler=function(e){return function(t){var i=t.target.classList.contains(p);n.state.isOpen&&i&&(null==e||e(t))}},n}return(0,g.ZT)(t,e),t.ofType=function(){return t},t.prototype.componentDidUpdate=function(e){var t,n,i,r,o;(null===(t=e.tagInputProps)||void 0===t?void 0:t.inputRef)!==(null===(n=this.props.tagInputProps)||void 0===n?void 0:n.inputRef)&&((0,b.k$)(null===(i=e.tagInputProps)||void 0===i?void 0:i.inputRef,null),this.refHandlers.input=(0,b.Km)(this,"input",null===(r=this.props.tagInputProps)||void 0===r?void 0:r.inputRef),(0,b.k$)(null===(o=this.props.tagInputProps)||void 0===o?void 0:o.inputRef,this.input))},t.prototype.render=function(){var e=this.props,t=(e.openOnKeyDown,e.popoverProps,e.tagInputProps,(0,g._T)(e,["openOnKeyDown","popoverProps","tagInputProps"]));return R.createElement(this.TypedQueryList,(0,g.pi)({},t,{onItemSelect:this.handleItemSelect,onQueryChange:this.handleQueryChange,ref:this.refHandlers.queryList,renderer:this.renderQueryList}))},t.displayName=E.g+".MultiSelect",t.defaultProps={fill:!1,placeholder:"Search..."},t}(_.U),V=function(e){function t(){var t,n=e.apply(this,arguments)||this;return n.state={isOpen:!1},n.TypedQueryList=S.ofType(),n.inputElement=null,n.queryList=null,n.handleInputRef=(0,b.Km)(n,"inputElement",null===(t=n.props.inputProps)||void 0===t?void 0:t.inputRef),n.handleQueryListRef=function(e){return n.queryList=e},n.renderQueryList=function(e){var t,i=n.props,r=i.fill,o=i.filterable,s=void 0===o||o,l=i.disabled,p=void 0!==l&&l,u=i.inputProps,a=void 0===u?{}:u,d=i.popoverProps,m=void 0===d?{}:d,h=i.matchTargetWidth;r&&(m.fill=!0),h&&(null==m.modifiers&&(m.modifiers={}),m.modifiers.minWidth={enabled:!0,fn:function(e){return e.styles.width=e.offsets.reference.width+"px",e},order:800},m.usePortal=!1,m.wrapperTagName="div");var f=R.createElement(T.BZ,(0,g.pi)({leftIcon:"search",placeholder:"Filter...",rightElement:n.maybeRenderClearButton(e.query)},a,{inputRef:n.handleInputRef,onChange:e.handleQueryChange,value:e.query})),I=e.handleKeyDown,y=e.handleKeyUp;return R.createElement(T.J2,(0,g.pi)({autoFocus:!1,enforceFocus:!1,isOpen:n.state.isOpen,disabled:p,position:U.Ly.BOTTOM_LEFT},m,{className:C()(e.className,m.className),onInteraction:n.handlePopoverInteraction,popoverClassName:C()(c,m.popoverClassName,(t={},t[v]=h,t)),onOpening:n.handlePopoverOpening,onOpened:n.handlePopoverOpened,onClosing:n.handlePopoverClosing}),R.createElement("div",{onKeyDown:n.state.isOpen?I:n.handleTargetKeyDown,onKeyUp:n.state.isOpen?y:void 0},n.props.children),R.createElement("div",{onKeyDown:I,onKeyUp:y},s?f:void 0,e.itemList))},n.handleTargetKeyDown=function(e){e.which!==w.ARROW_UP&&e.which!==w.ARROW_DOWN||(e.preventDefault(),n.setState({isOpen:!0}))},n.handleItemSelect=function(e,t){var i,r;n.setState({isOpen:!1}),null===(r=(i=n.props).onItemSelect)||void 0===r||r.call(i,e,t)},n.handlePopoverInteraction=function(e,t){var i,r;n.setState({isOpen:e}),null===(r=null===(i=n.props.popoverProps)||void 0===i?void 0:i.onInteraction)||void 0===r||r.call(i,e,t)},n.handlePopoverOpening=function(e){var t,i;n.previousFocusedElement=document.activeElement,n.props.resetOnClose&&n.resetQuery(),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onOpening)||void 0===i||i.call(t,e)},n.handlePopoverOpened=function(e){var t,i;null!=n.queryList&&n.queryList.scrollActiveItemIntoView(),n.requestAnimationFrame((function(){var e,t=n.props.inputProps;!1!==(void 0===t?{}:t).autoFocus&&(null===(e=n.inputElement)||void 0===e||e.focus())})),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onOpened)||void 0===i||i.call(t,e)},n.handlePopoverClosing=function(e){var t,i;n.requestAnimationFrame((function(){void 0!==n.previousFocusedElement&&(n.previousFocusedElement.focus(),n.previousFocusedElement=void 0)})),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onClosing)||void 0===i||i.call(t,e)},n.resetQuery=function(){return n.queryList&&n.queryList.setQuery("",!0)},n}return(0,g.ZT)(t,e),t.ofType=function(){return t},t.prototype.render=function(){var e=this.props,t=(e.filterable,e.inputProps,e.popoverProps,(0,g._T)(e,["filterable","inputProps","popoverProps"]));return R.createElement(this.TypedQueryList,(0,g.pi)({},t,{onItemSelect:this.handleItemSelect,ref:this.handleQueryListRef,renderer:this.renderQueryList}))},t.prototype.componentDidUpdate=function(e,t){var n,i,r,o,s;(null===(n=e.inputProps)||void 0===n?void 0:n.inputRef)!==(null===(i=this.props.inputProps)||void 0===i?void 0:i.inputRef)&&((0,b.k$)(null===(r=e.inputProps)||void 0===r?void 0:r.inputRef,null),this.handleInputRef=(0,b.Km)(this,"inputElement",null===(o=this.props.inputProps)||void 0===o?void 0:o.inputRef),(0,b.k$)(null===(s=this.props.inputProps)||void 0===s?void 0:s.inputRef,this.inputElement)),this.state.isOpen&&!t.isOpen&&null!=this.queryList&&this.queryList.scrollActiveItemIntoView()},t.prototype.maybeRenderClearButton=function(e){return e.length>0?R.createElement(T.zx,{icon:"cross",minimal:!0,onClick:this.resetQuery}):void 0},t.displayName=E.g+".Select",t}(_.U),B=function(e){function t(){var t,n=e.apply(this,arguments)||this;return n.state={isOpen:null!=n.props.popoverProps&&n.props.popoverProps.isOpen||!1,selectedItem:n.getInitialSelectedItem()},n.TypedQueryList=S.ofType(),n.inputElement=null,n.queryList=null,n.handleInputRef=(0,b.Km)(n,"inputElement",null===(t=n.props.inputProps)||void 0===t?void 0:t.inputRef),n.handleQueryListRef=function(e){return n.queryList=e},n.renderQueryList=function(e){var t=n.props,i=t.fill,r=t.inputProps,o=void 0===r?{}:r,s=t.popoverProps,l=void 0===s?{}:s,p=n.state,u=p.isOpen,a=p.selectedItem,d=e.handleKeyDown,v=e.handleKeyUp,m=o.autoComplete,h=void 0===m?"off":m,f=o.placeholder,I=void 0===f?"Search...":f,y=a?n.props.inputValueRenderer(a):"",P=u&&y?y:I,O=u?e.query:y||(n.props.resetOnClose?"":e.query);return i&&(l.fill=!0,o.fill=!0),R.createElement(T.J2,(0,g.pi)({autoFocus:!1,enforceFocus:!1,isOpen:u,position:U.Ly.BOTTOM_LEFT},l,{className:C()(e.className,l.className),interactionKind:T.V3.CLICK,onInteraction:n.handlePopoverInteraction,popoverClassName:C()(c,l.popoverClassName),onOpening:n.handlePopoverOpening,onOpened:n.handlePopoverOpened}),R.createElement(T.BZ,(0,g.pi)({autoComplete:h,disabled:n.props.disabled},o,{inputRef:n.handleInputRef,onChange:e.handleQueryChange,onFocus:n.handleInputFocus,onKeyDown:n.getTargetKeyDownHandler(d),onKeyUp:n.getTargetKeyUpHandler(v),placeholder:P,value:O})),R.createElement("div",{onKeyDown:d,onKeyUp:v},e.itemList))},n.selectText=function(){n.requestAnimationFrame((function(){var e;null===(e=n.inputElement)||void 0===e||e.setSelectionRange(0,n.inputElement.value.length)}))},n.handleInputFocus=function(e){var t,i;n.selectText(),n.props.openOnKeyDown||n.setState({isOpen:!0}),null===(i=null===(t=n.props.inputProps)||void 0===t?void 0:t.onFocus)||void 0===i||i.call(t,e)},n.handleItemSelect=function(e,t){var i,r,o,s,l;n.props.closeOnSelect?(null===(r=n.inputElement)||void 0===r||r.blur(),l=!1):(null===(i=n.inputElement)||void 0===i||i.focus(),n.selectText(),l=!0),void 0===n.props.selectedItem?n.setState({isOpen:l,selectedItem:e}):n.setState({isOpen:l}),null===(s=(o=n.props).onItemSelect)||void 0===s||s.call(o,e,t)},n.handlePopoverInteraction=function(e,t){return n.requestAnimationFrame((function(){var i,r,o=n.inputElement===document.activeElement;null==n.inputElement||o||n.setState({isOpen:!1}),null===(r=null===(i=n.props.popoverProps)||void 0===i?void 0:i.onInteraction)||void 0===r||r.call(i,e,t)}))},n.handlePopoverOpening=function(e){var t,i;n.props.resetOnClose&&n.queryList&&n.queryList.setQuery("",!0),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onOpening)||void 0===i||i.call(t,e)},n.handlePopoverOpened=function(e){var t,i;null!=n.queryList&&n.queryList.scrollActiveItemIntoView(),null===(i=null===(t=n.props.popoverProps)||void 0===t?void 0:t.onOpened)||void 0===i||i.call(t,e)},n.getTargetKeyDownHandler=function(e){return function(t){var i,r,o,s=t.which;s===w.ESCAPE||s===w.TAB?(null===(i=n.inputElement)||void 0===i||i.blur(),n.setState({isOpen:!1})):n.props.openOnKeyDown&&s!==w.BACKSPACE&&s!==w.ARROW_LEFT&&s!==w.ARROW_RIGHT&&n.setState({isOpen:!0}),n.state.isOpen&&(null==e||e(t)),null===(o=null===(r=n.props.inputProps)||void 0===r?void 0:r.onKeyDown)||void 0===o||o.call(r,t)}},n.getTargetKeyUpHandler=function(e){return function(t){var i,r;n.state.isOpen&&(null==e||e(t)),null===(r=null===(i=n.props.inputProps)||void 0===i?void 0:i.onKeyUp)||void 0===r||r.call(i,t)}},n}return(0,g.ZT)(t,e),t.ofType=function(){return t},t.prototype.render=function(){var e,t=this.props,n=(t.disabled,t.inputProps,t.popoverProps,(0,g._T)(t,["disabled","inputProps","popoverProps"]));return R.createElement(this.TypedQueryList,(0,g.pi)({},n,{initialActiveItem:null!==(e=this.props.selectedItem)&&void 0!==e?e:void 0,onItemSelect:this.handleItemSelect,ref:this.handleQueryListRef,renderer:this.renderQueryList}))},t.prototype.componentDidUpdate=function(e,t){var n,i,r,o,s,l,p,u=this;if((null===(n=e.inputProps)||void 0===n?void 0:n.inputRef)!==(null===(i=this.props.inputProps)||void 0===i?void 0:i.inputRef)&&((0,b.k$)(null===(r=e.inputProps)||void 0===r?void 0:r.inputRef,null),this.handleInputRef=(0,b.Km)(this,"inputElement",null===(o=this.props.inputProps)||void 0===o?void 0:o.inputRef),(0,b.k$)(null===(s=this.props.inputProps)||void 0===s?void 0:s.inputRef,this.inputElement)),void 0!==this.props.selectedItem&&this.props.selectedItem!==this.state.selectedItem&&this.setState({selectedItem:this.props.selectedItem}),!1===this.state.isOpen&&!0===t.isOpen){var a=null!==(p=null===(l=this.props.popoverProps)||void 0===l?void 0:l.transitionDuration)&&void 0!==p?p:T.J2.defaultProps.transitionDuration;setTimeout((function(){return u.maybeResetActiveItemToSelectedItem()}),a)}this.state.isOpen&&!t.isOpen&&null!=this.queryList&&this.queryList.scrollActiveItemIntoView()},t.prototype.getInitialSelectedItem=function(){return void 0!==this.props.selectedItem?this.props.selectedItem:void 0!==this.props.defaultSelectedItem?this.props.defaultSelectedItem:null},t.prototype.maybeResetActiveItemToSelectedItem=function(){var e,t=void 0===this.props.activeItem&&null!==this.state.selectedItem&&!this.props.resetOnSelect;null!==this.queryList&&t&&this.queryList.setActiveItem(null!==(e=this.props.selectedItem)&&void 0!==e?e:this.state.selectedItem)},t.displayName=E.g+".Suggest",t.defaultProps={closeOnSelect:!0,fill:!1,openOnKeyDown:!1,resetOnClose:!1},t}(_.U)}}]);
//# sourceMappingURL=8621.a8c522ec9384cd4cd19f.bundle.js.map