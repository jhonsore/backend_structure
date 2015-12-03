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
      <link rel="stylesheet" media="screen" type="text/css" href="assets/backend/css/geral.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/backend/js/html5shiv.3.7.2.min.js"></script>
      <script src="assets/backend/js/respond.1.4.2.min.js"></script>
    <![endif]-->
	<!-- js files -->
    <script src="assets/backend/js/jquery.1.11.1.min.js"></script>
  </head>
  <body>
  	<div id="geral" class="login">
        <div class="header">
            <div class="header__inner">
                <div class="box-left">
                    <h1>Painel de controle</h1>
                    <h2>Nome do cliente</h2>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="form-sign">
            <form name="formLogin" method="post" action="check.php">
                <div class="item">
                    <div class="item__iner">
                        <input type="text" placeholder="Usuário">
                    </div>
                </div>
                <hr>
                <div class="item">
                    <div class="item__iner">
                        <input type="password" placeholder="Senha">
                    </div>
                </div>

            </form>
            <input type="submit" class="bt" value="ENVIAR">
        </div>

    </div>
  </body>
</html>