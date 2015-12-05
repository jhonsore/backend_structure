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
                            <p class="title"><span>Listagem</span><i class="fa fa-chevron-right"></i>Usuários</p>
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
                                                    <div class="cont-table">
                                                        <table>
                                                            <tr class="header-table">
                                                                <td class="td-ativo"><strong>Ativo</strong></td>
                                                                <td class="td-descricao"><strong>Descrição</strong></td>
                                                                <td class="td-editar"><strong>Editar</strong></td>
                                                                <td class="td-remover"><strong>Remover</strong></td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ativo">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item ">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item ">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="pagination">
                                                            <p><strong>21</strong> de <strong>200</strong></p>

                                                            <a href="#"><i class="fa fa-chevron-left"></i></a>
                                                            <a href="#"><i class="fa fa-chevron-right"></i></a>

                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box__item">
                                            <a href="#" class="tab-box__bt__mobile" data-box="2014"><span class="txt">Tab B</span><em class="sprite arrow-down icon"></em><div class="clear"></div></a>
                                            <div class="tab-box__content" data-box="2014">
                                                <div class="listagem-conteudo">
                                                    <div class="cont-table">
                                                        <table>
                                                            <tr class="header-table">
                                                                <td class="td-ativo"><strong>Ativo</strong></td>
                                                                <td class="td-descricao"><strong>Descrição</strong></td>
                                                                <td class="td-editar"><strong>Editar</strong></td>
                                                                <td class="td-remover"><strong>Remover</strong></td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ativo">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-item ">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>


                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="pagination">
                                                            <p><strong>21</strong> de <strong>200</strong></p>

                                                            <a href="#"><i class="fa fa-chevron-left"></i></a>
                                                            <a href="#"><i class="fa fa-chevron-right"></i></a>

                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-box__item">
                                            <a href="#" class="tab-box__bt__mobile" data-box="2013"><span class="txt">Tab C</span><em class="sprite arrow-down icon"></em><div class="clear"></div></a>
                                            <div class="tab-box__content" data-box="2013">
                                                <div class="listagem-conteudo">
                                                    <div class="cont-table">
                                                        <table>
                                                            <tr class="header-table">
                                                                <td class="td-ativo"><strong>Ativo</strong></td>
                                                                <td class="td-descricao"><strong>Descrição</strong></td>
                                                                <td class="td-editar"><strong>Editar</strong></td>
                                                                <td class="td-remover"><strong>Remover</strong></td>
                                                            </tr>
                                                            <tr class="table-item stripe">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ativo">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-item ">
                                                                <td class="td-ativo">
                                                                    <div class="checkbox ">
                                                                        <input type="hidden" name="#">
                                                                        <a href="#" class=""><i class="fa fa-check"></i></a>
                                                                    </div>
                                                                </td>
                                                                <td class="td-descricao">
                                                                    <p>Lorem ipsum donec sidenuc...</p>
                                                                </td>
                                                                <td class="td-editar">
                                                                    <a href="cadastro-galeria.php" class=""><i class="fa fa-pencil-square-o"></i></a>
                                                                </td>
                                                                <td class="td-remover">
                                                                    <a href="#" class=""><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                        <div class="pagination">
                                                            <p><strong>21</strong> de <strong>200</strong></p>

                                                            <a href="#"><i class="fa fa-chevron-left"></i></a>
                                                            <a href="#"><i class="fa fa-chevron-right"></i></a>

                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="clear"></div>
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
    </div>
  </body>
</html>