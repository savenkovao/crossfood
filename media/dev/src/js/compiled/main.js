!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery"],i):"undefined"!=typeof exports?module.exports=i(require("jquery")):i(jQuery)}(function(i){"use strict";var e=window.Slick||{};(e=function(){var e=0;return function(t,o){var s,n=this;n.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:i(t),appendDots:i(t),arrows:!0,asNavFor:null,prevArrow:'<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',nextArrow:'<button class="slick-next" aria-label="Next" type="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(e,t){return i('<button type="button" />').text(t+1)},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,focusOnChange:!1,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnFocus:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,useTransform:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},n.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,scrolling:!1,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,swiping:!1,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},i.extend(n,n.initials),n.activeBreakpoint=null,n.animType=null,n.animProp=null,n.breakpoints=[],n.breakpointSettings=[],n.cssTransitions=!1,n.focussed=!1,n.interrupted=!1,n.hidden="hidden",n.paused=!0,n.positionProp=null,n.respondTo=null,n.rowCount=1,n.shouldClick=!0,n.$slider=i(t),n.$slidesCache=null,n.transformType=null,n.transitionType=null,n.visibilityChange="visibilitychange",n.windowWidth=0,n.windowTimer=null,s=i(t).data("slick")||{},n.options=i.extend({},n.defaults,o,s),n.currentSlide=n.options.initialSlide,n.originalSettings=n.options,void 0!==document.mozHidden?(n.hidden="mozHidden",n.visibilityChange="mozvisibilitychange"):void 0!==document.webkitHidden&&(n.hidden="webkitHidden",n.visibilityChange="webkitvisibilitychange"),n.autoPlay=i.proxy(n.autoPlay,n),n.autoPlayClear=i.proxy(n.autoPlayClear,n),n.autoPlayIterator=i.proxy(n.autoPlayIterator,n),n.changeSlide=i.proxy(n.changeSlide,n),n.clickHandler=i.proxy(n.clickHandler,n),n.selectHandler=i.proxy(n.selectHandler,n),n.setPosition=i.proxy(n.setPosition,n),n.swipeHandler=i.proxy(n.swipeHandler,n),n.dragHandler=i.proxy(n.dragHandler,n),n.keyHandler=i.proxy(n.keyHandler,n),n.instanceUid=e++,n.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,n.registerBreakpoints(),n.init(!0)}}()).prototype.activateADA=function(){this.$slideTrack.find(".slick-active").attr({"aria-hidden":"false"}).find("a, input, button, select").attr({tabindex:"0"})},e.prototype.addSlide=e.prototype.slickAdd=function(e,t,o){var s=this;if("boolean"==typeof t)o=t,t=null;else if(t<0||t>=s.slideCount)return!1;s.unload(),"number"==typeof t?0===t&&0===s.$slides.length?i(e).appendTo(s.$slideTrack):o?i(e).insertBefore(s.$slides.eq(t)):i(e).insertAfter(s.$slides.eq(t)):!0===o?i(e).prependTo(s.$slideTrack):i(e).appendTo(s.$slideTrack),s.$slides=s.$slideTrack.children(this.options.slide),s.$slideTrack.children(this.options.slide).detach(),s.$slideTrack.append(s.$slides),s.$slides.each(function(e,t){i(t).attr("data-slick-index",e)}),s.$slidesCache=s.$slides,s.reinit()},e.prototype.animateHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.animate({height:e},i.options.speed)}},e.prototype.animateSlide=function(e,t){var o={},s=this;s.animateHeight(),!0===s.options.rtl&&!1===s.options.vertical&&(e=-e),!1===s.transformsEnabled?!1===s.options.vertical?s.$slideTrack.animate({left:e},s.options.speed,s.options.easing,t):s.$slideTrack.animate({top:e},s.options.speed,s.options.easing,t):!1===s.cssTransitions?(!0===s.options.rtl&&(s.currentLeft=-s.currentLeft),i({animStart:s.currentLeft}).animate({animStart:e},{duration:s.options.speed,easing:s.options.easing,step:function(i){i=Math.ceil(i),!1===s.options.vertical?(o[s.animType]="translate("+i+"px, 0px)",s.$slideTrack.css(o)):(o[s.animType]="translate(0px,"+i+"px)",s.$slideTrack.css(o))},complete:function(){t&&t.call()}})):(s.applyTransition(),e=Math.ceil(e),!1===s.options.vertical?o[s.animType]="translate3d("+e+"px, 0px, 0px)":o[s.animType]="translate3d(0px,"+e+"px, 0px)",s.$slideTrack.css(o),t&&setTimeout(function(){s.disableTransition(),t.call()},s.options.speed))},e.prototype.getNavTarget=function(){var e=this,t=e.options.asNavFor;return t&&null!==t&&(t=i(t).not(e.$slider)),t},e.prototype.asNavFor=function(e){var t=this.getNavTarget();null!==t&&"object"==typeof t&&t.each(function(){var t=i(this).slick("getSlick");t.unslicked||t.slideHandler(e,!0)})},e.prototype.applyTransition=function(i){var e=this,t={};!1===e.options.fade?t[e.transitionType]=e.transformType+" "+e.options.speed+"ms "+e.options.cssEase:t[e.transitionType]="opacity "+e.options.speed+"ms "+e.options.cssEase,!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.autoPlay=function(){var i=this;i.autoPlayClear(),i.slideCount>i.options.slidesToShow&&(i.autoPlayTimer=setInterval(i.autoPlayIterator,i.options.autoplaySpeed))},e.prototype.autoPlayClear=function(){var i=this;i.autoPlayTimer&&clearInterval(i.autoPlayTimer)},e.prototype.autoPlayIterator=function(){var i=this,e=i.currentSlide+i.options.slidesToScroll;i.paused||i.interrupted||i.focussed||(!1===i.options.infinite&&(1===i.direction&&i.currentSlide+1===i.slideCount-1?i.direction=0:0===i.direction&&(e=i.currentSlide-i.options.slidesToScroll,i.currentSlide-1==0&&(i.direction=1))),i.slideHandler(e))},e.prototype.buildArrows=function(){var e=this;!0===e.options.arrows&&(e.$prevArrow=i(e.options.prevArrow).addClass("slick-arrow"),e.$nextArrow=i(e.options.nextArrow).addClass("slick-arrow"),e.slideCount>e.options.slidesToShow?(e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.prependTo(e.options.appendArrows),e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.appendTo(e.options.appendArrows),!0!==e.options.infinite&&e.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},e.prototype.buildDots=function(){var e,t,o=this;if(!0===o.options.dots){for(o.$slider.addClass("slick-dotted"),t=i("<ul />").addClass(o.options.dotsClass),e=0;e<=o.getDotCount();e+=1)t.append(i("<li />").append(o.options.customPaging.call(this,o,e)));o.$dots=t.appendTo(o.options.appendDots),o.$dots.find("li").first().addClass("slick-active")}},e.prototype.buildOut=function(){var e=this;e.$slides=e.$slider.children(e.options.slide+":not(.slick-cloned)").addClass("slick-slide"),e.slideCount=e.$slides.length,e.$slides.each(function(e,t){i(t).attr("data-slick-index",e).data("originalStyling",i(t).attr("style")||"")}),e.$slider.addClass("slick-slider"),e.$slideTrack=0===e.slideCount?i('<div class="slick-track"/>').appendTo(e.$slider):e.$slides.wrapAll('<div class="slick-track"/>').parent(),e.$list=e.$slideTrack.wrap('<div class="slick-list"/>').parent(),e.$slideTrack.css("opacity",0),!0!==e.options.centerMode&&!0!==e.options.swipeToSlide||(e.options.slidesToScroll=1),i("img[data-lazy]",e.$slider).not("[src]").addClass("slick-loading"),e.setupInfinite(),e.buildArrows(),e.buildDots(),e.updateDots(),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),!0===e.options.draggable&&e.$list.addClass("draggable")},e.prototype.buildRows=function(){var i,e,t,o,s,n,r,l=this;if(o=document.createDocumentFragment(),n=l.$slider.children(),l.options.rows>1){for(r=l.options.slidesPerRow*l.options.rows,s=Math.ceil(n.length/r),i=0;i<s;i++){var d=document.createElement("div");for(e=0;e<l.options.rows;e++){var a=document.createElement("div");for(t=0;t<l.options.slidesPerRow;t++){var c=i*r+(e*l.options.slidesPerRow+t);n.get(c)&&a.appendChild(n.get(c))}d.appendChild(a)}o.appendChild(d)}l.$slider.empty().append(o),l.$slider.children().children().children().css({width:100/l.options.slidesPerRow+"%",display:"inline-block"})}},e.prototype.checkResponsive=function(e,t){var o,s,n,r=this,l=!1,d=r.$slider.width(),a=window.innerWidth||i(window).width();if("window"===r.respondTo?n=a:"slider"===r.respondTo?n=d:"min"===r.respondTo&&(n=Math.min(a,d)),r.options.responsive&&r.options.responsive.length&&null!==r.options.responsive){s=null;for(o in r.breakpoints)r.breakpoints.hasOwnProperty(o)&&(!1===r.originalSettings.mobileFirst?n<r.breakpoints[o]&&(s=r.breakpoints[o]):n>r.breakpoints[o]&&(s=r.breakpoints[o]));null!==s?null!==r.activeBreakpoint?(s!==r.activeBreakpoint||t)&&(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):null!==r.activeBreakpoint&&(r.activeBreakpoint=null,r.options=r.originalSettings,!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e),l=s),e||!1===l||r.$slider.trigger("breakpoint",[r,l])}},e.prototype.changeSlide=function(e,t){var o,s,n,r=this,l=i(e.currentTarget);switch(l.is("a")&&e.preventDefault(),l.is("li")||(l=l.closest("li")),n=r.slideCount%r.options.slidesToScroll!=0,o=n?0:(r.slideCount-r.currentSlide)%r.options.slidesToScroll,e.data.message){case"previous":s=0===o?r.options.slidesToScroll:r.options.slidesToShow-o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide-s,!1,t);break;case"next":s=0===o?r.options.slidesToScroll:o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide+s,!1,t);break;case"index":var d=0===e.data.index?0:e.data.index||l.index()*r.options.slidesToScroll;r.slideHandler(r.checkNavigable(d),!1,t),l.children().trigger("focus");break;default:return}},e.prototype.checkNavigable=function(i){var e,t;if(e=this.getNavigableIndexes(),t=0,i>e[e.length-1])i=e[e.length-1];else for(var o in e){if(i<e[o]){i=t;break}t=e[o]}return i},e.prototype.cleanUpEvents=function(){var e=this;e.options.dots&&null!==e.$dots&&(i("li",e.$dots).off("click.slick",e.changeSlide).off("mouseenter.slick",i.proxy(e.interrupt,e,!0)).off("mouseleave.slick",i.proxy(e.interrupt,e,!1)),!0===e.options.accessibility&&e.$dots.off("keydown.slick",e.keyHandler)),e.$slider.off("focus.slick blur.slick"),!0===e.options.arrows&&e.slideCount>e.options.slidesToShow&&(e.$prevArrow&&e.$prevArrow.off("click.slick",e.changeSlide),e.$nextArrow&&e.$nextArrow.off("click.slick",e.changeSlide),!0===e.options.accessibility&&(e.$prevArrow&&e.$prevArrow.off("keydown.slick",e.keyHandler),e.$nextArrow&&e.$nextArrow.off("keydown.slick",e.keyHandler))),e.$list.off("touchstart.slick mousedown.slick",e.swipeHandler),e.$list.off("touchmove.slick mousemove.slick",e.swipeHandler),e.$list.off("touchend.slick mouseup.slick",e.swipeHandler),e.$list.off("touchcancel.slick mouseleave.slick",e.swipeHandler),e.$list.off("click.slick",e.clickHandler),i(document).off(e.visibilityChange,e.visibility),e.cleanUpSlideEvents(),!0===e.options.accessibility&&e.$list.off("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().off("click.slick",e.selectHandler),i(window).off("orientationchange.slick.slick-"+e.instanceUid,e.orientationChange),i(window).off("resize.slick.slick-"+e.instanceUid,e.resize),i("[draggable!=true]",e.$slideTrack).off("dragstart",e.preventDefault),i(window).off("load.slick.slick-"+e.instanceUid,e.setPosition)},e.prototype.cleanUpSlideEvents=function(){var e=this;e.$list.off("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.off("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.cleanUpRows=function(){var i,e=this;e.options.rows>1&&((i=e.$slides.children().children()).removeAttr("style"),e.$slider.empty().append(i))},e.prototype.clickHandler=function(i){!1===this.shouldClick&&(i.stopImmediatePropagation(),i.stopPropagation(),i.preventDefault())},e.prototype.destroy=function(e){var t=this;t.autoPlayClear(),t.touchObject={},t.cleanUpEvents(),i(".slick-cloned",t.$slider).detach(),t.$dots&&t.$dots.remove(),t.$prevArrow&&t.$prevArrow.length&&(t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.prevArrow)&&t.$prevArrow.remove()),t.$nextArrow&&t.$nextArrow.length&&(t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.nextArrow)&&t.$nextArrow.remove()),t.$slides&&(t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){i(this).attr("style",i(this).data("originalStyling"))}),t.$slideTrack.children(this.options.slide).detach(),t.$slideTrack.detach(),t.$list.detach(),t.$slider.append(t.$slides)),t.cleanUpRows(),t.$slider.removeClass("slick-slider"),t.$slider.removeClass("slick-initialized"),t.$slider.removeClass("slick-dotted"),t.unslicked=!0,e||t.$slider.trigger("destroy",[t])},e.prototype.disableTransition=function(i){var e=this,t={};t[e.transitionType]="",!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.fadeSlide=function(i,e){var t=this;!1===t.cssTransitions?(t.$slides.eq(i).css({zIndex:t.options.zIndex}),t.$slides.eq(i).animate({opacity:1},t.options.speed,t.options.easing,e)):(t.applyTransition(i),t.$slides.eq(i).css({opacity:1,zIndex:t.options.zIndex}),e&&setTimeout(function(){t.disableTransition(i),e.call()},t.options.speed))},e.prototype.fadeSlideOut=function(i){var e=this;!1===e.cssTransitions?e.$slides.eq(i).animate({opacity:0,zIndex:e.options.zIndex-2},e.options.speed,e.options.easing):(e.applyTransition(i),e.$slides.eq(i).css({opacity:0,zIndex:e.options.zIndex-2}))},e.prototype.filterSlides=e.prototype.slickFilter=function(i){var e=this;null!==i&&(e.$slidesCache=e.$slides,e.unload(),e.$slideTrack.children(this.options.slide).detach(),e.$slidesCache.filter(i).appendTo(e.$slideTrack),e.reinit())},e.prototype.focusHandler=function(){var e=this;e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick","*",function(t){t.stopImmediatePropagation();var o=i(this);setTimeout(function(){e.options.pauseOnFocus&&(e.focussed=o.is(":focus"),e.autoPlay())},0)})},e.prototype.getCurrent=e.prototype.slickCurrentSlide=function(){return this.currentSlide},e.prototype.getDotCount=function(){var i=this,e=0,t=0,o=0;if(!0===i.options.infinite)if(i.slideCount<=i.options.slidesToShow)++o;else for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else if(!0===i.options.centerMode)o=i.slideCount;else if(i.options.asNavFor)for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else o=1+Math.ceil((i.slideCount-i.options.slidesToShow)/i.options.slidesToScroll);return o-1},e.prototype.getLeft=function(i){var e,t,o,s,n=this,r=0;return n.slideOffset=0,t=n.$slides.first().outerHeight(!0),!0===n.options.infinite?(n.slideCount>n.options.slidesToShow&&(n.slideOffset=n.slideWidth*n.options.slidesToShow*-1,s=-1,!0===n.options.vertical&&!0===n.options.centerMode&&(2===n.options.slidesToShow?s=-1.5:1===n.options.slidesToShow&&(s=-2)),r=t*n.options.slidesToShow*s),n.slideCount%n.options.slidesToScroll!=0&&i+n.options.slidesToScroll>n.slideCount&&n.slideCount>n.options.slidesToShow&&(i>n.slideCount?(n.slideOffset=(n.options.slidesToShow-(i-n.slideCount))*n.slideWidth*-1,r=(n.options.slidesToShow-(i-n.slideCount))*t*-1):(n.slideOffset=n.slideCount%n.options.slidesToScroll*n.slideWidth*-1,r=n.slideCount%n.options.slidesToScroll*t*-1))):i+n.options.slidesToShow>n.slideCount&&(n.slideOffset=(i+n.options.slidesToShow-n.slideCount)*n.slideWidth,r=(i+n.options.slidesToShow-n.slideCount)*t),n.slideCount<=n.options.slidesToShow&&(n.slideOffset=0,r=0),!0===n.options.centerMode&&n.slideCount<=n.options.slidesToShow?n.slideOffset=n.slideWidth*Math.floor(n.options.slidesToShow)/2-n.slideWidth*n.slideCount/2:!0===n.options.centerMode&&!0===n.options.infinite?n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)-n.slideWidth:!0===n.options.centerMode&&(n.slideOffset=0,n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)),e=!1===n.options.vertical?i*n.slideWidth*-1+n.slideOffset:i*t*-1+r,!0===n.options.variableWidth&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,!0===n.options.centerMode&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow+1),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,e+=(n.$list.width()-o.outerWidth())/2)),e},e.prototype.getOption=e.prototype.slickGetOption=function(i){return this.options[i]},e.prototype.getNavigableIndexes=function(){var i,e=this,t=0,o=0,s=[];for(!1===e.options.infinite?i=e.slideCount:(t=-1*e.options.slidesToScroll,o=-1*e.options.slidesToScroll,i=2*e.slideCount);t<i;)s.push(t),t=o+e.options.slidesToScroll,o+=e.options.slidesToScroll<=e.options.slidesToShow?e.options.slidesToScroll:e.options.slidesToShow;return s},e.prototype.getSlick=function(){return this},e.prototype.getSlideCount=function(){var e,t,o=this;return t=!0===o.options.centerMode?o.slideWidth*Math.floor(o.options.slidesToShow/2):0,!0===o.options.swipeToSlide?(o.$slideTrack.find(".slick-slide").each(function(s,n){if(n.offsetLeft-t+i(n).outerWidth()/2>-1*o.swipeLeft)return e=n,!1}),Math.abs(i(e).attr("data-slick-index")-o.currentSlide)||1):o.options.slidesToScroll},e.prototype.goTo=e.prototype.slickGoTo=function(i,e){this.changeSlide({data:{message:"index",index:parseInt(i)}},e)},e.prototype.init=function(e){var t=this;i(t.$slider).hasClass("slick-initialized")||(i(t.$slider).addClass("slick-initialized"),t.buildRows(),t.buildOut(),t.setProps(),t.startLoad(),t.loadSlider(),t.initializeEvents(),t.updateArrows(),t.updateDots(),t.checkResponsive(!0),t.focusHandler()),e&&t.$slider.trigger("init",[t]),!0===t.options.accessibility&&t.initADA(),t.options.autoplay&&(t.paused=!1,t.autoPlay())},e.prototype.initADA=function(){var e=this,t=Math.ceil(e.slideCount/e.options.slidesToShow),o=e.getNavigableIndexes().filter(function(i){return i>=0&&i<e.slideCount});e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),null!==e.$dots&&(e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(t){var s=o.indexOf(t);i(this).attr({role:"tabpanel",id:"slick-slide"+e.instanceUid+t,tabindex:-1}),-1!==s&&i(this).attr({"aria-describedby":"slick-slide-control"+e.instanceUid+s})}),e.$dots.attr("role","tablist").find("li").each(function(s){var n=o[s];i(this).attr({role:"presentation"}),i(this).find("button").first().attr({role:"tab",id:"slick-slide-control"+e.instanceUid+s,"aria-controls":"slick-slide"+e.instanceUid+n,"aria-label":s+1+" of "+t,"aria-selected":null,tabindex:"-1"})}).eq(e.currentSlide).find("button").attr({"aria-selected":"true",tabindex:"0"}).end());for(var s=e.currentSlide,n=s+e.options.slidesToShow;s<n;s++)e.$slides.eq(s).attr("tabindex",0);e.activateADA()},e.prototype.initArrowEvents=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.off("click.slick").on("click.slick",{message:"previous"},i.changeSlide),i.$nextArrow.off("click.slick").on("click.slick",{message:"next"},i.changeSlide),!0===i.options.accessibility&&(i.$prevArrow.on("keydown.slick",i.keyHandler),i.$nextArrow.on("keydown.slick",i.keyHandler)))},e.prototype.initDotEvents=function(){var e=this;!0===e.options.dots&&(i("li",e.$dots).on("click.slick",{message:"index"},e.changeSlide),!0===e.options.accessibility&&e.$dots.on("keydown.slick",e.keyHandler)),!0===e.options.dots&&!0===e.options.pauseOnDotsHover&&i("li",e.$dots).on("mouseenter.slick",i.proxy(e.interrupt,e,!0)).on("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.initSlideEvents=function(){var e=this;e.options.pauseOnHover&&(e.$list.on("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.on("mouseleave.slick",i.proxy(e.interrupt,e,!1)))},e.prototype.initializeEvents=function(){var e=this;e.initArrowEvents(),e.initDotEvents(),e.initSlideEvents(),e.$list.on("touchstart.slick mousedown.slick",{action:"start"},e.swipeHandler),e.$list.on("touchmove.slick mousemove.slick",{action:"move"},e.swipeHandler),e.$list.on("touchend.slick mouseup.slick",{action:"end"},e.swipeHandler),e.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},e.swipeHandler),e.$list.on("click.slick",e.clickHandler),i(document).on(e.visibilityChange,i.proxy(e.visibility,e)),!0===e.options.accessibility&&e.$list.on("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),i(window).on("orientationchange.slick.slick-"+e.instanceUid,i.proxy(e.orientationChange,e)),i(window).on("resize.slick.slick-"+e.instanceUid,i.proxy(e.resize,e)),i("[draggable!=true]",e.$slideTrack).on("dragstart",e.preventDefault),i(window).on("load.slick.slick-"+e.instanceUid,e.setPosition),i(e.setPosition)},e.prototype.initUI=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.show(),i.$nextArrow.show()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.show()},e.prototype.keyHandler=function(i){var e=this;i.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===i.keyCode&&!0===e.options.accessibility?e.changeSlide({data:{message:!0===e.options.rtl?"next":"previous"}}):39===i.keyCode&&!0===e.options.accessibility&&e.changeSlide({data:{message:!0===e.options.rtl?"previous":"next"}}))},e.prototype.lazyLoad=function(){function e(e){i("img[data-lazy]",e).each(function(){var e=i(this),t=i(this).attr("data-lazy"),o=i(this).attr("data-srcset"),s=i(this).attr("data-sizes")||n.$slider.attr("data-sizes"),r=document.createElement("img");r.onload=function(){e.animate({opacity:0},100,function(){o&&(e.attr("srcset",o),s&&e.attr("sizes",s)),e.attr("src",t).animate({opacity:1},200,function(){e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")}),n.$slider.trigger("lazyLoaded",[n,e,t])})},r.onerror=function(){e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),n.$slider.trigger("lazyLoadError",[n,e,t])},r.src=t})}var t,o,s,n=this;if(!0===n.options.centerMode?!0===n.options.infinite?s=(o=n.currentSlide+(n.options.slidesToShow/2+1))+n.options.slidesToShow+2:(o=Math.max(0,n.currentSlide-(n.options.slidesToShow/2+1)),s=n.options.slidesToShow/2+1+2+n.currentSlide):(o=n.options.infinite?n.options.slidesToShow+n.currentSlide:n.currentSlide,s=Math.ceil(o+n.options.slidesToShow),!0===n.options.fade&&(o>0&&o--,s<=n.slideCount&&s++)),t=n.$slider.find(".slick-slide").slice(o,s),"anticipated"===n.options.lazyLoad)for(var r=o-1,l=s,d=n.$slider.find(".slick-slide"),a=0;a<n.options.slidesToScroll;a++)r<0&&(r=n.slideCount-1),t=(t=t.add(d.eq(r))).add(d.eq(l)),r--,l++;e(t),n.slideCount<=n.options.slidesToShow?e(n.$slider.find(".slick-slide")):n.currentSlide>=n.slideCount-n.options.slidesToShow?e(n.$slider.find(".slick-cloned").slice(0,n.options.slidesToShow)):0===n.currentSlide&&e(n.$slider.find(".slick-cloned").slice(-1*n.options.slidesToShow))},e.prototype.loadSlider=function(){var i=this;i.setPosition(),i.$slideTrack.css({opacity:1}),i.$slider.removeClass("slick-loading"),i.initUI(),"progressive"===i.options.lazyLoad&&i.progressiveLazyLoad()},e.prototype.next=e.prototype.slickNext=function(){this.changeSlide({data:{message:"next"}})},e.prototype.orientationChange=function(){var i=this;i.checkResponsive(),i.setPosition()},e.prototype.pause=e.prototype.slickPause=function(){var i=this;i.autoPlayClear(),i.paused=!0},e.prototype.play=e.prototype.slickPlay=function(){var i=this;i.autoPlay(),i.options.autoplay=!0,i.paused=!1,i.focussed=!1,i.interrupted=!1},e.prototype.postSlide=function(e){var t=this;t.unslicked||(t.$slider.trigger("afterChange",[t,e]),t.animating=!1,t.slideCount>t.options.slidesToShow&&t.setPosition(),t.swipeLeft=null,t.options.autoplay&&t.autoPlay(),!0===t.options.accessibility&&(t.initADA(),t.options.focusOnChange&&i(t.$slides.get(t.currentSlide)).attr("tabindex",0).focus()))},e.prototype.prev=e.prototype.slickPrev=function(){this.changeSlide({data:{message:"previous"}})},e.prototype.preventDefault=function(i){i.preventDefault()},e.prototype.progressiveLazyLoad=function(e){e=e||1;var t,o,s,n,r,l=this,d=i("img[data-lazy]",l.$slider);d.length?(t=d.first(),o=t.attr("data-lazy"),s=t.attr("data-srcset"),n=t.attr("data-sizes")||l.$slider.attr("data-sizes"),(r=document.createElement("img")).onload=function(){s&&(t.attr("srcset",s),n&&t.attr("sizes",n)),t.attr("src",o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),!0===l.options.adaptiveHeight&&l.setPosition(),l.$slider.trigger("lazyLoaded",[l,t,o]),l.progressiveLazyLoad()},r.onerror=function(){e<3?setTimeout(function(){l.progressiveLazyLoad(e+1)},500):(t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),l.$slider.trigger("lazyLoadError",[l,t,o]),l.progressiveLazyLoad())},r.src=o):l.$slider.trigger("allImagesLoaded",[l])},e.prototype.refresh=function(e){var t,o,s=this;o=s.slideCount-s.options.slidesToShow,!s.options.infinite&&s.currentSlide>o&&(s.currentSlide=o),s.slideCount<=s.options.slidesToShow&&(s.currentSlide=0),t=s.currentSlide,s.destroy(!0),i.extend(s,s.initials,{currentSlide:t}),s.init(),e||s.changeSlide({data:{message:"index",index:t}},!1)},e.prototype.registerBreakpoints=function(){var e,t,o,s=this,n=s.options.responsive||null;if("array"===i.type(n)&&n.length){s.respondTo=s.options.respondTo||"window";for(e in n)if(o=s.breakpoints.length-1,n.hasOwnProperty(e)){for(t=n[e].breakpoint;o>=0;)s.breakpoints[o]&&s.breakpoints[o]===t&&s.breakpoints.splice(o,1),o--;s.breakpoints.push(t),s.breakpointSettings[t]=n[e].settings}s.breakpoints.sort(function(i,e){return s.options.mobileFirst?i-e:e-i})}},e.prototype.reinit=function(){var e=this;e.$slides=e.$slideTrack.children(e.options.slide).addClass("slick-slide"),e.slideCount=e.$slides.length,e.currentSlide>=e.slideCount&&0!==e.currentSlide&&(e.currentSlide=e.currentSlide-e.options.slidesToScroll),e.slideCount<=e.options.slidesToShow&&(e.currentSlide=0),e.registerBreakpoints(),e.setProps(),e.setupInfinite(),e.buildArrows(),e.updateArrows(),e.initArrowEvents(),e.buildDots(),e.updateDots(),e.initDotEvents(),e.cleanUpSlideEvents(),e.initSlideEvents(),e.checkResponsive(!1,!0),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),e.setPosition(),e.focusHandler(),e.paused=!e.options.autoplay,e.autoPlay(),e.$slider.trigger("reInit",[e])},e.prototype.resize=function(){var e=this;i(window).width()!==e.windowWidth&&(clearTimeout(e.windowDelay),e.windowDelay=window.setTimeout(function(){e.windowWidth=i(window).width(),e.checkResponsive(),e.unslicked||e.setPosition()},50))},e.prototype.removeSlide=e.prototype.slickRemove=function(i,e,t){var o=this;if(i="boolean"==typeof i?!0===(e=i)?0:o.slideCount-1:!0===e?--i:i,o.slideCount<1||i<0||i>o.slideCount-1)return!1;o.unload(),!0===t?o.$slideTrack.children().remove():o.$slideTrack.children(this.options.slide).eq(i).remove(),o.$slides=o.$slideTrack.children(this.options.slide),o.$slideTrack.children(this.options.slide).detach(),o.$slideTrack.append(o.$slides),o.$slidesCache=o.$slides,o.reinit()},e.prototype.setCSS=function(i){var e,t,o=this,s={};!0===o.options.rtl&&(i=-i),e="left"==o.positionProp?Math.ceil(i)+"px":"0px",t="top"==o.positionProp?Math.ceil(i)+"px":"0px",s[o.positionProp]=i,!1===o.transformsEnabled?o.$slideTrack.css(s):(s={},!1===o.cssTransitions?(s[o.animType]="translate("+e+", "+t+")",o.$slideTrack.css(s)):(s[o.animType]="translate3d("+e+", "+t+", 0px)",o.$slideTrack.css(s)))},e.prototype.setDimensions=function(){var i=this;!1===i.options.vertical?!0===i.options.centerMode&&i.$list.css({padding:"0px "+i.options.centerPadding}):(i.$list.height(i.$slides.first().outerHeight(!0)*i.options.slidesToShow),!0===i.options.centerMode&&i.$list.css({padding:i.options.centerPadding+" 0px"})),i.listWidth=i.$list.width(),i.listHeight=i.$list.height(),!1===i.options.vertical&&!1===i.options.variableWidth?(i.slideWidth=Math.ceil(i.listWidth/i.options.slidesToShow),i.$slideTrack.width(Math.ceil(i.slideWidth*i.$slideTrack.children(".slick-slide").length))):!0===i.options.variableWidth?i.$slideTrack.width(5e3*i.slideCount):(i.slideWidth=Math.ceil(i.listWidth),i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0)*i.$slideTrack.children(".slick-slide").length)));var e=i.$slides.first().outerWidth(!0)-i.$slides.first().width();!1===i.options.variableWidth&&i.$slideTrack.children(".slick-slide").width(i.slideWidth-e)},e.prototype.setFade=function(){var e,t=this;t.$slides.each(function(o,s){e=t.slideWidth*o*-1,!0===t.options.rtl?i(s).css({position:"relative",right:e,top:0,zIndex:t.options.zIndex-2,opacity:0}):i(s).css({position:"relative",left:e,top:0,zIndex:t.options.zIndex-2,opacity:0})}),t.$slides.eq(t.currentSlide).css({zIndex:t.options.zIndex-1,opacity:1})},e.prototype.setHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.css("height",e)}},e.prototype.setOption=e.prototype.slickSetOption=function(){var e,t,o,s,n,r=this,l=!1;if("object"===i.type(arguments[0])?(o=arguments[0],l=arguments[1],n="multiple"):"string"===i.type(arguments[0])&&(o=arguments[0],s=arguments[1],l=arguments[2],"responsive"===arguments[0]&&"array"===i.type(arguments[1])?n="responsive":void 0!==arguments[1]&&(n="single")),"single"===n)r.options[o]=s;else if("multiple"===n)i.each(o,function(i,e){r.options[i]=e});else if("responsive"===n)for(t in s)if("array"!==i.type(r.options.responsive))r.options.responsive=[s[t]];else{for(e=r.options.responsive.length-1;e>=0;)r.options.responsive[e].breakpoint===s[t].breakpoint&&r.options.responsive.splice(e,1),e--;r.options.responsive.push(s[t])}l&&(r.unload(),r.reinit())},e.prototype.setPosition=function(){var i=this;i.setDimensions(),i.setHeight(),!1===i.options.fade?i.setCSS(i.getLeft(i.currentSlide)):i.setFade(),i.$slider.trigger("setPosition",[i])},e.prototype.setProps=function(){var i=this,e=document.body.style;i.positionProp=!0===i.options.vertical?"top":"left","top"===i.positionProp?i.$slider.addClass("slick-vertical"):i.$slider.removeClass("slick-vertical"),void 0===e.WebkitTransition&&void 0===e.MozTransition&&void 0===e.msTransition||!0===i.options.useCSS&&(i.cssTransitions=!0),i.options.fade&&("number"==typeof i.options.zIndex?i.options.zIndex<3&&(i.options.zIndex=3):i.options.zIndex=i.defaults.zIndex),void 0!==e.OTransform&&(i.animType="OTransform",i.transformType="-o-transform",i.transitionType="OTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.MozTransform&&(i.animType="MozTransform",i.transformType="-moz-transform",i.transitionType="MozTransition",void 0===e.perspectiveProperty&&void 0===e.MozPerspective&&(i.animType=!1)),void 0!==e.webkitTransform&&(i.animType="webkitTransform",i.transformType="-webkit-transform",i.transitionType="webkitTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.msTransform&&(i.animType="msTransform",i.transformType="-ms-transform",i.transitionType="msTransition",void 0===e.msTransform&&(i.animType=!1)),void 0!==e.transform&&!1!==i.animType&&(i.animType="transform",i.transformType="transform",i.transitionType="transition"),i.transformsEnabled=i.options.useTransform&&null!==i.animType&&!1!==i.animType},e.prototype.setSlideClasses=function(i){var e,t,o,s,n=this;if(t=n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),n.$slides.eq(i).addClass("slick-current"),!0===n.options.centerMode){var r=n.options.slidesToShow%2==0?1:0;e=Math.floor(n.options.slidesToShow/2),!0===n.options.infinite&&(i>=e&&i<=n.slideCount-1-e?n.$slides.slice(i-e+r,i+e+1).addClass("slick-active").attr("aria-hidden","false"):(o=n.options.slidesToShow+i,t.slice(o-e+1+r,o+e+2).addClass("slick-active").attr("aria-hidden","false")),0===i?t.eq(t.length-1-n.options.slidesToShow).addClass("slick-center"):i===n.slideCount-1&&t.eq(n.options.slidesToShow).addClass("slick-center")),n.$slides.eq(i).addClass("slick-center")}else i>=0&&i<=n.slideCount-n.options.slidesToShow?n.$slides.slice(i,i+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):t.length<=n.options.slidesToShow?t.addClass("slick-active").attr("aria-hidden","false"):(s=n.slideCount%n.options.slidesToShow,o=!0===n.options.infinite?n.options.slidesToShow+i:i,n.options.slidesToShow==n.options.slidesToScroll&&n.slideCount-i<n.options.slidesToShow?t.slice(o-(n.options.slidesToShow-s),o+s).addClass("slick-active").attr("aria-hidden","false"):t.slice(o,o+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"));"ondemand"!==n.options.lazyLoad&&"anticipated"!==n.options.lazyLoad||n.lazyLoad()},e.prototype.setupInfinite=function(){var e,t,o,s=this;if(!0===s.options.fade&&(s.options.centerMode=!1),!0===s.options.infinite&&!1===s.options.fade&&(t=null,s.slideCount>s.options.slidesToShow)){for(o=!0===s.options.centerMode?s.options.slidesToShow+1:s.options.slidesToShow,e=s.slideCount;e>s.slideCount-o;e-=1)t=e-1,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t-s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");for(e=0;e<o+s.slideCount;e+=1)t=e,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t+s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");s.$slideTrack.find(".slick-cloned").find("[id]").each(function(){i(this).attr("id","")})}},e.prototype.interrupt=function(i){var e=this;i||e.autoPlay(),e.interrupted=i},e.prototype.selectHandler=function(e){var t=this,o=i(e.target).is(".slick-slide")?i(e.target):i(e.target).parents(".slick-slide"),s=parseInt(o.attr("data-slick-index"));s||(s=0),t.slideCount<=t.options.slidesToShow?t.slideHandler(s,!1,!0):t.slideHandler(s)},e.prototype.slideHandler=function(i,e,t){var o,s,n,r,l,d=null,a=this;if(e=e||!1,!(!0===a.animating&&!0===a.options.waitForAnimate||!0===a.options.fade&&a.currentSlide===i))if(!1===e&&a.asNavFor(i),o=i,d=a.getLeft(o),r=a.getLeft(a.currentSlide),a.currentLeft=null===a.swipeLeft?r:a.swipeLeft,!1===a.options.infinite&&!1===a.options.centerMode&&(i<0||i>a.getDotCount()*a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else if(!1===a.options.infinite&&!0===a.options.centerMode&&(i<0||i>a.slideCount-a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else{if(a.options.autoplay&&clearInterval(a.autoPlayTimer),s=o<0?a.slideCount%a.options.slidesToScroll!=0?a.slideCount-a.slideCount%a.options.slidesToScroll:a.slideCount+o:o>=a.slideCount?a.slideCount%a.options.slidesToScroll!=0?0:o-a.slideCount:o,a.animating=!0,a.$slider.trigger("beforeChange",[a,a.currentSlide,s]),n=a.currentSlide,a.currentSlide=s,a.setSlideClasses(a.currentSlide),a.options.asNavFor&&(l=(l=a.getNavTarget()).slick("getSlick")).slideCount<=l.options.slidesToShow&&l.setSlideClasses(a.currentSlide),a.updateDots(),a.updateArrows(),!0===a.options.fade)return!0!==t?(a.fadeSlideOut(n),a.fadeSlide(s,function(){a.postSlide(s)})):a.postSlide(s),void a.animateHeight();!0!==t?a.animateSlide(d,function(){a.postSlide(s)}):a.postSlide(s)}},e.prototype.startLoad=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.hide(),i.$nextArrow.hide()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.hide(),i.$slider.addClass("slick-loading")},e.prototype.swipeDirection=function(){var i,e,t,o,s=this;return i=s.touchObject.startX-s.touchObject.curX,e=s.touchObject.startY-s.touchObject.curY,t=Math.atan2(e,i),(o=Math.round(180*t/Math.PI))<0&&(o=360-Math.abs(o)),o<=45&&o>=0?!1===s.options.rtl?"left":"right":o<=360&&o>=315?!1===s.options.rtl?"left":"right":o>=135&&o<=225?!1===s.options.rtl?"right":"left":!0===s.options.verticalSwiping?o>=35&&o<=135?"down":"up":"vertical"},e.prototype.swipeEnd=function(i){var e,t,o=this;if(o.dragging=!1,o.swiping=!1,o.scrolling)return o.scrolling=!1,!1;if(o.interrupted=!1,o.shouldClick=!(o.touchObject.swipeLength>10),void 0===o.touchObject.curX)return!1;if(!0===o.touchObject.edgeHit&&o.$slider.trigger("edge",[o,o.swipeDirection()]),o.touchObject.swipeLength>=o.touchObject.minSwipe){switch(t=o.swipeDirection()){case"left":case"down":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide+o.getSlideCount()):o.currentSlide+o.getSlideCount(),o.currentDirection=0;break;case"right":case"up":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide-o.getSlideCount()):o.currentSlide-o.getSlideCount(),o.currentDirection=1}"vertical"!=t&&(o.slideHandler(e),o.touchObject={},o.$slider.trigger("swipe",[o,t]))}else o.touchObject.startX!==o.touchObject.curX&&(o.slideHandler(o.currentSlide),o.touchObject={})},e.prototype.swipeHandler=function(i){var e=this;if(!(!1===e.options.swipe||"ontouchend"in document&&!1===e.options.swipe||!1===e.options.draggable&&-1!==i.type.indexOf("mouse")))switch(e.touchObject.fingerCount=i.originalEvent&&void 0!==i.originalEvent.touches?i.originalEvent.touches.length:1,e.touchObject.minSwipe=e.listWidth/e.options.touchThreshold,!0===e.options.verticalSwiping&&(e.touchObject.minSwipe=e.listHeight/e.options.touchThreshold),i.data.action){case"start":e.swipeStart(i);break;case"move":e.swipeMove(i);break;case"end":e.swipeEnd(i)}},e.prototype.swipeMove=function(i){var e,t,o,s,n,r,l=this;return n=void 0!==i.originalEvent?i.originalEvent.touches:null,!(!l.dragging||l.scrolling||n&&1!==n.length)&&(e=l.getLeft(l.currentSlide),l.touchObject.curX=void 0!==n?n[0].pageX:i.clientX,l.touchObject.curY=void 0!==n?n[0].pageY:i.clientY,l.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(l.touchObject.curX-l.touchObject.startX,2))),r=Math.round(Math.sqrt(Math.pow(l.touchObject.curY-l.touchObject.startY,2))),!l.options.verticalSwiping&&!l.swiping&&r>4?(l.scrolling=!0,!1):(!0===l.options.verticalSwiping&&(l.touchObject.swipeLength=r),t=l.swipeDirection(),void 0!==i.originalEvent&&l.touchObject.swipeLength>4&&(l.swiping=!0,i.preventDefault()),s=(!1===l.options.rtl?1:-1)*(l.touchObject.curX>l.touchObject.startX?1:-1),!0===l.options.verticalSwiping&&(s=l.touchObject.curY>l.touchObject.startY?1:-1),o=l.touchObject.swipeLength,l.touchObject.edgeHit=!1,!1===l.options.infinite&&(0===l.currentSlide&&"right"===t||l.currentSlide>=l.getDotCount()&&"left"===t)&&(o=l.touchObject.swipeLength*l.options.edgeFriction,l.touchObject.edgeHit=!0),!1===l.options.vertical?l.swipeLeft=e+o*s:l.swipeLeft=e+o*(l.$list.height()/l.listWidth)*s,!0===l.options.verticalSwiping&&(l.swipeLeft=e+o*s),!0!==l.options.fade&&!1!==l.options.touchMove&&(!0===l.animating?(l.swipeLeft=null,!1):void l.setCSS(l.swipeLeft))))},e.prototype.swipeStart=function(i){var e,t=this;if(t.interrupted=!0,1!==t.touchObject.fingerCount||t.slideCount<=t.options.slidesToShow)return t.touchObject={},!1;void 0!==i.originalEvent&&void 0!==i.originalEvent.touches&&(e=i.originalEvent.touches[0]),t.touchObject.startX=t.touchObject.curX=void 0!==e?e.pageX:i.clientX,t.touchObject.startY=t.touchObject.curY=void 0!==e?e.pageY:i.clientY,t.dragging=!0},e.prototype.unfilterSlides=e.prototype.slickUnfilter=function(){var i=this;null!==i.$slidesCache&&(i.unload(),i.$slideTrack.children(this.options.slide).detach(),i.$slidesCache.appendTo(i.$slideTrack),i.reinit())},e.prototype.unload=function(){var e=this;i(".slick-cloned",e.$slider).remove(),e.$dots&&e.$dots.remove(),e.$prevArrow&&e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.remove(),e.$nextArrow&&e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.remove(),e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},e.prototype.unslick=function(i){var e=this;e.$slider.trigger("unslick",[e,i]),e.destroy()},e.prototype.updateArrows=function(){var i=this;Math.floor(i.options.slidesToShow/2),!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&!i.options.infinite&&(i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===i.currentSlide?(i.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-i.options.slidesToShow&&!1===i.options.centerMode?(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-1&&!0===i.options.centerMode&&(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},e.prototype.updateDots=function(){var i=this;null!==i.$dots&&(i.$dots.find("li").removeClass("slick-active").end(),i.$dots.find("li").eq(Math.floor(i.currentSlide/i.options.slidesToScroll)).addClass("slick-active"))},e.prototype.visibility=function(){var i=this;i.options.autoplay&&(document[i.hidden]?i.interrupted=!0:i.interrupted=!1)},i.fn.slick=function(){var i,t,o=this,s=arguments[0],n=Array.prototype.slice.call(arguments,1),r=o.length;for(i=0;i<r;i++)if("object"==typeof s||void 0===s?o[i].slick=new e(o[i],s):t=o[i].slick[s].apply(o[i].slick,n),void 0!==t)return t;return o}});


/*
    jQuery Masked Input Plugin
    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
    Version: 1.4.1
*/
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
(function($) {
  /* Common */

  if (window.CONFIG.page == undefined) {
    window.CONFIG.page = "";
  }

  /* Common */

  $(document).ready(function() {
    window.POSTS = {};
    window.FIRST_LOAD = false;
    // Mobile menu enabling

    // var brgrMenu = document.getElementById("brgr-menu");
    var menu = document.getElementById("header-menu");

    // var stick1 = document.getElementById("brgr-menu-stick-1");
    // var stick2 = document.getElementById("brgr-menu-stick-2");
    // var stick3 = document.getElementById("brgr-menu-stick-3");
    // var count = 0;

    // brgrMenu.addEventListener("click", enableBrgrMenu, false);

    //
    // function enableBrgrMenu(event){
    //     var e = getTarget(event);
    //
    //     if (e !== undefined) {
    //         count++;
    //         if(count%2===0) {
    //             deactivateBrgrMenu();
    //
    //         } else {
    //             activateBrgrMenu();
    //
    //         }
    //     }
    // }
    //
    // function activateBrgrMenu(){
    //     menu.style.display = 'block';
    //     stick1.classList.add('stick-1-active');
    //     stick2.classList.add('disable');
    //     stick3.classList.add('stick-3-active');
    //
    // }
    //
    // function deactivateBrgrMenu(){
    //     menu.style.display = '';
    //     stick1.classList.remove('stick-1-active');
    //     stick2.classList.remove('disable');
    //     stick3.classList.remove('stick-3-active');
    //     count = 0;
    // }

    // team slider browsing

    var teamSlider = document.getElementById("team-slider");

    if (teamSlider) {
      teamSlider.addEventListener("click", browseTeamSlider, false);
    }

    function browseTeamSlider(event) {
      var e = getTarget(event);

      if (e !== undefined) browseSlider(e);
    }

    function getTarget(event) {
      var target = event.target;
      var currentTarget = event.currentTarget;

      while (target !== event.currentTarget) {
        if (target.hasAttribute("data-meta-node")) {
          var e = { target: target, currentTarget: currentTarget };

          return e;
        }

        target = target.parentNode; // переход по иерархии на узел выше (от ребенка к родителю)
      }

      return;
    }

    function browseSlider(e) {
      getScreenWidth();

      if (currentScreenWidth >= 768) {
        var target = e.target;
        var currentTarget = e.currentTarget;

        var targetWidth = target.clientWidth;
        var dataAction = target.getAttribute("data-action");
        var allItems = getItems();

        var lItem = teamSlider.querySelectorAll(".l")[0];
        lItem.classList.remove("l");
        target.classList.remove(dataAction);
        target.classList.add("l");
        target.setAttribute("data-action", "l");

        if (dataAction === "ml") {
          var newSl = allItems.sr.cloneNode(true);

          newSl.style.marginLeft = -targetWidth * 1 + "px";

          newSl.setAttribute("data-action", "sl");
          newSl.setAttribute("data-meta-node", "");
          newSl.classList.remove("sr");
          newSl.classList.add("sl");

          allItems.sl.setAttribute("data-action", "ml");
          allItems.sl.classList.remove("sl");
          allItems.sl.classList.add("ml");

          lItem.classList.add("mr");
          lItem.setAttribute("data-action", "mr");

          allItems.mr.setAttribute("data-action", "sr");
          allItems.mr.classList.remove("mr");
          allItems.mr.classList.add("sr");

          currentTarget.insertBefore(newSl, currentTarget.firstChild);

          setTimeout(function() {
            newSl.style.marginLeft = 0;
          }, 0);

          setTimeout(function() {
            allItems.sr.remove();
          }, 405);
        } else if (dataAction === "sl") {
          var newSl = allItems.sr.cloneNode(true);
          var newMl = allItems.mr.cloneNode(true);

          newMl.setAttribute("data-action", "sl");
          newMl.setAttribute("data-meta-node", "");
          newMl.classList.remove("mr");
          newMl.classList.add("sl");

          newSl.setAttribute("data-action", "ml");
          newSl.setAttribute("data-meta-node", "");
          newSl.classList.remove("sr");
          newSl.classList.add("ml");

          newMl.style.marginLeft = -targetWidth * 2 + "px";
          currentTarget.insertBefore(newSl, currentTarget.firstChild);
          currentTarget.insertBefore(newMl, currentTarget.firstChild);

          lItem.classList.add("sr");
          lItem.setAttribute("data-action", "sr");

          allItems.ml.setAttribute("data-action", "mr");
          allItems.ml.classList.remove("ml");
          allItems.ml.classList.add("mr");

          setTimeout(function() {
            newMl.style.marginLeft = 0;
          }, 0);

          setTimeout(function() {
            allItems.sr.remove();
            allItems.mr.remove();
          }, 205);
        } else if (dataAction === "mr") {
          var newSr = allItems.sl.cloneNode(true);

          newSr.setAttribute("data-action", "sr");
          newSr.setAttribute("data-meta-node", "");
          newSr.classList.remove("sl");
          newSr.classList.add("sr");

          allItems.sr.setAttribute("data-action", "mr");
          allItems.sr.classList.remove("sr");
          allItems.sr.classList.add("mr");

          lItem.classList.add("ml");
          lItem.setAttribute("data-action", "ml");

          allItems.ml.setAttribute("data-action", "sl");
          allItems.ml.classList.remove("ml");
          allItems.ml.classList.add("sl");

          currentTarget.appendChild(newSr);

          setTimeout(function() {
            allItems.sl.style.marginLeft = -targetWidth * 1 + "px";
          }, 0);

          setTimeout(function() {
            allItems.sl.remove();
          }, 300);
        } else if (dataAction === "sr") {
          var newSr = allItems.ml.cloneNode(true);
          var newMr = allItems.sl.cloneNode(true);

          newSr.setAttribute("data-action", "sr");
          newSr.setAttribute("data-meta-node", "");
          newSr.classList.remove("ml");
          newSr.classList.add("sr");

          newMr.setAttribute("data-action", "mr");
          newMr.setAttribute("data-meta-node", "");
          newMr.classList.remove("sl");
          newMr.classList.add("mr");

          allItems.sr.setAttribute("data-action", "l");
          allItems.sr.classList.remove("sr");
          allItems.sr.classList.add("l");

          allItems.mr.setAttribute("data-action", "ml");
          allItems.mr.classList.remove("mr");
          allItems.mr.classList.add("ml");

          lItem.classList.add("sl");
          lItem.setAttribute("data-action", "sl");

          currentTarget.appendChild(newMr);
          currentTarget.appendChild(newSr);

          setTimeout(function() {
            allItems.sl.style.marginLeft = -targetWidth * 2 + "px";
          }, 0);

          setTimeout(function() {
            allItems.sl.remove();
            allItems.ml.remove();
          }, 400);
        }
      }
    }

    function getItems() {
      var nodes = teamSlider.querySelectorAll("[data-action]");

      for (var i = 0; i < nodes.length; i++) {
        var current = nodes[i].getAttribute("data-action");

        if (current === "sl") {
          var sl = nodes[i];
        } else if (current === "ml") {
          var ml = nodes[i];
        } else if (current === "mr") {
          var mr = nodes[i];
        } else if (current === "sr") {
          var sr = nodes[i];
        }
      }

      var items = { sl: sl, ml: ml, mr: mr, sr: sr };

      return items;
    }

    // cuisine switching

    var cuisineListener = {
      subscribe: "stand",
      week: 2,
      calories: "1200",
      day: "mo",
      cuisines: 5,
      price: "280/320",
      selector: ""
    };

    if (window.CONFIG.page === "home") {
      var subscribe = document.getElementById("subscribe");
      var subscribeItems = document.getElementById("subscribe-items");
      var cuisineWeek = document.getElementById("cuisine-week");
      // var cuisines_3_5 = document.getElementById('cuisines_3_5');
      var allCuisines = document.getElementById("all-cuisines");

      if (subscribe) {
        subscribe.addEventListener("click", setSubscribe, false);
        subscribeItems.addEventListener("click", setSubscribeItems, false);
        cuisineWeek.addEventListener("click", setCuisineWeek, false);
        // cuisines_3_5.addEventListener('click', setCuisines_3_5, false);
      }

      function setSubscribe(event) {
        enableBlock(event);
      }

      function setSubscribeItems(event) {
        enableBlock(event);
      }

      function setCuisineWeek(event) {
        enableBlock(event);
      }

      getStartCuisine();

      function getStartCuisine() {
        getCurrentDate();
        selectCuisineItem();
      }
    }

    function getCurrentDate() {
      var date = new Date();

      Date.prototype.getWeekNumber = function() {
        var d = new Date(+this);
        d.setHours(0, 0, 0, 0);
        d.setDate(d.getDate() + 4 - (d.getDay() || 7));
        return Math.ceil(
          ((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7 + 1) / 7
        );
      };

      var weekNumber = date.getWeekNumber();
      var dayNumber = date.getDay();
      var hourNumber = date.getHours();

      getWeek(weekNumber, dayNumber, hourNumber);
    }

    function getWeek(weekNumber, dayNumber, hourNumber) {
      var evenWeekMenuNumber = getSystemConfig();
      var oddWeekMenuNumber = evenWeekMenuNumber === 1 ? 2 : 1;

      var week = weekNumber % 2 === 0 ? evenWeekMenuNumber : oddWeekMenuNumber;

      if (dayNumber === 0 && hourNumber >= 12) {
        week =
          (weekNumber + 1) % 2 === 0 ? evenWeekMenuNumber : oddWeekMenuNumber;
      }

      cuisineListener.week = week;
    }

    function getSystemConfig() {
      var week = +window.CONFIG.week;

      // there are 2 weeks - №1 and №2
      if (week != 1 && week != 2) {
        week = 2;
      }

      return week;
    }

    function enableBlock(event) {
      var e = getTarget(event);
      if (e !== undefined) {
        var dataAction = e.target.getAttribute("data-action");
        var dataIdentifier = e.target.getAttribute("data-identifier");

        highlight(e.target);

        searchByAttribute(dataAction, dataIdentifier, e.target);

        changeListener(dataIdentifier, e);
      }
    }

    function searchByAttribute(action, identifier, target) {
      var nodes = document.querySelectorAll("[" + action + "]");

      if (action === "data-subscribe") {
        $(nodes).hide();
        $('[data-subscribe="' + identifier + '"]').fadeIn(function() {
          $(".subscribe__item>p").addClass("animated zoomIn");
        });
      } else {
        for (var i = 0; i < nodes.length; i++) {
          var currentIdentifier = nodes[i].getAttribute(action);

          if (currentIdentifier === identifier) {
            nodes[i].classList.remove("disable");
          } else {
            nodes[i].classList.add("disable");
          }
        }
      }
    }

    function changeListener(identifier, event) {
      if (window.CONFIG.page === "home") {
        if (event.currentTarget === subscribe) {
          cuisineListener.subscribe = identifier;

          if (identifier === "fit") {
            cuisineListener.calories = "1200";
          } else if (identifier === "prem") {
            cuisineListener.calories = "1200";
          } else if (identifier === "veg") {
            cuisineListener.calories = "1200";
          } else if (identifier === "stand") {
            cuisineListener.calories = "1200";
          }

          getCurrentDate();

          checkHighLightedItem();
        } else if (event.currentTarget === subscribeItems) {
          if (identifier) cuisineListener.calories = identifier;
        } else if (event.currentTarget === cuisineWeek) {
          cuisineListener.day = identifier;
        }

        selectCuisineItem();
      }
    }

    function selectCuisineItem(callback, customSelector) {
      var selector =
        cuisineListener.subscribe +
        "-" +
        cuisineListener.week +
        "-" +
        cuisineListener.calories +
        "-" +
        cuisineListener.day;
      var categorySelector =
        cuisineListener.subscribe +
        "-" +
        cuisineListener.week +
        "-" +
        cuisineListener.day;
      if (customSelector) {
        categorySelector = customSelector;
      }

      if (!window.POSTS[categorySelector]) {
        // с версии 2.8 'ajaxurl' всегда определен в админке
        var data = {
          action: "hello",
          name: categorySelector
        };

        if (window.FIRST_LOAD) {
          showLoader("body");
        }

        window.FIRST_LOAD = true;

        jQuery.post(myPlugin.ajaxurl, data, function(response) {
          if (response) {
            var posts = JSON.parse(response);

            posts.forEach(function(item, i, arr) {
              var postItem = $(
                '<div class="tab-block__tab-item disable"><div class="cuisine__item-text-cont"></div></div>'
              );
              var postWrapper = $('<div class="cuisine__item"></div>');

              postWrapper.html(item.post_content);

              postItem.html(postWrapper);
              postItem.attr("id", item.post_title);

              $("#all-cuisines").append(postItem);
              removeImgAttribures();
            });

            window.POSTS[categorySelector] = true;

            switchCuisineItems(selector);
          }
          if (callback) {
            callback();
          }
          hideLoader("body");
        });
      } else {
        switchCuisineItems(selector);
        if (callback) {
          callback();
        }
        hideLoader("body");
      }
    }

    function switchCuisineItems(selector) {
      var currentItem = document.getElementById(selector);

      console.log(selector);

      cuisineListener.price = $(
        "#" +
          selector +
          " .cuisine__item-price-text" +
          "[data-cuisine-qount = 5]"
      ).html();
      cuisineListener.selector = selector;
      // cuisineListener.cuisines

      if (currentItem) {
        for (var i = 0; i < allCuisines.children.length; i++) {
          allCuisines.children[i].classList.add("disable");
        }

        currentItem.classList.remove("disable");
      }
    }

    function checkHighLightedItem() {
      var items = subscribeItems.querySelectorAll(
        "[" + "data-identifier" + "]"
      );

      for (var i = 0; i < items.length; i++) {
        var itemIdentifier = items[i].getAttribute("data-identifier");

        if (cuisineListener.calories === itemIdentifier) {
          highlight(items[i]);
        }
      }
    }

    function highlight(object) {
      for (var i = 0; i < object.parentNode.children.length; i++) {
        object.parentNode.children[i].classList.remove("active");
      }
      object.classList.add("active");
    }

    var currentScreenWidth;
    var previousScreenWidth = getScreenWidth();

    function getScreenWidth() {
      currentScreenWidth = document.documentElement.clientWidth;
      return currentScreenWidth;
    }

    document.body.addEventListener("click", switchNode, false);

    function switchNode(event) {
      var e = getTarget(event);

      if (e !== undefined) {
        var target = e.target;
        var action = target.getAttribute("data-action");
        var targetNodeSelector = target.getAttribute("data-target");
        var targetNode = document.getElementById(targetNodeSelector);

        if (targetNode) {
          if (action === "activate") {
            activateNode(targetNode);
          } else if (action === "deactivate") {
            deactivateNode(targetNode);
          }
        }
      }
    }

    function activateNode(targetNode) {
      targetNode.classList.add("active");
      selectOptions(targetNode);
    }

    function deactivateNode(targetNode) {
      targetNode.classList.remove("active");
    }

    // Select options
    $('[data-target="form_2"]').on("click", function() {
      selectOptions();
    });

    function selectOptions() {
      var selectSubscribe = document.getElementById("form-input_subscribe");
      var selectCalories = document.getElementById("form-input_calories");

      var dataSub;
      var dataCal;

      if (cuisineListener.subscribe === "stand") {
        selectSubscribe.selectedIndex = 0;
        dataSub = "stand";
      } else if (cuisineListener.subscribe === "fit") {
        selectSubscribe.selectedIndex = 1;
        dataSub = "fit";
      } else if (cuisineListener.subscribe === "prem") {
        selectSubscribe.selectedIndex = 2;
        dataSub = "prem";
      } else if (cuisineListener.subscribe === "veg") {
        selectSubscribe.selectedIndex = 3;
        dataSub = "veg";
      }

      if (cuisineListener.calories === "1200") {
        selectCalories.selectedIndex = 0;
        dataCal = 1200;
      } else if (cuisineListener.calories === "1500") {
        selectCalories.selectedIndex = 1;
        dataCal = 1500;
      } else if (cuisineListener.calories === "2000") {
        selectCalories.selectedIndex = 2;
        dataCal = 2000;
      } else if (cuisineListener.calories === "2500") {
        selectCalories.selectedIndex = 3;
        dataCal = 2500;
      }

      setPriceInForm(dataSub, dataCal);
    }

    $('[id^="wpcf7-f2087"] form').on("change", function(event) {
      // $('#wpcf7-f2087-o7 form').on('change', function (event) {
      var selectSubscribe = document.getElementById("form-input_subscribe")
        .value;
      var selectCalories = document.getElementById("form-input_calories").value;

      if (selectSubscribe === "Фитнес") {
        selectSubscribe = "fit";
      } else if (selectSubscribe === "Премиум") {
        selectSubscribe = "prem";
      } else if (selectSubscribe === "Без мяса") {
        selectSubscribe = "veg";
      } else if (selectSubscribe === "Стандарт") {
        selectSubscribe = "stand";
      } else if (selectSubscribe === "Пробный день") {
        selectSubscribe = "trial";
      }
      console.log(selectSubscribe, selectCalories);

      setPriceInForm(selectSubscribe, selectCalories);
    });

    function setPriceInForm(subscribe, calories) {
      selectCuisineItem(function() {
        if (subscribe !== "trial") {
          // cuisineListener.price = $('#' + subscribe + '-' + cuisineListener.week + '-' + calories + '-' + 'mo' + ' .cuisine__item-price-text' + '[data-cuisine-qount = 5]').html();
          cuisineListener.price = $(
            "#subscribe-items " +
              '[data-subscribe="' +
              subscribe +
              '"] ' +
              '[data-identifier="' +
              calories +
              '"] .subscribe__price strong'
          ).html();
        } else if (subscribe === "trial") {
          cuisineListener.price = $("#" + subscribe).html();
        }

        $('input[name="product-name"]').val(cuisineListener.selector);
        $("#form-input_price").val(cuisineListener.price);
      }, "#" + subscribe + "-" + cuisineListener.week + "-mo");
    }

    $("#header-menu").on("click", "a", function(event) {
      event.preventDefault();
      var id = $(this).attr("href"),
        top = $(id).offset().top;
      $("body,html").animate({ scrollTop: top }, 1500);
    });

    $("#forms")
      .find(".sharedaddy.sd-sharing-enabled")
      .remove();

    $("img").each(function() {
      $(this).removeAttr("height");
      $(this).removeAttr("width");
    });
  });

  $("input[type='tel']").mask("+38 (099) 999 99 99");

  function showLoader(selector) {
    if (!$(selector).length) {
      return showLoader("body");
    }

    if ($(selector).css("position") === "static") {
      $(selector).css({ position: "relative" });
    }

    hideLoader(selector);

    $(selector).append(
      '<div class="loader" style="display: none"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>'
    );

    if ($(selector)[0].nodeName === "BODY") {
      $(selector)
        .children(".loader")
        .css({
          position: "fixed"
        });
    }

    $(selector)
      .children(".loader")
      .fadeIn();
  }

  function hideLoader(selector) {
    $(selector)
      .children(".loader")
      .fadeOut(function() {
        $(this).remove();
      });
  }

  // Header toggling
  if ($(".how-it-works").length && window.CONFIG.page === "home") {
    toggleHeader();

    $(window).on("scroll", function() {
      toggleHeader();
    });

    function toggleHeader() {
      var $headerMenu = $(".header-menu");

      if ($(window).scrollTop() >= $(".how-it-works").offset().top) {
        $headerMenu.addClass("header-menu_scrolled");
      } else {
        $headerMenu.removeClass("header-menu_scrolled");
      }
    }
  }

  // delete img attributes 'width/height'
  removeImgAttribures();

  function removeImgAttribures() {
    $("img").each(function() {
      $(this)
        .removeAttr("width")
        .removeAttr("height");
    });
  }

  // delete img attributes 'width/height'

  $(".carousel").slick({
    arrows: true,
    prevArrow: '<div class="carousel-arrow left"></div>',
    nextArrow: '<div class="carousel-arrow right"></div>'
  });

  // function initReviewsSilder() {
  var $carousel = $(".carousel-review");

  // if(!$carousel.parent().attr('data-display-show')) {
  //   setTimeout(function () {
  $carousel.slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: '<div class="carousel-arrow left"></div>',
    nextArrow: '<div class="carousel-arrow right"></div>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });
  // }, 1500);
  // }
  // }

  /* set user-data into forms */
  var userData;
  updateUserDataObj();
  toggleScheduleMessages();

  $(".pum").on("pumAfterOpen", function(e) {
    // $('[data-target^="form_"]').on('click', function (e) {
    var $form = $(".pum-active form");

    if ($form.length) {
      setUserData($form);
    }
  });

  $(".wpcf7-form").on("submit", function(e) {
    var $form = $(e.currentTarget);
    var userInfo = {
      name: $form.find('[name="your-name"]').val() || userData.name || "",
      email: $form.find('[name="your-email"]').val() || userData.email || "",
      phone: $form.find('[name="tel-611"]').val() || userData.phone || "",
      address:
        $form.find('[name="your-address"]').val() || userData.address || "",
      time: $form.find('[name="your-time"]').val() || userData.time || "",

      product:
        $('input[name="product-name"]').val() ||
        $("#form-input_sweets").val() ||
        $("#form-input_drinks").val() ||
        "",
      price: $form.find("#form-input_price").val() || 0
    };
    localStorage.setItem("userInfo", JSON.stringify(userInfo));

    toggleScheduleMessages();
  });

  function toggleScheduleMessages() {
    var $messages = $("[data-schedule-msg]");
    var periodType = getPeriodType();
    $messages.hide();
    $('[data-schedule-msg="' + periodType + '"]').show();
  }

  /* Grt current schedule period
  Periods:
  * 1 - 00:01 - 11:59 (working day not started)
  * 2 - 12:00 - 19:30 (working hours)
  * 3 - 19:31 - 00:00 (working day finished)
  * */
  function getPeriodType() {
    var date = new Date();
    var time = date.getHours() + date.getMinutes() / 60;

    if (time >= 0 && time < 12) {
      return 1;
    } else if (time >= 12 && time <= 19.5) {
      return 2;
    } else {
      return 3;
    }
  }

  function updateUserDataObj() {
    userData = localStorage.getItem("userInfo")
      ? JSON.parse(localStorage.getItem("userInfo"))
      : {};
  }

  function setUserData($form) {
    updateUserDataObj();
    if (userData) {
      $form.find('[name="your-name"]').val(userData.name);
      $form.find('[name="your-email"]').val(userData.email);
      $form.find('[name="tel-611"]').val(userData.phone);
      $form.find('[name="your-address"]').val(userData.address);
      $form.find('[name="your-time"]').val(userData.time);
    }
  }

  getText();

  function getText() {
    var date = new Date();
    if (date.getHours() > 12) {
      jQuery("#popup-success-content").html(" :) ");
    }
  }

  /* set user-data into forms */

  /* Get ga Client ID from cookies & set to forms */

  function getGAClientId() {
    var tracker = ga.getAll()[0];
    var clientId = tracker.get("clientId") || "";
    localStorage.setItem("gaClientId", clientId);
    $('input[name="ga_client_id"]').val(clientId);
  }

  /* GA script loaded */
  ga(function() {
    getGAClientId();
  });
  /* GA script loaded */
  /* Get ga Client ID from cookies & set to forms */

  /* UTM */
  getUtmParams();

  function getUtmParams() {
    var url_string = location.href;
    var url = new URL(url_string);
    var c = url.searchParams.get("utm_source");

    window.UTM_DATA = {
      utm_source: url.searchParams.get("utm_source") || null,
      utm_medium: url.searchParams.get("utm_medium") || null,
      utm_term: url.searchParams.get("utm_term") || null,
      utm_campaign: url.searchParams.get("utm_campaign") || null
    };
    var cachedData = localStorage.UTM_DATA
      ? JSON.parse(localStorage.UTM_DATA)
      : null;

    if (cachedData) {
      cachedData.utm_source =
        window.UTM_DATA.utm_source || cachedData.utm_source;
      cachedData.utm_medium =
        window.UTM_DATA.utm_medium || cachedData.utm_medium;
      cachedData.utm_term = window.UTM_DATA.utm_term || cachedData.utm_term;
      cachedData.utm_campaign =
        window.UTM_DATA.utm_campaign || cachedData.utm_campaign;
      localStorage.setItem("UTM_DATA", JSON.stringify(cachedData));
    } else {
      localStorage.setItem("UTM_DATA", JSON.stringify(UTM_DATA));
    }
  }

  initUTMFields();

  function initUTMFields() {
    var utmData = JSON.parse(localStorage.UTM_DATA) || window.UTM_DATA;
    if (utmData) {
      $('input[name="utm_source"]').val(utmData.utm_source || null);
      $('input[name="utm_medium"]').val(utmData.utm_medium || null);
      $('input[name="utm_term"]').val(utmData.utm_term || null);
      $('input[name="utm_campaign"]').val(utmData.utm_campaign || null);
      $('input[name="utm_referrer"]').val(document.referrer || null);
    }
  }

  /* UTM */

  /* SPAM PROTECTION */
  $('[name="agree"]').click();

  document.addEventListener(
    "wpcf7mailsent",
    function(event) {
      setTimeout(function() {
        $('[name="agree"]').each(function(i, item) {
          if (item.checked) item.click();
        });
      }, 500);
    },
    false
  );
  /* SPAM PROTECTION */

  /* Add listeners to contactForm 7 form events */
  $("form.wpcf7-form").on("submit", function(e) {
    showLoader(e.currentTarget);
  });

  $(document).on(
    "wpcf7submit wpcf7mailsent wpcf7invalid wpcf7spam wpcf7mailfailed",
    function(e) {
      hideLoader($(e.target).find("form"));
    }
  );

  /* Add listeners to contactForm 7 form events */

  /* Send fb pixel events */
  $('header [data-target="form_1"]').on("click", function(e) {
    /* Save from trigger */
    window.FB_CONTACT_EVENT = "GetContact1";
    fbq("trackCustom", "Contact1");
  });

  $('footer [data-target="form_1"]').on("click", function(e) {
    /* Save from trigger */
    window.FB_CONTACT_EVENT = "GetContact2";
    fbq("trackCustom", "Contact2");
  });

  $('[data-target="form_2"]').on("click", function(e) {
    fbq("track", "InitiateCheckoutMain");
  });

  $('[data-target="form_3"]').on("click", function(e) {
    fbq("track", "InitiateCheckoutDesserts");
  });

  $('[data-target="form_4"]').on("click", function(e) {
    fbq("track", "InitiateCheckoutDrinks");
  });

  $('[data-target="form_5"]').on("click", function(e) {
    fbq("track", "InitiateCheckoutTrial");
  });
  /* Send fb pixel events */

  /* Page init */
  switch (this.CONFIG.page) {
    case "desserts":
      _initDesserts();
      break;
    case "drinks":
      _initDrinks();
      break;
  }

  /* Page init */

  function _initDesserts() {
    _initDDPage(/*'#wpcf7-f3052-o6', */ 'select[name="menu-230"]');
  }

  function _initDrinks() {
    _initDDPage(/*'#wpcf7-f3143-o5', */ 'select[name="menu-232"]');
  }

  function _initDDPage(menuSelect) {
    var $ddSelect = $(menuSelect);

    $ddSelect.children().remove();

    $(".dd__title").each(function(i, item) {
      $ddSelect.append("<option>" + $(item).text() + "</option>");
    });

    $(".dd__button-cnt").on("click", function() {
      var currentDessert = $(this)
        .closest(".dd__item")
        .find(".dd__title")
        .text();

      $ddSelect.find("option").each(function(i, item) {
        $(item).removeAttr("selected");

        if ($(item).text() === currentDessert) {
          $(item).attr("selected", true);
        }
      });
    });
  }

  //  Image Lazy loading

  var lazyLoadTimeout = null;
  initLazyLoad();

  $(window).bind("scroll", lazyLoadHandler);

  function lazyLoadHandler() {
    clearTimeout(lazyLoadTimeout);

    lazyLoadTimeout = setTimeout(function() {
      initLazyLoad();
    }, 100);
  }

  function initLazyLoad() {
    var windowTopPosition = $(window)[0].pageYOffset,
      windowBottomPosition =
        $(window)[0].pageYOffset + $(window)[0].innerHeight,
      $items = $("[data-bg-src], [data-src], [data-display]"),
      showOffsets = $(window)[0].innerHeight * 0.5;

    if (!$items.length) {
      $(window).unbind("scroll", lazyLoadHandler);
    }

    if (window.matchMedia("(max-width: 768px)").matches) {
      showOffsets = $(window)[0].innerHeight * 0.75;
    }

    $items.each(function(i, item) {
      if (
        (windowTopPosition - showOffsets <=
          $(item).offset().top + $(item).height() &&
          windowTopPosition - showOffsets > $(item).offset().top) ||
        windowBottomPosition + showOffsets >= $(item).offset().top
      ) {
        setSource(item);
      }
    });

    function setSource(item) {
      if (item.hasAttribute("data-bg-src")) {
        $(item).css({
          "background-image": "url(" + item.getAttribute("data-bg-src") + ")"
        });

        item.removeAttribute("data-bg-src");
        item.setAttribute("data-bg", "");
      } else if (item.hasAttribute("data-display")) {
        $(item)
          .find("[data-display-show]")
          .css({
            display: "block"
          })
          .removeAttr("data-display-show")
          .end()
          .removeAttr("data-display");

        // initReviewsSilder();
      } else {
        item.setAttribute("src", item.getAttribute("data-src"));

        item.onload = function() {
          item.removeAttribute("data-src");
        };
      }
    }
  }

  //  Image Lazy loading

  /* Dropdown */
  $(document).on("click", ".dropdown-toggle", function(e) {
    e.preventDefault();
    $(e.target)
      .closest(".dropdown")
      .find(".dropdown-content")
      .slideToggle(function() {
        $(e.target)
          .closest(".dropdown")
          .toggleClass("active");
      });
  });
  /* Dropdown */

  /* Show "Save on desktop" popup (IOS Safari mobile only, second visit)
   * popup id - 9626
   * */
  setVisit();
  displaySaveOnDesktopPopup();

  function displaySaveOnDesktopPopup() {
    if (checkIsSafari() && getVisit() === 1) {
      setTimeout(function() {
        openModal(9626);
      }, 3000);
    }
  }

  function setVisit() {
    var visit = localStorage.getItem("saveOnDesktopPopup") || 0;
    localStorage.setItem("saveOnDesktopPopup", +visit + 1);
  }

  function getVisit() {
    return +localStorage.getItem("saveOnDesktopPopup") - 1;
  }

  function checkIsSafari() {
    var ua = window.navigator ? window.navigator.userAgent : "";
    var iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i);
    var webkit = !!ua.match(/WebKit/i);
    return iOS && webkit && !ua.match(/CriOS/i);
  }

  /* Show "Save on desktop" popup */

  /* Popup service
   * global modals service - window.PUM
   * https://docs.wppopupmaker.com/article/42-popup-maker-jquery-api
   * */
  function openModal(id) {
    if (!id || !window.PUM) return;
    window.PUM.open(id);
  }

  function closeModal(id) {
    if (!id || !window.PUM) return;
    window.PUM.close(id);
  }

  /* Popup service */
})(jQuery);
