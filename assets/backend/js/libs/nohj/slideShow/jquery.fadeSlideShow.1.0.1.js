/*
	//chmando o plugin
	$("#div").fadeSlideShow({object:'.active'});
	
	//chamando o plugin e passando alguns parametros
	$("#div").fadeSlideShow({object:'.active', resize : true});
	object					: '',
	resize					: false,
	timer					: 5000,
	ease					: 'easeOutSine',
	timeTransition			: 1000
	
	//pára o slider
	$("#div").fadeSlideShow('stop');

	//continua o slider
	$("#div").fadeSlideShow('continue');
	
	//next slide
	$("#div").fadeSlideShow('next');
	
	//previous slide
	$("#div").fadeSlideShow('previous');	
*/

(function($){
	
	//
	var defaults =
	{
		object					: '',
		resize					: false,
		timer					: 5000,
		ease					: 'easeOutSine',
		timeTransition			: 1000,
		imgAtiva				: 0,
		array					: [],
		interval				: null
	};
	
	//
	$.fn.fadeSlideShow = function( method )
	{
		// Method calling logic
		if ( methods[method] )//caso exista um método, esse método é chamado
		{
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		}
		else if ( typeof method === 'object' || ! method )//caso não exista um método ou seja apenas passado o objeto
		{
			return methods.init.apply( this, arguments );
		}
		else//caso o método não exista
		{
		  $.error( 'Method ' +  method + ' does not exist on jQuery.tooltip' );
		}    
	};
	
	var methods =
	{
		init :										function( options ){ 			return this.each(function(){	_init(this, options);});},
		stops :										function( options ){ 			return this.each(function(){	_stop(this);});},
		continues :									function( options ){ 			return this.each(function(){	_continue(this);});},
		next :										function( options ){ 			return this.each(function(){	_next(this);});},
		previous :									function( options ){ 			return this.each(function(){	_previous(this);});}
	};

	function _init($this, options)
	{
		
		var $this 						= $($this);
		
		defaults.array 					= $this.find('img');
		
		var options 					= $.extend(defaults, options);
		
		$this.data(options);
		
		var data 						= $this.data();
		
		if(options.object == '')
			alert('The object is empty!!!!')
		else
			data.interval = window.setInterval(function(){	changeImgAtiva($this,'next')}, options.timer);
	}
	
	function changeImgAtiva($this, _arg)
	{
		
		var data 						= $this.data();
		
		var _imgAtiva 					= data.imgAtiva;
		
		var _array 						= data.array;
		
		if(_arg == 'next')
		{
			if(_imgAtiva < Number(_array.length-1))
				_imgAtiva++;
			else
				_imgAtiva 				= 0;
		}
		else
		{
			if(_imgAtiva == 0)
				_imgAtiva 				= Number(_array.length-1);
			else
				_imgAtiva--;
		}
		
		data.imgAtiva 					= _imgAtiva;
		
		slideSwitch($this);
	}
	
	function slideSwitch($this)
	{
		var data 						= $this.data();
		
		var _object 					= $(String(data.object));
		var _imgAtiva 					= data.imgAtiva;
		var _array 						= data.array;
		var _timerTransition 			= data.timeTransition;
		
		if(_object.length == 1)
		{
			
			var _next 					= $(_array[_imgAtiva]);
			
			var str 					= String(data.object);
			var newStr 					= String(str.replace("#", '').replace(".", ''));
									
			_object.fadeOut(_timerTransition);	
			_object.removeClass(newStr);
			_next.addClass(newStr);
			$(str).fadeIn(_timerTransition);
			
			if(data.resize == true)		$(String(data.object)).utils('resizeBackground');
			
		}
		else
		{
			alert('fadeSlideShow : object passed doesnt exist')
		}
	}
	
	///////////////////////////////////////////////////////////////////////
	function _stop($this)
	{
		var $this 						= $($this);
		var data 						= $this.data();

		clearInterval(data.interval);
	}
	
	///////////////////////////////////////////////////////////////////////
	function _continue($this)
	{
		var $this 						= $($this);
		var data 						= $this.data();
		
		data.interval = window.setInterval(function(){	changeImgAtiva($this,'next')}, data.timer);
	}//fim do _continue

	///////////////////////////////////////////////////////////////////////
	function _next($this)
	{
		
		_stop($this);
		
		var $this 						= $($this);
		var data 						= $this.data();
		
		changeImgAtiva($this,'next');
	}//fim do _nextSlide

	///////////////////////////////////////////////////////////////////////
	function _previous($this)
	{
		_stop($this);
		
		var $this 						= $($this);
		var data 						= $this.data();
		
		changeImgAtiva($this,'prev');
	}//fim do _prevSlide
	
})(jQuery);