/**
 * @copyright	(c) Shigeki Hosomi.
 * @author		Shigeki Hosomi
 * @date		2014.01.31
 * @name		common.js
 * @version		1.1.0
 * @required	core.js v1.0.0
 * 
 * @update		2014.03.29
 * 
 */

/* Back Forward Cache Cancel */
window.onunload = function(){};

/* console */
if(typeof window.console === "undefined"){window.console = {}}
if(typeof window.console.log !== "function"){window.console.log = function(){}}

/* Global */
var ua,mobileUtil,util;

/* ======================================
 * UserAgent Manager
 * ====================================== */
var UAManager = function()
{
	var userAgent = window.navigator.userAgent;
	
	this.os = {
		Win:	new RegExp(/win/i).test(userAgent),
		Mac:	new RegExp(/mac/i).test(userAgent),
		iOS: 	new RegExp(/iphone|ipad|ipod/i).test(userAgent),
		Android:new RegExp(/android/i).test(userAgent)
	};
	this.browser = {
		IE:		!!document.uniqueID,																								// for IE
		ltIE6:	typeof window.addEventListener === "undefined" && typeof document.documentElement.style.maxHeight === "undefined",	// IE6 or earlier
        ltIE7:	typeof window.addEventListener === "undefined" && typeof document.querySelectorAll === "undefined",					// IE7 or earlier
        ltIE8:	typeof window.addEventListener === "undefined" && typeof document.getElementsByClassName === "undefined",			// IE8 or earlier
        ltIE9:	!!document.uniqueID && !!window.matchMedia,																			// IE9 or earlier
        gtIE10:	!!document.uniqueID && document.documentMode >= 10,																	// IE10 and later
        Firefox:!!window.sidebar,
        Chrome:	!!window.chrome,
        Webkit:	!document.uniqueID && !!window.opera && !!window.sidebar && window.localStorage && typeof window.orientation == "undefined",
        Touch:	typeof document.ontouchstart !== "undefined",
        Mobile:	typeof window.orientation !== "undefined",
        Pointer:!!window.navigator.pointerEnabled
	};
};

ua = new UAManager();


/* ======================================
 * [Mobile] Utility
 * ====================================== */
var MobileUtil = function(){};

/**
 * Hide AddressBar
 * 
 * iOS7.1 beta2 and later
 * <meta name="viewport" content="minimal-ui"> ???
 */
MobileUtil.prototype.hideURLBar = function()
{
	setTimeout(function(){window.scrollTo(0,1)},100);
};

/**
 * History.Back Position Reset
 */
MobileUtil.prototype.historyBackPosReset = function()
{
	var p;
	window.onpagehide = function(){p = window.pageYOffset>0 ? window.pageYOffset+1 : 1;};
	window.onpageshow = function(){setTimeout(function(){window.scrollTo(0,p)},100);};
};

mobileUtil = new MobileUtil();


/* ======================================
 * Utility
 * ====================================== */
var Utility = function(){};

/**
 * [GET] Browser Status
 * @return {Number}
 */
Utility.prototype.getBrowser = {
	'width': function()
	{
		return window.innerWidth||(document.documentElement&&document.documentElement.clientWidth)||document.body.clientWidth;
	},
	'height': function()
	{
		return window.innerHeight||(document.documentElement&&document.documentElement.clientHeight)||document.body.clientHeight;
	},
	'scrollbar': function()
	{
		var ow,iw,
			o = document.createElement("div"),
			i = document.createElement("div");
		o.style.visibility = "hidden";
		o.style.width = "100px";
		o.style.overflow = "scroll";
		document.body.appendChild(o);
		ow = o.offsetWidth;
		
		i.style.width = "100%";
		o.appendChild(i);
		iw = i.offsetWidth;
		
		o.parentNode.removeChild(o);
		return ow - iw;
	}
};

/**
 * Check Image File
 * @param path {String}
 * @return {Boolean}
 */
