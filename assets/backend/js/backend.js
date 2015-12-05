$(document).ready(function()
{	
    initMenu();
    initTabs();
    initInputFile();
    initCheckbox();
    initMenuMobile();
    initSelect();




    //open lightbox
    var _html = "<div class='message-wrapper'>" +

        "<div class='inner'><i class='fa fa-close icon error-color'></i>" +

        //sucess message
        /*"<div class='inner'><i class='fa fa-check icon sucess-color'></i>" +*/

        //alert message
        /*"<div class='inner'><i class='fa fa-exclamation-triangle icon alert-color'></i>" +*/
        "<p>Esta é uma mensagem</p>" +
        "<a class='lightbox-button-close bt bt-grey' href='#'>FECHAR MENSAGEM</a>" +
        "</div>" +
        "</div>";
    callMensagem(_html);

    if($('.summernote').size()>0){
        $('.summernote').summernote({
            height: 200,
            tabsize: 2,
            codemirror: {
                theme: 'monokai'
            },
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['color', ['color']]
            ],
            onChange: function(contents, $editable) {
                var _parent = $(contents).parent().parent();
                _parent.find('.summernote').text($editable);
            }
        });
    }

    $(window).resize(resizeHandler);
});

//---------------------------------------------------------------
//
//---------------------------------------------------------------
function resizeHandler ()
{
    var _check = $(".sidebar_open").size();

    if(_check>0 && $(window).width()>890)
    {
        $(".sidebar_open").removeClass("sidebar_open");
        $(".sidebar").removeAttr("style");
        $(".blocker-menu").css({display:"none"});
        $("#bt-menu-mobile").removeClass("close-bt-hamburguer");
    }
}

function initSelect ()
{

    if($(".custom-select").size() > 0)
    {
        $(".custom-select").each(function(){
            var _id = $(this).data("id");
            $('#'+_id+' select').selectmenu(
                {
                    appendTo: "#"+_id,
                    change: function( event, ui ) {

                    },
                    select: function( event, ui ) {

                    }
                }
            );

        });
    }

}

function initMenuMobile()
{
    $("#bt-menu-mobile").click(function(){

        var _check = $(".sidebar_open").size();

        if(_check>0)
        {
            closeMenuMobile();
        }
        else
        {
            $("body").addClass("sidebar_open");
            $(".sidebar").css({ left: -300, display:"block"});
            $(".sidebar").stop(true,true).animate({left:0},300);
            $(".blocker-menu").css({display:"block"});
        }

        $(this).toggleClass("close-bt-hamburguer");

        return false;
    });
}

function closeMenuMobile ()
{
    $(".sidebar_open").removeClass("sidebar_open");
    $(".sidebar").stop(true,true).animate({left:-300},300,function(){
        $(".sidebar").removeAttr("style");
    });
    $(".blocker-menu").css({display:"none"});
}

function initCheckbox ()
{
    $(".checkbox a").each(function()
    {
        var _parent = $(this).parent();
        if(_parent.hasClass("ativo"))
        {
            $('input',_parent).val(1);
        }
    });

    $(".checkbox a").click(function(){
        var _parent = $(this).parent();
        _parent.toggleClass("ativo");
        $("input",_parent).val((_parent.hasClass("ativo")) ? 1 : 0);
        return false;
    });
}
function initInputFile ()
{
    $(".fake-input-file .fake-input-file__input-hide").each(function(){
        $(this)
            .change(function (evt) {
                var _file_name = $(this).val().split('\\').pop();
                $(".fake-input-file__label", $(this).parent()).text(_file_name);
            });
    });
}
function initTabs()
{

    $(".tab-box .tab-box__bt").click(function(){
        callTab ($(this));
        return false;
    });

    $(".tab-box .tab-box__bt__mobile").click(function(){
        callTab ($(this));
        return false;
    });

    function callTab (__arg__)
    {
        var _href = __arg__.data( "box" );
        var _tab = __arg__.closest( ".tab-box " );
        var _class = __arg__.attr('class').toString();

        $(".tab-box__bt",_tab).each(function(){
            if($(this).data("box") == _href)
            {
                $(".tab-box__tab",_tab).removeClass("active");
                $(this).parent().addClass("active");
                return false;
            }
        });

        $(".tab-box__content",_tab).each(function(){
            if($(this).data("box") == _href && !$(this).hasClass("active"))
            {
                if(_class.search('tab-box__bt__mobile')==0)
                {
                    $(".tab-box__content.active",_tab).slideUp(300,function(){
                        $(this).removeAttr('style');
                        $(".tab-box__content.active",_tab).removeClass("active");
                    });

                    $(this).slideDown(300,function(){
                        $(this).removeAttr('style');
                        $(this).addClass("active");
                    });
                }
                else
                {
                    $(".tab-box__content.active",_tab).removeClass("active");
                    $(this).addClass("active");
                }

                return false;
            }
        });

        if(_class.search('tab-box__bt__mobile')==0)
        {
            $(".tab-box__bt__mobile.active",_tab).removeClass("active");
            __arg__.addClass("active");
        }
    }
}
function initMenu ()
{
    $('.submenu-wrapper .bt-main').click(function()
    {
        var _submenu = $(".submenu", $(this).parent());
        var _check = $(this).parent().hasClass("open");

        if($(".submenu-wrapper.open").size() > 0)
        {
            $(".submenu-wrapper.open .submenu").stop(true,true).slideUp(200);

            $(".bt-main .fa",$(".submenu-wrapper.open")).addClass("fa-chevron-down");
            $(".bt-main .fa",$(".submenu-wrapper.open")).removeClass("fa-chevron-up");

            $(".submenu-wrapper.open").removeClass("open");
        }

        if(!_check)
        {
            $(this).parent().addClass("open");
            _submenu.stop(true,true).slideDown(300);
            $(".fa",$(this)).removeClass("fa-chevron-down");
            $(".fa",$(this)).addClass("fa-chevron-up");
        }


        return false;
    });
}

