<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend</title>
    <style type="text/css" media="all">  @import url(assets/backend/css/reset.css);  @import url(assets/backend/css/generic.css);  </style>
      <!-- Bootstrap -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" media="screen" type="text/css" href="assets/backend/css/font-awesome-4.5.0/css/font-awesome.min.css">
      <script src="assets/backend/js/jquery.1.11.1.min.js"></script>
      <script src="assets/backend/js/jquery-migrate-1.2.1.min.js"></script>
      <link href="assets/backend/css/bootstrap.min.css" rel="stylesheet">
      <script src="assets/backend/js/bootstrap.min.js"></script>
      <link rel="stylesheet" media="screen" type="text/css" href="assets/backend/css/geral.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="assets/backend/js/html5shiv.3.7.2.min.js"></script>
      <script src="assets/backend/js/respond.1.4.2.min.js"></script>
      <![endif]-->
      <!-- js files -->

      <script src="assets/backend/js/jquery-lightbox.js"></script>

      <script src="assets/backend/js/jquery-ui.min.js"></script>
      <link href="assets/backend/css/jquery-ui.min.css" rel="stylesheet">

      <script src="assets/backend/js/backend.js"></script>

      <!-- include summernote css/js-->
      <link href="assets/backend/css/summernote.css" rel="stylesheet">
      <script src="assets/backend/js/summernote.js"></script>

  </head>
  <body>
  	<div id="geral" class="login">
        <?php include_once "header.php"; ?>
        <?php include_once "menu.php"; ?>
        <div class="container-wrapper">
            <div class="container__inner">
                <div class="container__wrapper">
                    <div class="header__section">
                        <div class="header__section__inner">
                            <p class="title"><span>Edição</span><i class="fa fa-chevron-right"></i>Usuários</p>
                            <a href="#" class="button"><i class="fa fa-plus"></i></a>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="wrapper_geral">
                        <div class="listagem">
                            <div class="listagem__inner">
                                <div class="box-with-border-down box-item box-casos tab-box">
                                    <div class="tab-box__menu">
                                        <ul class="tab-box__tabs">
                                            <li class="tab-box__tab active">
                                                <a data-box="2015" href="#" class="tab-box__bt">
                                                    <span class="tab-box__txt">Tab A</span>
                                                </a>
                                            </li>
                                            <li class="tab-box__tab">
                                                <a data-box="2014" href="#" class="tab-box__bt">
                                                    <span class="tab-box__txt">Tab B</span>
                                                </a>
                                            </li>
                                            <li class="tab-box__tab">
                                                <a data-box="2013" href="#" class="tab-box__bt">
                                                    <span class="tab-box__txt">Tab C</span>
                                                </a>
                                            </li>
                                            <div class="clear"></div>
                                        </ul>
                                    </div>
                                    <div class="tab-box__wrapper">
                                        <div class="tab-box__item">
                                            <a href="#" class="tab-box__bt__mobile active" data-box="2015"><span class="txt">Tab A</span><em class="sprite arrow-down icon"></em><div class="clear"></div></a>
                                            <div class="tab-box__content active" data-box="2015">
                                                <div class="listagem-conteudo">
                                                    <div class="checkbox ">
                                                        
                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                        <span class="txt-checkbox">Ativar</span>
                                                    </div>
                                                    <div class="simple-input">
                                                        <span class="title-value">Nome Item</span>
                                                        <div class="inner">
                                                            <input type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="simple-input">
                                                        <span class="title-value">Nome Item</span>
                                                        <div class="inner">
                                                            <input type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-boxes">
                                                        <span class="title-value">Permissões de acesso</span>
                                                        <div class="inner">
                                                            <div class="checkbox ativo">
                                                                
                                                                <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                <span class="txt-checkbox">Tipo</span>
                                                                <input type="hidden" value="">
                                                            </div>
                                                            <div class="checkbox ">
                                                                
                                                                <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                <span class="txt-checkbox">Tipo</span>
                                                                <input type="hidden" value="">
                                                            </div>
                                                            <div class="checkbox ativo">
                                                                
                                                                <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                <span class="txt-checkbox">Tipo</span>
                                                                <input type="hidden" value="">
                                                            </div>
                                                            <div class="checkbox ">
                                                                
                                                                <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                <span class="txt-checkbox">Tipo</span>
                                                                <input type="hidden" value="">
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div class="input-file">
                                                        <span class="title-value">Thumb</span>
                                                        <div class="fake-input-file">
                                                            <div class="box-with-border-down box-item">
                                                                <input type="file" class="fake-input-file__input-hide">
                                                                <span class="fake-input-file__label">File Name</span>
                                                                <span class="fake-input-file__fake-button"><span>SELECIONAR</span></span>
                                                            </div>
                                                        </div>
                                                        <span class="descricao-file">Tamanho da imagem: 100x100px</span>
                                                    </div>
                                                    <div class="text-area">
                                                        <span class="title-value">Nome Item</span>
                                                        <div class="inner">
                                                            <textarea></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-area-edit">
                                                        <span class="title-value">Nome Item</span>
                                                        <div class="">
                                                            <textarea class="summernote" id="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                    <span class="msg">*campos obrigatórios</span>
                                                    <input type="submit" class="bt bt-cadastro" value="ENVIAR">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box__item">
                                            <a href="#" class="tab-box__bt__mobile" data-box="2014"><span class="txt">Tab B</span><em class="sprite arrow-down icon"></em><div class="clear"></div></a>
                                            <div class="tab-box__content" data-box="2014">
                                                <div class="listagem-conteudo">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box__item">
                                            <a href="#" class="tab-box__bt__mobile" data-box="2013"><span class="txt">Tab C</span><em class="sprite arrow-down icon"></em><div class="clear"></div></a>
                                            <div class="tab-box__content" data-box="2013">
                                                <div class="listagem-conteudo">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>