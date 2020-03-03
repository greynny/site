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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/form_validate.js"></script>
<style>
    .error {  color: #800;  text-align: center;  }
     input.error, textarea.error {
         border: 2px solid #800;
            }
    input.valid, textarea.valid {
        border: 2px solid #080;
    }
</style>
    <!-- Модальное окно -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Черкаський державний бізнес-коледж"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Головна</a></li>
					<li><a href="about.php">Про сервіс</a></li>
					<li><a href="#">Особистий кабінет</a>	</li>
					<li class="active"><a href="contact.php">Контакт</a></li>
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
			<li class="active">Контакт</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Форма зворотнього звя'зку</h1>
				</header>
				<h3 class="text-center">МИ З РАДІСТЮ ВІДПОВІМО НА ВСІ ВАШІ ЗАПИТАННЯ ТА УТОЧНЕННЯ!</h3>
                <p class="text-justify">Усім, хто бажає вступати до Черкаського державного бізнес-коледжу, ми надаємо індивідуальну консультацію кожному абітурієнту щодо питань вступу, навчання і вибору спеціальності та інформаційно-консультаційну підтримку батькам абітурієнта з усіх питань.
				</p>
				<br>
					<form action="#" method="POST" id="myform">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Ім'я" name="name" required/>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="email" placeholder="Email" name="email" required/>
							</div>
							<div class="col-sm-4">
								 <input type="tel" class="form-control" id="phone" name="phone" placeholder="+38 (000) 00 00 000" data-mask="+38 (0__) __ __ ___"  required>

							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Введіть своє повідомлення..." class="form-control" rows="9" name="text"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
                                <label class="checkbox"><input type="checkbox" id="check">Я згоден <span id="modal" style="cursor: pointer; color: #007bff">на збір та обробку моїх персональних даних</span></label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" id="sbm"  type="submit" value="Відправитти повідомлення" disabled="disabled">
							</div>
						</div>
					</form>

                <script>
                    $(document).ready(function(){
                        $('#phone').mask('+00 (000) 000 00 00', {placeholder: "+__ (___) ___ __ __"});
                        $("#check").click(function() {
                            if (($(this).is(':checked'))){
                                $("#sbm").removeAttr("disabled");
                            }
                            else {
                                $("#sbm").attr("disabled", "disabled");
                            }
                        });
                    });
                </script>
                <script type="text/javascript" src="modal/modal_contakt.js"></script>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Адреса:</h4>
					<address>
                        18028 м. Черкаси, вул. В.Чорновола, 243
					</address>
					<h4>Телефони:</h4>
					<address>
                        <span class="fa fa-phone"></span>+38(073)1604253 <br>
                        <span class="fa fa-phone"></span>+38(0472) 64-93-44<br>
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.077826960002!2d32.05373991569395!3d49.40743387934503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xba464a0e8d80c83c!2z0KfQtdGA0LrQsNGB0YHQutC40Lkg0JHQuNC30L3QtdGBINCa0L7Qu9C70LXQtNC2!5e0!3m2!1sru!2sua!4v1452777426689" frameborder="0" style="border:0" width="100%" height="350px" allowfullscreen=""></iframe>
	</section>

    <?  include_once 'include/footer.php';  ?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>