function callMensagem (_html)
{
    $('#modal-window').lightbox({
        added: function(){},
        zIndex:99999,
        destroyed: function(){},
        background:'background-color:rgba(0,0,0,.8);',
        time:300,
        width:300,
        type:'html',
        contentHtml:_html,
        closeWhenClickOutside:true
    });
}

function checkForm(idForm)
{
	
	var stopSubmit = validarCampos(idForm);
	
	$('input:submit').blur();
	
	if(!stopSubmit){
		//$("#"+idForm).submit();
		document.forms[idForm].submit();
		$('.ajax-loader').show();
	}
	else
	{
		var html = '<div id="overlay-mensagem"><div class="mensagem alert feedback">';
        
         html+=' <a href="#" onClick=\'removeMensagem()\' ><i class="fa fa-exclamation-triangle fa-5x"></i><span>Preencha os campos obrigat&oacute;rios<br><i class="clique-aqui">Clique aqui e tente novamente!!!</i></span></a></div></div>';
                
		openMSG(html);
	}
}

function checarCampo(campo,valor)
{
	if (campo.value == valor) {
			campo.value = '';
	}
} 

function checarCampoVazio(campo,valor)
{
	if (campo.value == '') {
			campo.value = valor;
	}
}

function validarCampos(formId)
{
	var stopSubmit;
	
	if($("#"+formId+" .campoObrigatorio").size())
	{
		for(i=0;i<$("#"+formId+" .campoObrigatorio").size();i++)
		{
			var objectInput = $("#"+formId+" .campoObrigatorio:eq("+i+")");
			
			switch($("#"+formId+" .campoObrigatorio").get(i).tagName)
			{
				case "INPUT":
					switch(objectInput.attr('type'))
					{
						case "file":
						case "text":
						case "password":
							if(!objectInput.val() || objectInput.attr('rel') &&  objectInput.attr('rel') == objectInput.val())
							{
								objectInput.addClass("focusCampo");
								objectInput.blur(function(){
									if($(this).val() || $(this).attr('rel') && $(this).val() && $(this).attr('rel') != $(this).val())
									{
										$(this).removeClass("focusCampo");
										//$(this).unbind();
									}
								});
								
								stopSubmit = true;	
							}
							break;
					
						case "hidden":
							var objectRel = $("#"+objectInput.attr('rel'));
	
							if(!objectInput.val())
							{
								objectRel.addClass("focusCampo");
								objectRel.blur(function(){
									$(this).removeClass("focusCampo");
									//$(this).unbind();
								});
								
								stopSubmit = true;	
							}
							break;
					}
					break;
				case "SELECT":
					if(!objectInput.val())
					{
						objectInput.addClass("focusCampoSelect");
						objectInput.change(function(){
							$(this).removeClass("focusCampoSelect");
							$(this).unbind();
						});
						
						stopSubmit = true;	
					}
					break;
			}
		}
		
		if(stopSubmit == true)
		{
			return true;
		}
	}	
}

