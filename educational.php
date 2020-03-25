<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/del_coockie.php';
?>
<!DOCTYPE html>
<html lang="ru">
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
    <script type="text/javascript" src="assets/js/form_search.js"></script>
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 10vh; /*высота футера будет зависеть от высоты экрана*/
        }

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
        .error {  color: #800;  text-align: center;  }
        input.error, textarea.error {
            border: 2px solid #800;
        }
        input.valid, textarea.valid {
            border: 2px solid #080;
        }
    </style>
    <!-- Сортировка таблицы -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>

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
			<li class="active">Навчальний заклад</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Навчальний заклад</h1>
				</header>

            </article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
    <div class="container-fluid">
        <div class="row">
            <article class="col-md-12 maincontent">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th class="text-center">Навчальний заклад</th>
                        <th class="text-center">Країна</th>
                        <th class="text-center">Місто</th>
                        <th class="text-center">Рівень акредитації</th>
                        <th class="text-center">Дата реєстрації на інфоресурсі</th>
                        <th class="text-center">URL сайту навчального закладу</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?

                    $sql = mysql_query("SELECT * FROM `educational` ORDER BY `id`");
                    $myrow = mysql_fetch_array($sql);

                    do {
                        printf(' <tr>
                        <td><a href="edu.php?educational=%s">%s</a></td>
                        <td class="text-center">%s</td>
                        <td class="text-center">%s</td>
                        <td class="text-center">%s</td>
                        <td class="text-center">%s</td>
                        <td class="text-center"><a href="%s" target="_blank">%s</a></td>
                    </tr>',$myrow[id],$myrow[educational],$myrow[country],$myrow[city],$myrow[level],$myrow[data],$myrow[url],$myrow[url]);
                    }
                    while($myrow = mysql_fetch_array($sql));
                    ?>
                     </tbody>
                </table>
            </article>

        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <?  include_once 'include/footer.php';  ?>






    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>