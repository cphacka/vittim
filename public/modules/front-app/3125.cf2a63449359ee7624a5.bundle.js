(self.webpackChunk=self.webpackChunk||[]).push([[3125],{33125:function(e,n,t){"use strict";t.d(n,{IG:function(){return Rt},vZ:function(){return Lt}});var r=t(67294),o=t(40173),i=t(49084),a=t(69680),u=t(18761),c=t(45697),l=t.n(c),s=t(50289),f=t(72685),d=t(55437),m=t(49649),g=t(30819),y=t(88383),h=new Date,v=new Date;function p(e,n,t,r){function o(n){return e(n=0===arguments.length?new Date:new Date(+n)),n}return o.floor=function(n){return e(n=new Date(+n)),n},o.ceil=function(t){return e(t=new Date(t-1)),n(t,1),e(t),t},o.round=function(e){var n=o(e),t=o.ceil(e);return e-n<t-e?n:t},o.offset=function(e,t){return n(e=new Date(+e),null==t?1:Math.floor(t)),e},o.range=function(t,r,i){var a,u=[];if(t=o.ceil(t),i=null==i?1:Math.floor(i),!(t<r&&i>0))return u;do{u.push(a=new Date(+t)),n(t,i),e(t)}while(a<t&&t<r);return u},o.filter=function(t){return p((function(n){if(n>=n)for(;e(n),!t(n);)n.setTime(n-1)}),(function(e,r){if(e>=e)if(r<0)for(;++r<=0;)for(;n(e,-1),!t(e););else for(;--r>=0;)for(;n(e,1),!t(e););}))},t&&(o.count=function(n,r){return h.setTime(+n),v.setTime(+r),e(h),e(v),Math.floor(t(h,v))},o.every=function(e){return e=Math.floor(e),isFinite(e)&&e>0?e>1?o.filter(r?function(n){return r(n)%e==0}:function(n){return o.count(0,n)%e==0}):o:null}),o}var b=864e5,x=6048e5;function M(e){return p((function(n){n.setUTCDate(n.getUTCDate()-(n.getUTCDay()+7-e)%7),n.setUTCHours(0,0,0,0)}),(function(e,n){e.setUTCDate(e.getUTCDate()+7*n)}),(function(e,n){return(n-e)/x}))}var T=M(0),w=M(1),S=M(2),O=M(3),C=M(4),k=M(5),D=M(6),E=(T.range,w.range,S.range,O.range,C.range,k.range,D.range,p((function(e){e.setUTCHours(0,0,0,0)}),(function(e,n){e.setUTCDate(e.getUTCDate()+n)}),(function(e,n){return(n-e)/b}),(function(e){return e.getUTCDate()-1}))),U=E;function F(e){return p((function(n){n.setDate(n.getDate()-(n.getDay()+7-e)%7),n.setHours(0,0,0,0)}),(function(e,n){e.setDate(e.getDate()+7*n)}),(function(e,n){return(n-e-6e4*(n.getTimezoneOffset()-e.getTimezoneOffset()))/x}))}E.range;var R=F(0),q=F(1),j=F(2),Y=F(3),L=F(4),H=F(5),z=F(6),A=(R.range,q.range,j.range,Y.range,L.range,H.range,z.range,p((function(e){e.setHours(0,0,0,0)}),(function(e,n){e.setDate(e.getDate()+n)}),(function(e,n){return(n-e-6e4*(n.getTimezoneOffset()-e.getTimezoneOffset()))/b}),(function(e){return e.getDate()-1}))),I=A,P=(A.range,p((function(e){e.setMonth(0,1),e.setHours(0,0,0,0)}),(function(e,n){e.setFullYear(e.getFullYear()+n)}),(function(e,n){return n.getFullYear()-e.getFullYear()}),(function(e){return e.getFullYear()})));P.every=function(e){return isFinite(e=Math.floor(e))&&e>0?p((function(n){n.setFullYear(Math.floor(n.getFullYear()/e)*e),n.setMonth(0,1),n.setHours(0,0,0,0)}),(function(n,t){n.setFullYear(n.getFullYear()+t*e)})):null};var W=P,V=(P.range,p((function(e){e.setUTCMonth(0,1),e.setUTCHours(0,0,0,0)}),(function(e,n){e.setUTCFullYear(e.getUTCFullYear()+n)}),(function(e,n){return n.getUTCFullYear()-e.getUTCFullYear()}),(function(e){return e.getUTCFullYear()})));V.every=function(e){return isFinite(e=Math.floor(e))&&e>0?p((function(n){n.setUTCFullYear(Math.floor(n.getUTCFullYear()/e)*e),n.setUTCMonth(0,1),n.setUTCHours(0,0,0,0)}),(function(n,t){n.setUTCFullYear(n.getUTCFullYear()+t*e)})):null};var Z=V;function X(e){if(0<=e.y&&e.y<100){var n=new Date(-1,e.m,e.d,e.H,e.M,e.S,e.L);return n.setFullYear(e.y),n}return new Date(e.y,e.m,e.d,e.H,e.M,e.S,e.L)}function N(e){if(0<=e.y&&e.y<100){var n=new Date(Date.UTC(-1,e.m,e.d,e.H,e.M,e.S,e.L));return n.setUTCFullYear(e.y),n}return new Date(Date.UTC(e.y,e.m,e.d,e.H,e.M,e.S,e.L))}function G(e,n,t){return{y:e,m:n,d:t,H:0,M:0,S:0,L:0}}V.range;var B,Q,$,J={"-":"",_:" ",0:"0"},_=/^\s*\d+/,K=/^%/,ee=/[\\^$*+?|[\]().{}]/g;function ne(e,n,t){var r=e<0?"-":"",o=(r?-e:e)+"",i=o.length;return r+(i<t?new Array(t-i+1).join(n)+o:o)}function te(e){return e.replace(ee,"\\$&")}function re(e){return new RegExp("^(?:"+e.map(te).join("|")+")","i")}function oe(e){for(var n={},t=-1,r=e.length;++t<r;)n[e[t].toLowerCase()]=t;return n}function ie(e,n,t){var r=_.exec(n.slice(t,t+1));return r?(e.w=+r[0],t+r[0].length):-1}function ae(e,n,t){var r=_.exec(n.slice(t,t+1));return r?(e.u=+r[0],t+r[0].length):-1}function ue(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.U=+r[0],t+r[0].length):-1}function ce(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.V=+r[0],t+r[0].length):-1}function le(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.W=+r[0],t+r[0].length):-1}function se(e,n,t){var r=_.exec(n.slice(t,t+4));return r?(e.y=+r[0],t+r[0].length):-1}function fe(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.y=+r[0]+(+r[0]>68?1900:2e3),t+r[0].length):-1}function de(e,n,t){var r=/^(Z)|([+-]\d\d)(?::?(\d\d))?/.exec(n.slice(t,t+6));return r?(e.Z=r[1]?0:-(r[2]+(r[3]||"00")),t+r[0].length):-1}function me(e,n,t){var r=_.exec(n.slice(t,t+1));return r?(e.q=3*r[0]-3,t+r[0].length):-1}function ge(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.m=r[0]-1,t+r[0].length):-1}function ye(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.d=+r[0],t+r[0].length):-1}function he(e,n,t){var r=_.exec(n.slice(t,t+3));return r?(e.m=0,e.d=+r[0],t+r[0].length):-1}function ve(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.H=+r[0],t+r[0].length):-1}function pe(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.M=+r[0],t+r[0].length):-1}function be(e,n,t){var r=_.exec(n.slice(t,t+2));return r?(e.S=+r[0],t+r[0].length):-1}function xe(e,n,t){var r=_.exec(n.slice(t,t+3));return r?(e.L=+r[0],t+r[0].length):-1}function Me(e,n,t){var r=_.exec(n.slice(t,t+6));return r?(e.L=Math.floor(r[0]/1e3),t+r[0].length):-1}function Te(e,n,t){var r=K.exec(n.slice(t,t+1));return r?t+r[0].length:-1}function we(e,n,t){var r=_.exec(n.slice(t));return r?(e.Q=+r[0],t+r[0].length):-1}function Se(e,n,t){var r=_.exec(n.slice(t));return r?(e.s=+r[0],t+r[0].length):-1}function Oe(e,n){return ne(e.getDate(),n,2)}function Ce(e,n){return ne(e.getHours(),n,2)}function ke(e,n){return ne(e.getHours()%12||12,n,2)}function De(e,n){return ne(1+I.count(W(e),e),n,3)}function Ee(e,n){return ne(e.getMilliseconds(),n,3)}function Ue(e,n){return Ee(e,n)+"000"}function Fe(e,n){return ne(e.getMonth()+1,n,2)}function Re(e,n){return ne(e.getMinutes(),n,2)}function qe(e,n){return ne(e.getSeconds(),n,2)}function je(e){var n=e.getDay();return 0===n?7:n}function Ye(e,n){return ne(R.count(W(e)-1,e),n,2)}function Le(e){var n=e.getDay();return n>=4||0===n?L(e):L.ceil(e)}function He(e,n){return e=Le(e),ne(L.count(W(e),e)+(4===W(e).getDay()),n,2)}function ze(e){return e.getDay()}function Ae(e,n){return ne(q.count(W(e)-1,e),n,2)}function Ie(e,n){return ne(e.getFullYear()%100,n,2)}function Pe(e,n){return ne((e=Le(e)).getFullYear()%100,n,2)}function We(e,n){return ne(e.getFullYear()%1e4,n,4)}function Ve(e,n){var t=e.getDay();return ne((e=t>=4||0===t?L(e):L.ceil(e)).getFullYear()%1e4,n,4)}function Ze(e){var n=e.getTimezoneOffset();return(n>0?"-":(n*=-1,"+"))+ne(n/60|0,"0",2)+ne(n%60,"0",2)}function Xe(e,n){return ne(e.getUTCDate(),n,2)}function Ne(e,n){return ne(e.getUTCHours(),n,2)}function Ge(e,n){return ne(e.getUTCHours()%12||12,n,2)}function Be(e,n){return ne(1+U.count(Z(e),e),n,3)}function Qe(e,n){return ne(e.getUTCMilliseconds(),n,3)}function $e(e,n){return Qe(e,n)+"000"}function Je(e,n){return ne(e.getUTCMonth()+1,n,2)}function _e(e,n){return ne(e.getUTCMinutes(),n,2)}function Ke(e,n){return ne(e.getUTCSeconds(),n,2)}function en(e){var n=e.getUTCDay();return 0===n?7:n}function nn(e,n){return ne(T.count(Z(e)-1,e),n,2)}function tn(e){var n=e.getUTCDay();return n>=4||0===n?C(e):C.ceil(e)}function rn(e,n){return e=tn(e),ne(C.count(Z(e),e)+(4===Z(e).getUTCDay()),n,2)}function on(e){return e.getUTCDay()}function an(e,n){return ne(w.count(Z(e)-1,e),n,2)}function un(e,n){return ne(e.getUTCFullYear()%100,n,2)}function cn(e,n){return ne((e=tn(e)).getUTCFullYear()%100,n,2)}function ln(e,n){return ne(e.getUTCFullYear()%1e4,n,4)}function sn(e,n){var t=e.getUTCDay();return ne((e=t>=4||0===t?C(e):C.ceil(e)).getUTCFullYear()%1e4,n,4)}function fn(){return"+0000"}function dn(){return"%"}function mn(e){return+e}function gn(e){return Math.floor(+e/1e3)}(B=function(e){var n=e.dateTime,t=e.date,r=e.time,o=e.periods,i=e.days,a=e.shortDays,u=e.months,c=e.shortMonths,l=re(o),s=oe(o),f=re(i),d=oe(i),m=re(a),g=oe(a),y=re(u),h=oe(u),v=re(c),p=oe(c),b={a:function(e){return a[e.getDay()]},A:function(e){return i[e.getDay()]},b:function(e){return c[e.getMonth()]},B:function(e){return u[e.getMonth()]},c:null,d:Oe,e:Oe,f:Ue,g:Pe,G:Ve,H:Ce,I:ke,j:De,L:Ee,m:Fe,M:Re,p:function(e){return o[+(e.getHours()>=12)]},q:function(e){return 1+~~(e.getMonth()/3)},Q:mn,s:gn,S:qe,u:je,U:Ye,V:He,w:ze,W:Ae,x:null,X:null,y:Ie,Y:We,Z:Ze,"%":dn},x={a:function(e){return a[e.getUTCDay()]},A:function(e){return i[e.getUTCDay()]},b:function(e){return c[e.getUTCMonth()]},B:function(e){return u[e.getUTCMonth()]},c:null,d:Xe,e:Xe,f:$e,g:cn,G:sn,H:Ne,I:Ge,j:Be,L:Qe,m:Je,M:_e,p:function(e){return o[+(e.getUTCHours()>=12)]},q:function(e){return 1+~~(e.getUTCMonth()/3)},Q:mn,s:gn,S:Ke,u:en,U:nn,V:rn,w:on,W:an,x:null,X:null,y:un,Y:ln,Z:fn,"%":dn},M={a:function(e,n,t){var r=m.exec(n.slice(t));return r?(e.w=g[r[0].toLowerCase()],t+r[0].length):-1},A:function(e,n,t){var r=f.exec(n.slice(t));return r?(e.w=d[r[0].toLowerCase()],t+r[0].length):-1},b:function(e,n,t){var r=v.exec(n.slice(t));return r?(e.m=p[r[0].toLowerCase()],t+r[0].length):-1},B:function(e,n,t){var r=y.exec(n.slice(t));return r?(e.m=h[r[0].toLowerCase()],t+r[0].length):-1},c:function(e,t,r){return O(e,n,t,r)},d:ye,e:ye,f:Me,g:fe,G:se,H:ve,I:ve,j:he,L:xe,m:ge,M:pe,p:function(e,n,t){var r=l.exec(n.slice(t));return r?(e.p=s[r[0].toLowerCase()],t+r[0].length):-1},q:me,Q:we,s:Se,S:be,u:ae,U:ue,V:ce,w:ie,W:le,x:function(e,n,r){return O(e,t,n,r)},X:function(e,n,t){return O(e,r,n,t)},y:fe,Y:se,Z:de,"%":Te};function T(e,n){return function(t){var r,o,i,a=[],u=-1,c=0,l=e.length;for(t instanceof Date||(t=new Date(+t));++u<l;)37===e.charCodeAt(u)&&(a.push(e.slice(c,u)),null!=(o=J[r=e.charAt(++u)])?r=e.charAt(++u):o="e"===r?" ":"0",(i=n[r])&&(r=i(t,o)),a.push(r),c=u+1);return a.push(e.slice(c,u)),a.join("")}}function S(e,n){return function(t){var r,o,i=G(1900,void 0,1);if(O(i,e,t+="",0)!=t.length)return null;if("Q"in i)return new Date(i.Q);if("s"in i)return new Date(1e3*i.s+("L"in i?i.L:0));if(n&&!("Z"in i)&&(i.Z=0),"p"in i&&(i.H=i.H%12+12*i.p),void 0===i.m&&(i.m="q"in i?i.q:0),"V"in i){if(i.V<1||i.V>53)return null;"w"in i||(i.w=1),"Z"in i?(o=(r=N(G(i.y,0,1))).getUTCDay(),r=o>4||0===o?w.ceil(r):w(r),r=U.offset(r,7*(i.V-1)),i.y=r.getUTCFullYear(),i.m=r.getUTCMonth(),i.d=r.getUTCDate()+(i.w+6)%7):(o=(r=X(G(i.y,0,1))).getDay(),r=o>4||0===o?q.ceil(r):q(r),r=I.offset(r,7*(i.V-1)),i.y=r.getFullYear(),i.m=r.getMonth(),i.d=r.getDate()+(i.w+6)%7)}else("W"in i||"U"in i)&&("w"in i||(i.w="u"in i?i.u%7:"W"in i?1:0),o="Z"in i?N(G(i.y,0,1)).getUTCDay():X(G(i.y,0,1)).getDay(),i.m=0,i.d="W"in i?(i.w+6)%7+7*i.W-(o+5)%7:i.w+7*i.U-(o+6)%7);return"Z"in i?(i.H+=i.Z/100|0,i.M+=i.Z%100,N(i)):X(i)}}function O(e,n,t,r){for(var o,i,a=0,u=n.length,c=t.length;a<u;){if(r>=c)return-1;if(37===(o=n.charCodeAt(a++))){if(o=n.charAt(a++),!(i=M[o in J?n.charAt(a++):o])||(r=i(e,t,r))<0)return-1}else if(o!=t.charCodeAt(r++))return-1}return r}return b.x=T(t,b),b.X=T(r,b),b.c=T(n,b),x.x=T(t,x),x.X=T(r,x),x.c=T(n,x),{format:function(e){var n=T(e+="",b);return n.toString=function(){return e},n},parse:function(e){var n=S(e+="",!1);return n.toString=function(){return e},n},utcFormat:function(e){var n=T(e+="",x);return n.toString=function(){return e},n},utcParse:function(e){var n=S(e+="",!0);return n.toString=function(){return e},n}}}({dateTime:"%x, %X",date:"%-m/%-d/%Y",time:"%-I:%M:%S %p",periods:["AM","PM"],days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],shortDays:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],shortMonths:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]})).format,Q=B.parse,B.utcFormat,$=B.utcParse;var yn,hn=t(44908),vn=t.n(hn),pn=t(45578),bn=t.n(pn),xn=t(89734),Mn=t.n(xn),Tn=t(10928),wn=t.n(Tn),Sn=t(47960),On=t.n(Sn),Cn={type:l().oneOf(["linear"]).isRequired,min:l().oneOfType([l().oneOf(["auto"]),l().number]),max:l().oneOfType([l().oneOf(["auto"]),l().number]),stacked:l().bool,reverse:l().bool,clamp:l().bool,nice:l().oneOfType([l().number,l().bool])},kn={type:l().oneOf(["log"]).isRequired,base:l().number,min:l().oneOfType([l().oneOf(["auto"]),l().number]),max:l().oneOfType([l().oneOf(["auto"]),l().number])},Dn={type:l().oneOf(["symlog"]).isRequired,constant:l().number,min:l().oneOfType([l().oneOf(["auto"]),l().number]),max:l().oneOfType([l().oneOf(["auto"]),l().number])},En={type:l().oneOf(["point"]).isRequired};function Un(e,n,t){return n in e?Object.defineProperty(e,n,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[n]=t,e}var Fn="millisecond",Rn="second",qn="minute",jn="hour",Yn="month",Ln="year",Hn=[Fn,Rn,qn,jn,"day",Yn,Ln],zn=[function(e){return e.setMilliseconds(0)},function(e){return e.setSeconds(0)},function(e){return e.setMinutes(0)},function(e){return e.setHours(0)},function(e){return e.setDate(1)},function(e){return e.setMonth(0)}],An=(Un(yn={},Fn,[]),Un(yn,Rn,zn.slice(0,1)),Un(yn,qn,zn.slice(0,2)),Un(yn,jn,zn.slice(0,3)),Un(yn,"day",zn.slice(0,4)),Un(yn,Yn,zn.slice(0,5)),Un(yn,Ln,zn.slice(0,6)),yn),In=function(e){var n=e.format,t=void 0===n?"native":n,r=e.precision,o=void 0===r?"millisecond":r,i=e.useUTC,a=void 0===i||i,u=function(e){return function(n){return An[e].forEach((function(e){e(n)})),n}}(o);if("native"===t)return function(e){return u(e)};var c=a?$(t):Q(t);return function(e){return u(c(e))}},Pn={type:l().oneOf(["time"]).isRequired,format:l().string,precision:l().oneOf(Hn),nice:l().oneOfType([l().bool,l().number,l().object])},Wn={type:l().oneOf(["band"]).isRequired,round:l().bool};function Vn(e,n){(null==n||n>e.length)&&(n=e.length);for(var t=0,r=new Array(n);t<n;t++)r[t]=e[t];return r}function Zn(e){return function(e){if(Array.isArray(e))return Vn(e)}(e)||function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}(e)||function(e,n){if(e){if("string"==typeof e)return Vn(e,n);var t=Object.prototype.toString.call(e).slice(8,-1);return"Object"===t&&e.constructor&&(t=e.constructor.name),"Map"===t||"Set"===t?Array.from(t):"Arguments"===t||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)?Vn(e,n):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function Xn(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function Nn(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?Xn(Object(t),!0).forEach((function(n){Un(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):Xn(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}var Gn=function(e,n){return e===n},Bn=function(e,n){return e.getTime()===n.getTime()},Qn=function(e,n,t,r){return"linear"===e.type?function(e,n,t,r){var o=e.axis,i=e.min,a=void 0===i?0:i,u=e.max,c=void 0===u?"auto":u,l=e.stacked,f=void 0!==l&&l,d=e.reverse,m=void 0!==d&&d,g=e.clamp,y=void 0!==g&&g,h=e.nice,v=void 0!==h&&h,p=n[o],b="x"===o?t:r,x=a;"auto"===a&&(x=!0===f?p.minStacked:p.min);var M=c;"auto"===c&&(M=!0===f?p.maxStacked:p.max);var T=(0,s.Z)().rangeRound("x"===o?[0,b]:[b,0]);return!0===m?T.domain([M,x]):T.domain([x,M]),!0===v?T.nice():"number"==typeof v&&T.nice(v),T.type="linear",T.stacked=f,T.clamp(y),T}(e,n,t,r):"point"===e.type?function(e,n,t,r){var o=e.axis,i=n[o],a="x"===o?t:r,u=(0,m.x)().range([0,a]).domain(i.all);return u.type="point",u}(e,n,t,r):"time"===e.type?function(e,n,t,r){var o=e.axis,i=e.format,a=void 0===i?"native":i,u=e.precision,c=void 0===u?Fn:u,l=e.min,s=void 0===l?"auto":l,f=e.max,d=void 0===f?"auto":f,m=e.useUTC,h=void 0===m||m,v=e.nice,p=void 0!==v&&v,b=n[o],x="x"===o?t:r,M=In({format:a,precision:c,useUTC:h}),T=s;"auto"===s?T=b.min:"native"!==a&&(T=M(s));var w=d;"auto"===d?w=b.max:"native"!==a&&(w=M(d));var S=h?(0,g.Z)():(0,y.Z)();return S.domain([T,w]).range([0,x]),!0===p?S.nice():"object"!=typeof p&&"number"!=typeof p||S.nice(p),S.type="time",S.useUTC=h,S}(e,n,t,r):"log"===e.type?function(e,n,t,r){var o,i=e.axis,a=e.base,u=void 0===a?10:a,c=e.min,l=void 0===c?"auto":c,s=e.max,d=void 0===s?"auto":s,m=n[i],g="x"===i?t:r,y=m.all.some((function(e){return 0===e})),h=!1;if(m.all.filter((function(e){return null!=e})).forEach((function(e){!0!==h&&(void 0===o?o=Math.sign(e):Math.sign(e)!==o&&(h=!0))})),y||h)throw new Error(["a log scale domain must be strictly-positive or strictly-negative,","and must not include or cross zero."].join("\n"));var v=l;"auto"===l&&(v=m.min);var p=d;"auto"===d&&(p=m.max);var b=(0,f.Z)().domain([v,p]).rangeRound("x"===i?[0,g]:[g,0]).base(u).nice();return b.type="log",b}(e,n,t,r):"symlog"===e.type?function(e,n,t,r){var o=e.axis,i=e.constant,a=void 0===i?1:i,u=e.min,c=void 0===u?"auto":u,l=e.max,s=void 0===l?"auto":l,f=n[o],m="x"===o?t:r,g=c;"auto"===c&&(g=f.min);var y=s;"auto"===s&&(y=f.max);var h=(0,d.Z)().domain([g,y]).constant(a).rangeRound("x"===o?[0,m]:[m,0]).nice();return h.type="symlog",h}(e,n,t,r):void 0},$n=function(e,n,t){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{},o=r.getValue,i=void 0===o?function(e){return e.data[n]}:o,a=r.setValue,u=void 0===a?function(e,t){e.data[n]=t}:a;if("linear"===t.type)e.forEach((function(e){e.data.forEach((function(e){u(e,null===i(e)?null:parseFloat(i(e)))}))}));else if("time"===t.type&&"native"!==t.format){var c=In(t);e.forEach((function(e){e.data.forEach((function(e){u(e,null===i(e)?null:c(i(e)))}))}))}var l,s,f=[];return e.forEach((function(e){e.data.forEach((function(e){f.push(i(e))}))})),"linear"===t.type?(f=vn()(f),f=Mn()(f,(function(e){return e})),l=Math.min.apply(Math,Zn(f)),s=Math.max.apply(Math,Zn(f))):"time"===t.type?(l=(f=(f=bn()(f,(function(e){return e.getTime()}))).slice(0).sort((function(e,n){return n-e})).reverse())[0],s=wn()(f)):(l=(f=vn()(f))[0],s=wn()(f)),{all:f,min:l,max:s}},Jn=function(e,n,t,r){var o=function(e){return"x"===e?"y":"x"}(e),i=[];t[o].all.forEach((function(n){var t=On()(n)?Bn:Gn,a=[];r.forEach((function(r){var u=r.data.find((function(e){return t(e.data[o],n)})),c=null,l=null;if(void 0!==u){if(null!==(c=u.data[e])){var s=wn()(a);void 0===s?l=c:null!==s&&(l=s+c)}u.data["".concat(e,"Stacked")]=l}a.push(l),i.push(l)}))})),i=i.filter((function(e){return null!==e})),t[e].minStacked=Math.min.apply(Math,Zn(i)),t[e].maxStacked=Math.max.apply(Math,Zn(i))},_n=l().oneOfType([l().shape(Cn),l().shape(En),l().shape(Pn),l().shape(kn),l().shape(Dn),l().shape(Wn)]),Kn=t(43790),et=t(27361),nt=t.n(et),tt=t(47037),rt=t.n(tt),ot=t(81763),it=t.n(ot),at=t(68630),ut=t.n(at),ct=t(49742),lt=t(37727),st=t(30812);function ft(e,n,t){return n in e?Object.defineProperty(e,n,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[n]=t,e}function dt(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function mt(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?dt(Object(t),!0).forEach((function(n){ft(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):dt(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}function gt(e,n){(null==n||n>e.length)&&(n=e.length);for(var t=0,r=new Array(n);t<n;t++)r[t]=e[t];return r}function yt(e,n){if(e){if("string"==typeof e)return gt(e,n);var t=Object.prototype.toString.call(e).slice(8,-1);return"Object"===t&&e.constructor&&(t=e.constructor.name),"Map"===t||"Set"===t?Array.from(t):"Arguments"===t||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)?gt(e,n):void 0}}function ht(e){return function(e){if(Array.isArray(e))return gt(e)}(e)||function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}(e)||yt(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var vt=function(e){var n,t=e.data,i=e.xScaleSpec,a=e.xFormat,c=e.yScaleSpec,l=e.yFormat,f=e.width,d=e.height,m=e.nodeSize,g=e.colors,y=(0,r.useMemo)((function(){return function(e,n,t,r,o){var i=e.map((function(e){return Nn(Nn({},e),{},{data:e.data.map((function(e){return{data:Nn({},e)}}))})})),a=function(e,n,t){return{x:$n(e,"x",n),y:$n(e,"y",t)}}(i,n,t);!0===n.stacked&&function(e,n,t){Jn("x",0,n,t)}(t.type,a,i),!0===t.stacked&&function(e,n,t){Jn("y",0,n,t)}(n.type,a,i);var u=Qn(Nn(Nn({},n),{},{axis:"x"}),a,r,o),c=Qn(Nn(Nn({},t),{},{axis:"y"}),a,r,o);return i.forEach((function(e){e.data.forEach((function(e){e.position={x:!0===u.stacked?null===e.data.xStacked?null:u(e.data.xStacked):null===e.data.x?null:u(e.data.x),y:!0===c.stacked?null===e.data.yStacked?null:c(e.data.yStacked):null===e.data.y?null:c(e.data.y)}}))})),Nn(Nn({},a),{},{series:i,xScale:u,yScale:c})}(t,i,c,f,d)}),[t,i,c,f,d]),h=y.series,v=y.xScale,p=y.yScale,b=(0,o.O_)(a),x=(0,o.O_)(l),M=(0,r.useMemo)((function(){return function(e){var n=e.formatX,t=e.formatY;return e.series.reduce((function(e,r){return[].concat(ht(e),ht(r.data.map((function(o,i){return{index:e.length+i,id:"".concat(r.id,".").concat(i),x:o.position.x,y:o.position.y,data:mt(mt({},o.data),{},{id:"".concat(r.id,".").concat(i),serieId:r.id,formattedX:n(o.data.x),formattedY:t(o.data.y)})}}))))}),[])}({series:h,formatX:b,formatY:x})}),[h,b,x]),T=(n=m,(0,r.useMemo)((function(){return function(e){if("function"==typeof e)return e;if(it()(e))return function(){return e};if(ut()(e)){if(!rt()(e.key))throw new Error("symbolSize is invalid, key should be a string pointing to the property to use to determine node size");if(!Array.isArray(e.values)||2!==e.values.length)throw new Error("symbolSize is invalid, values spec should be an array containing two values, min and max");if(!Array.isArray(e.sizes)||2!==e.sizes.length)throw new Error("symbolSize is invalid, sizes spec should be an array containing two values, min and max");var n=(0,s.Z)().domain([e.values[0],e.values[1]]).range([e.sizes[0],e.sizes[1]]);return function(t){return n(nt()(t,e.key))}}throw new Error("symbolSize is invalid, it should be either a function, a number or an object")}(n)}),[n])),w=(0,u.U)(g,"serieId");return{xScale:v,yScale:p,nodes:(0,r.useMemo)((function(){return M.map((function(e){return mt(mt({},e),{},{size:T(e.data),style:{color:w(e.data)}})}))}),[M,T,w]),legendData:(0,r.useMemo)((function(){return h.map((function(e){return{id:e.id,label:e.id,color:w({serieId:e.id})}}))}),[h,w])}},pt=function(e,n){return(0,Kn.O2)({items:e,annotations:n,getDimensions:function(e,n){var t=e.size+2*n;return{size:t,width:t,height:t}}})},bt=(0,r.memo)((function(e){var n=e.x,t=e.y,o=e.size,i=e.color,a=e.blendMode,u=e.onMouseEnter,c=e.onMouseMove,l=e.onMouseLeave,s=e.onClick;return r.createElement("circle",{cx:n,cy:t,r:o/2,fill:i,style:{mixBlendMode:a},onMouseEnter:u,onMouseMove:c,onMouseLeave:l,onClick:s})})),xt=(0,r.memo)((function(e){var n=e.node;return r.createElement(ct._5,{id:n.data.serieId,value:"x: ".concat(n.data.formattedX,", y: ").concat(n.data.formattedY),enableChip:!0,color:n.style.color})})),Mt={data:l().arrayOf(l().shape({id:l().oneOfType([l().string,l().number]).isRequired,data:l().arrayOf(l().shape({x:l().oneOfType([l().number,l().string,l().instanceOf(Date)]).isRequired,y:l().oneOfType([l().number,l().string,l().instanceOf(Date)]).isRequired})).isRequired})).isRequired,xScale:_n.isRequired,xFormat:l().any,yScale:_n.isRequired,yFormat:l().any,layers:l().arrayOf(l().oneOfType([l().oneOf(["grid","axes","nodes","markers","mesh","legends","annotations"]),l().func])).isRequired,enableGridX:l().bool.isRequired,enableGridY:l().bool.isRequired,axisTop:i.VT,axisRight:i.VT,axisBottom:i.VT,axisLeft:i.VT,annotations:l().arrayOf(Kn.IV).isRequired,nodeSize:l().oneOfType([l().number,l().shape({key:l().string.isRequired,values:l().arrayOf(l().number).isRequired,sizes:l().arrayOf(l().number).isRequired}),l().func]).isRequired,renderNode:l().oneOfType([l().func,l().object]).isRequired,colors:u.qi.isRequired,blendMode:o.wM.isRequired,isInteractive:l().bool.isRequired,debugMesh:l().bool.isRequired,onMouseEnter:l().func,onMouseMove:l().func,onMouseLeave:l().func,onClick:l().func,tooltip:l().oneOfType([l().func,l().object]).isRequired,markers:l().arrayOf(l().shape({axis:l().oneOf(["x","y"]).isRequired,value:l().oneOfType([l().number,l().string]).isRequired,style:l().object})),legends:l().arrayOf(l().shape(a.iQ)).isRequired},Tt=(mt(mt({},Mt),{},{role:l().string.isRequired,useMesh:l().bool.isRequired},o.w$),mt(mt({},Mt),{},{pixelRatio:l().number.isRequired}),{xScale:{type:"linear",min:0,max:"auto"},yScale:{type:"linear",min:0,max:"auto"},enableGridX:!0,enableGridY:!0,axisBottom:{},axisLeft:{},nodeSize:9,renderNode:bt,colors:{scheme:"nivo"},blendMode:"normal",isInteractive:!0,debugMesh:!1,tooltip:xt,markers:[],legends:[],annotations:[]}),wt=mt(mt({},Tt),{},{layers:["grid","axes","nodes","markers","mesh","legends","annotations"],role:"img",useMesh:!0,animate:!0,motionStiffness:90,motionDamping:15}),St=mt(mt({},Tt),{},{layers:["grid","axes","nodes","mesh","legends","annotations"],pixelRatio:{}.window&&{}.window.devicePixelRatio?{}.window.devicePixelRatio:1}),Ot=(l().shape({id:l().string.isRequired,x:l().number.isRequired,y:l().number.isRequired,size:l().number.isRequired,data:l().shape({id:l().string.isRequired,serieId:l().oneOfType([l().string,l().number]).isRequired,x:l().oneOfType([l().number,l().string,l().instanceOf(Date)]).isRequired,formattedX:l().oneOfType([l().string,l().number]).isRequired,y:l().oneOfType([l().number,l().string,l().instanceOf(Date)]).isRequired,formattedY:l().oneOfType([l().string,l().number]).isRequired}).isRequired,style:l().shape({color:l().string.isRequired}).isRequired}),(0,r.memo)((function(e){var n=e.node,t=e.renderNode,o=e.x,i=e.y,a=e.size,u=e.color,c=e.isInteractive,l=e.onMouseEnter,s=e.onMouseMove,f=e.onMouseLeave,d=e.onClick,m=e.tooltip,g=e.blendMode,y=(0,ct.lL)(),h=y.showTooltipFromEvent,v=y.hideTooltip,p=(0,r.useCallback)((function(e){h(r.createElement(m,{node:n}),e),l&&l(n,e)}),[n,m,h,l]),b=(0,r.useCallback)((function(e){h(r.createElement(m,{node:n}),e),s&&s(n,e)}),[n,m,h,s]),x=(0,r.useCallback)((function(e){v(),f&&f(n,e)}),[n,v,f]),M=(0,r.useCallback)((function(e){d&&d(n,e)}),[n,d]);return r.createElement(t,{node:n,x:o,y:i,size:a,color:u,blendMode:g,onMouseEnter:c?p:void 0,onMouseMove:c?b:void 0,onMouseLeave:c?x:void 0,onClick:c&&d?M:void 0})}))),Ct=(0,r.memo)((function(e){var n=e.nodes,t=e.renderNode,i=e.isInteractive,a=e.onMouseEnter,u=e.onMouseMove,c=e.onMouseLeave,l=e.onClick,s=e.tooltip,f=e.blendMode,d=(0,o.tf)().springConfig;return r.createElement(lt.bg,{styles:n.map((function(e){return{key:e.id,data:e,style:{x:(0,lt.ST)(e.x,d),y:(0,lt.ST)(e.y,d),size:(0,lt.ST)(e.size,d)}}}))},(function(e){return r.createElement(r.Fragment,null,e.map((function(e){var n=e.key,o=e.style,d=e.data;return r.createElement(Ot,{key:n,node:d,renderNode:t,x:o.x,y:o.y,size:o.size,color:d.style.color,isInteractive:i,onMouseEnter:a,onMouseMove:u,onMouseLeave:c,onClick:l,tooltip:s,blendMode:f})})))}))})),kt=function(e){var n=e.nodes,t=e.annotations,o=e.innerWidth,i=e.innerHeight;return pt(n,t).map((function(e,n){return r.createElement(Kn.q6,Object.assign({key:n},e,{containerWidth:o,containerHeight:i}))}))},Dt=(0,r.memo)((function(e){var n=e.nodes,t=e.renderNode,o=e.isInteractive,i=e.onMouseEnter,a=e.onMouseMove,u=e.onMouseLeave,c=e.onClick,l=e.tooltip,s=e.blendMode;return n.map((function(e){return r.createElement(Ot,{key:e.id,node:e,renderNode:t,x:e.x,y:e.y,size:e.size,color:e.style.color,isInteractive:o,onMouseEnter:i,onMouseMove:a,onMouseLeave:u,onClick:c,tooltip:l,blendMode:s})}))})),Et=(0,r.memo)((function(e){var n=e.nodes,t=e.width,o=e.height,i=e.onMouseEnter,a=e.onMouseMove,u=e.onMouseLeave,c=e.onClick,l=e.tooltip,s=e.debug,f=(0,ct.lL)(),d=f.showTooltipFromEvent,m=f.hideTooltip,g=(0,r.useCallback)((function(e,n){d(r.createElement(l,{node:e}),n),i&&i(e,n)}),[d,l,i]),y=(0,r.useCallback)((function(e,n){d(r.createElement(l,{node:e}),n),a&&a(e,n)}),[d,l,a]),h=(0,r.useCallback)((function(e,n){m(),u&&u(e,n)}),[m,u]),v=(0,r.useCallback)((function(e,n){c&&c(e,n)}),[c]);return r.createElement(st.Kj,{nodes:n,width:t,height:o,onMouseEnter:g,onMouseMove:y,onMouseLeave:h,onClick:v,debug:s})})),Ut=function(e){var n=e.data,t=e.xScale,u=e.xFormat,c=e.yScale,l=e.yFormat,s=e.width,f=e.height,d=e.margin,m=e.layers,g=e.colors,y=e.blendMode,h=e.nodeSize,v=e.renderNode,p=e.enableGridX,b=e.enableGridY,x=e.gridXValues,M=e.gridYValues,T=e.axisTop,w=e.axisRight,S=e.axisBottom,O=e.axisLeft,C=e.annotations,k=e.isInteractive,D=e.useMesh,E=e.debugMesh,U=e.onMouseEnter,F=e.onMouseMove,R=e.onMouseLeave,q=e.onClick,j=e.tooltip,Y=e.markers,L=e.legends,H=e.role,z=(0,o.Bs)(s,f,d),A=z.margin,I=z.innerWidth,P=z.innerHeight,W=z.outerWidth,V=z.outerHeight,Z=(0,o.Fg)(),X=(0,o.tf)().animate,N=vt({data:n,xScaleSpec:t,xFormat:u,yScaleSpec:c,yFormat:l,width:I,height:P,nodeSize:h,colors:g}),G=N.xScale,B=N.yScale,Q=N.nodes,$=N.legendData,J=(0,r.useMemo)((function(){return mt(mt({},e),{},{xScale:G,yScale:B,nodes:Q,margin:A,innerWidth:I,innerHeight:P,outerWidth:W,outerHeight:V})}),[G,B,Q,A,I,P,W,V]),_=X?Ct:Dt,K={grid:r.createElement(i.rj,{key:"grid",width:I,height:P,xScale:p?G:null,yScale:b?B:null,xValues:x,yValues:M}),axes:r.createElement(i.dk,{key:"axes",xScale:G,yScale:B,width:I,height:P,top:T,right:w,bottom:S,left:O}),nodes:r.createElement(_,{key:"nodes",nodes:Q,renderNode:v,isInteractive:k,onMouseEnter:U,onMouseMove:F,onMouseLeave:R,onClick:q,tooltip:j,blendMode:y}),markers:r.createElement(o.TL,{key:"markers",markers:Y,width:I,height:P,xScale:G,yScale:B}),mesh:null,annotations:r.createElement(kt,{key:"annotations",nodes:Q,annotations:C,innerWidth:I,innerHeight:P,animate:X}),legends:L.map((function(e,n){return r.createElement(a.$6,Object.assign({key:n},e,{containerWidth:I,containerHeight:P,data:$,theme:Z}))}))};return!0===k&&!0===D&&(K.mesh=r.createElement(Et,{key:"mesh",nodes:Q,width:I,height:P,onMouseEnter:U,onMouseMove:F,onMouseLeave:R,onClick:q,tooltip:j,debug:E})),r.createElement(o.tM,{width:W,height:V,margin:A,theme:Z,role:H},m.map((function(e,n){if(void 0!==K[e])return K[e];if("function"==typeof e)return r.createElement(r.Fragment,{key:n},r.createElement(e,J));throw new Error("Unknown layer (".concat(e,")"))})))};Ut.defaultProps=wt;var Ft=(0,r.memo)((0,o.li)(Ut)),Rt=function(e){return r.createElement(o.d,null,(function(n){var t=n.width,o=n.height;return r.createElement(Ft,Object.assign({width:t,height:o},e))}))};function qt(e,n){return function(e){if(Array.isArray(e))return e}(e)||function(e,n){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var t=[],r=!0,o=!1,i=void 0;try{for(var a,u=e[Symbol.iterator]();!(r=(a=u.next()).done)&&(t.push(a.value),!n||t.length!==n);r=!0);}catch(e){o=!0,i=e}finally{try{r||null==u.return||u.return()}finally{if(o)throw i}}return t}}(e,n)||yt(e,n)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var jt=function(e){var n=e.data,t=e.xScale,u=e.xFormat,c=e.yScale,l=e.yFormat,s=e.width,f=e.height,d=e.margin,m=e.pixelRatio,g=e.layers,y=e.colors,h=e.nodeSize,v=e.renderNode,p=e.enableGridX,b=e.gridXValues,x=e.enableGridY,M=e.gridYValues,T=e.axisTop,w=e.axisRight,S=e.axisBottom,O=e.axisLeft,C=e.annotations,k=e.isInteractive,D=e.debugMesh,E=e.onMouseEnter,U=e.onMouseMove,F=e.onMouseLeave,R=e.onClick,q=e.tooltip,j=e.legends,Y=(0,r.useRef)(null),L=(0,o.Fg)(),H=qt((0,r.useState)(null),2),z=H[0],A=H[1],I=(0,o.Bs)(s,f,d),P=I.margin,W=I.innerWidth,V=I.innerHeight,Z=I.outerWidth,X=I.outerHeight,N=vt({data:n,xScaleSpec:t,xFormat:u,yScaleSpec:c,yFormat:l,width:W,height:V,nodeSize:h,colors:y}),G=N.xScale,B=N.yScale,Q=N.nodes,$=N.legendData,J=pt(Q,C),_=(0,st.ZR)({points:Q,width:W,height:V,debug:D}),K=_.delaunay,ee=_.voronoi,ne=(0,r.useMemo)((function(){return mt(mt({},e),{},{xScale:G,yScale:B,nodes:Q,margin:P,innerWidth:W,innerHeight:V,outerWidth:Z,outerHeight:X})}),[G,B,Q,P,W,V,Z,X]);(0,r.useEffect)((function(){Y.current.width=Z*m,Y.current.height=X*m;var e=Y.current.getContext("2d");e.scale(m,m),e.fillStyle=L.background,e.fillRect(0,0,Z,X),e.translate(P.left,P.top),g.forEach((function(n){if("grid"===n)e.lineWidth=L.grid.line.strokeWidth,e.strokeStyle=L.grid.line.stroke,p&&(0,i.FA)(e,{width:W,height:V,scale:G,axis:"x",values:b}),x&&(0,i.FA)(e,{width:W,height:V,scale:B,axis:"y",values:M});else if("annotations"===n)(0,Kn.dS)(e,{annotations:J,theme:L});else if("axes"===n)(0,i.DZ)(e,{xScale:G,yScale:B,width:W,height:V,top:T,right:w,bottom:S,left:O,theme:L});else if("nodes"===n)Q.forEach((function(n){v(e,n)}));else if("mesh"===n)!0===D&&((0,st.qF)(e,ee),z&&(0,st.r$)(e,ee,z.index));else if("legends"===n)j.forEach((function(n){(0,a.as)(e,mt(mt({},n),{},{data:$,containerWidth:W,containerHeight:V,theme:L}))}));else{if("function"!=typeof n)throw new Error("Invalid layer: ".concat(n));n(e,ne)}}))}),[Y,W,V,Z,X,P.top,P.left,m,v,g,ne,L,G,B,Q,p,x,T,w,S,O,j,$,D,ee,z]);var te=(0,ct.lL)(),re=te.showTooltipFromEvent,oe=te.hideTooltip,ie=(0,r.useCallback)((function(e){var n=qt((0,o.P6)(Y.current,e),2),t=n[0],r=n[1];if(!(0,o.zn)(P.left,P.top,W,V,t,r))return null;var i=K.find(t-P.left,r-P.top);return Q[i]}),[Y,P,W,V,K]),ae=(0,r.useCallback)((function(e){var n=ie(e);A(n),n?(re(r.createElement(q,{node:n}),e),z&&z.id!==n.id&&(F&&F(z,e),E&&E(n,e)),z||E&&E(n,e),U&&U(n,e)):(oe(),z&&F&&F(z,e))}),[ie,z,A,re,oe,q,E,U,F]),ue=(0,r.useCallback)((function(e){oe(),A(null),z&&F&&F(z,e)}),[oe,z,A,F]),ce=(0,r.useCallback)((function(e){if(R){var n=ie(e);n&&R(n,e)}}),[ie,R]);return r.createElement("canvas",{ref:Y,width:Z*m,height:X*m,style:{width:Z,height:X,cursor:k?"auto":"normal"},onMouseEnter:k?ae:void 0,onMouseMove:k?ae:void 0,onMouseLeave:k?ue:void 0,onClick:k?ce:void 0})};jt.defaultProps=mt(mt({},St),{},{renderNode:function(e,n){e.beginPath(),e.arc(n.x,n.y,n.size/2,0,2*Math.PI),e.fillStyle=n.style.color,e.fill()}});var Yt=(0,r.memo)((0,o.li)(jt)),Lt=function(e){return r.createElement(o.d,null,(function(n){var t=n.width,o=n.height;return r.createElement(Yt,Object.assign({width:t,height:o},e))}))}}}]);
//# sourceMappingURL=3125.cf2a63449359ee7624a5.bundle.js.map