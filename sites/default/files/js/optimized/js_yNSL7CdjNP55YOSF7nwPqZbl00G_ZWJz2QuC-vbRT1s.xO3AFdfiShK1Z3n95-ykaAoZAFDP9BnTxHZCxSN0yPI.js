!function(l,n,s){"use strict";var d="blazy",f=0,g="data-",r=g+"animation",m="src",b=["srcset",m],t="b-bg";function i(s,e){return s=s.target||s,l.hasClass(s,e)}l._defaults={error:!1,offset:100,root:s,success:!1,selector:".b-lazy",separator:"|",container:!1,containerClass:!1,errorClass:"b-error",loadInvisible:!1,successClass:"b-loaded",visibleClass:!1,validateDelay:25,saveViewportOffsetDelay:50,srcset:"data-srcset",src:"data-src",bgClass:t,isMedia:!1,parent:".media",disconnect:!1,intersecting:!1,observing:!1,resizing:!1,mobileFirst:!1,rootMargin:"0px",threshold:[0]},l.isCompleted=function(s){if(l.isElm(s)){if(l.equal(s,"img"))return l.isDecoded(s);if(l.equal(s,"iframe"))return"complete"===(s.contentDocument||s.contentWindow.document).readyState}return!1},l.isBg=function(s,e){return i(s,e&&e.bgClass||t)},l.isBlur=function(s){return i(s,"b-blur")},l.selector=function(s,e){var r=s.selector;return e&&l.isBool(e)&&(e=":not(."+s.successClass+")"),r+(e=e||"")},l.success=function(s,e,r,t){return l.isFun(t.success)&&t.success(s,e,r,t),0<f&&f--,f},l.error=function(s,e,r,t){return l.isFun(t.error)&&t.error(s,e,r,t),++f},l.status=function(s,e,r){return this.loaded(s,e,null,r)},l.loaded=function(s,e,r,t){var n=l.closest(s,t.parent)||s,i=e===l._ok||!0===e,a=t.successClass,o=t.errorClass,c="is-"+a,u="is-"+o;return r=r||n,l.addClass(s,i?a:o),l.addClass(n,i?c:u),l.removeClass(n,"is-b-visible"),f=this[i?"success":"error"](s,e,r,t),i&&l.hasAttr(s,g+m)&&l.removeAttr(s,b,g),l.trigger(s,d+".loaded",{status:e}),f},l.loadVideo=function(s,e,r){return l.mapSource(s,m,!0),s.load(),l.status(s,e,r)},l.onresizing=function(s,e){var r=s.elms,t=s.options;l.isFun(t.resizing)&&t.resizing(s,r,e),l.trigger(n,d+".resizing",{winData:e,entries:r})},l.aniElement=function(s){var e=l.closest(s,"["+r+"]");return l.hasAttr(s,r)&&!l.isElm(e)&&(e=s),e}}(dBlazy,this,this.document);
