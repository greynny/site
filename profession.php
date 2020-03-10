<?php
session_start();
include_once 'connect/connect.php';
if (isset($_GET['profession'])){
    $profession =$_GET['profession'];
}
else {
    $profession = 1;
}
$sql = mysql_query("SELECT * FROM `employment` WHERE `id` = $profession");
$myrow = mysql_fetch_array($sql);
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
                    <li><a class="btn" href="signin.php">Авторизація / Реєстрація</a></li>
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
			<li class="active">Професія</li>
		</ol>

		<div class="row">
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<h4><? echo $myrow["employment"] ?></h4>
						<p><img src="assets/images/pr/<? echo $myrow[educational]?>_<? echo $myrow[specialty]?>_<? echo $myrow[id]?>.jpg" alt=""></p>
						<a href="#">Зберегти професію в особистому кабінеті для подальшого вивчення</a>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Коротко про професію </h1>
				</header>
				<p class="text-justify"><? echo $myrow["about"] ?></p>

                <h2>Представлений список допоможе Вам зрозуміти, що професія <span class="text-danger" style="text-transform: uppercase;"><? echo $myrow["employment"]?></span> саме для Вас:</h2>
				<blockquote class="text-justify"><? echo $myrow["question"]?></blockquote>
				</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
  <?  include_once 'include/footer.php';  ?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>