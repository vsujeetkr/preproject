!function(s,e,n){"use strict";var c="blazy",i=c,d="is-"+c,r=".blazy:not(."+d+")",o="body",l="b-root",t="b-checked",u="image",b="#drupal-modal, .is-b-scroll",f={};function h(a,t,e){var n,i=this,r=1<i.resizeTick,o=i.instances;o.length&&r&&(n=function(a){a.dblazy&&a.dbuniform&&(a.dblazy!==t.dblazy||a.dbpicture||(s.trigger(a,c+":uniform"+a.dblazy,{pad:e}),a.dbpicture=!0))},s.each(o,function(a){s.debounce(n,a,i)},i))}e.blazy=s.extend(e.blazy||{},{clearScript:function(a){s.hasClass(a,f.errorClass)&&!s.hasClass(a,t)&&(s.addClass(a,t),this.update(a,!0)),this.pad(a,h)},fixDataUri:function(){var a=s.findAll(n,this.selector('[src^="image"]'));a.length&&s.each(a,function(a){var t=s.attr(a,"src");s.contains(t,["base64","svg+xml"])&&s.attr(a,"src",t.replace(u,"data:"+u))})}}),e.behaviors.blazy={attach:function(a){var t=e.blazy;t.context=s.context(a),s.once(function(a){var t=this,e=s.parse(s.attr(a,"data-"+c)),n=s.hasClass(a,c+"--field b-grid "+c+"--uniform"),i=(1e4*Math.random()).toFixed(0),r=c+":uniform"+i,o=s.findAll(a,".media--ratio");f=t.merge(e),t.revalidate=t.revalidate||s.hasClass(a,c+"--revalidate"),a.dblazy=i,a.dbuniform=n,t.instances.push(a),n&&o.length&&s.on(a,r,function(a){var t=a.detail.pad||0;10<t&&s.each(o,function(a){a.style.paddingBottom=t+"%"})}),s.addClass(a,d)}.bind(t),i,r,a),s.once(function(a){var t=this,e={mobileFirst:!1};n.documentElement.isSameNode(a)||(e.root=a);a=(e=t.merge(e)).container;a&&!s.contains(b,a)&&(b+=", "+a.trim()),e.container=b,f=t.merge(e),t.fixDataUri(),t.init=t.run(t.options)}.bind(t),l,o,a)},detach:function(a,t,e){"unload"===e&&(s.once.removeSafely(i,r,a),s.once.removeSafely(l,o,a))}}}(dBlazy,Drupal,(drupalSettings,this.document));
