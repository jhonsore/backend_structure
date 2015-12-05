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
                    <div class="msg-logged">
                        <div class="msg-logged__inner">
                            <i class="fa fa-check"></i>
                            <span>Você está logado!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>