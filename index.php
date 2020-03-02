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
    <!-- Стиль для раздела турнир -->
    <link rel="stylesheet" href="assets/css/tournament.css">
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<style>
    .row-flex{
        display: flex;
        display: -webkit-flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .thumb{
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #ecf3e6;
        height: calc(100% - 15px);
        padding:10px;
    }
</style>
</head>

<body class="home">

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header mb-3">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Черкаський державний бізнес-коледж"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Головна</a></li>
					<li><a href="about.php">Про сервіс</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Особистий кабінет</a></li>
					<li><a href="contact.php">Контакт</a></li>
					<li><a class="btn" href="signin.php">Авторизація / Реєстрація</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<? include_once 'include/tournament.php'; ?>
	</header>
	<!-- /Header -->
	<!-- container -->

        <div class="container">
            <div class="row">
                <h3 class="text-center">Швидкий пошук інфо професії</h3>
                <div class="col-md-12 col-sm-12">
                    <form method="POST" action="search.php">
                        <div class="form-row align-items-center">
                            <div class="col-md-10 col-sm-12">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control col-form-label-lg" id="inlineFormInput" placeholder="Введіть назву професії для пошуку" name="query"/>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <input type="submit" class="form-control btn-primary col-form-label-lg" value="Пошук"/>
                            </div>
                        </div>
                    </form>
                </div>
                <h4 class="text-center" style="margin-top: 80px">Розширений пошук</h4>
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul>
                        <li>за алфавітом (А ... Я)</li>
                        <li>за напрямами (бухгалтерія, юриспруденція, інженерія, тощо)</li>
                        <li>по галузях (ІТ, фінанси, авіабудування, металургія, тощо)</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>
            </div>
        </div>
	<!-- /container -->
	<?  include_once 'include/footer.php';  ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>