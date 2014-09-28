<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Quero Ganhar | Estilo de vida</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo_white_small.png" alt="Quero Ganhar"/></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-user icon-padleft"></span> <?php echo $_GET['nome']; ?>
				</a>
			</li>
			<li>
				<a href="/">
					<span class="glyphicon glyphicon-log-out icon-padleft"></span> Sair
				</a>
			</li>
        </ul><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Estilo de vida</h1>
        <p>Como você define o seu estilo de vida?</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="process">
		<div class="process-row">
			<div class="process-step">
				<button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
				<p>Cadastro</p>
			</div>
			<div class="process-step">
				<button type="button" class="btn btn-primary btn-circle" disabled="disabled"><i class="fa fa-comments-o fa-3x"></i></button>
				<p>Estilo de vida</p>
			</div>
			<div class="process-step">
				<button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
				<p>Interesses</p>
			</div> 
		</div>
	</div>
	
	<p>&nbsp;</p>
		
	  <div class="row gallery">
		<div class="col-md-4"><a href="/interesses?nome=<?php echo $_GET['nome']; ?>"><img src="img/ls-nerd.jpg" alt=""/></a><br/><span>Nerd</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-hipster.jpg" alt=""/></a><br/><span>Hipster</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-adventurous.jpg" alt=""/></a><br/><span>Aventureiro</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-cult.jpg" alt=""/></a><br/><span>Cult</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-lazy.jpg" alt=""/></a><br/><span>Preguiçoso</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-creative.jpg" alt=""/></a><br/><span>Criativo</span></div>
		<div class="col-md-4"><a href="#" onclick="alerta_estilo(); return false;"><img src="img/ls-cheerful.jpg" alt=""/></a><br/><span>Animado</span></div>
	  </div><!-- /.row -->

      <hr>

      <footer>
        <p>Quero Ganhar &copy; 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/google.analytics.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	<script src="js/facebook.js"></script>
	<script src="js/custom.js"></script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
