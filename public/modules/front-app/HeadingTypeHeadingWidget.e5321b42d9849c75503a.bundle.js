(self.webpackChunk=self.webpackChunk||[]).push([[7078],{64144:function(t,e,n){"use strict";n.r(e);var a=n(96156),i=n(6610),r=n(5991),s=n(63349),l=n(10379),o=n(46070),c=n(77608),g=n(12519),p=n(76593);function d(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}(window.globalDefaults=window.globalDefaults||[]).push("\n.altrp-heading {\n  margin-top: 5px;\n  margin-right: 0;\n  margin-bottom: 5px;\n  margin-left: 0;\n  padding-top: 0;\n  padding-right: 0;\n  padding-bottom: 0;\n  padding-left: 0;\n  background-position: top left;\n  background-attachment: scroll;\n  background-repeat: repeat;\n}\n\n.altrp-heading-advanced-wrapper {\n  position: absolute;\n  left: 0;\n  margin: 0;\n  z-index: -1;\n  width: 100%;\n  top: 0;\n  box-sizing: border-box;\n}\n\n.altrp-heading-advanced {\n  display: inline-block;\n  margin: 0;\n}\n\n.altrp-heading-advanced-main-fill {\n  background-clip: unset;\n  text-fill-color: transparent;\n  -webkit-background-clip: text;\n  -webkit-text-fill-color: transparent;\n  -webkit-transition-property: prop;\n  -moz-transition-property: prop;\n  -ms-transition-property: prop;\n  -o-transition-property: prop;\n  transition-property: prop;\n}\n\n.altrp-heading {\n  display: flex;\n  justify-content: center;\n  align-items: center;\n}\n\n.altrp-heading-wrapper {\n  display: flex;\n}\n\n.altrp-heading-wrapper-sub-top {\n  flex-direction: column-reverse;\n}\n\n.altrp-heading-sub {\n  margin: 0;\n  display: flex;\n  padding: 0;\n}\n\n.altrp-heading-sub-link {\n  display: flex;\n}\n\n.altrp-heading-sub-container-link {\n  margin: 0;\n}\n\n.altrp-heading-wrapper-sub-left {\n  flex-direction: row-reverse;\n  align-items: center;\n}\n\n.altrp-heading-wrapper-sub-right {\n  flex-direction: row;\n  align-items: center;\n}\n\n.altrp-heading-animating-tag {\n  display: flex;\n}\n\n.altrp-animating-rotating {\n  display: flex;\n}\n\n");var h=function(t){(0,l.Z)(u,t);var e,n,h=(e=u,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,a=(0,c.Z)(e);if(n){var i=(0,c.Z)(this).constructor;t=Reflect.construct(a,arguments,i)}else t=a.apply(this,arguments);return(0,o.Z)(this,t)});function u(t){var e;return(0,i.Z)(this,u),(e=h.call(this,t)).state={settings:t.element.getSettings()},t.element.component=(0,s.Z)(e),window.elementDecorator&&window.elementDecorator((0,s.Z)(e)),t.baseRender&&(e.render=t.baseRender((0,s.Z)(e))),e}return(0,r.Z)(u,[{key:"render",value:function(){var t,e=this.props.element.getCurrentModel().getData(),n=this.props.element.getSettings("background_image",{}),i=this.getContent("text"),r="altrp-heading altrp-heading--link "+ +this.state.settings.position_css_classes+(n.url?" altrp-background-image":""),s="altrp-heading-wrapper",l=this.state.settings.sub_heading_settings_html_tag||"h2",o="";if(this.state.settings.text_sub_switch){var c=this.getContent("text_sub");switch(this.getContent("sub_heading_settings_position")){case"top":s+=" altrp-heading-wrapper-sub-top";break;case"left":s+=" altrp-heading-wrapper-sub-left";break;case"right":s+=" altrp-heading-wrapper-sub-right";break;default:s+=" altrp-heading-wrapper-sub-bottom"}o=React.createElement(l,{dangerouslySetInnerHTML:{__html:c},className:"altrp-heading-sub"})}if(this.state.settings.link_link&&this.state.settings.link_link.url){var h={rel:this.state.settings.link_link.noFollow?"nofollow":null,href:"mailto:mail@gmail.com",className:"altrp-inherit altrp-inherit_wo-border"};h.tag=this.state.settings.link_link.tag,h.creativelink="p"!==this.getContent("heading_settings_html_tag")?this.getContent("creative_link_controller"):null,this.state.settings.link_link.openInNew&&(h.target="_black"),"Link"!==this.state.settings.link_link.tag||(0,p.isEditor)()||(h.to=this.state.settings.link_link.url.replace(":id",this.getModelId()||""),h.href=this.state.settings.link_link.url.replace(":id",this.getModelId()||"")),_.isObject(e)&&(h.to=(0,p.parseURLTemplate)(this.state.settings.link_link.url,e),h.href=(0,p.parseURLTemplate)(this.state.settings.link_link.url,e)),(0,p.isEditor)()&&(h.onClick=function(t){t.preventDefault()}),t=React.createElement(g.Z,h,i)}var u="";if(this.state.settings.switch_advanced_heading_content){var f,m=this.getContent("horizontal_offset_advanced_heading_content"),b=this.getContent("vertical_offset_advanced_heading_content"),k=this.getContent("rotate_offset_advanced_heading_content"),v=this.getContent("transform_origin_offset_advanced_heading_content");""===m.size&&(m.size="0"),""===b.size&&(b.size="0"),""===k.size&&(k.size="0");var w="0 0";switch(v){case"topLeft":w="0 0";break;case"topCenter":w="50% 0";break;case"topRight":w="100% 0";break;case"centerLeft":w="0 50%";break;case"center":w="50% 50%";break;case"centerRight":w="100% 50%";break;case"bottomLeft":w="0 100%";break;case"bottomCenter":w="50% 100%";break;case"bottomRight":w="100% 100%"}f=function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?d(Object(n),!0).forEach((function(e){(0,a.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):d(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({},{transform:"translate(".concat(m.size+m.unit,", ").concat(b.size+b.unit,") rotate(").concat(k.size,"deg)"),transformOrigin:w});var y="altrp-heading-advanced";this.props.element.getSettings("main_fill_advanced_heading_style")&&(y+=" altrp-heading-advanced-main-fill"),u=React.createElement("div",{className:"altrp-heading-advanced-wrapper"},React.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:y,style:f,dangerouslySetInnerHTML:{__html:this.getContent("text_advanced_heading_content")}}));var R={};switch(this.getContent("hide_at_offset_advanced_heading_content")){case"never":R={type:"never",size:0};break;case"mobile":R={type:"mobile",size:768};break;case"tablet":R={type:"tablet",size:1025}}if("never"!==this.getContent("hide_at_offset_advanced_heading_content")){var x=document.body.offsetWidth;(0,p.isEditor)()&&(x=document.getElementById("editorWindow").offsetWidth),x<=R.size&&(u="")}}var O=t?React.createElement(React.Fragment,null,React.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:r,id:this.state.settings.position_css_id||""},t),this.state.settings.text_sub_switch&&React.createElement(l,{className:"altrp-heading-sub-container-link altrp-heading-sub"},React.createElement(g.Z,{link:this.state.settings.link_link,dangerouslySetInnerHTML:{__html:this.state.settings.text_sub},className:"altrp-inherit altrp-inherit_wo-border"}))):React.createElement(React.Fragment,null,React.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:r,id:this.state.settings.position_css_id||"",dangerouslySetInnerHTML:{__html:i}}),o);return React.createElement("div",{className:s},u,O)}}]),u}(Component);e.default=h}}]);
//# sourceMappingURL=HeadingTypeHeadingWidget.e5321b42d9849c75503a.bundle.js.map