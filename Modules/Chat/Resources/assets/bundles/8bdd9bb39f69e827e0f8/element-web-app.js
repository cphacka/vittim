(window.webpackJsonp=window.webpackJsonp||[]).push([[8],{1336:function(e,o,n){"use strict";n.r(o),n.d(o,"loadApp",(function(){return y}));var t=n(82),i=n.n(t),r=n(109),a=n.n(r),s=n(86),l=n(106),c=n(84),d=n(247),u=n(262),f=n(277),g=n(87),w=n(93),h=n(29);window.React=i.a;let p=null;function m(e){const o=Object(h.b)(e);return{screen:o.location.substring(1),params:o.params}}function _(e){decodeURIComponent(window.location.hash)!==p&&function(e){if(!window.matrixChat)return;console.log("Routing URL ",e.href);const o=m(e);window.matrixChat.showScreen(o.screen,o.params)}(window.location)}function v(e,o=!1){console.log("newscreen "+e);const n="#/"+e;p=n,o?window.location.replace(n):window.location.assign(n)}function b(e){let o;o="vector:"===window.location.protocol?"https://app.element.io/#/register":window.location.protocol+"//"+window.location.host+window.location.pathname+"#/register";const n=Object.keys(e);for(let t=0;t<n.length;++t){o+=0===t?"?":"&";const i=n[t];o+=i+"="+encodeURIComponent(e[i])}return o}function C(){const e=a.a.parse(window.location.href);e.search="";const o=a.a.format(e);console.log(`Redirecting to ${o} to drop loginToken from queryparams`),window.history.replaceState(null,"",o)}async function y(e){const o=document.body.dataset.vectorIndexeddbWorkerScript;if(!o)throw Object(c.h)(Object(c.b)("Missing indexeddb worker script!"));g.a.setIndexedDbWorkerScript(o),window.addEventListener("hashchange",_);const n=l.a.get(),t=Object(h.a)(window.location),r=window.location.protocol+"//"+window.location.host+window.location.pathname;console.log("Vector starting at "+r),n.startUpdater();const a=await async function(){let e;try{console.log("Verifying homeserver configuration");const o=w.a.get();let n=o.default_server_config;const t=o.default_server_name,i=o.default_hs_url,r=o.default_is_url,a=[n,t,i].filter(e=>!!e);if(a.length>1)throw Object(c.h)(Object(c.b)("Invalid configuration: can only specify one of default_server_config, default_server_name, or default_hs_url."));if(a.length<1)throw Object(c.h)(Object(c.b)("Invalid configuration: no default server specified."));i&&(console.log("Config uses a default_hs_url - constructing a default_server_config using this information"),console.warn("DEPRECATED CONFIG OPTION: In the future, default_hs_url will not be accepted. Please use default_server_config instead."),n={"m.homeserver":{base_url:i}},r&&(n["m.identity_server"]={base_url:r}));let s=null;n&&(console.log("Config uses a default_server_config - validating object"),s=await u.a.fromDiscoveryConfig(n)),t&&(console.log("Config uses a default_server_name - doing .well-known lookup"),console.warn("DEPRECATED CONFIG OPTION: In the future, default_server_name will not be accepted. Please use default_server_config instead."),s=await u.a.findClientConfig(t)),e=d.b.buildValidatedConfigFromDiscovery(t,s,!0)}catch(o){const{hsUrl:n,isUrl:t,userId:i}=await f.c();if(!n||!i)throw o;console.error(o),console.warn("A session was found - suppressing config error and using the session's homeserver"),console.log("Using pre-existing hsUrl and isUrl: ",{hsUrl:n,isUrl:t}),e=await d.b.validateServerConfigWithStaticUrls(n,t,!0)}return e.isDefault=!0,console.log("Using homeserver config:",e),console.log("Updating SdkConfig with validated discovery information"),w.a.add({validated_server_config:e}),w.a.get()}(),p=s.getComponent("structures.MatrixChat");return i.a.createElement(p,{onNewScreen:v,makeRegistrationUrl:b,config:a,realQueryParams:t,startingFragmentQueryParams:e,enableGuest:!a.disable_guests,onTokenLoginCompleted:C,initialScreenAfterLogin:m(window.location),defaultDeviceDisplayName:n.getDefaultDeviceDisplayName()})}}}]);
//# sourceMappingURL=element-web-app.js.map