Utility.prototype.checkImage = function(path)
{
	return new RegExp(/\.(gif|png|jpg|jpeg|bmp|svg)(?:\?([^#]*))?(?:#(\.*))?$/i).test(path);
};

/**
 * [GET] FileName_ex / FileName
 * @param string {String}
 * @return {String}
 */
Utility.prototype.getFileName_ex = function(string)
{
	return string.match(".+/(.+?)([\?#;].*)?$")[1];
	//return string.match(".+/([^\?#;/]+).*$")[1];
};
Utility.prototype.getFileName = function(string)
{
	return string.match(".+/(.+?)\.[a-z]+([\?#;].*)?$")[1];
	//return string.match(".+/(.+?)\.[a-z]+(([^\?#;/]+).*)?$")[1];
};

/**
 * [GET] Number Sign / Math.Sign()
 * ECMAScript Draft 6th Edition
 * 
 * @param value {Number}
 * @return {Number}
 */
Utility.prototype.numberSign = function(value)
{
	return typeof value==='number'?value?value<0?-1:1:value===value?0:NaN:NaN;
};

/**
 * [GET] Round Calculation
 * @param value {Number}
 * @param digit {Number}
 * @return {Number}
 */
Utility.prototype.roundCalc = function(value,digit)
{
	return Math.round(value*digit)/digit;
};

/**
 * [GET] Random Variation
 * @param min {Number}
 * @param max {Number}
 * @return {Number}
 */
Utility.prototype.getRandom = function(min,max)
{
	return Math.random()*(max-min)+min;
};

Utility.prototype.getIntegerRandom = function(min,max)
{
	return Math.abs(Math.floor(Math.random()*(max-min)+min));
};

Utility.prototype.getSqrtRandom = function(min,max)
{
	return Math.sqrt(Math.random())*(max-min)+min;
};

Utility.prototype.getPlusRandom3 = function(min,max)
{
	return ((Math.random()+Math.random()+Math.random())/3)*(max-min)+min;
};

Utility.prototype.getOddsRandom = function(min,max)
{
	if(array.length==0) return 0;
    var maxNum = 0,i;
    for(i=0; i<array.length; i++)
    {
        if (isNaN(array[i])) continue;
        maxNum += array[i];
    }
    var mainRandom = ~~Math.random()*maxNum;
    for(i=0; i<array.length; i++)
    {
        if(isNaN(array[i])) continue;
        mainRandom -= array[i];
        if(mainRandom<0)
        {
            return i;
        }
    }
    return -1;
};

util = new Utility();


/* ======================================
 * Array Extend
 * ====================================== */
/**
 * Shuffle
 */
Array.prototype.shuffle = function()
{
    var i = this.length;
    while(i)
    {
        var j = Math.floor(Math.random()*i);
        var t = this[--i];
        this[i] = this[j];
        this[j] = t;
    }
    return this;
};

/**
 * Clone
 */
Array.prototype.clone = function()
{
    return Array.apply(null,this);
};


/* ======================================
 * Object Extend
 * ====================================== */
/**
 * DeepClone
 * @param obj
 */
Object.deepClone = function(obj)
{
    return (typeof uneval == "function")?eval(uneval(obj)):eval(Object.toJSON(obj));
};


/* ======================================
 * Function Extend
 * ====================================== */
/**
 * setTimeout / setInterval
 */
Function.prototype.applyTimeout = function(ms,self,args)
{
	var f = this;
	return setTimeout(function(){f.apply(self,args);},ms);
};

Function.prototype.callTimeout = function (ms,self)
{
  return this.applyTimeout(ms,self,Array.prototype.slice.call(arguments,2));
};

Function.prototype.applyInterval = function(ms,self,args)
{
	var f = this;
	return setInterval(function(){f.apply(self,args);},ms);
};

Function.prototype.callInterval = function (ms,self)
{
  return this.applyInterval(ms,self,Array.prototype.slice.call(arguments,2));
};


/* ======================================
 * Date Extend
 * ====================================== */
/**
 * Date.toJapaneseString
 * YYYY年MM月DD日
 * @param year {String}
 * @param month {String}
 * @param day {String}
 */
Date.prototype.toJapaneseString = function(year,month,day)
{
	return this.getFullYear()+year+(this.getMonth()+1)+month+this.getDate()+day;
};

/**
 * Date.utc2Local
 * UTC -> LocalTime
 */
Date.prototype.utc2Local = function()
{
	return this.setTime(this.getTime()-(this.getTimezoneOffset()*60*1000));
};


/* ======================================
 * jQuery extends
 * ====================================== */
;(function($)
{
	$.fn.extend({
		/* ====================
		 * Image RollOver
		 * ==================== */
		ImgRollOver: function()
		{
			return this.each(function()
			{
				var $this = $(this);
				var $scr = $this.attr("src");
				var preload = new Image();
				var target = $scr.replace(/^(.+)_off(\.[a-z]+)$/,"$1_on$2");
				preload.src = target;
				
				$this.on({
					'mouseenter': function(e){
						$this.attr('src',$scr.replace(/^(.+)_off(\.[a-z]+)$/,"$1_on$2"));
					},
					'mouseleave': function(e){
						$this.attr('src',$scr.replace(/^(.+)_on(\.[a-z]+)$/,"$1_off$2"));
					}
				});
			});	
		},
		/* ====================
		 * Image Fade RollOver
		 * @param options
		 * ==================== */
		ImgFadeRollOver: function(options)
		{
			options = $.extend({
				inSpeed: 'normal',
				outSpeed: 'normal',
				inEasing: 'swing',
				outEasing: 'swing'
			}, options);
			
			return this.each(function()
			{
				var $this = $(this);
				var $scr = $this.attr("src");
				var preload = new Image();
				var target = $scr.replace(/^(.+)_fade(\.[a-z]+)$/,"$1_on$2");
				preload.src = target;
				
				$this.parent().css({
					display: 'block',
					backgroundImage: 'url('+target+')',
					backgroundPosition: '0px 0px',
					backgroundRepeat: 'no-repeat'
				});
				
				$this.on({
					'mouseenter': function(e){
						$this.stop(true,false).animate({
							opacity: 0
						},{duration:options.inSpeed,easing:options.inEasing, queue:false});
					},
					'mouseleave': function(e){
						$this.stop(true,false).animate({
							opacity: 1
						},{duration:options.outSpeed,easing:options.outEasing,queue:false});
					}
				});
			});
		},
		/* ====================
		 * Page Scroll
		 * @param options
		 * ==================== */
		PageScroll: function(options)
		{
			options = $.extend({
				speed: 'slow',
				easing: 'swing',
				arrivalY: 0
			}, options);
			
			/**
			 * [Public Method] pageScrollTrigger
			 * @param hash {String}
			 */
			$.fn.PageScroll.pageScrollTrigger = function(hash)
			{				
				if(new RegExp(/^\#/).test(hash))
				{
					var target = hash;
					pageScroller(target);
					//pageScrollCanceler();
				}
			};
			
			/**
			 * [Public Method] pageScrollStop
			 */
			$.fn.PageScroll.pageScrollStop = function()
			{
				$("html,body").stop();
				pageScrollRemover();
			};
			
			/**
			 * [Private Method]
			 * @param element {String}
			 */
			var pageScroller = function(element)
			{
				if(typeof $(element)[0] !== 'undefined')
				{
					var status = {
						dh: $(document).height(),
						 h: $(element)[0].offsetHeight,
						 y: $(element).offset().top + options.arrivalY
					};
					status.y = (((status.dh-status.h)<status.y && status.y<status.dh) ? status.dh-status.h : status.y)|0;
					$("html,body").stop().animate({
						scrollTop:status.y
					},{duration:options.speed,easing:options.easing,queue:false,complete:
						function(){
							$.fn.PageScroll.pageScrollStop();
						}
					});
				}
			};
			
			var onClick = function(e)
			{
				if(new RegExp(/^\#/).test($(this).attr('href')))
				{
					var hash = $(this.hash);
					pageScroller(hash);
					pageScrollCanceler();
					return false;
				}
			};
			
			var onKeyPress = function(e)
			{
				if(e.keyCode == 38 || e.keyCode == 40) pageScrollStop();
			};
			
			var pageScrollCanceler = function()
			{
				if(window.addEventListener)
				{
					window.addEventListener('DOMMouseScroll', $.fn.PageScroll.pageScrollStop, false);
					window.addEventListener('mousewheel', $.fn.PageScroll.pageScrollStop, false);
					window.addEventListener('touchend', $.fn.PageScroll.pageScrollStop, false);
				}
				else if(document.attachEvent)
				{
					document.attachEvent('onmousewheel', $.fn.PageScroll.pageScrollStop);
				}
				$(document).on('keypress keydown', onKeyPress);
			};
			
			var pageScrollRemover = function()
			{
				if(window.removeEventListener)
				{
					window.removeEventListener('DOMMouseScroll', $.fn.PageScroll.pageScrollStop, false);
					window.removeEventListener('mousewheel', $.fn.PageScroll.pageScrollStop, false);
					window.removeEventListener('touchend', $.fn.PageScroll.pageScrollStop, false);
				}
				else if(document.attachEvent)
				{
					document.detachEvent('onmousewheel', $.fn.PageScroll.pageScrollStop);
				}
				$(document).off('keypress keydown', onKeyPress);
			};
			
			this.each(function()
			{
				var $this = $(this);
				$(this).on('click', onClick);
			});
			return this;
		},
		/* ====================
		 * Popup Window
		 * @param options
		 * ==================== */
		PopupWindow: function(options)
		{
			options = $.extend({
				name: 'Window',
				width: 450,
				height: 380,
				scrollbars: 'yes'
			}, options);
			
			return this.each(function()
			{
				var $this = $(this);
				var $href = $this.attr("href");
				
				$this.on('click', function(e)
				{
					var win = window.open($href,options.name,'left='+(screen.availWidth-options.width)/2+',top='+(screen.availHeight-options.height)/2+',width='+options.width+',height='+options.height+'toolbar=no,menubar=no,location=no,status=no,scrollbars='+options.scrollbars+',resizable=no');
					win.focus();
					return false;
				});
			});
		},
		/* ====================
		 * Popup FullScreen
		 * ==================== */
		PopupFullScreen: function()
		{
			return this.each(function()
			{
				var $this = $(this);
				var $href = $this.attr("href");
				
				$this.on('click', function(e)
				{
					var win = window.open($href,null,'screenX=0,screenY=0,left=0,top=0,toolbar=no,menubar=no,location=no,status=no,scrollbars=no,resizable=no,fullscreen=yes');
					win.moveTo(0,0);
					win.resizeTo(screen.availWidth, screen.availHeight);
					win.focus();
					return false;
				});
			});
		},
		/* ====================
		 * Default　Setup
		 * ==================== */
		DefaultSetup: function()
		{
			$("a").find("img[src*='_off.']").ImgRollOver();
			$("input[src*='_off.']").ImgRollOver();
			$("a").find("img[src*='_fade.']").ImgFadeRollOver();
			$("input[src*='_fade.']").ImgFadeRollOver();
			$(".scroll").PageScroll({speed:1000, easing:"easeInOutExpo"});
		}
	});
})(jQuery);
