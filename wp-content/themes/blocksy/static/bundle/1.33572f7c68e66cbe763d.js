(window.blocksyJsonP=window.blocksyJsonP||[]).push([[1],{25:function(n,e,t){"use strict";t.r(e),t.d(e,"mount",(function(){return s}));var i=t(4),o=t.n(i);const s=(n,e)=>{let{event:t}=e;if("pinterest"===n.dataset.network)return t.preventDefault(),void(window.PinUtils?window.PinUtils.pinAny():o()("https://assets.pinterest.com/js/pinit.js",()=>{setTimeout(()=>{window.PinUtils.pinAny()},300)}));t.preventDefault();const i=n.href;var s=null!=window.screenLeft?window.screenLeft:screen.left,w=null!=window.screenTop?window.screenTop:screen.top,d=(window.innerWidth?window.innerWidth:document.documentElement.clientWidth?document.documentElement.clientWidth:screen.width)/2-300+s,c=(window.innerHeight?window.innerHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:screen.height)/2-250+w,r=window.open(i,"","scrollbars=yes, width=600, height=500, top="+c+", left="+d);window.focus&&r.focus()}}}]);