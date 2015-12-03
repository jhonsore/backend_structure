//Some tiny usable functions
/*
	-- resizeBackground > resize proportionally a background
	-- preventContextMenu > prevent the context menu to some object
	-- preventMouseDown > prevent the mouse down to some object
	
	
	//USAGE
	$("object here").utils('resizeBackground');
	$("object here").utils('preventContextMenu');
	$("object here").utils('preventMouseDown');
	
*/
(function($){
	
	$.fn.utils = function( method )
	{
		var $this = $(this),
		 	data = $this.data('initialized');
		
		if( !data )//if the plugins was not initilized to this object
		{
			methods.init.apply( this, arguments );
		}
		
		callMethod($this, method);
	};
	
	function callMethod($this, method)
	{
		if ( methods[method] )
		{
			return methods[method].apply( $this, Array.prototype.slice.call( arguments, 1 ));
		}
		else
		{
			alert( 'Method ' +  method + ' does not exist on jQuery.utils' );
		}
	}
		
	//-------------------------------------- MÉTODOS --------------------------------------//	
	var methods =
	{
		init :										function( options ){ 			return this.each(function(){	_init(this);	});},
		resizeBackground :							function( options ){ 			return this.each(function(){	_resizeBackground(this);	})},
		preventMouseDown :							function( options ){ 			return this.each(function(){	_preventMouseDown(this);	});},
		preventContextMenu :						function( options ){ 			return this.each(function(){	_preventContextMenu(this);	});},
		getSize :									function( options ){ 			return this.each(function(){	_getSize(this);	});},
		getWindowWidth :							function( options ){ 			return this.each(function(){	_getWindowWidth(this);	});},
		getWindowHeight :							function( options ){ 			return this.each(function(){	_getWindowHeight(this);	});}
  	};

	function _init($this)
	{
		var $this = $($this)
		
		//get the plugin up
		$this.data('initialized',
		{
		   initialized : true
		});
	}
	//-------------------------------------- RESIZE BACKGROUND --------------------------------------//	
	function _resizeBackground($this)
	{
		var $this = $($this);
		
		if($this.length == 0)
			 alert('resizeBackground: element doesnt exist');
		else
			goAlong();
		
		var _windowWidth;
		var _windowHeight;
		var _imgWidth;
		var _imgHeight;
		var _scale;
		
		function goAlong()
		{
			resize();
				
			$(window).resize(function()
			{
				resize();
			});
			
			function resize()
			{
				_windowHeight = $(window).height();
				_windowWidth = $(window).width();
				
				_imgWidth = $this.width();
				_imgHeight = $this.height();
				
				var _sw = _windowWidth / _imgWidth;
				var _sh = _windowHeight / _imgHeight;
				
				_scale = Math.max(_sw, _sh); 
				
				_imgHeightScale = (_scale * _imgHeight);
				_imgWidthScale = (_scale * _imgWidth);
				
				$this.css
				({
					width	: _imgWidthScale + 'px',
					height	: _imgHeightScale + 'px'
				});
			}
		}
	}
	
	//-------------------------------------- PREVENT CONTEXT MENU --------------------------------------//
	function _preventContextMenu($this)
	{
		var $this = $($this);
		
		if($this.length == 0)
			 alert('preventContextMenu: element passed doesnt exist');
		else
			goAlong();
		
		function goAlong()
		{
			$this.bind("contextmenu",function(e){	return false;});
		}

	}//fim do _preventContextMenu
	
	//-------------------------------------- PREVENT MOUSE DOWN --------------------------------------//
	function _preventMouseDown($this)
	{
		var $this = $($this);
		
		if($this.length == 0)
			 alert('preventMouseDown: element passed doesnt exist');
		else
			goAlong();
		
		function goAlong()
		{
			$this.bind("mousedown",function(e){	return false;});
		}
	}//fim do _preventMouseDown
	
	//returns the css value of an element wihout 'px'
	function _getSize(_obj,_css)
	{
		var _regExp = new RegExp("[a-z][A-Z]","g");
		return parseFloat(_obj.css(_css).replace(_regExp, ""));
	}
	
	//returns the width of the window
	function _getWindowWidth () {	return $(window).width();}
	
	//returns the height of the window
	function _getWindowHeight () {	return $(window).height();}
				
})(jQuery);