/*
	//chamando o plugin
	$('.custom-input-file').customFileInput();
	$('.custom-input-file').customFileInput({text:"Escolha a imagem"});
*/

//

(function(window, $){
	
	//
	var defaults =	{
		text					: 'Input',
	};
	
	//
	$.fn.customFileInput = function( method ){
		// Method calling logic
		if ( methods[method] ){//caso exista um método, esse método é chamado
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		}
		else if ( typeof method === 'object' || ! method ){//caso não exista um método ou seja apenas passado o objeto
			return methods.init.apply( this, arguments );
		}
		else{//caso o método não exista
		  $.error( 'Method ' +  method + ' does not exist on jQuery.trace' );
		}    
	};
	
	var methods = {
		init 						:										function( options ){ 			return this.each(function(){	_init(this, options);});},
		destroy 					:										function( options ){ 			return this.each(function(){	_destroy();});}
	};

	function _init($this, _options) {
		var _options 					= $.extend(defaults, _options);
		var nameClass = 'cIf_'+$($this).attr('id');		
		var div_cIf = $('<div class="'+nameClass+'"></div>');
		var cIfValue = $('<span class="cIfValue"></span>').appendTo(div_cIf);
		var cIfButton = $('<span class="cIfButton"><span>'+_options.text+'</span></span>').appendTo(div_cIf);
		
		div_cIf.insertAfter($($this));
				
		$($this).css({display:'none', opacity:0});
		
		$('.'+nameClass).click(function(){
			$($this).click();
		});	
		
		$($this).bind('change',function(){
			var file_name = $(this).val();
			$('.'+nameClass+' .cIfValue').text(file_name);
		});
	
	}//end init
	
	function _destroy(){
		
	}
	
})(window, jQuery);