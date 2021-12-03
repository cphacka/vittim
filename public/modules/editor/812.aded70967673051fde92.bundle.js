(self.webpackChunk=self.webpackChunk||[]).push([[812],{30812:function(t,e,n){"use strict";n.d(e,{Kj:function(){return C},r$:function(){return F},qF:function(){return E},ZR:function(){return $}});var i=n(67294),s=n(40173);const l=Math.pow(2,-52),r=new Uint32Array(512);class h{static from(t,e=_,n=y){const i=t.length,s=new Float64Array(2*i);for(let l=0;l<i;l++){const i=t[l];s[2*l]=e(i),s[2*l+1]=n(i)}return new h(s)}constructor(t){const e=t.length>>1;if(e>0&&"number"!=typeof t[0])throw new Error("Expected coords to contain numbers.");this.coords=t;const n=Math.max(2*e-5,0);this._triangles=new Uint32Array(3*n),this._halfedges=new Int32Array(3*n),this._hashSize=Math.ceil(Math.sqrt(e)),this._hullPrev=new Uint32Array(e),this._hullNext=new Uint32Array(e),this._hullTri=new Uint32Array(e),this._hullHash=new Int32Array(this._hashSize).fill(-1),this._ids=new Uint32Array(e),this._dists=new Float64Array(e),this.update()}update(){const{coords:t,_hullPrev:e,_hullNext:n,_hullTri:i,_hullHash:s}=this,r=t.length>>1;let h=1/0,a=1/0,c=-1/0,g=-1/0;for(let e=0;e<r;e++){const n=t[2*e],i=t[2*e+1];n<h&&(h=n),i<a&&(a=i),n>c&&(c=n),i>g&&(g=i),this._ids[e]=e}const _=(h+c)/2,y=(a+g)/2;let m,x,p,v=1/0;for(let e=0;e<r;e++){const n=o(_,y,t[2*e],t[2*e+1]);n<v&&(m=e,v=n)}const w=t[2*m],b=t[2*m+1];v=1/0;for(let e=0;e<r;e++){if(e===m)continue;const n=o(w,b,t[2*e],t[2*e+1]);n<v&&n>0&&(x=e,v=n)}let M=t[2*x],k=t[2*x+1],A=1/0;for(let e=0;e<r;e++){if(e===m||e===x)continue;const n=f(w,b,M,k,t[2*e],t[2*e+1]);n<A&&(p=e,A=n)}let T=t[2*p],S=t[2*p+1];if(A===1/0){for(let e=0;e<r;e++)this._dists[e]=t[2*e]-t[0]||t[2*e+1]-t[1];d(this._ids,this._dists,0,r-1);const e=new Uint32Array(r);let n=0;for(let t=0,i=-1/0;t<r;t++){const s=this._ids[t];this._dists[s]>i&&(e[n++]=s,i=this._dists[s])}return this.hull=e.subarray(0,n),this.triangles=new Uint32Array(0),void(this.halfedges=new Uint32Array(0))}if(u(w,b,M,k,T,S)){const t=x,e=M,n=k;x=p,M=T,k=S,p=t,T=e,S=n}const $=function(t,e,n,i,s,l){const r=n-t,h=i-e,o=s-t,a=l-e,u=r*r+h*h,c=o*o+a*a,f=.5/(r*a-h*o);return{x:t+(a*u-h*c)*f,y:e+(r*c-o*u)*f}}(w,b,M,k,T,S);this._cx=$.x,this._cy=$.y;for(let e=0;e<r;e++)this._dists[e]=o(t[2*e],t[2*e+1],$.x,$.y);d(this._ids,this._dists,0,r-1),this._hullStart=m;let P=3;n[m]=e[p]=x,n[x]=e[m]=p,n[p]=e[x]=m,i[m]=0,i[x]=1,i[p]=2,s.fill(-1),s[this._hashKey(w,b)]=m,s[this._hashKey(M,k)]=x,s[this._hashKey(T,S)]=p,this.trianglesLen=0,this._addTriangle(m,x,p,-1,-1,-1);for(let r,h,o=0;o<this._ids.length;o++){const a=this._ids[o],c=t[2*a],f=t[2*a+1];if(o>0&&Math.abs(c-r)<=l&&Math.abs(f-h)<=l)continue;if(r=c,h=f,a===m||a===x||a===p)continue;let d=0;for(let t=0,e=this._hashKey(c,f);t<this._hashSize&&(d=s[(e+t)%this._hashSize],-1===d||d===n[d]);t++);d=e[d];let g,_=d;for(;g=n[_],!u(c,f,t[2*_],t[2*_+1],t[2*g],t[2*g+1]);)if(_=g,_===d){_=-1;break}if(-1===_)continue;let y=this._addTriangle(_,a,n[_],-1,-1,i[_]);i[a]=this._legalize(y+2),i[_]=y,P++;let v=n[_];for(;g=n[v],u(c,f,t[2*v],t[2*v+1],t[2*g],t[2*g+1]);)y=this._addTriangle(v,a,g,i[a],-1,i[v]),i[a]=this._legalize(y+2),n[v]=v,P--,v=g;if(_===d)for(;g=e[_],u(c,f,t[2*g],t[2*g+1],t[2*_],t[2*_+1]);)y=this._addTriangle(g,a,_,-1,i[_],i[g]),this._legalize(y+2),i[g]=y,n[_]=_,P--,_=g;this._hullStart=e[a]=_,n[_]=e[v]=a,n[a]=v,s[this._hashKey(c,f)]=a,s[this._hashKey(t[2*_],t[2*_+1])]=_}this.hull=new Uint32Array(P);for(let t=0,e=this._hullStart;t<P;t++)this.hull[t]=e,e=n[e];this.triangles=this._triangles.subarray(0,this.trianglesLen),this.halfedges=this._halfedges.subarray(0,this.trianglesLen)}_hashKey(t,e){return Math.floor(function(t,e){const n=t/(Math.abs(t)+Math.abs(e));return(e>0?3-n:1+n)/4}(t-this._cx,e-this._cy)*this._hashSize)%this._hashSize}_legalize(t){const{_triangles:e,_halfedges:n,coords:i}=this;let s=0,l=0;for(;;){const h=n[t],o=t-t%3;if(l=o+(t+2)%3,-1===h){if(0===s)break;t=r[--s];continue}const a=h-h%3,u=o+(t+1)%3,f=a+(h+2)%3,d=e[l],g=e[t],_=e[u],y=e[f];if(c(i[2*d],i[2*d+1],i[2*g],i[2*g+1],i[2*_],i[2*_+1],i[2*y],i[2*y+1])){e[t]=y,e[h]=d;const i=n[f];if(-1===i){let e=this._hullStart;do{if(this._hullTri[e]===f){this._hullTri[e]=t;break}e=this._hullPrev[e]}while(e!==this._hullStart)}this._link(t,i),this._link(h,n[l]),this._link(l,f);const o=a+(h+1)%3;s<r.length&&(r[s++]=o)}else{if(0===s)break;t=r[--s]}}return l}_link(t,e){this._halfedges[t]=e,-1!==e&&(this._halfedges[e]=t)}_addTriangle(t,e,n,i,s,l){const r=this.trianglesLen;return this._triangles[r]=t,this._triangles[r+1]=e,this._triangles[r+2]=n,this._link(r,i),this._link(r+1,s),this._link(r+2,l),this.trianglesLen+=3,r}}function o(t,e,n,i){const s=t-n,l=e-i;return s*s+l*l}function a(t,e,n,i,s,l){const r=(i-e)*(s-t),h=(n-t)*(l-e);return Math.abs(r-h)>=33306690738754716e-32*Math.abs(r+h)?r-h:0}function u(t,e,n,i,s,l){return(a(s,l,t,e,n,i)||a(t,e,n,i,s,l)||a(n,i,s,l,t,e))<0}function c(t,e,n,i,s,l,r,h){const o=t-r,a=e-h,u=n-r,c=i-h,f=s-r,d=l-h,g=u*u+c*c,_=f*f+d*d;return o*(c*_-g*d)-a*(u*_-g*f)+(o*o+a*a)*(u*d-c*f)<0}function f(t,e,n,i,s,l){const r=n-t,h=i-e,o=s-t,a=l-e,u=r*r+h*h,c=o*o+a*a,f=.5/(r*a-h*o),d=(a*u-h*c)*f,g=(r*c-o*u)*f;return d*d+g*g}function d(t,e,n,i){if(i-n<=20)for(let s=n+1;s<=i;s++){const i=t[s],l=e[i];let r=s-1;for(;r>=n&&e[t[r]]>l;)t[r+1]=t[r--];t[r+1]=i}else{let s=n+1,l=i;g(t,n+i>>1,s),e[t[n]]>e[t[i]]&&g(t,n,i),e[t[s]]>e[t[i]]&&g(t,s,i),e[t[n]]>e[t[s]]&&g(t,n,s);const r=t[s],h=e[r];for(;;){do{s++}while(e[t[s]]<h);do{l--}while(e[t[l]]>h);if(l<s)break;g(t,s,l)}t[n+1]=t[l],t[l]=r,i-s+1>=l-n?(d(t,e,s,i),d(t,e,n,l-1)):(d(t,e,n,l-1),d(t,e,s,i))}}function g(t,e,n){const i=t[e];t[e]=t[n],t[n]=i}function _(t){return t[0]}function y(t){return t[1]}const m=1e-6;class x{constructor(){this._x0=this._y0=this._x1=this._y1=null,this._=""}moveTo(t,e){this._+=`M${this._x0=this._x1=+t},${this._y0=this._y1=+e}`}closePath(){null!==this._x1&&(this._x1=this._x0,this._y1=this._y0,this._+="Z")}lineTo(t,e){this._+=`L${this._x1=+t},${this._y1=+e}`}arc(t,e,n){const i=(t=+t)+(n=+n),s=e=+e;if(n<0)throw new Error("negative radius");null===this._x1?this._+=`M${i},${s}`:(Math.abs(this._x1-i)>m||Math.abs(this._y1-s)>m)&&(this._+="L"+i+","+s),n&&(this._+=`A${n},${n},0,1,1,${t-n},${e}A${n},${n},0,1,1,${this._x1=i},${this._y1=s}`)}rect(t,e,n,i){this._+=`M${this._x0=this._x1=+t},${this._y0=this._y1=+e}h${+n}v${+i}h${-n}Z`}value(){return this._||null}}class p{constructor(){this._=[]}moveTo(t,e){this._.push([t,e])}closePath(){this._.push(this._[0].slice())}lineTo(t,e){this._.push([t,e])}value(){return this._.length?this._:null}}class v{constructor(t,[e,n,i,s]=[0,0,960,500]){if(!((i=+i)>=(e=+e)&&(s=+s)>=(n=+n)))throw new Error("invalid bounds");this.delaunay=t,this._circumcenters=new Float64Array(2*t.points.length),this.vectors=new Float64Array(2*t.points.length),this.xmax=i,this.xmin=e,this.ymax=s,this.ymin=n,this._init()}update(){return this.delaunay.update(),this._init(),this}_init(){const{delaunay:{points:t,hull:e,triangles:n},vectors:i}=this,s=this.circumcenters=this._circumcenters.subarray(0,n.length/3*2);for(let e,i,l=0,r=0,h=n.length;l<h;l+=3,r+=2){const h=2*n[l],o=2*n[l+1],a=2*n[l+2],u=t[h],c=t[h+1],f=t[o],d=t[o+1],g=t[a],_=t[a+1],y=f-u,m=d-c,x=g-u,p=_-c,v=y*y+m*m,w=x*x+p*p,b=2*(y*p-m*x);if(b)if(Math.abs(b)<1e-8)e=(u+g)/2,i=(c+_)/2;else{const t=1/b;e=u+(p*v-m*w)*t,i=c+(y*w-x*v)*t}else e=(u+g)/2-1e8*p,i=(c+_)/2+1e8*x;s[r]=e,s[r+1]=i}let l,r,h,o=e[e.length-1],a=4*o,u=t[2*o],c=t[2*o+1];i.fill(0);for(let n=0;n<e.length;++n)o=e[n],l=a,r=u,h=c,a=4*o,u=t[2*o],c=t[2*o+1],i[l+2]=i[a]=h-c,i[l+3]=i[a+1]=u-r}render(t){const e=null==t?t=new x:void 0,{delaunay:{halfedges:n,inedges:i,hull:s},circumcenters:l,vectors:r}=this;if(s.length<=1)return null;for(let e=0,i=n.length;e<i;++e){const i=n[e];if(i<e)continue;const s=2*Math.floor(e/3),r=2*Math.floor(i/3),h=l[s],o=l[s+1],a=l[r],u=l[r+1];this._renderSegment(h,o,a,u,t)}let h,o=s[s.length-1];for(let e=0;e<s.length;++e){h=o,o=s[e];const n=2*Math.floor(i[o]/3),a=l[n],u=l[n+1],c=4*h,f=this._project(a,u,r[c+2],r[c+3]);f&&this._renderSegment(a,u,f[0],f[1],t)}return e&&e.value()}renderBounds(t){const e=null==t?t=new x:void 0;return t.rect(this.xmin,this.ymin,this.xmax-this.xmin,this.ymax-this.ymin),e&&e.value()}renderCell(t,e){const n=null==e?e=new x:void 0,i=this._clip(t);if(null===i||!i.length)return;e.moveTo(i[0],i[1]);let s=i.length;for(;i[0]===i[s-2]&&i[1]===i[s-1]&&s>1;)s-=2;for(let t=2;t<s;t+=2)i[t]===i[t-2]&&i[t+1]===i[t-1]||e.lineTo(i[t],i[t+1]);return e.closePath(),n&&n.value()}*cellPolygons(){const{delaunay:{points:t}}=this;for(let e=0,n=t.length/2;e<n;++e){const t=this.cellPolygon(e);t&&(t.index=e,yield t)}}cellPolygon(t){const e=new p;return this.renderCell(t,e),e.value()}_renderSegment(t,e,n,i,s){let l;const r=this._regioncode(t,e),h=this._regioncode(n,i);0===r&&0===h?(s.moveTo(t,e),s.lineTo(n,i)):(l=this._clipSegment(t,e,n,i,r,h))&&(s.moveTo(l[0],l[1]),s.lineTo(l[2],l[3]))}contains(t,e,n){return(e=+e)==e&&(n=+n)==n&&this.delaunay._step(t,e,n)===t}*neighbors(t){const e=this._clip(t);if(e)for(const n of this.delaunay.neighbors(t)){const t=this._clip(n);if(t)t:for(let i=0,s=e.length;i<s;i+=2)for(let l=0,r=t.length;l<r;l+=2)if(e[i]==t[l]&&e[i+1]==t[l+1]&&e[(i+2)%s]==t[(l+r-2)%r]&&e[(i+3)%s]==t[(l+r-1)%r]){yield n;break t}}}_cell(t){const{circumcenters:e,delaunay:{inedges:n,halfedges:i,triangles:s}}=this,l=n[t];if(-1===l)return null;const r=[];let h=l;do{const n=Math.floor(h/3);if(r.push(e[2*n],e[2*n+1]),h=h%3==2?h-2:h+1,s[h]!==t)break;h=i[h]}while(h!==l&&-1!==h);return r}_clip(t){if(0===t&&1===this.delaunay.hull.length)return[this.xmax,this.ymin,this.xmax,this.ymax,this.xmin,this.ymax,this.xmin,this.ymin];const e=this._cell(t);if(null===e)return null;const{vectors:n}=this,i=4*t;return n[i]||n[i+1]?this._clipInfinite(t,e,n[i],n[i+1],n[i+2],n[i+3]):this._clipFinite(t,e)}_clipFinite(t,e){const n=e.length;let i,s,l,r,h,o=null,a=e[n-2],u=e[n-1],c=this._regioncode(a,u);for(let f=0;f<n;f+=2)if(i=a,s=u,a=e[f],u=e[f+1],l=c,c=this._regioncode(a,u),0===l&&0===c)r=h,h=0,o?o.push(a,u):o=[a,u];else{let e,n,f,d,g;if(0===l){if(null===(e=this._clipSegment(i,s,a,u,l,c)))continue;[n,f,d,g]=e}else{if(null===(e=this._clipSegment(a,u,i,s,c,l)))continue;[d,g,n,f]=e,r=h,h=this._edgecode(n,f),r&&h&&this._edge(t,r,h,o,o.length),o?o.push(n,f):o=[n,f]}r=h,h=this._edgecode(d,g),r&&h&&this._edge(t,r,h,o,o.length),o?o.push(d,g):o=[d,g]}if(o)r=h,h=this._edgecode(o[0],o[1]),r&&h&&this._edge(t,r,h,o,o.length);else if(this.contains(t,(this.xmin+this.xmax)/2,(this.ymin+this.ymax)/2))return[this.xmax,this.ymin,this.xmax,this.ymax,this.xmin,this.ymax,this.xmin,this.ymin];return o}_clipSegment(t,e,n,i,s,l){for(;;){if(0===s&&0===l)return[t,e,n,i];if(s&l)return null;let r,h,o=s||l;8&o?(r=t+(n-t)*(this.ymax-e)/(i-e),h=this.ymax):4&o?(r=t+(n-t)*(this.ymin-e)/(i-e),h=this.ymin):2&o?(h=e+(i-e)*(this.xmax-t)/(n-t),r=this.xmax):(h=e+(i-e)*(this.xmin-t)/(n-t),r=this.xmin),s?(t=r,e=h,s=this._regioncode(t,e)):(n=r,i=h,l=this._regioncode(n,i))}}_clipInfinite(t,e,n,i,s,l){let r,h=Array.from(e);if((r=this._project(h[0],h[1],n,i))&&h.unshift(r[0],r[1]),(r=this._project(h[h.length-2],h[h.length-1],s,l))&&h.push(r[0],r[1]),h=this._clipFinite(t,h))for(let e,n=0,i=h.length,s=this._edgecode(h[i-2],h[i-1]);n<i;n+=2)e=s,s=this._edgecode(h[n],h[n+1]),e&&s&&(n=this._edge(t,e,s,h,n),i=h.length);else this.contains(t,(this.xmin+this.xmax)/2,(this.ymin+this.ymax)/2)&&(h=[this.xmin,this.ymin,this.xmax,this.ymin,this.xmax,this.ymax,this.xmin,this.ymax]);return h}_edge(t,e,n,i,s){for(;e!==n;){let n,l;switch(e){case 5:e=4;continue;case 4:e=6,n=this.xmax,l=this.ymin;break;case 6:e=2;continue;case 2:e=10,n=this.xmax,l=this.ymax;break;case 10:e=8;continue;case 8:e=9,n=this.xmin,l=this.ymax;break;case 9:e=1;continue;case 1:e=5,n=this.xmin,l=this.ymin}i[s]===n&&i[s+1]===l||!this.contains(t,n,l)||(i.splice(s,0,n,l),s+=2)}if(i.length>4)for(let t=0;t<i.length;t+=2){const e=(t+2)%i.length,n=(t+4)%i.length;(i[t]===i[e]&&i[e]===i[n]||i[t+1]===i[e+1]&&i[e+1]===i[n+1])&&(i.splice(e,2),t-=2)}return s}_project(t,e,n,i){let s,l,r,h=1/0;if(i<0){if(e<=this.ymin)return null;(s=(this.ymin-e)/i)<h&&(r=this.ymin,l=t+(h=s)*n)}else if(i>0){if(e>=this.ymax)return null;(s=(this.ymax-e)/i)<h&&(r=this.ymax,l=t+(h=s)*n)}if(n>0){if(t>=this.xmax)return null;(s=(this.xmax-t)/n)<h&&(l=this.xmax,r=e+(h=s)*i)}else if(n<0){if(t<=this.xmin)return null;(s=(this.xmin-t)/n)<h&&(l=this.xmin,r=e+(h=s)*i)}return[l,r]}_edgecode(t,e){return(t===this.xmin?1:t===this.xmax?2:0)|(e===this.ymin?4:e===this.ymax?8:0)}_regioncode(t,e){return(t<this.xmin?1:t>this.xmax?2:0)|(e<this.ymin?4:e>this.ymax?8:0)}}const w=2*Math.PI,b=Math.pow;function M(t){return t[0]}function k(t){return t[1]}function A(t,e,n){return[t+Math.sin(t+e)*n,e+Math.cos(t-e)*n]}class T{static from(t,e=M,n=k,i){return new T("length"in t?function(t,e,n,i){const s=t.length,l=new Float64Array(2*s);for(let r=0;r<s;++r){const s=t[r];l[2*r]=e.call(i,s,r,t),l[2*r+1]=n.call(i,s,r,t)}return l}(t,e,n,i):Float64Array.from(function*(t,e,n,i){let s=0;for(const l of t)yield e.call(i,l,s,t),yield n.call(i,l,s,t),++s}(t,e,n,i)))}constructor(t){this._delaunator=new h(t),this.inedges=new Int32Array(t.length/2),this._hullIndex=new Int32Array(t.length/2),this.points=this._delaunator.coords,this._init()}update(){return this._delaunator.update(),this._init(),this}_init(){const t=this._delaunator,e=this.points;if(t.hull&&t.hull.length>2&&function(t){const{triangles:e,coords:n}=t;for(let t=0;t<e.length;t+=3){const i=2*e[t],s=2*e[t+1],l=2*e[t+2];if((n[l]-n[i])*(n[s+1]-n[i+1])-(n[s]-n[i])*(n[l+1]-n[i+1])>1e-10)return!1}return!0}(t)){this.collinear=Int32Array.from({length:e.length/2},((t,e)=>e)).sort(((t,n)=>e[2*t]-e[2*n]||e[2*t+1]-e[2*n+1]));const t=this.collinear[0],n=this.collinear[this.collinear.length-1],i=[e[2*t],e[2*t+1],e[2*n],e[2*n+1]],s=1e-8*Math.hypot(i[3]-i[1],i[2]-i[0]);for(let t=0,n=e.length/2;t<n;++t){const n=A(e[2*t],e[2*t+1],s);e[2*t]=n[0],e[2*t+1]=n[1]}this._delaunator=new h(e)}else delete this.collinear;const n=this.halfedges=this._delaunator.halfedges,i=this.hull=this._delaunator.hull,s=this.triangles=this._delaunator.triangles,l=this.inedges.fill(-1),r=this._hullIndex.fill(-1);for(let t=0,e=n.length;t<e;++t){const e=s[t%3==2?t-2:t+1];-1!==n[t]&&-1!==l[e]||(l[e]=t)}for(let t=0,e=i.length;t<e;++t)r[i[t]]=t;i.length<=2&&i.length>0&&(this.triangles=new Int32Array(3).fill(-1),this.halfedges=new Int32Array(3).fill(-1),this.triangles[0]=i[0],this.triangles[1]=i[1],this.triangles[2]=i[1],l[i[0]]=1,2===i.length&&(l[i[1]]=0))}voronoi(t){return new v(this,t)}*neighbors(t){const{inedges:e,hull:n,_hullIndex:i,halfedges:s,triangles:l,collinear:r}=this;if(r){const e=r.indexOf(t);return e>0&&(yield r[e-1]),void(e<r.length-1&&(yield r[e+1]))}const h=e[t];if(-1===h)return;let o=h,a=-1;do{if(yield a=l[o],o=o%3==2?o-2:o+1,l[o]!==t)return;if(o=s[o],-1===o){const e=n[(i[t]+1)%n.length];return void(e!==a&&(yield e))}}while(o!==h)}find(t,e,n=0){if((t=+t)!=t||(e=+e)!=e)return-1;const i=n;let s;for(;(s=this._step(n,t,e))>=0&&s!==n&&s!==i;)n=s;return s}_step(t,e,n){const{inedges:i,hull:s,_hullIndex:l,halfedges:r,triangles:h,points:o}=this;if(-1===i[t]||!o.length)return(t+1)%(o.length>>1);let a=t,u=b(e-o[2*t],2)+b(n-o[2*t+1],2);const c=i[t];let f=c;do{let i=h[f];const c=b(e-o[2*i],2)+b(n-o[2*i+1],2);if(c<u&&(u=c,a=i),f=f%3==2?f-2:f+1,h[f]!==t)break;if(f=r[f],-1===f){if(f=s[(l[t]+1)%s.length],f!==i&&b(e-o[2*f],2)+b(n-o[2*f+1],2)<u)return f;break}}while(f!==c);return a}render(t){const e=null==t?t=new x:void 0,{points:n,halfedges:i,triangles:s}=this;for(let e=0,l=i.length;e<l;++e){const l=i[e];if(l<e)continue;const r=2*s[e],h=2*s[l];t.moveTo(n[r],n[r+1]),t.lineTo(n[h],n[h+1])}return this.renderHull(t),e&&e.value()}renderPoints(t,e=2){const n=null==t?t=new x:void 0,{points:i}=this;for(let n=0,s=i.length;n<s;n+=2){const s=i[n],l=i[n+1];t.moveTo(s+e,l),t.arc(s,l,e,0,w)}return n&&n.value()}renderHull(t){const e=null==t?t=new x:void 0,{hull:n,points:i}=this,s=2*n[0],l=n.length;t.moveTo(i[s],i[s+1]);for(let e=1;e<l;++e){const s=2*n[e];t.lineTo(i[s],i[s+1])}return t.closePath(),e&&e.value()}hullPolygon(){const t=new p;return this.renderHull(t),t.value()}renderTriangle(t,e){const n=null==e?e=new x:void 0,{points:i,triangles:s}=this,l=2*s[t*=3],r=2*s[t+1],h=2*s[t+2];return e.moveTo(i[l],i[l+1]),e.lineTo(i[r],i[r+1]),e.lineTo(i[h],i[h+1]),e.closePath(),n&&n.value()}*trianglePolygons(){const{triangles:t}=this;for(let e=0,n=t.length/3;e<n;++e)yield this.trianglePolygon(e)}trianglePolygon(t){const e=new p;return this.renderTriangle(t,e),e.value()}}var S=function(t){return"function"==typeof t?t:function(e){return e[t]}},$=function(t){var e=t.points,n=t.x,s=t.y,l=t.width,r=t.height,h=t.debug,o=(0,i.useMemo)((function(){return function(t){var e=t.points,n=t.x,i=t.y,s=void 0===i?"y":i,l=S(void 0===n?"x":n),r=S(s);return e.map((function(t){return[l(t),r(t)]}))}({points:e,x:n,y:s})}),[e,n,s]);return(0,i.useMemo)((function(){return function(t){var e=t.points,n=t.width,i=t.height,s=t.debug,l=T.from(e),r=s?l.voronoi([0,0,n,i]):void 0;return{delaunay:l,voronoi:r}}({points:o,width:l,height:r,debug:h})}),[o,l,r,h])};function P(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,i=new Array(e);n<e;n++)i[n]=t[n];return i}function I(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t)){var n=[],i=!0,s=!1,l=void 0;try{for(var r,h=t[Symbol.iterator]();!(i=(r=h.next()).done)&&(n.push(r.value),!e||n.length!==e);i=!0);}catch(t){s=!0,l=t}finally{try{i||null==h.return||h.return()}finally{if(s)throw l}}return n}}(t,e)||function(t,e){if(t){if("string"==typeof t)return P(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(n):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?P(t,e):void 0}}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var C=function(t){var e=t.nodes,n=t.width,l=t.height,r=t.x,h=t.y,o=t.onMouseEnter,a=t.onMouseMove,u=t.onMouseLeave,c=t.onClick,f=t.debug,d=(0,i.useRef)(null),g=I((0,i.useState)(null),2),_=g[0],y=g[1],m=$({points:e,x:r,y:h,width:n,height:l,debug:f}),x=m.delaunay,p=m.voronoi,v=(0,i.useMemo)((function(){if(f&&p)return p.render()}),[f,p]),w=(0,i.useCallback)((function(t){if(!d.current)return[null,null];var n=I((0,s.P6)(d.current,t),2),i=n[0],l=n[1],r=x.find(i,l);return[r,void 0!==r?e[r]:null]}),[d,x]),b=(0,i.useCallback)((function(t){var e=I(w(t),2),n=e[0],i=e[1];y(n),i&&(null==o||o(i,t))}),[w,y,o]),M=(0,i.useCallback)((function(t){var e=I(w(t),2),n=e[0],i=e[1];y(n),i&&(null==a||a(i,t))}),[w,y,a]),k=(0,i.useCallback)((function(t){if(y(null),u){var n=void 0;null!==_&&(n=e[_]),n&&u(n,t)}}),[y,_,u,e]),A=(0,i.useCallback)((function(t){var e=I(w(t),2),n=e[0],i=e[1];y(n),i&&(null==c||c(i,t))}),[w,y,c]);return i.createElement("g",{ref:d},f&&p&&i.createElement(i.Fragment,null,i.createElement("path",{d:v,stroke:"red",strokeWidth:1,opacity:.75}),null!==_&&i.createElement("path",{fill:"pink",opacity:.35,d:p.renderCell(_)})),i.createElement("rect",{width:n,height:l,fill:"red",opacity:0,style:{cursor:"auto"},onMouseEnter:b,onMouseMove:M,onMouseLeave:k,onClick:A}))},E=function(t,e){t.save(),t.globalAlpha=.75,t.beginPath(),e.render(t),t.strokeStyle="red",t.lineWidth=1,t.stroke(),t.restore()},F=function(t,e,n){t.save(),t.globalAlpha=.35,t.beginPath(),e.renderCell(n,t),t.fillStyle="red",t.fill(),t.restore()}}}]);
//# sourceMappingURL=812.aded70967673051fde92.bundle.js.map