<?php
session_start();
include_once 'connect/connect.php';
if (isset($_GET['test'])){
    $test = (int)$_GET['test'];
}

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
			<li class="active">Запис даних в базу</li>
		</ol>

		<div class="row">
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
                    <? $query = mysql_query("SELECT * FROM `test` WHERE `id` = $test");
                        $myrow = mysql_fetch_array($query);
                    ?>
					<h1 class="page-title"><? echo $myrow[test_name]; ?></h1>
                    <blockquote><? echo $myrow[test_title]; ?></blockquote>

                    <?
                    $result=0;
                    foreach ($_POST as $key => $value) {
                        $sql = mysql_query("SELECT * FROM `test_answer` WHERE `correct_answer` = 1 && `id` = $value");
                             if(mysql_num_rows($sql)==1){
                                    $result++;
                                }
                       }
                    echo '<h3>За результами теста Ви набрали - <span class=" text-danger">'.$result.' бал/(балів)</span></h3>';
                    ?>
                    <blockquote><? echo $myrow[result]; ?></blockquote>
				</header>

				<?  echo '<div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            Дані занесено до бази. Через 30 секунд Вас буде перенаправлено на початкову сторінку, або перейдіть за <a href = "edu.php?educational='.$myrow[id_educational].'">посиланням</a>
                        </div>';
                echo '<script language = \'javascript\'>
                          var delay = 30000;
                          setTimeout("document.location.href=\'edu.php?educational='.$myrow[id_educational].'\'", delay);
                        </script>';
                ?>
				
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