//------------------------------------------------------------------------
function checkFormSection (idForm, _el) {
	var stopSubmit = validarCampos(idForm);
	
	$('input:submit').blur();
	
	//resolve bug do ckeditor por não adiconar os valores nos campos devidos
	if($(".ckeditor").length>0){
		$(".ckeditor").each(function(index, element) {
			var _name = String($( this ).attr('name'));
			var _value = CKEDITOR.instances[_name].getData();
			
			$( this ).remove();
			
			var htm = '<input type="hidden" name="'+_name+'" value="'+_value+'" />';
			$("#"+idForm).append(htm);
			
		});
	}
	
	if(!stopSubmit){
		var obj_str = $(_el).attr('name');
		var obj = $.parseJSON(obj_str);
		
		callLoader( 'in' );
					
		for(var key in obj) {
			var htm = '<input type="hidden" name="'+key+'" value="'+obj[key]+'" />';
			$("#"+idForm).append(htm);
		}
		
		$('#'+idForm).ajaxSubmit({
			url:obj.section+".php",
			success: function(data){
				
				$('#'+idForm).resetForm();
				$('#'+idForm).clearForm();
				$('#'+idForm)[0].reset();
				$('#'+idForm).clearFields();
				$('#'+idForm).get(0).reset();
				document.forms[idForm].reset();
				
				callLoader( 'out' );
			
				//remove o conteudo do wrapper-conteudo
				$('#wrapper-conteudo').empty();
				//adiciona o novo conteudo a ser apresentado
				$('#wrapper-conteudo').append(data);
				initRequest();
				
				return false; 
				
			}
		});
	  
	}else{
		var html = '<div id="overlay-mensagem"><div class="mensagem alert feedback">';
        
         html+=' <a href="#" onClick=\'removeMensagem()\' ><i class="fa fa-exclamation-triangle fa-5x"></i><span>Preencha os campos obrigat&oacute;rios<br><i class="clique-aqui">Clique aqui e tente novamente!!!</i></span></a></div></div>';

		openMSG(html);

	}
}

//----------------------------------------
function callLoader( arg_ ) {
	
	if(arg_ == 'in')
		$('.wrapper-loader').fadeIn(400);
	else
		$('.wrapper-loader').fadeOut(400);
}

//upload de multiplas imagens-----------------------------------------------------------------------
	var input = document.getElementById("images");
	var i = 0;
	var formdata;
	var image;
	var arrayFiles = [];
	var count = 0;
	var arrayLength;
	var reader;
	var statusUpload = false;

	function processFiles()
	{

		if(!statusUpload){
			statusUpload = true;
			
			if (window.FormData) {
				//u're a cool user
			}else{
				var text = decodeURIComponent( escape('Para utilizar os recursos deste site é necessário atualizar seu navegador!!!'));
				var html = '<div class="wrapper-mensagem"><a class="atencao" href="#"  onClick="hideMessage(); return false;"><img src="img/icon-erro.png" /><span>'+text+'</span><br><p>Clique aqui para fechar esta mensagem.</p></a></div>';
				openMSG(html);
			}
			
			var $ul = $("#list-gallery");
			var len = this.files.length;
			
			for ( i=0; i < len; i++ ) {
				file = this.files[i];
				arrayFiles.push(file);
				arrayLength = arrayFiles.length;
			}
			
			uploadMultiplasImagens($('#bt-upload-multiple-images'));	
		}else{
			var text = decodeURIComponent( escape('Aguarde enquanto as imagens são carregadas!!!'));
			var html = '<div class="wrapper-mensagem"><a class="atencao" href="#"  onClick="hideMessage(); return false;"><img src="img/icon-atencao.png" /><span>'+text+'</span><br><p>Clique aqui para fechar esta mensagem.</p></a></div>';
			openMSG(html);
		}
	}
		
	function uploadMultiplasImagens(this_){
		
		var $ul = $("#list-gallery");
		
		if (window.FormData) {
			formdata = new FormData();
			file = arrayFiles[count];
			formdata.append("images[]", file);
			formdata.append("id_galeria", $(this_).attr('alt'));
			
			if(count < arrayLength){
				$ul.append('<div id="thumb_i-m-u-f-'+count+'"></div>');
			}
			
			var obj_str = $(this_).attr('name');
			var obj = $.parseJSON(obj_str);
			
			var file_upload = obj.arquivo_upload;
			
			if(count < arrayLength){
				
			//
			$.ajax({
				url: file_upload,
				type: "POST",
				data: formdata,
				dataType : "json",
				processData: false,
				contentType: false,
				success: function(callback) {
						//$('body').trace({message:callback['message']});

						//let's show the image uploaded or not
						var $div = $("#thumb_i-m-u-f-"+count);
						if(callback['status'] == 'true'){
							$div.append(callback['html']);
							//$div.removeClass('image-loading-m-f-i');
						}else{
                            alert(callback['message']);
							//openMSG(callback['message']);
							//$div.append('<p>'+callback['message']+'</p>');
							//$div.css({backgroundImage:'none'});
						}
						//counting ++
						count++;
						
						if(count == arrayLength){
							document.getElementById("multiple-images").reset();
							statusUpload = false;
						}
						
						callBtRequestItem();
						//yep it's Asynchronous
						setTimeout(function(){uploadMultiplasImagens(this_)}, 1000);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
					for(i in XMLHttpRequest) {
						if(i!="channel")
						console.log(i +" : " + XMLHttpRequest[i]);
					}
				}
			});
			}else{
				document.getElementById("multiple-images").reset();
				statusUpload = false;
			}

		}
	}



