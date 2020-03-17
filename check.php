<?php
session_start();
include_once 'connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <? include_once 'include/meta.php';?>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Валидация формы -->
    <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/form_signin.js"></script>
    <style>
        .error {  color: #800;  text-align: center;  }
        input.error, textarea.error {
            border: 2px solid #800;
        }
        input.valid, textarea.valid {
            border: 2px solid #080;
        }
    </style>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Головна</a></li>
					<li><a href="about.php">Про сервіс</a></li>
					<li><a href="#">Особистий кабінет</a></li>
					<li><a href="contact.php">Контакт</a></li>
					<li class="active"><a class="btn" href="signin.php">Авторизація / Реєстрація</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Головна</a></li>
			<li class="active">Запис даних в базу</li>
		</ol>

		<div class="row">
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"><? print_r($_POST); ?></h1>
				</header>
				
				
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
    <?  include_once 'include/footer.php';  ?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>