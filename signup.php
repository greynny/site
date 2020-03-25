<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/signup.php';
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
    <script type="text/javascript" src="assets/js/form_signup.js"></script>
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
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
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
			<li class="active">Реєстрація</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Реєстрація</h1>
				</header>
                <? echo $text ?>
                <? echo $error ?>
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Реєстрація нового користувача</h3>
							<p class="text-center text-muted">Якщо у Вас є обліковий запис, перейдіть за посиланням <a href="signin.php">АВТОРИЗАЦІЯ</a> </p>
							<hr>

							<form id="myform" action="" method="POST">
								<div class="top-margin">
									<label>Ім'я<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="name">
								</div>
								<div class="top-margin">
									<label>Призвище<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="lastname">
								</div>
								<div class="top-margin">
									<label>Email адреса <span class="text-danger">*</span></label>
									<input type="email" class="form-control" name="email" id="email" onBlur="checkAvailability();">
								</div>
                                <span id="user-email-status"></span>
                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>Стать <span class="text-danger">*</span></label>
                                        <select class="form-control" id="select" name="sex" type="text" >
                                            <option value="" disabled selected>Вибрати стать</option>
                                            <option value="Чоловіча">Чоловіча</option>
                                            <option value="Жіноча">Жіноча</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Дата народження<span class="text-danger">*</span></label>
                                        <input class="form-control" type="date" value="" name="date" id="date">
                                    </div>
                                </div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Пароль <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="password" id="password">
									</div>
									<div class="col-sm-6">
										<label>Повторити пароль<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="password_second" id="password_second">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
                                        <label class="checkbox"><input type="checkbox" id="check">Я згоден <span id="modal" style="cursor: pointer; color: #007bff">на збір та обробку моїх персональних даних</span></label>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" id="sbm" disabled="disabled" name="do_reg">Реєстрація</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
                <script>
                    $(document).ready(function(){
                        $("#check").click(function() {
                            if (($(this).is(':checked'))){
                                $("#sbm").removeAttr("disabled");
                            }

                            else {

                                $("#sbm").attr("disabled", "disabled");
                            }
                        });

                    });
                    function checkAvailability() {
                        jQuery.ajax({
                            url: "ajax/check_availability.php",
                            data:'email_reg='+$("#email").val(),
                            type: "POST",
                            success:function(data){
                                $("#user-email-status").html(data);
                                if($("#status").hasClass("text-danger")){
                                    $("#email").removeClass("valid");
                                    $("#email").addClass("error");
                                    $("#sbm").attr("disabled", "disabled");

                                }

                            },
                        })
                    }
                </script>
                <script type="text/javascript" src="modal/modal_contakt.js"></script>
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