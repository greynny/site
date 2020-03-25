<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/del_coockie.php';
if (isset($_GET['profession'])){
    $profession = (int)$_GET['profession'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <?
                    if((isset($_COOKIE["id"])) and (!empty($_COOKIE["id"]))){
                            echo '
                        <li><a href="index.php">Головна</a></li>
                        <li><a href="about.php">Про сервіс</a></li>
                        <li><a href="user.php">Особистий кабінет</a></li>
                        <li><a href="contact.php">Контакт</a></li>
                        <li><a class="btn" href="?del_coockie" name="del_coockie">'.$_COOKIE[user].' / Вийти</a></li>';
                        }
                     else {
                            echo '<li><a href="index.php">Головна</a></li>
                        <li><a href="about.php">Про сервіс</a></li>
                        <li><a href="#" >Особистий кабінет</a></li>
                        <li><a href="contact.php">Контакт</a></li>
                        <li><a class="btn" href="signin.php">Авторизація / Реєстрація</a></li>';
                        }

                    ?>

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
                        <?
                        if((isset($_COOKIE["id"])) && (!empty($_COOKIE["id"]))){
                            $sql = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` = $_COOKIE[id] && `id_employment` = $profession && `choice` = '1'");
                            if (mysql_num_rows($sql) == '0') {
                             echo '<a id="submit" style="cursor: pointer">  <span class="fa-stack fa-lg">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-star-o   fa-stack-1x" ></i>
                                        </span>Зберегти професію в особистому кабінеті для подальшого вивчення</a>';
                                }
                            else {
                                echo '<a id="submit_delete" style="cursor: pointer">  <span class="fa-stack fa-lg">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-star-o   fa-stack-1x bg-warning" ></i>
                                        </span>Видалити професію з особистого кабінета</a>';
                            }
                        }
                        ?>

                        <form id="addform" method="POST" action="user/add_profession.php" hidden>
                            <input type="text" name="employment" value="<? echo $profession ?>" >
                        </form>
                        <form id="delform" method="POST" action="user/del_profession.php" hidden>
                            <input type="text" name="del_employment" value="<? echo $profession ?>" >
                        </form>
                        <script>
                            $("#submit").click(function(){
                                    $("#addform").submit();
                                });
                            $("#submit_delete").click(function(){
                                $("#delform").submit();
                            });
                          </script>
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