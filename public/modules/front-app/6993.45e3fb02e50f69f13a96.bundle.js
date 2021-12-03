(self.webpackChunk=self.webpackChunk||[]).push([[6993],{71743:function(e,n,o){"use strict";var t=o(6610),r=o(5991),i=o(83465),d=o.n(i),l=o(29208),s=o.n(l),a=o(31468),p=o.n(a),v=o(38394),_=o.n(v),c=o(96633),u=o.n(c),g=o(99245),m=o.n(g),h=function(){function e(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};(0,t.Z)(this,e),this.data=d()(n)}return(0,r.Z)(e,[{key:"getData",value:function(){var e=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];return e?d()(this.data):this.data}},{key:"isEmpty",value:function(){return m()(this.data)}},{key:"getProperty",value:function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return s()(this.data,e,n)}},{key:"hasProperty",value:function(e){return _()(this.data,e)}},{key:"setProperty",value:function(n){var o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return o instanceof e&&(o=o.getData(!1)),p()(this.data,n,o)}},{key:"unsetProperty",value:function(e){return u()(this.data,e)}}]),e}();window.AltrpModel=h,n.Z=h},54737:function(e,n,o){"use strict";var t,r=o(22122),i=o(81253),d=o(28481),l=o(32465),s=o(96156),a=o(67294),p=o(71893),v=["isOpen","ref"];function c(e,n){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var t=Object.getOwnPropertySymbols(e);n&&(t=t.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),o.push.apply(o,t)}return o}var u,g,m=window.altrpHelpers,h=m.isEditor,y=m.isSSR;function S(e){return e?e.size||(e=function(e){for(var n=1;n<arguments.length;n++){var o=null!=arguments[n]?arguments[n]:{};n%2?c(Object(o),!0).forEach((function(n){(0,s.Z)(e,n,o[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):c(Object(o)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(o,n))}))}return e}({size:null},e)):e={size:null},0===e.size?{size:null}:e}window.altrpLibs&&(u=window.altrpLibs.Tooltip2,g=window.altrpLibs.Popover2InteractionKind);var b=p.ZP.div(t||(t=(0,l.Z)(["\n  position: absolute;\n  z-index: 0;\n  pointer-events: none\n"])));n.Z=function(e){var n=e.minimal||!1,o=e.position||"bottom",t=S(e.horizontal),l=S(e.vertical),s=[parseInt(t.size||0),parseInt(l.size||10)],p=a.useState([0,0]),c=(0,d.Z)(p,2),m=c[0],w=c[1];function f(){e.element.current.offsetWidth!==m[0]&&e.element.current.offsetHeight!==m[1]?w([e.element.current.offsetWidth,e.element.current.offsetHeight]):e.element.current.offsetWidth!==m[0]?w([e.element.current.offsetWidth,m[1]]):e.element.current.offsetHeight!==m[1]&&w([m[0],e.element.current.offsetHeight])}switch(o){case"left":case"right":s=[parseInt(l.size),parseInt(t.size||10)]}var R=a.useMemo((function(){return h()?document.getElementById("editorContent").contentWindow.document.body:document.body}));return y()||a.useLayoutEffect((function(){return h()?document.getElementById("editorContent").contentWindow.addEventListener("resize",f):window.addEventListener("resize",f),function(){h()?document.getElementById("editorContent").contentWindow.removeEventListener("resize",f):window.removeEventListener("resize",f)}}),[]),y()?a.createElement(a.Fragment,null):u&&e.text&&!_.isString(e.children)?a.createElement(u,{content:e.text,popoverClassName:"altrp-tooltip-popover altrp-tooltip".concat(e.id),isOpen:e.open||!1,placement:o,minimal:n,interactionKind:g.CLICK,portalContainer:R,modifiers:{eventListeners:{enabled:!0,options:{}},offset:{enabled:!0,options:{offset:s}}},renderTarget:function(e){e.isOpen;var n=e.ref,o=(0,i.Z)(e,v);return a.createElement(b,(0,r.Z)({ref:n},o,{style:{height:m[1],width:m[0]}}))}}):a.createElement(a.Fragment,null)}},90628:function(e,n,o){"use strict";var t,r=o(32465),i=o(76593),d=o(32360),l=styled.div(t||(t=(0,r.Z)(["\n\n  && .altrp-nav-menu-dropdown-wrapper {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-label {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-label:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link:hover path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link svg {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link:hover svg {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link .altrp-nav-menu-li-link-icon {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link:hover .altrp-nav-menu-li-link-icon {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-overline:before,\n  && .altrp-nav-menu-li-underLine:after,\n  && .altrp-nav-menu-li-doubleLine:before,\n  && .altrp-nav-menu-li-framed:before,\n  && .altrp-nav-menu-li-framed:after,\n  && .altrp-nav-menu-li-background:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-overline:hover::before,\n  && .altrp-nav-menu-li-underLine:hover::after,\n  && .altrp-nav-menu-li-doubleLine:hover::before,\n  && .altrp-nav-menu-li-framed:hover::before,\n  && .altrp-nav-menu-li-framed:hover::after,\n  && .altrp-nav-menu-li-background:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-animation-text:hover .altrp-nav-menu-li-link-label {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-underline:after,\n  && .altrp-nav-menu-li-overline:before,\n  && .altrp-nav-menu-li-doubleLine:before {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-framed:hover::after {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-framed:hover:before {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-doubleLine:after {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-label-dropdown {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-label-dropdown:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-dropdown {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-dropdown:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-s-content-divider {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-s-content-divider:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-chevron-dropdown {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-chevron-dropdown:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-active-chevron-dropdown {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-active-chevron-dropdown:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-button svg {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-button:hover svg {\n\n    ","\n  }\n\n\n  && .altrp-nav-menu-dropdown-button svg path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-button:hover svg path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-button {\n\n    ","\n  }\n\n  && .altrp-nav-menu-dropdown-button:hover {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-link {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-link:hover {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-link:visited {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-default,\n  && .altrp-nav-breadcrumbs-separator-text {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-default:hover,\n  && .altrp-nav-breadcrumbs-separator-text:hover {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-icon svg {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-icon:hover svg {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-icon svg:hover {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-current {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-current:hover {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-icon svg path {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-separator-icon:hover svg path {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-label {\n\n    ","\n  }\n\n  && .altrp-nav-breadcrumbs-label:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-chevron-dropdown path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-link-chevron-dropdown:hover path {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-dropdown {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-dropdown:hover {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-sub {\n\n    ","\n  }\n\n  && .altrp-nav-menu-li-sub:hover {\n\n    ","\n  }\n\n  ","\n\n"])),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"toggle_align_dropdown_menu_layout")),n&&(t+=(0,d.simplePropertyStyled)(n,"justify-content")),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"typographic_main_menu_style")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"text_color_main_menu_style")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"typographic_main_menu_style",":hover")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"text_color_main_menu_style",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t,r=e.settings,l="";return void 0!==r&&(n=(0,i.getResponsiveSetting)(r,"text_color_main_menu_style")),n&&(l+=(0,d.colorPropertyStyled)(n,"color")),void 0!==r&&(o=(0,i.getResponsiveSetting)(r,"horizontal_padding_main_menu_style")),o&&(l+=(0,d.sizeStyled)(o,"padding-left"),l+=(0,d.sizeStyled)(o,"padding-right")),void 0!==r&&(t=(0,i.getResponsiveSetting)(r,"vertical_padding_main_menu_style")),t&&(l+=(0,d.sizeStyled)(t,"padding-top"),l+=(0,d.sizeStyled)(t,"padding-bottom")),l}),(function(e){var n,o,t,r=e.settings,l="";return void 0!==r&&(n=(0,i.getResponsiveSetting)(r,"text_color_main_menu_style",":hover")),n&&(l+=(0,d.colorPropertyStyled)(n,"color")),void 0!==r&&(o=(0,i.getResponsiveSetting)(r,"horizontal_padding_main_menu_style",":hover")),o&&(l+=(0,d.sizeStyled)(o,"padding-left"),l+=(0,d.sizeStyled)(o,"padding-right")),void 0!==r&&(t=(0,i.getResponsiveSetting)(r,"vertical_padding_main_menu_style",":hover")),t&&(l+=(0,d.sizeStyled)(t,"padding-top"),l+=(0,d.sizeStyled)(t,"padding-bottom")),l}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"fill_chevron_main_menu_style")),n&&(r+=(0,d.colorPropertyStyled)(n,"fill")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"stroke_chevron_main_menu_style")),o&&(r+=(0,d.colorPropertyStyled)(o,"stroke")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"fill_chevron_main_menu_style",":hover")),n&&(r+=(0,d.colorPropertyStyled)(n,"fill")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"stroke_chevron_main_menu_style",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"stroke")),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"size_chevron_main_menu_style")),n&&(t+=(0,d.iconSizeStyled)(n)),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"size_chevron_main_menu_style",":hover")),n&&(t+=(0,d.iconSizeStyled)(n)),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"space_between_main_menu_style")),n&&(t+=(0,d.sizeStyled)(n,"margin-right")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"space_between_main_menu_style",":hover")),n&&(t+=(0,d.sizeStyled)(n,"margin-right")),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"dropdown_indicator_space_main_menu_style")),n&&(r+=(0,d.sizeStyled)(n,"margin-left")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"chevron_rotate_main_menu_style")),o&&(r+=(0,d.transformRotateStyled)(o)),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"dropdown_indicator_space_main_menu_style",":hover")),n&&(r+=(0,d.sizeStyled)(n,"margin-left")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"chevron_rotate_main_menu_style",":hover")),o&&(r+=(0,d.transformRotateStyled)(o)),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_color_main_menu_style")),n&&(t+=(0,d.colorPropertyStyled)(n,"background-color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_color_main_menu_style",":hover")),n&&(t+=(0,d.colorPropertyStyled)(n,"background-color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_color_main_menu_style")),n&&(t+=(0,d.colorPropertyStyled)(n,"color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_height_main_menu_style")),n&&(t+=(0,d.sizeStyled)(n,"height")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_height_main_menu_style")),n&&(t+=(0,d.sizeStyled)(n,"border-right-width"),t+=(0,d.sizeStyled)(n,"border-bottom-width")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_height_main_menu_style")),n&&(t+=(0,d.sizeStyled)(n,"border-top-width"),t+=(0,d.sizeStyled)(n,"border-left-width")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"pointer_height_main_menu_style")),n&&(t+=(0,d.heightCalcStyled)(n)),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"text_color_dropdown_menu_section")),n&&(r+=(0,d.colorPropertyStyled)(n,"color")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"typographic_dropdown_menu_section")),o&&(r+=(0,d.typographicControllerToStyles)(o)),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"text_color_dropdown_menu_section",":hover")),n&&(r+=(0,d.colorPropertyStyled)(n,"color")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"typographic_dropdown_menu_section",":hover")),o&&(r+=(0,d.typographicControllerToStyles)(o)),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"horizontal_padding_dropdown_menu_section")),n&&(r+=(0,d.sizeStyled)(n,"padding-left"),r+=(0,d.sizeStyled)(n,"padding-right")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"vertical_padding_dropdown_menu_section")),o&&(r+=(0,d.sizeStyled)(o,"padding-top"),r+=(0,d.sizeStyled)(o,"padding-bottom")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"horizontal_padding_dropdown_menu_section",":hover")),n&&(r+=(0,d.sizeStyled)(n,"padding-left"),r+=(0,d.sizeStyled)(n,"padding-right")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"vertical_padding_dropdown_menu_section",":hover")),o&&(r+=(0,d.sizeStyled)(o,"padding-top"),r+=(0,d.sizeStyled)(o,"padding-bottom")),r}),(function(e){var n,o,t,r=e.settings,l="";return void 0!==r&&(n=(0,i.getResponsiveSetting)(r,"divider_type_dropdown_menu_section")),n&&(l+=(0,d.simplePropertyStyled)(n,"border-top-style")),void 0!==r&&(o=(0,i.getResponsiveSetting)(r,"divider_color_dropdown_menu_section")),o&&(l+=(0,d.colorPropertyStyled)(o,"border-top-color")),void 0!==r&&(t=(0,i.getResponsiveSetting)(r,"divider_width_dropdown_menu_section")),t&&(l+=(0,d.sizeStyled)(t,"border-top-width")),l}),(function(e){var n,o,t,r=e.settings,l="";return void 0!==r&&(n=(0,i.getResponsiveSetting)(r,"divider_type_dropdown_menu_section",":hover")),n&&(l+=(0,d.simplePropertyStyled)(n,"border-top-style")),void 0!==r&&(o=(0,i.getResponsiveSetting)(r,"divider_color_dropdown_menu_section",":hover")),o&&(l+=(0,d.colorPropertyStyled)(o,"border-top-color")),void 0!==r&&(t=(0,i.getResponsiveSetting)(r,"divider_width_dropdown_menu_section",":hover")),t&&(l+=(0,d.sizeStyled)(t,"border-top-width")),l}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"chevron_width_dropdown_menu_section")),n&&(r+=(0,d.iconSizeStyled)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"chevron_rotate_dropdown_menu_section")),o&&(r+=(0,d.transformRotateStyled)(o)),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"chevron_width_dropdown_menu_section",":hover")),n&&(r+=(0,d.iconSizeStyled)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"chevron_rotate_dropdown_menu_section",":hover")),o&&(r+=(0,d.transformRotateStyled)(o)),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"chevron_active_rotate_dropdown_menu_section")),n&&(t+=(0,d.transformRotateStyled)(n)),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"chevron_active_rotate_dropdown_menu_section",":hover")),n&&(t+=(0,d.transformRotateStyled)(n)),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"size_toggle_button_dropdown_menu_section")),n&&(t+=(0,d.iconSizeStyled)(n)),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"size_toggle_button_dropdown_menu_section",":hover")),n&&(t+=(0,d.iconSizeStyled)(n)),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"color_toggle_button_fill_dropdown_menu_section")),n&&(r+=(0,d.colorPropertyStyled)(n,"fill")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"color_toggle_button_stroke_dropdown_menu_section")),o&&(r+=(0,d.colorPropertyStyled)(o,"stroke")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"color_toggle_button_fill_dropdown_menu_section",":hover")),n&&(r+=(0,d.colorPropertyStyled)(n,"fill")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"color_toggle_button_stroke_dropdown_menu_section",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"stroke")),r}),(function(e){var n,o,t,r,l,s,a=e.settings,p="";return void 0!==a&&(n=(0,i.getResponsiveSetting)(a,"background_color_toggle_button_dropdown_menu_section")),n&&(p+=(0,d.colorPropertyStyled)(n,"background-color")),void 0!==a&&(o=(0,i.getResponsiveSetting)(a,"padding_toggle_button_dropdown_menu_section")),o&&(p+=(0,d.dimensionsControllerToStyles)(o)),void 0!==a&&(t=(0,i.getResponsiveSetting)(a,"border_type_toggle_button_dropdown_menu_section")),t&&(p+=(0,d.simplePropertyStyled)(t,"border-style")),void 0!==a&&(r=(0,i.getResponsiveSetting)(a,"border_width_toggle_button_dropdown_menu_section")),r&&(p+=(0,d.borderWidthStyled)(r)),void 0!==a&&(l=(0,i.getResponsiveSetting)(a,"border_color_toggle_button_dropdown_menu_section")),l&&(p+=(0,d.colorPropertyStyled)(l,"border-color")),void 0!==a&&(s=(0,i.getResponsiveSetting)(a,"border_radius_toggle_button_dropdown_menu_section")),s&&(p+=(0,d.dimensionsControllerToStyles)(s,"border-radius")),p}),(function(e){var n,o,t,r,l,s,a=e.settings,p="";return void 0!==a&&(n=(0,i.getResponsiveSetting)(a,"background_color_toggle_button_dropdown_menu_section",":hover")),n&&(p+=(0,d.colorPropertyStyled)(n,"background-color")),void 0!==a&&(o=(0,i.getResponsiveSetting)(a,"padding_toggle_button_dropdown_menu_section",":hover")),o&&(p+=(0,d.dimensionsControllerToStyles)(o)),void 0!==a&&(t=(0,i.getResponsiveSetting)(a,"border_type_toggle_button_dropdown_menu_section",":hover")),t&&(p+=(0,d.simplePropertyStyled)(t,"border-style")),void 0!==a&&(r=(0,i.getResponsiveSetting)(a,"border_width_toggle_button_dropdown_menu_section",":hover")),r&&(p+=(0,d.borderWidthStyled)(r)),void 0!==a&&(l=(0,i.getResponsiveSetting)(a,"border_color_toggle_button_dropdown_menu_section",":hover")),l&&(p+=(0,d.colorPropertyStyled)(l,"border-color")),void 0!==a&&(s=(0,i.getResponsiveSetting)(a,"border_radius_toggle_button_dropdown_menu_section",":hover")),s&&(p+=(0,d.dimensionsControllerToStyles)(s,"border-radius")),p}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_style_alignment")),n&&(r+=(0,d.simplePropertyStyled)(n,"justify-content")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_style_vertical_alignment")),o&&(r+=(0,d.simplePropertyStyled)(o,"align-items")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_links_style_typographic")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_links_style_color")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_links_style_typographic",":hover")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_links_style_color",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_links_visited_style_color")),n&&(t+=(0,d.colorPropertyStyled)(n,"color")),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_default_style_typographic")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_style_color")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_default_style_typographic",":hover")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_style_color",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_stroke_style_color")),n&&(r+=(0,d.colorPropertyStyled)(n,"stroke")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_separator_icon_width_style")),o&&(r+=(0,d.iconSizeStyled)(o)),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_separator_stroke_style_color",":hover")),n&&(t+=(0,d.colorPropertyStyled)(n,"stroke")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_separator_icon_width_style",":hover")),n&&(t+=(0,d.iconSizeStyled)(n)),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_current_page_style_typographic")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_current_page_style_color")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"breadcrumbs_current_page_style_typographic",":hover")),n&&(r+=(0,d.typographicControllerToStyles)(n)),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"breadcrumbs_current_page_style_color",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_separator_style_color")),n&&(t+=(0,d.colorPropertyStyled)(n,"fill")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_separator_style_color",":hover")),n&&(t+=(0,d.colorPropertyStyled)(n,"fill")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_style_space_between")),n&&(t+=(0,d.sizeStyled)(n,"padding-left"),t+=(0,d.sizeStyled)(n,"padding-right")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"breadcrumbs_style_space_between",":hover")),n&&(t+=(0,d.sizeStyled)(n,"padding-left"),t+=(0,d.sizeStyled)(n,"padding-right")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"chevron_color_dropdown_menu_section")),n&&(t+=(0,d.colorPropertyStyled)(n,"fill"),t+=(0,d.colorPropertyStyled)(n,"color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"chevron_color_dropdown_menu_section",":hover")),n&&(t+=(0,d.colorPropertyStyled)(n,"fill"),t+=(0,d.colorPropertyStyled)(n,"color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"background_color_dropdown_menu_section")),n&&(t+=(0,d.colorPropertyStyled)(n,"background-color")),t}),(function(e){var n,o=e.settings,t="";return void 0!==o&&(n=(0,i.getResponsiveSetting)(o,"background_color_dropdown_menu_section",":hover")),n&&(t+=(0,d.colorPropertyStyled)(n,"background-color")),t}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"background_color_sub_dropdown_menu_section")),n&&(r+=(0,d.colorPropertyStyled)(n,"background-color")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"color_sub_dropdown_menu_section")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t=e.settings,r="";return void 0!==t&&(n=(0,i.getResponsiveSetting)(t,"background_color_sub_dropdown_menu_section",":hover")),n&&(r+=(0,d.colorPropertyStyled)(n,"background-color")),void 0!==t&&(o=(0,i.getResponsiveSetting)(t,"color_sub_dropdown_menu_section",":hover")),o&&(r+=(0,d.colorPropertyStyled)(o,"color")),r}),(function(e){var n,o,t,r,l,s,a,p,v,_,c,u,g,m,h,y,S,b,w,f,R,k,P,z,C,T,E,O,x,L,j=e.settings,W=e.elementId;if(!W)return"";var Z=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon, .").concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon {");return void 0!==j&&(n=(0,i.getResponsiveSetting)(j,"chevron_rotate_dropdown_main_menu_style")),n&&(Z+=(0,d.transformRotateStyled)(n)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:hover .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon, .").concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:hover .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon {"),void 0!==j&&(n=(0,i.getResponsiveSetting)(j,"chevron_rotate_dropdown_main_menu_style",":hover")),n&&(Z+=(0,d.transformRotateStyled)(n)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-li-dropdown-hor-ver-link-label {"),void 0!==j&&(o=(0,i.getResponsiveSetting)(j,"typographic_dropdown_hor_ver_menu_section")),o&&(Z+=(0,d.typographicControllerToStyles)(o)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-li-dropdown-hor-ver-link-label:hover {"),void 0!==j&&(o=(0,i.getResponsiveSetting)(j,"typographic_dropdown_hor_ver_menu_section",":hover")),o&&(Z+=(0,d.typographicControllerToStyles)(o)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li .altrp-nav-menu-li-dropdown-hor-ver-link-label {"),void 0!==j&&(t=(0,i.getResponsiveSetting)(j,"text_color_dropdown_hor_ver_menu_section")),t&&(Z+=(0,d.colorPropertyStyled)(t,"color")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:hover .altrp-nav-menu-li-dropdown-hor-ver-link-label {"),void 0!==j&&(t=(0,i.getResponsiveSetting)(j,"text_color_dropdown_hor_ver_menu_section",":hover")),t&&(Z+=(0,d.colorPropertyStyled)(t,"color")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon path {"),void 0!==j&&(r=(0,i.getResponsiveSetting)(j,"text_color_dropdown_hor_ver_menu_section")),r&&(Z+=(0,d.colorPropertyStyled)(r,"stroke")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:hover .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon path {"),void 0!==j&&(r=(0,i.getResponsiveSetting)(j,"text_color_dropdown_hor_ver_menu_section",":hover")),r&&(Z+=(0,d.colorPropertyStyled)(r,"stroke")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li {"),void 0!==j&&(l=(0,i.getResponsiveSetting)(j,"background_color_dropdown_hor_ver_menu_section")),l&&(Z+=(0,d.colorPropertyStyled)(l,"background-color")),void 0!==j&&(s=(0,i.getResponsiveSetting)(j,"width_dropdown_hor_ver_menu_section")),s&&(Z+=(0,d.sizeStyled)(s,"width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:hover {"),void 0!==j&&(l=(0,i.getResponsiveSetting)(j,"background_color_dropdown_hor_ver_menu_section",":hover")),l&&(Z+=(0,d.colorPropertyStyled)(l,"background-color")),void 0!==j&&(s=(0,i.getResponsiveSetting)(j,"width_dropdown_hor_ver_menu_section",":hover")),s&&(Z+=(0,d.sizeStyled)(s,"width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver {"),void 0!==j&&(a=(0,i.getResponsiveSetting)(j,"border_type_dropdown_hor_ver_menu_section")),a&&(Z+=(0,d.simplePropertyStyled)(a,"border-style")),void 0!==j&&(p=(0,i.getResponsiveSetting)(j,"border_width_dropdown_hor_ver_menu_section")),p&&(Z+=(0,d.borderWidthStyled)(p)),void 0!==j&&(v=(0,i.getResponsiveSetting)(j,"border_color_dropdown_hor_ver_menu_section")),v&&(Z+=(0,d.colorPropertyStyled)(v,"border-color")),void 0!==j&&(_=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section")),_&&(Z+=(0,d.dimensionsControllerToStyles)(_,"border-radius")),void 0!==j&&(c=(0,i.getResponsiveSetting)(j,"distance_dropdown_hor_ver_menu_section")),c&&(Z+=(0,d.sizeStyled)(c,"margin-top")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver:hover {"),void 0!==j&&(a=(0,i.getResponsiveSetting)(j,"border_type_dropdown_hor_ver_menu_section",":hover")),a&&(Z+=(0,d.simplePropertyStyled)(a,"border-style")),void 0!==j&&(p=(0,i.getResponsiveSetting)(j,"border_width_dropdown_hor_ver_menu_section",":hover")),p&&(Z+=(0,d.borderWidthStyled)(p)),void 0!==j&&(v=(0,i.getResponsiveSetting)(j,"border_color_dropdown_hor_ver_menu_section",":hover")),v&&(Z+=(0,d.colorPropertyStyled)(v,"border-color")),void 0!==j&&(_=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section",":hover")),_&&(Z+=(0,d.dimensionsControllerToStyles)(_,"border-radius")),void 0!==j&&(c=(0,i.getResponsiveSetting)(j,"distance_dropdown_hor_ver_menu_section",":hover")),c&&(Z+=(0,d.sizeStyled)(c,"margin-top")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:first-child {"),void 0!==j&&(u=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section")),u&&(Z+="border-radius: ".concat(u.top).concat(u.unit," ").concat(u.right).concat(u.unit," 0 0; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:first-child:hover {"),void 0!==j&&(u=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section",":hover")),u&&(Z+="border-radius: ".concat(u.top).concat(u.unit," ").concat(u.right).concat(u.unit," 0 0; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:last-child {"),void 0!==j&&(g=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section")),g&&(Z+="border-radius: 0 0 ".concat(g.bottom).concat(g.unit," ").concat(g.left).concat(g.unit,"; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:last-child:hover {"),void 0!==j&&(g=(0,i.getResponsiveSetting)(j,"border_radius_dropdown_hor_ver_menu_section",":hover")),g&&(Z+="border-radius: 0 0 ".concat(g.bottom).concat(g.unit," ").concat(g.left).concat(g.unit,"; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon {"),void 0!==j&&(m=(0,i.getResponsiveSetting)(j,"submenu_indicator_space_main_menu_style")),m&&(Z+=(0,d.sizeStyled)(m,"margin-left")),void 0!==j&&(h=(0,i.getResponsiveSetting)(j,"typographic_submenu_dropdown_hor_ver_menu_section")),h&&(Z+=(0,d.typographicControllerToStyles)(h)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li-link-icon:hover {"),void 0!==j&&(m=(0,i.getResponsiveSetting)(j,"submenu_indicator_space_main_menu_style",":hover")),m&&(Z+=(0,d.sizeStyled)(m,"margin-left")),void 0!==j&&(h=(0,i.getResponsiveSetting)(j,"typographic_submenu_dropdown_hor_ver_menu_section",":hover")),h&&(Z+=(0,d.typographicControllerToStyles)(h)),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li .altrp-nav-menu-li-dropdown-children-hor-ver-link-label {"),void 0!==j&&(y=(0,i.getResponsiveSetting)(j,"text_color_submenu_dropdown_hor_ver_menu_section")),y&&(Z+=(0,d.colorPropertyStyled)(y,"color")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:hover .altrp-nav-menu-li-dropdown-children-hor-ver-link-label {"),void 0!==j&&(y=(0,i.getResponsiveSetting)(j,"text_color_submenu_dropdown_hor_ver_menu_section",":hover")),y&&(Z+=(0,d.colorPropertyStyled)(y,"color")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li .altrp-nav-menu-ul-dropdown-children-hor-ver-li-link-icon path {"),void 0!==j&&(S=(0,i.getResponsiveSetting)(j,"text_color_submenu_dropdown_hor_ver_menu_section")),S&&(Z+=(0,d.colorPropertyStyled)(S,"stroke")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:hover .altrp-nav-menu-ul-dropdown-children-hor-ver-li-link-icon path {"),void 0!==j&&(S=(0,i.getResponsiveSetting)(j,"text_color_submenu_dropdown_hor_ver_menu_section",":hover")),S&&(Z+=(0,d.colorPropertyStyled)(S,"stroke")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li {"),void 0!==j&&(b=(0,i.getResponsiveSetting)(j,"background_color_submenu_dropdown_hor_ver_menu_section")),b&&(Z+=(0,d.colorPropertyStyled)(b,"background")),void 0!==j&&(w=(0,i.getResponsiveSetting)(j,"width_submenu_dropdown_hor_ver_menu_section")),w&&(Z+=(0,d.sizeStyled)(w,"width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:hover {"),void 0!==j&&(b=(0,i.getResponsiveSetting)(j,"background_color_submenu_dropdown_hor_ver_menu_section",":hover")),b&&(Z+=(0,d.colorPropertyStyled)(b,"background")),void 0!==j&&(w=(0,i.getResponsiveSetting)(j,"width_submenu_dropdown_hor_ver_menu_section",":hover")),w&&(Z+=(0,d.sizeStyled)(w,"width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver {"),void 0!==j&&(f=(0,i.getResponsiveSetting)(j,"border_type_submenu_dropdown_hor_ver_menu_section")),f&&(Z+=(0,d.simplePropertyStyled)(f,"border-style")),void 0!==j&&(R=(0,i.getResponsiveSetting)(j,"border_width_submenu_dropdown_hor_ver_menu_section")),R&&(Z+=(0,d.borderWidthStyled)(R)),void 0!==j&&(k=(0,i.getResponsiveSetting)(j,"border_color_submenu_dropdown_hor_ver_menu_section")),k&&(Z+=(0,d.colorPropertyStyled)(k,"border-color")),void 0!==j&&(P=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section")),P&&(Z+=(0,d.dimensionsControllerToStyles)(P,"border-radius")),void 0!==j&&(z=(0,i.getResponsiveSetting)(j,"distance_submenu_dropdown_hor_ver_menu_section")),z&&(Z+=(0,d.sizeStyled)(z,"margin-right")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver:hover {"),void 0!==j&&(f=(0,i.getResponsiveSetting)(j,"border_type_submenu_dropdown_hor_ver_menu_section",":hover")),f&&(Z+=(0,d.simplePropertyStyled)(f,"border-style")),void 0!==j&&(R=(0,i.getResponsiveSetting)(j,"border_width_submenu_dropdown_hor_ver_menu_section",":hover")),R&&(Z+=(0,d.borderWidthStyled)(R)),void 0!==j&&(k=(0,i.getResponsiveSetting)(j,"border_color_submenu_dropdown_hor_ver_menu_section",":hover")),k&&(Z+=(0,d.colorPropertyStyled)(k,"border-color")),void 0!==j&&(P=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section",":hover")),P&&(Z+=(0,d.dimensionsControllerToStyles)(P,"border-radius")),void 0!==j&&(z=(0,i.getResponsiveSetting)(j,"distance_submenu_dropdown_hor_ver_menu_section",":hover")),z&&(Z+=(0,d.sizeStyled)(z,"margin-right")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li-divider {"),void 0!==j&&(C=(0,i.getResponsiveSetting)(j,"type_divider_dropdown_hor_ver_menu_section")),C&&(Z+=(0,d.simplePropertyStyled)(C,"border-top-style")),void 0!==j&&(T=(0,i.getResponsiveSetting)(j,"height_divider_dropdown_hor_ver_menu_section")),T&&(Z+=(0,d.sizeStyled)(T,"border-top-width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li-divider:hover {"),void 0!==j&&(T=(0,i.getResponsiveSetting)(j,"height_divider_dropdown_hor_ver_menu_section",":hover")),T&&(Z+=(0,d.sizeStyled)(T,"border-top-width")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-only .altrp-nav-menu-ul-dropdown-children-hor-ver-li {"),void 0!==j&&(E=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section")),E&&(Z+=(0,d.dimensionsControllerToStyles)(E,"border-radius")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-only:hover .altrp-nav-menu-ul-dropdown-children-hor-ver-li {"),void 0!==j&&(E=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section",":hover")),E&&(Z+=(0,d.dimensionsControllerToStyles)(E,"border-radius")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:first-child {"),void 0!==j&&(O=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section")),O&&(Z+="border-radius: ".concat(O.top).concat(O.unit," ").concat(O.right).concat(O.unit," 0 0; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-li:last-child {"),void 0!==j&&(x=(0,i.getResponsiveSetting)(j,"border-radius_submenu_dropdown_hor_ver_menu_section")),x&&(Z+="border-radius: 0 0 ".concat(x.bottom).concat(x.unit," ").concat(x.left).concat(x.unit,"; ")),Z+="} ",Z+=".".concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-hor-ver-li:last-child .altrp-nav-menu-ul-dropdown-hor-ver-li-divider, .").concat(W,"-altrp-portal .altrp-nav-menu-ul-dropdown-children-hor-ver-ul .altrp-nav-menu-ul-dropdown-children-hor-ver-li:last-child .altrp-nav-menu-ul-dropdown-hor-ver-li-divider {"),void 0!==j&&(L=(0,i.getResponsiveSetting)(j,"height_divider_dropdown_hor_ver_menu_section")),L&&(Z+="border-top: none; "),Z+"} "}));n.Z=l},61113:function(e,n,o){"use strict";o.d(n,{rh:function(){return t},Gk:function(){return r},qs:function(){return i}});var t="CHANGE_CURRENT_PAGE",r="CHANGE_CURRENT_PAGE_PROPERTY";function i(e,n){return{type:r,propertyName:e,value:n}}}}]);
//# sourceMappingURL=6993.45e3fb02e50f69f13a96.bundle.js.map