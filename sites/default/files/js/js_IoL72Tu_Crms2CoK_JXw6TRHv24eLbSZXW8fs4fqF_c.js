!function(o,i){"use strict";var s=Object.assign,u=Array.prototype,e=Object.prototype,c=e.toString,n=u.splice,r=u.some,t="undefined"!=typeof Symbol&&Symbol,f="jQuery"in o,a="cash"in o,d="add",l="remove",p="has",h="get",v="set",m="width",y="clientWidth",g="scroll",b="iterator",E="Observer",w=/-([a-z])/g,C=/^--/,S=/[\11\12\14\15\40]+/,x="data-once",O=o.localStorage,j={},z=Math.pow(2,53)-1,A=(L.prototype.init=function(n,t){t=new L(n,t);return H(n)?(n.idblazy||(n.idblazy=t),n.idblazy):t},L);function L(n,t){if(this.name="dblazy",n){if(B(n))return n;var e=n;if(_(n)){if(!(e=vn(xn(t),n)).length)return}else if(Q(n))return this.ready(n);!e.nodeType&&e!==o||(e=[e]);for(var r=this.length=e.length,i=0;i<r;i++)this[i]=e[i]}}var N=A.prototype,T=N.init;function I(n){var t=this,e=(t=B(t)?t:T(t)).length;return Q(n)&&(e&&1!==e?t.each(n):n(t[0],0)),t}function M(n){var t="[object "+n+"]";return function(n){return c.call(n)===t}}(T.fn=T.prototype=N).length=0,N.splice=n,t&&(N[t[b]]=u[t[b]]);var W,P,R=(W="length",function(n){return $(n)?void 0:n[W]}),k=(P=R,function(n){n=P(n);return"number"==typeof n&&0<=n&&n<=z});function q(n){return V(n)?Object.keys(n):[]}function B(n){return n instanceof A}function D(n){return!_(n)&&(n&&(Array.isArray(n)||k(n)))}function F(n){return!0===n||!1===n||"[object Boolean]"===c.call(n)}function H(n){return n&&n instanceof Element}var Q=M("Function");function $(n){return null===n}function U(n){return!isNaN(parseFloat(n))&&isFinite(n)}function V(n){var t=typeof n;return"function"==t||"object"==t&&!!n}function _(n){return n&&"string"==typeof n}function J(n){return void 0===n}function G(n){return!!n&&n===n.window}function K(n){return-1!==[9,11].indexOf(!!n&&n.nodeType)}function X(n){return-1!==[1,9,11].indexOf(!!n&&n.nodeType)}function Y(n){return X(n)||G(n)}function Z(n,t,e){if(Q(n)||_(n)||F(n)||U(n))return[];if(D(n)&&!J(n.length)){var r=n.length;if(!r||1===r&&" "===n[0])return[]}if("[object Object]"===c.call(n)){for(var i in n)if(nn(n,i)&&"length"!==i&&"name"!==i&&!1===t.call(e,n[i],i,n))break}else n&&((r=n.length)&&1===r&&!J(n[0])?t.call(e,n[0],0,n):n.forEach(t,e));return n}function nn(n,t){return e.hasOwnProperty.call(n,t)}function tn(n){return D(n)?n:[n]}function en(n,t,e,r){return n[t+"Attribute"](e,r)}function rn(n,t,r,e){var i=this,o=J(r),u=!V(t)&&(o||F(e)),c=_(e)?e:"";if(u){e=n&&n.length?n[0]:n;return o&&(r=""),on(e,t)?en(e,h,t):r}return I.call(n,function(e){if(!X(e))return u?"":i;V(t)?Z(t,function(n,t){en(e,v,c+t,n)}):$(r)?Z(tn(t),function(n){n=c+n;on(e,n)&&en(e,l,n)}):"src"===t?e.src=r:en(e,v,t,r)})}function on(n,t){return X(n)&&en(n,p,t)}function un(n,r,i){return I.call(n,function(n,t){var e;X(n)&&(e=n.classList,Q(r)&&(r=r(en(n,h,"class"),t)),e&&_(r)&&(t=r.trim().split(" "),J(i)?t.map(function(n){e.toggle(n)}):e[i].apply(e,t)))})}function cn(t,n){var e=0;return H(t)&&H(n)?t!==n&&t.contains(n):D(t)?-1!==t.indexOf(n):(_(t)&&Z(tn(n),function(n){-1!==t.indexOf(n)&&e++}),0<e)}function fn(n){return n.replace(/[.*+\-?^${}()|[\]\\]/g,"\\$&")}function an(t,n){var e=0;return _(t)&&Z(tn(n),function(n){t.startsWith(n)&&e++}),0<e}function ln(n){return n.replace(/\\s+/g," ").trim()}function sn(n,t){return H(n)&&_(t)?n.closest(t):null}function dn(n,t){return!!H(n)&&(_(t)?n.matches(t):H(t)&&n===t)}function pn(t,n){return!(!t||!t.nodeName)&&r.call(tn(n),function(n){return t.nodeName.toLowerCase()===n.toLowerCase()})}function hn(n,t,e){if(X(n))return _(t)&&an(t,">")&&(cn(t,":scope")||(t=":scope "+t)),J(e)&&_(t)?n.querySelector(t)||[]:function(n,t){var e=tn(n);{var r;_(n)&&(r=(t=xn(t)).querySelector(n),e=$(r)?[]:t.querySelectorAll(n))}return u.slice.call(e)}(t,n);return[]}function vn(n,t){return hn(n,t,1)}function mn(n){return H(n)&&n.currentStyle||!J(i.documentMode)}function yn(){return o.devicePixelRatio||1}function gn(){return o.innerWidth||i.documentElement[y]||o.screen[m]}function bn(n,t,e,r,i,o){return Cn(n,t,e,r,i,o,d)}function En(n,t,e,r,i,o){return Cn(n,t,e,r,i,o,l)}function wn(n){return n.decoded||n.complete}function Cn(n,t,e,c,r,f,a){var i,o=c,l=mn();c=_(e)?(i=cn(t,["touchstart",g,"wheel"]),J(r)&&(r=!l&&{capture:!i,passive:i}),function(n){var t=n.target;if(dn(t,e))o.call(t,n);else for(;t&&t!==this;){if(dn(t,e)){o.call(t,n);break}t=t.parentElement}}):(f=r,r=o,e);return I.call(n,function(i){var o,u;Y(i)&&(o=!1,u=r||!1,V(r)&&(u=s({capture:!1,passive:!0},r),o=u.once||!1),Z(t.trim().split(" "),function(n){f=f||an(n,["blazy.","bio."]);var t=a===d,e=(f?n:n.split(".")[0]).trim(),r=c=c||j[n];Q(c)&&(o&&t&&l&&(t=!(c=function n(){i.removeEventListener(e,n,u),r.apply(this,arguments)})),i[a+"EventListener"](e,c,u)),t?j[n]=c:delete j[n]}))})}function Sn(n){function t(){return setTimeout(n,0,T)}return"loading"!==i.readyState?t():i.addEventListener("DOMContentLoaded",t),this}function xn(n){return X(n=On(n=n||i))&&n.children&&n.children.length||K(n)?n:i}function On(n){var t=f&&n instanceof o.jQuery,e=a&&n instanceof o.cash;return n&&(B(n)||t||e)?n[0]:n}function jn(n){return C.test(n)}function zn(n,t,e){if(H(n)){var r=n[e];if(J(t))return r;for(;r;){if(dn(r,t)||pn(r,t))return r;r=r[e]}}return null}function An(n,t){return zn(n,t,"parentElement")}function Ln(n,t,e){return zn(n,t,e+"ElementSibling")}function Nn(n,t){return Ln(n,t,"previous")}function Tn(e,n,r){return n.filter(function(n){var t=dn(n,e);return t&&r&&r(n),t})}function In(n,t){return vn(xn(t),n)}function Mn(n){return"["+x+'~="'+n+'"]'}function Wn(n,t){var e=t.add,r=t.remove,i=[];on(n,x)&&Z(rn(n,x).trim().split(S),function(n){cn(i,n)||n===r||i.push(n)}),e&&!cn(i,e)&&i.push(e);e=i.join(" ");en(n,""===e?l:v,x,e)}T.isTag=M,T.isArr=D,T.isBool=F,T.isDoc=K,T.isElm=H,T.isFun=Q,T.isEmpty=function(n){if($(n)||J(n)||!1===n)return!0;var t=R(n);return"number"==typeof t&&(D(n)||_(n))?0===t:0===R(q(n))},T.isNull=$,T.isNum=U,T.isObj=V,T.isStr=_,T.isUnd=J,T.isEvt=Y,T.isQsa=X,T.isIo="Intersection"+E in o,T.isMo="Mutation"+E in o,T.isRo="Resize"+E in o,T.isNativeLazy="loading"in HTMLImageElement.prototype,T.isAmd="function"==typeof define&&define.amd,T.isWin=G,T._er=-1,T._ok=1,T.chain=function(n,t){return I.call(n,t)},T.each=Z,T.extend=s,N.extend=function(n,t){return(t=t||!1)?s(n,N):s(N,n)},T.hasProp=nn,T.parse=function(n){try{return 0===n.length||"1"===n?{}:JSON.parse(n)}catch(n){return{}}},T.toArray=tn,T.hasAttr=on,T.attr=rn.bind(T),T.removeAttr=function(n,t,e){return rn(n,t,null,e||"")}.bind(T),T.hasClass=function(e,n){var r,i=0;return X(e)&&_(n)&&(n=n.trim(),r=e.classList,Z(n.trim().split(" "),function(n){var t;r&&r.contains(n)&&i++,0!==i||(t=rn(e,"class"))&&t.match(n)&&i++})),0<i},T.toggleClass=un,T.addClass=function(n,t){return un(n,t,d)},T.removeClass=function(n,t){return un(n,t,l)},T.contains=cn,T.escape=fn,T.startsWith=an,T.trimSpaces=ln,T.closest=sn,T.is=dn,T.equal=pn,T.find=hn,T.findAll=vn,T.remove=function(n){var t;!H(n)||(t=An(n))&&t.removeChild(n)},T.ie=mn,T.pixelRatio=yn,T.windowWidth=gn,T.windowSize=function(){return{width:gn(),height:o.innerHeight||i.documentElement.clientHeight}},T.activeWidth=function(t,n){var e=n.up||!1,r=q(t),i=r[0],o=r[r.length-1],u=n.ww||gn(),n=u*yn(),c=e?u:n;return J(r=r.filter(function(n){return e?parseInt(n,10)<=c:parseInt(n,10)>=c}).map(function(n){return t[n]})[e?"pop":"shift"]())?t[o<=c?o:i]:r},T.toEvent=Cn,T.on=bn,T.off=En,T.one=function(n,t,e,r){return bn(n,t,e,{once:!0},r)},T.trigger=function(n,e,r,i){return I.call(n,function(n){var t;return Y(n)&&(t=J(r)?new Event(e):(t={bubbles:!0,cancelable:!0,detail:r||{}},V(i)&&(t=s(t,i)),new CustomEvent(e,t)),n.dispatchEvent(t)),t})},T.isDecoded=wn,T.ready=Sn.bind(T),T.decode=function(e){return wn(e)?Promise.resolve(e):"decode"in e?(e.decoding="async",e.decode()):new Promise(function(n,t){e.onload=function(){n(e)},e.onerror=t()})},T.once=function(n,t,e,r){var i,o=[];return J(e)||(o=Tn(":not("+Mn(i=t)+")",In(e,r),function(n){Wn(n,{add:i})})).length&&Z(o,n),o},T.throttle=function(t,e,r){e=e||50;var i=0;return function(){var n=+new Date;n-i<e||(i=n,t.apply(r,arguments))}},T.resize=function(t,e){return o.onresize=function(n){clearTimeout(e),e=setTimeout(t.bind(n),200)},t},T.template=function(n,t){for(var e in t)nn(t,e)&&(n=n.replace(new RegExp(fn("$"+e),"g"),t[e]));return ln(n)},T.context=xn,T.toElm=On,T.camelCase=function(n){return n.replace(w,function(n,t){return t.toUpperCase()})},T.isVar=jn,T.computeStyle=function(n,t,e){if(H(n)){var r=getComputedStyle(n,null);return J(t)?r:e||jn(t)?r.getPropertyValue(t)||null:r[t]||n.style[t]}},T.rect=function(n){return H(n)?n.getBoundingClientRect():{}},T.empty=function(n){return I.call(n,function(n){if(H(n))for(;n.firstChild;)n.removeChild(n.firstChild)})},T.parent=An,T.next=function(n,t){return Ln(n,t,"next")},T.prev=Nn,T.index=function(t,n){var e=0;if(H(t))for(J(n)||Z(tn(n),function(n){n=sn(t,n);if(H(n))return t=n,!1});!$(t=Nn(t));)e++;return e},T.create=function(n,t,e){var r=i.createElement(n);return(_(t)||V(t))&&(_(t)?r.className=t:rn(r,t)),e&&(e=e.trim(),r.innerHTML=e,"template"===n&&(r=r.content.firstChild||r)),r},T.storage=function(n,t,e){if(O){if(J(t))return O.getItem(n);O.setItem(n,t)}return e||!1},E={chain:function(n){return I.call(this,n)},each:function(n){return Z(this,n)},ready:function(n){return Sn.call(this,n)}},N.extend(E),T.matches=dn,T.forEach=Z,T.bindEvent=bn.bind(T),T.unbindEvent=En.bind(T),T.filter=Tn,T.once.find||(T.once.find=function(n,t){return In(n?Mn(n):"["+x+"]",t)},T.once.filter=function(n,t,e){return Tn(Mn(n),In(t,e))},T.once.remove=function(t,n,e){return Tn(Mn(t),In(n,e),function(n){Wn(n,{remove:t})})},T.once.removeSafely=function(n,t,e){var r=o.jQuery;this.find(n,e).length&&this.remove(n,t,e),f&&r&&r.fn&&Q(r.fn.removeOnce)&&r(t,xn(e)).removeOnce(n)}),"undefined"!=typeof exports?module.exports=T:o.dBlazy=T}(this,this.document);
;
!function(i){"use strict";function r(t,n,a){return i.chain(t,function(e){i.isElm(e)&&i.each(i.toArray(n),function(t){var n,r="data-"+t;i.hasAttr(e,r)&&((n=i.attr(e,r))&&n.length&&i.attr(e,t,n),a&&i.removeAttr(e,r))})})}function e(t,a,u,c){i.isUnd(c)&&(c=!0);return i.chain(t,function(t){var n,r,e;i.isElm(t)&&(n=t.parentNode,r=i.equal(n,"picture"),e=null,c?e=r?n:t:r&&(e=n),i.isElm(e)&&(e=e.getElementsByTagName("source"),a=a||(r?"srcset":"src"),e.length&&i(e).mapAttr(a,u)))})}i.mapAttr=r,i.fn.mapAttr=function(t,n){return r(this,t,n)},i.mapSource=e,i.fn.mapSource=function(t,n,r){return e(this,t,n,r)}}(dBlazy);
;
!function(n,o,r){"use strict";function i(t){t=t||0;var i=n.windowSize();return{top:0-t,left:0-t,bottom:i.height+t,right:i.width+t}}n.ww=0,n.vp={top:0,right:0,bottom:0,left:0},n.isVisible=function(t,i){var e=t.target||t;return n.isIo?t.isIntersecting||0<t.intersectionRatio:(e=e,i=i,(e=n.isElm(e)?n.rect(e):e).right>=i.left&&e.bottom>=i.top&&e.left<=i.right&&e.top<=i.bottom)},n.isResized=function(t,i){return!!i.contentRect||!!t.resizeTrigger||!1},n.viewport=i,n.windowData=function(t,i){var e=this,n=t.offset||100,o=t.mobileFirst||!1;return i&&e.initViewport(t),e.ww=e.vp.right-n,{vp:e.vp,ww:e.ww,up:o}},n.initViewport=function(t){return this.vp=i(t.offset),this.vp},n.updateViewport=function(t){var i=this,e=t.offset;return i.vp.bottom=(o.innerHeight||r.documentElement.clientHeight)+e,i.vp.right=(o.innerWidth||r.documentElement.clientWidth)+e,i.windowData(t)}}(dBlazy,this,this.document);
;
!function(f,n){"use strict";var t=Array.prototype.some,u="remove",c="width",h="height",e="after",r="before",i="begin",o="Top",s="Left",l="Height",a="scroll";function d(t,n,r){var i=this,e=f.isUnd(r),u=f.isObj(n),o=!u&&e;if(o&&f.isStr(n)){var s=t&&t.length?t[0]:t,e=[c,h,"top","right","bottom","left"],s=f.computeStyle(s,n);return-1===e.indexOf(n)?s:parseInt(s,2)}return f.chain(t,function(e){if(!f.isElm(e))return o?"":i;function t(t,n){f.isFun(t)&&(t=t()),(f.contains(n,"-")||f.isVar(n))&&(n=f.camelCase(n)),e.style[n]=f.isStr(t)?t:t+"px"}u?f.each(n,t):f.isNull(r)?f.each(f.toArray(n),function(t){e.style.removeProperty(t)}):f.isStr(n)&&t(r,n)})}function p(t){t=f.rect(t);return{top:(t.top||0)+n.body[a+o],left:(t.left||0)+n.body[a+s]}}function m(t,n){return d(t,c,n)}function g(t,n){return d(t,h,n)}function v(t,n,e){var r,i=0;return f.isElm(t)&&(i=t["offset"+e],n&&(r=f.computeStyle(t),t=function(t){return parseInt(r["margin"+t],2)},i+=e===l?t(o)+t("Bottom"):t(s)+t("Right"))),i}function y(t,n){return v(t,n,"Width")}function A(t,n){return v(t,n,l)}function C(t,n,e){f.isElm(t)&&t["insertAdjacent"+(f.isElm(n)?"Element":"HTML")](e,n)}function b(t,n){C(t,n,e+"end")}function x(t,n){C(t,n,r+i)}function S(t,n){C(t,n,r+"end")}function E(t,n){C(t,n,e+i)}function H(t){return f.chain(t,function(t){return f.isElm(t)&&t.cloneNode(!0)})}var w={css:function(t,n){return d(this,t,n)},hasAttr:function(n){return t.call(this,function(t){return f.hasAttr(t,n)})},attr:function(t,n,e){return f.isNull(n)?this.removeAttr(t,e):f.attr(this,t,n,e)},removeAttr:function(t,n){return f.removeAttr(this,t,n)},hasClass:function(n){return t.call(this,function(t){return f.hasClass(t,n)})},toggleClass:function(t,n){return f.toggleClass(this,t,n)},addClass:function(t){return this.toggleClass(t,"add")},removeClass:function(t){return arguments.length?this.toggleClass(t,u):this.attr("class","")},empty:function(){return f.empty(this)},first:function(t){return f.isUnd(t)?this[0]:t},after:function(t){return b(this[0],t)},before:function(t){return x(this[0],t)},append:function(t){return S(this[0],t)},prepend:function(t){return E(this[0],t)},remove:function(){this.each(f.remove)},closest:function(t){return f.closest(this[0],t)},equal:function(t){return f.equal(this[0],t)},find:function(t,n){return f.find(this[0],t,n)},findAll:function(t){return f.findAll(this[0],t)},clone:function(){return H(this)},computeStyle:function(t){return f.computeStyle(this[0],t)},offset:function(){return p(this[0])},parent:function(t){return f.parent(this[0],t)},prev:function(t){return f.prev(this[0],t)},next:function(t){return f.next(this[0],t)},index:function(t){return f.index(this[0],t)},width:function(t){return m(this[0],t)},height:function(t){return g(this[0],t)},outerWidth:function(t){return y(this[0],t)},outerHeight:function(t){return A(this[0],t)},on:function(t,n,e,r,i){return f.on(this,t,n,e,r,i,"add")},off:function(t,n,e,r,i){return f.off(this,t,n,e,r,i,u)},one:function(t,n,e){return f.one(this,t,n,e)},trigger:function(t,n,e){return f.trigger(this,t,n,e)}};f.fn.extend(w),f.css=d,f.offset=p,f.clone=H,f.after=b,f.before=x,f.append=S,f.prepend=E,f.width=m,f.height=g,f.outerWidth=y,f.outerHeight=A}(dBlazy,this.document);
;
!function(l,i,s){"use strict";var d="blazy",f=0,g="data-",b="src",m=["srcset",b],r="b-bg";function t(s,e){return s=s.target||s,l.hasClass(s,e)}l._defaults={error:!1,offset:100,root:s,success:!1,selector:".b-lazy",separator:"|",container:!1,containerClass:!1,errorClass:"b-error",loadInvisible:!1,successClass:"b-loaded",visibleClass:!1,validateDelay:25,saveViewportOffsetDelay:50,srcset:"data-srcset",src:"data-src",bgClass:r,isMedia:!1,parent:".media",disconnect:!1,intersecting:!1,observing:!1,resizing:!1,mobileFirst:!1,rootMargin:"0px",threshold:[0]},l.isCompleted=function(s){if(l.isElm(s)){if(l.equal(s,"img"))return l.isDecoded(s);if(l.equal(s,"iframe"))return"complete"===(s.contentDocument||s.contentWindow.document).readyState}return!1},l.isBg=function(s,e){return t(s,e&&e.bgClass||r)},l.isBlur=function(s){return t(s,"b-blur")},l.selector=function(s,e){var r=s.selector;return e&&l.isBool(e)&&(e=":not(."+s.successClass+")"),r+(e=e||"")},l.success=function(s,e,r,t){return l.isFun(t.success)&&t.success(s,e,r,t),0<f&&f--,f},l.error=function(s,e,r,t){return l.isFun(t.error)&&t.error(s,e,r,t),++f},l.status=function(s,e,r){return this.loaded(s,e,null,r)},l.loaded=function(s,e,r,t){var i=l.closest(s,t.parent)||s,n=e===l._ok||!0===e,a=t.successClass,o=t.errorClass,c="is-"+a,u="is-"+o;return r=r||i,l.addClass(s,n?a:o),l.addClass(i,n?c:u),l.removeClass(i,"is-b-visible"),f=this[n?"success":"error"](s,e,r,t),n&&l.hasAttr(s,g+b)&&l.removeAttr(s,m,g),l.trigger(s,d+".loaded",{status:e}),f},l.loadVideo=function(s,e,r){return l.mapSource(s,b,!0),s.load(),l.status(s,e,r)},l.onresizing=function(s,e){var r=s.elms,t=s.options;l.isFun(t.resizing)&&t.resizing(s,r,e),l.trigger(i,d+".resizing",{winData:e,entries:r})}}(dBlazy,this,this.document);
;
!function(l,s){"use strict";l.enqueue=function(n,e,r){l.each(n,e.bind(r)),n.length=0},l.initObserver=function(r,n,e,i){var t,o=r.options||{},a=r._queue||[],s="windowData"in r?r.windowData():{},u={rootMargin:o.rootMargin||"0px",threshold:o.threshold||0};function c(n){var e;return a.length||(e=requestAnimationFrame(h),r._raf.push(e)),a.push(n),!1}function h(){l.enqueue(a,n,r)}e=l.toArray(e),i&&(r.ioObserver=l.isIo?new IntersectionObserver(c,u):n.call(r,e));return r.roObserver=function(){return t=this,s=l.isUnd(s.ww)?l.windowData(o,!0):r.windowData(),l.isRo?new ResizeObserver(c):n.call(r,e)}(),r.resizeTrigger=t,s},l.observe=function(n,r,e){function i(e){e&&r&&r.length&&l.each(r,function(n){e.observe(n)})}var t=n.options||{},o=n.ioObserver,a=n.roObserver;return l.isIo&&(o||a)?(e&&i(o),i(a)):"Blazy"in s&&(n.bLazy=new Blazy(t)),n},l.unload=function(n){n=n._raf;n&&n.length&&l.each(n,function(n){cancelAnimationFrame(n)})}}(dBlazy,this);
;
!function(e,n,i){"use strict";e.debounce=function(c,t,e,i){n.debounce(function(){c.call(e,t)},i||201,!0)},e.matchMedia=function(c,t){return!!i.matchMedia&&(e.isUnd(t)&&(t="max"),i.matchMedia("("+t+"-device-width: "+c+")").matches)}}(dBlazy,Drupal,this);
;
!function(e,i){"use strict";var s="Bio",t=e.dBlazy;t.isAmd?define([s,t,e],i):"object"==typeof exports?module.exports=i(s,t):e[s]=i(s,t)}(this||module||{},function(s,f,e){"use strict";f.isAmd&&window;var t,o=document,n=o,v={},r=0,p=0,d=0,a=0,u="b-bg",b=".media",h="addClass",y="removeClass",c=!1,l=25,m=i.prototype;function i(e){var i=f.extend({},m,this);return i.name=s,i.options=t=f.extend({},f._defaults,e||{}),u=t.bgClass||u,l=t.validateDelay||l,b=t.parent||b,n=t.root||n,setTimeout(function(){i.reinit()}),i}function g(e,i){var s=this,t=s.options,o=s.count,n=s.ioObserver;r===o-1&&s.destroyQuietly(),n&&s.isLoaded(e)&&!e.bloaded&&t.isMedia&&!i&&(n.unobserve(e),e.bloaded=!0,r++),e.bhit&&!i||(s.lazyLoad(e,v),a++,i=!(e.bhit=!0)),f.isFun(t.intersecting)&&t.intersecting(e,t),f.trigger(e,"bio.intersecting",{options:t})}function z(e){var r=this,d=r.options,a=f.vp,u=f.ww,i=e[0],c=f.isBlur(i),i=f.isResized(r,i),l=d.visibleClass;if(i)v=f.updateViewport(d),f.onresizing(r,v);else if(r.destroyed&&!l)return;f.each(e,function(e){var i=e.target||e,s=f.isResized(r,e),t=f.isVisible(e,a),o=f.closest(i,b)||i,n=r.isLoaded(i);f[t&&!n?h:y](o,"is-b-visible"),l&&f.isStr(l)&&f[t?h:y](o,l),t&&g.call(r,i),s&&0<p&&!c&&(p!==u&&r.resizing(i,v),r.resizeTick++),f.isFun(d.observing)&&d.observing(e,t,d)}),p=u}return m.constructor=i,m.count=0,m.erCount=0,m.resizeTick=0,m.destroyed=!1,m.options={},m.lazyLoad=function(e,i){},m.loadImage=function(e,i,s){},m.resizing=function(e,i){},m.prepare=function(){},m.windowData=function(){return f.isUnd(v.vp)?f.windowData(this.options,!0):v},m.load=function(e,i,s){var t=this;e=e&&f.toArray(e),f.isUnd(s)||(t.options=f.extend({},t.options,s||{})),f.each(e,function(e){(t.isValid(e)||f.isElm(e)&&i)&&g.call(t,e,i)})},m.isLoaded=function(e){return f.hasClass(e,this.options.successClass)},m.isValid=function(e){return f.isElm(e)&&!this.isLoaded(e)},m.revalidate=function(e){var i=this;(!0===e||i.count!==a)&&d<a&&(i.elms=f.findAll(n,f.selector(i.options))).length&&(i.observe(!0),d++)},m.destroyQuietly=function(e){var i=this,s=i.options;i.destroyed||!e&&!f.isUnd(Drupal.io)||(s=f.find(o,f.selector(s,":not(."+s.successClass+")")),f.isElm(s)||i.destroy(e))},m.destroy=function(e){var i=this,s=i.options,t=i.ioObserver;i.destroyed||0<i.erCounted&&!e||(r===i.count-1&&s.disconnect||e)&&(t&&t.disconnect(),f.unload(i),i.count=0,i.elms=[],i.ioObserver=null,i.destroyed=!0)},m.observe=function(e){var i=this,s=i.elms;f.isIo&&(i.destroyed||e)&&(v=f.initObserver(i,z,s,!0),i.destroyed=!1),c&&!e||(f.observe(i,s,!0),c=!0)},m.reinit=function(){this.destroyed=!0,function(e){e.prepare();var i=e.elms=f.findAll(n,f.selector(e.options));e.count=i.length,e._raf=[],e._queue=[],e.observe(!0)}(this)},i});
;
!function(t,e){"use strict";var n="BioMedia",r=t.dBlazy,a=t.Bio;"function"==typeof define&&define.amd?define([n,r,a],e):"object"==typeof exports?module.exports=e(n,r,a):t[n]=e(n,r,a)}(this,function(n,p,r){"use strict";var a=document,t="data-",l="src",f="srcset",h=t+l,g=[f,l],m=0,o=!1,i=Bio.prototype,s=e.prototype=Object.create(i);function e(t){var e=r.apply(p.extend({},i,p.extend({},s,this)),arguments);return e.name=n,e}function b(t,e,n,r){return o||((t=c(t,"defer"))&&p.each(t,function(t){p.attr(t,"loading","lazy")}),o=!0),p.status(e,n,r)}function c(t,e){t=t.options;if(!p.isNativeLazy)return[];e=e||"a";e=p.selector(t,'[data-src][loading*="'+e+'"]:not(.b-blur)'),e=p.findAll(a,e);return e.length&&p(e).mapAttr(["srcset","src"],!0).mapSource(!1,!0,!1),e}return s.constructor=e,s.lazyLoad=function(t,e){var n=this,r=n.options,a=t.parentNode,o=p.isBg(t),i=p.equal(a,"picture"),s=p.equal(t,"img"),c=p.equal(t,"video"),a=p.hasAttr(t,h);i?(a&&(p.mapSource(t,f,!0),p.mapAttr(t,l,!0)),m=b(n,t,!0,r)):c?m=p.loadVideo(t,!0,r):s||o?n.loadImage(t,o,e):p.hasAttr(t,l)&&(p.attr(t,h)&&p.mapAttr(t,l,!0),m=b(n,t,!0,r)),n.erCount=m},s.loadImage=function(t,n,r){function e(t,e){m=n&&p.isFun(p.bg)?(p.bg(t,r),p.status(t,e,o)):b(a,t,e,o)}var a=this,o=a.options,i=new Image,s=p.hasAttr(t,f),c=p.hasAttr(t,h),u=c?h:l,d=c?"data-srcset":f;"decode"in i&&(i.decoding="async"),n&&p.isFun(p.bgUrl)?i.src=p.bgUrl(t,r):(c&&p.mapAttr(t,g,!1),i.src=p.attr(t,u)),s&&(i.srcset=p.attr(t,d)),p.decode(i).then(function(){e(t,!0)}).catch(function(){e(t,s),s||(t.bhit=!1)})},s.resizing=function(t,e){var n=p.isBg(t,this.options);n&&this.loadImage(t,n,e)},s.prepare=function(){var e,t,n;c(this),p.webp&&(e=this,p.webp.isSupported()||(t=function(t){return t=t||"",p.selector(e.options,"["+t+'srcset*=".webp"]')},(n=p.findAll(a,t())).length||(n=p.findAll(a,t("data-"))),n.length&&p.webp.run(n)))},e});
;
!function(o,t,n,l,e){"use strict";var s="data",a=".b-blur",r=".media",i="successClass",u=(c="blazy")+".done",c=function(){},d={};t.blazy={context:e,name:"Drupal.blazy",init:null,instances:[],resizeTick:0,resizeTrigger:!1,blazySettings:n.blazy||{},ioSettings:n.blazyIo||{},options:{},clearCompat:c,clearScript:c,checkResize:c,resizing:c,revalidate:c,isIo:function(){return!0},isBlazy:function(){return!o.isIo&&"Blazy"in l},isFluid:function(t,n){return o.equal(t.parentNode,"picture")&&o.hasAttr(n,"data-ratios")},isLoaded:function(t){return o.hasClass(t,this.options[i])},globals:function(){var t=this,n={isMedia:!0,success:t.clearing.bind(t),error:t.clearing.bind(t),resizing:t.resizing.bind(t),selector:".b-lazy",parent:r,errorClass:"b-error",successClass:"b-loaded"};return o.extend(t.blazySettings,t.ioSettings,n)},extend:function(t){d=o.extend({},d,t)},merge:function(t){var n=this;return n.options=o.extend({},n.globals(),n.options,t||{}),n.options},run:function(t){return new BioMedia(t)},mount:function(t){var n=this;return n.merge(),t&&o.each(d,function(t){o.isFun(t)&&t.call(n)}),o.extend(n,d)},selector:function(t){t=t||"";var n=this.options;return n.selector+t+":not(."+n[i]+")"},clearing:function(t){var n,i;t.bclearing||(n=this,i=o.hasClass(t,"b-responsive")&&o.hasAttr(t,s+"-pfsrc"),o.isFun(o.unloading)&&o.unloading(t),o.trigger(t,u,{options:n.options}),n.clearCompat(t),n.clearScript(t),l.picturefill&&i&&l.picturefill({reevaluate:!0,elements:[t]}),t.bclearing=!0)},windowData:function(){return this.init?this.init.windowData():{}},load:function(n){var i=this;l.setTimeout(function(){var t=o.findAll(n||e,i.selector());t.length&&o.each(t,i.update.bind(i))},100)},update:function(t,n,i){function e(){o.hasAttr(t,"data-b-bg")&&o.isFun(o.bg)?o.bg(t,i||s.windowData()):s.init&&(o.hasClass(t,r.substring(1))||(t=o.find(t,r)||t),s.init.load(t,!0,a))}var s=this,a=s.options,r=a.selector;(n=n||!1)?l.setTimeout(e,100):e()},rebind:function(t,i,e){var n=o.findAll(t,this.options.selector+":not("+a+")"),s=n.length;s||(n=o.findAll(t,"img:not("+a+")")),n.length&&o.each(n,function(t){var n=s?u:"load";o.one(t,n,i,s),e&&e.observe(t)})},pad:function(n,i,t){var e=this,s=o.closest(n,r)||n;setTimeout(function(){var t=Math.round(n.naturalHeight/n.naturalWidth*100,2);e.isFluid(n,s)&&(s.style.paddingBottom=t+"%"),o.isFun(i)&&i.call(e,n,s,t)},t||0)}}}(dBlazy,Drupal,drupalSettings,this,this.document);
;
!function(r,n,o){"use strict";var i,l="blazy",t="data-",a=t+"animation",c=t+"ratios",u=t+"ratio",d="picture",e=".media--ratio",h={},f=0;function s(t){var i=r.closest(t,"["+a+"]");r.hasAttr(t,a)&&!r.isElm(i)&&(i=t),r.isElm(i)&&!r.hasClass(i,"is-b-animated")&&setTimeout(function(){r.animate(i)},100)}function z(t,i,a){if(t=t.target||t,a=!!r.isBool(a)&&a,r.isElm(t)){var n,e,s=r.closest(t,"."+l),o=r.parse(r.attr(t,c));if(r.isEmpty(o))return n=t,e=r.attr(n,u),void(!r.hasAttr(n,"style")&&e&&(n.style.paddingBottom=e+"%"));a=r.isElm(r.find(t,d))&&a,a=r.extend(h,{up:a}),a=r.activeWidth(o,a);t.dblazy=r.isElm(s)&&s.dblazy,r.isUnd(a)||(t.style.paddingBottom=a+"%")}}function m(){var t=this;t.mount(!0),i=t.options,r.isNull(t.init)&&(t.init=t.run(i)),function(){var t=this,i=t.context,a=r.findAll(i,e);a.length&&(r.each(a,z.bind(t)),t.checkResize(a,z,i))}.call(t)}n.blazy=r.extend(n.blazy||{},{clearCompat:function(t){var i=r.isBg(t)&&(this.isBlazy()||r.ie);this.pad(t,s,i?50:0)},checkResize:function(i,n,t,a){var e=this,s=e.init;return r.on(o,l+".resizing",function(t){t=t&&t.detail?t.detail:{};h=t.winData||e.windowData();var a=0<f&&f!==h.ww;a&&(e.resizeTick=s&&s.resizeTick||0,r.isFun(n)&&r.each(i,function(t,i){t=t.target||t;return n.call(e,t,i,a)})),f=h.ww}),a&&r.isFun(a)&&e.rebind(t,a,e.roObserver),e.destroyed=!1,h},unresize:function(){r.unload(this)}}),n.behaviors.blazyCompat={attach:function(t){var i=n.blazy;i.context=r.context(t),r.once(m.call(i))},detach:function(t,i,a){"unload"===a&&n.blazy.unresize()}}}(dBlazy,Drupal,this);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal) {
  Drupal.theme.checkbox = function () {
    return "<input type=\"checkbox\" class=\"form-checkbox\"/>";
  };
})(Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.ClickToSelect = {
    attach: function attach(context) {
      $(once('media-library-click-to-select', '.js-click-to-select-trigger', context)).on('click', function (event) {
        event.preventDefault();
        var $input = $(event.currentTarget).closest('.js-click-to-select').find('.js-click-to-select-checkbox input');
        $input.prop('checked', !$input.prop('checked')).trigger('change');
      });
      $(once('media-library-click-to-select', '.js-click-to-select-checkbox input', context)).on('change', function (_ref) {
        var currentTarget = _ref.currentTarget;
        $(currentTarget).closest('.js-click-to-select').toggleClass('checked', $(currentTarget).prop('checked'));
      }).on('focus blur', function (_ref2) {
        var currentTarget = _ref2.currentTarget,
            type = _ref2.type;
        $(currentTarget).closest('.js-click-to-select').toggleClass('is-focus', type === 'focus');
      });
      $(once('media-library-click-to-select-hover', '.js-click-to-select-trigger, .js-click-to-select-checkbox', context)).on('mouseover mouseout', function (_ref3) {
        var currentTarget = _ref3.currentTarget,
            type = _ref3.type;
        $(currentTarget).closest('.js-click-to-select').toggleClass('is-hover', type === 'mouseover');
      });
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.MediaLibrarySelectAll = {
    attach: function attach(context) {
      var $view = $(once('media-library-select-all', '.js-media-library-view[data-view-display-id="page"]', context));

      if ($view.length && $view.find('.js-media-library-item').length) {
        var $checkbox = $(Drupal.theme('checkbox')).on('click', function (_ref) {
          var currentTarget = _ref.currentTarget;
          var $checkboxes = $(currentTarget).closest('.js-media-library-view').find('.js-media-library-item input[type="checkbox"]');
          $checkboxes.prop('checked', $(currentTarget).prop('checked')).trigger('change');
          var announcement = $(currentTarget).prop('checked') ? Drupal.t('All @count items selected', {
            '@count': $checkboxes.length
          }) : Drupal.t('Zero items selected');
          Drupal.announce(announcement);
        });
        var $label = $('<label class="media-library-select-all"></label>').text(Drupal.t('Select all media'));
        $label.prepend($checkbox);
        $view.find('.js-media-library-item').first().before($label);
      }
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, window, _ref) {
  var tabbable = _ref.tabbable;
  Drupal.MediaLibrary = {
    currentSelection: []
  };

  Drupal.AjaxCommands.prototype.updateMediaLibrarySelection = function (ajax, response, status) {
    Object.values(response.mediaIds).forEach(function (value) {
      Drupal.MediaLibrary.currentSelection.push(value);
    });
  };

  Drupal.behaviors.MediaLibraryTabs = {
    attach: function attach(context) {
      var $menu = $('.js-media-library-menu');
      $(once('media-library-menu-item', $menu.find('a'))).on('keypress', function (e) {
        if (e.which === 32) {
          e.preventDefault();
          e.stopPropagation();
          $(e.currentTarget).trigger('click');
        }
      }).on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var ajaxObject = Drupal.ajax({
          wrapper: 'media-library-content',
          url: e.currentTarget.href,
          dialogType: 'ajax',
          progress: {
            type: 'fullscreen',
            message: Drupal.t('Please wait...')
          }
        });

        ajaxObject.success = function (response, status) {
          var _this = this;

          if (this.progress.element) {
            $(this.progress.element).remove();
          }

          if (this.progress.object) {
            this.progress.object.stopMonitoring();
          }

          $(this.element).prop('disabled', false);
          Object.keys(response || {}).forEach(function (i) {
            if (response[i].command && _this.commands[response[i].command]) {
              _this.commands[response[i].command](_this, response[i], status);
            }
          });
          var mediaLibraryContent = document.getElementById('media-library-content');

          if (mediaLibraryContent) {
            var tabbableContent = tabbable(mediaLibraryContent);

            if (tabbableContent.length) {
              tabbableContent[0].focus();
            }
          }

          this.settings = null;
        };

        ajaxObject.execute();
        $menu.find('.active-tab').remove();
        $menu.find('a').removeClass('active');
        $(e.currentTarget).addClass('active').html(Drupal.t('<span class="visually-hidden">Show </span>@title<span class="visually-hidden"> media</span><span class="active-tab visually-hidden"> (selected)</span>', {
          '@title': $(e.currentTarget).data('title')
        }));
        Drupal.announce(Drupal.t('Showing @title media.', {
          '@title': $(e.currentTarget).data('title')
        }));
      });
    }
  };
  Drupal.behaviors.MediaLibraryViewsDisplay = {
    attach: function attach(context) {
      var $view = $(context).hasClass('.js-media-library-view') ? $(context) : $('.js-media-library-view', context);
      $view.closest('.views-element-container').attr('id', 'media-library-view');
      $(once('media-library-views-display-link', '.views-display-link-widget, .views-display-link-widget_table', context)).on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $link = $(e.currentTarget);
        var loadingAnnouncement = '';
        var displayAnnouncement = '';
        var focusSelector = '';

        if ($link.hasClass('views-display-link-widget')) {
          loadingAnnouncement = Drupal.t('Loading grid view.');
          displayAnnouncement = Drupal.t('Changed to grid view.');
          focusSelector = '.views-display-link-widget';
        } else if ($link.hasClass('views-display-link-widget_table')) {
          loadingAnnouncement = Drupal.t('Loading table view.');
          displayAnnouncement = Drupal.t('Changed to table view.');
          focusSelector = '.views-display-link-widget_table';
        }

        var ajaxObject = Drupal.ajax({
          wrapper: 'media-library-view',
          url: e.currentTarget.href,
          dialogType: 'ajax',
          progress: {
            type: 'fullscreen',
            message: loadingAnnouncement || Drupal.t('Please wait...')
          }
        });

        if (displayAnnouncement || focusSelector) {
          var success = ajaxObject.success;

          ajaxObject.success = function (response, status) {
            success.bind(this)(response, status);

            if (focusSelector) {
              $(focusSelector).focus();
            }

            if (displayAnnouncement) {
              Drupal.announce(displayAnnouncement);
            }
          };
        }

        ajaxObject.execute();

        if (loadingAnnouncement) {
          Drupal.announce(loadingAnnouncement);
        }
      });
    }
  };
  Drupal.behaviors.MediaLibraryItemSelection = {
    attach: function attach(context, settings) {
      var $form = $('.js-media-library-views-form, .js-media-library-add-form', context);
      var currentSelection = Drupal.MediaLibrary.currentSelection;

      if (!$form.length) {
        return;
      }

      var $mediaItems = $('.js-media-library-item input[type="checkbox"]', $form);

      function disableItems($items) {
        $items.prop('disabled', true).closest('.js-media-library-item').addClass('media-library-item--disabled');
      }

      function enableItems($items) {
        $items.prop('disabled', false).closest('.js-media-library-item').removeClass('media-library-item--disabled');
      }

      function updateSelectionCount(remaining) {
        var selectItemsText = remaining < 0 ? Drupal.formatPlural(currentSelection.length, '1 item selected', '@count items selected') : Drupal.formatPlural(remaining, '@selected of @count item selected', '@selected of @count items selected', {
          '@selected': currentSelection.length
        });
        $('.js-media-library-selected-count').html(selectItemsText);
      }

      $(once('media-item-change', $mediaItems)).on('change', function (e) {
        var id = e.currentTarget.value;
        var position = currentSelection.indexOf(id);

        if (e.currentTarget.checked) {
          if (position === -1) {
            currentSelection.push(id);
          }
        } else if (position !== -1) {
          currentSelection.splice(position, 1);
        }

        $form.find('#media-library-modal-selection').val(currentSelection.join()).trigger('change');
        $('.js-media-library-add-form-current-selection').val(currentSelection.join());
      });
      $(once('media-library-selection-change', $form.find('#media-library-modal-selection'))).on('change', function (e) {
        updateSelectionCount(settings.media_library.selection_remaining);

        if (currentSelection.length === settings.media_library.selection_remaining) {
          disableItems($mediaItems.not(':checked'));
          enableItems($mediaItems.filter(':checked'));
        } else {
          enableItems($mediaItems);
        }
      });
      currentSelection.forEach(function (value) {
        $form.find("input[type=\"checkbox\"][value=\"".concat(value, "\"]")).prop('checked', true).trigger('change');
      });

      if (!once('media-library-selection-info', 'html').length) {
        return;
      }

      $(window).on('dialog:aftercreate', function () {
        var $buttonPane = $('.media-library-widget-modal .ui-dialog-buttonpane');

        if (!$buttonPane.length) {
          return;
        }

        $buttonPane.append(Drupal.theme('mediaLibrarySelectionCount'));
        updateSelectionCount(settings.media_library.selection_remaining);
      });
    }
  };
  Drupal.behaviors.MediaLibraryModalClearSelection = {
    attach: function attach() {
      if (!once('media-library-clear-selection', 'html').length) {
        return;
      }

      $(window).on('dialog:afterclose', function () {
        Drupal.MediaLibrary.currentSelection = [];
      });
    }
  };

  Drupal.theme.mediaLibrarySelectionCount = function () {
    return "<div class=\"media-library-selected-count js-media-library-selected-count\" role=\"status\" aria-live=\"polite\" aria-atomic=\"true\"></div>";
  };
})(jQuery, Drupal, window, window.tabbable);;
!function(s,t){"use strict";var c,i,u=t.blazy||{};(t=(t.Ajax||{}).prototype).success=(i=t.success,function(t,e){var n,o=u.init;return o&&(n=u.options,clearTimeout(c),c=setTimeout(function(){var t=s.findAll(document,s.selector(n,!0));t.length&&o.load(t,!0,n)},100)),i.apply(this,arguments)})}(dBlazy,Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.Views = {};

  Drupal.Views.parseQueryString = function (query) {
    var args = {};
    var pos = query.indexOf('?');

    if (pos !== -1) {
      query = query.substring(pos + 1);
    }

    var pair;
    var pairs = query.split('&');

    for (var i = 0; i < pairs.length; i++) {
      pair = pairs[i].split('=');

      if (pair[0] !== 'q' && pair[1]) {
        args[decodeURIComponent(pair[0].replace(/\+/g, ' '))] = decodeURIComponent(pair[1].replace(/\+/g, ' '));
      }
    }

    return args;
  };

  Drupal.Views.parseViewArgs = function (href, viewPath) {
    var returnObj = {};
    var path = Drupal.Views.getPath(href);
    var viewHref = Drupal.url(viewPath).substring(drupalSettings.path.baseUrl.length);

    if (viewHref && path.substring(0, viewHref.length + 1) === "".concat(viewHref, "/")) {
      returnObj.view_args = decodeURIComponent(path.substring(viewHref.length + 1, path.length));
      returnObj.view_path = path;
    }

    return returnObj;
  };

  Drupal.Views.pathPortion = function (href) {
    var protocol = window.location.protocol;

    if (href.substring(0, protocol.length) === protocol) {
      href = href.substring(href.indexOf('/', protocol.length + 2));
    }

    return href;
  };

  Drupal.Views.getPath = function (href) {
    href = Drupal.Views.pathPortion(href);
    href = href.substring(drupalSettings.path.baseUrl.length, href.length);

    if (href.substring(0, 3) === '?q=') {
      href = href.substring(3, href.length);
    }

    var chars = ['#', '?', '&'];

    for (var i = 0; i < chars.length; i++) {
      if (href.indexOf(chars[i]) > -1) {
        href = href.substr(0, href.indexOf(chars[i]));
      }
    }

    return href;
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.ViewsAjaxView = {};

  Drupal.behaviors.ViewsAjaxView.attach = function (context, settings) {
    if (settings && settings.views && settings.views.ajaxViews) {
      var ajaxViews = settings.views.ajaxViews;
      Object.keys(ajaxViews || {}).forEach(function (i) {
        Drupal.views.instances[i] = new Drupal.views.ajaxView(ajaxViews[i]);
      });
    }
  };

  Drupal.behaviors.ViewsAjaxView.detach = function (context, settings, trigger) {
    if (trigger === 'unload') {
      if (settings && settings.views && settings.views.ajaxViews) {
        var ajaxViews = settings.views.ajaxViews;
        Object.keys(ajaxViews || {}).forEach(function (i) {
          var selector = ".js-view-dom-id-".concat(ajaxViews[i].view_dom_id);

          if ($(selector, context).length) {
            delete Drupal.views.instances[i];
            delete settings.views.ajaxViews[i];
          }
        });
      }
    }
  };

  Drupal.views = {};
  Drupal.views.instances = {};

  Drupal.views.ajaxView = function (settings) {
    var selector = ".js-view-dom-id-".concat(settings.view_dom_id);
    this.$view = $(selector);
    var ajaxPath = drupalSettings.views.ajax_path;

    if (ajaxPath.constructor.toString().indexOf('Array') !== -1) {
      ajaxPath = ajaxPath[0];
    }

    var queryString = window.location.search || '';

    if (queryString !== '') {
      queryString = queryString.slice(1).replace(/q=[^&]+&?|&?render=[^&]+/, '');

      if (queryString !== '') {
        queryString = (/\?/.test(ajaxPath) ? '&' : '?') + queryString;
      }
    }

    this.element_settings = {
      url: ajaxPath + queryString,
      submit: settings,
      setClick: true,
      event: 'click',
      selector: selector,
      progress: {
        type: 'fullscreen'
      }
    };
    this.settings = settings;
    this.$exposed_form = $("form#views-exposed-form-".concat(settings.view_name.replace(/_/g, '-'), "-").concat(settings.view_display_id.replace(/_/g, '-')));
    once('exposed-form', this.$exposed_form).forEach($.proxy(this.attachExposedFormAjax, this));
    once('ajax-pager', this.$view.filter($.proxy(this.filterNestedViews, this))).forEach($.proxy(this.attachPagerAjax, this));
    var selfSettings = $.extend({}, this.element_settings, {
      event: 'RefreshView',
      base: this.selector,
      element: this.$view.get(0)
    });
    this.refreshViewAjax = Drupal.ajax(selfSettings);
  };

  Drupal.views.ajaxView.prototype.attachExposedFormAjax = function () {
    var that = this;
    this.exposedFormAjax = [];
    $('input[type=submit], button[type=submit], input[type=image]', this.$exposed_form).not('[data-drupal-selector=edit-reset]').each(function (index) {
      var selfSettings = $.extend({}, that.element_settings, {
        base: $(this).attr('id'),
        element: this
      });
      that.exposedFormAjax[index] = Drupal.ajax(selfSettings);
    });
  };

  Drupal.views.ajaxView.prototype.filterNestedViews = function () {
    return !this.$view.parents('.view').length;
  };

  Drupal.views.ajaxView.prototype.attachPagerAjax = function () {
    this.$view.find('ul.js-pager__items > li > a, th.views-field a, .attachment .views-summary a').each($.proxy(this.attachPagerLinkAjax, this));
  };

  Drupal.views.ajaxView.prototype.attachPagerLinkAjax = function (id, link) {
    var $link = $(link);
    var viewData = {};
    var href = $link.attr('href');
    $.extend(viewData, this.settings, Drupal.Views.parseQueryString(href), Drupal.Views.parseViewArgs(href, this.settings.view_base_path));
    var selfSettings = $.extend({}, this.element_settings, {
      submit: viewData,
      base: false,
      element: link
    });
    this.pagerAjax = Drupal.ajax(selfSettings);
  };

  Drupal.AjaxCommands.prototype.viewsScrollTop = function (ajax, response) {
    var offset = $(response.selector).offset();
    var scrollTarget = response.selector;

    while ($(scrollTarget).scrollTop() === 0 && $(scrollTarget).parent()) {
      scrollTarget = $(scrollTarget).parent();
    }

    if (offset.top - 10 < $(scrollTarget).scrollTop()) {
      $(scrollTarget).animate({
        scrollTop: offset.top - 10
      }, 500);
    }
  };
})(jQuery, Drupal, drupalSettings);;
