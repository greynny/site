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
    <script type="text/javascript" src="assets/js/form_search.js"></script>
    <style>
        footer {
            position: relative;
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
					<li><a class="btn" href="signin.php"> Авторизація / Реєстрація</a></li>
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
			<li class="active">Пошук</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Швидкий пошук професії</h1>
				</header>
                <h3 class="text-center">Швидкий пошук інфо професії</h3>
                <div class="col-md-12 col-sm-12">
                    <form method="POST" action="search.php" id="search">
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
            </article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
    <div class="container">
        <div class="row">
            <article class="col-md-12 maincontent">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>имя</th>
                        <th>фамилия</th>
                        <th>возраст</th>
                        <th>итого</th>
                        <th>скидка</th>
                        <th>дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>петр</td>
                        <td>сидоров</td>
                        <td>28</td>
                        <td>$9.99</td>
                        <td>20%</td>
                        <td>jul 6, 2006 8:14 am</td>
                    </tr>
                    <tr>
                        <td>иван</td>
                        <td>хайкин</td>
                        <td>33</td>
                        <td>$19.99</td>
                        <td>25%</td>
                        <td>dec 10, 2002 5:14 am</td>
                    </tr>
                    <tr>
                        <td>николай</td>
                        <td>котов</td>
                        <td>18</td>
                        <td>$15.89</td>
                        <td>44%</td>
                        <td>jan 12, 2003 11:14 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>арнов</td>
                        <td>45</td>
                        <td>$153.19</td>
                        <td>44%</td>
                        <td>jan 18, 2001 9:12 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>егоров</td>
                        <td>22</td>
                        <td>$13.19</td>
                        <td>11%</td>
                        <td>jan 18, 2007 9:12 am</td>
                    </tr>
                    <tr>
                        <td>петр</td>
                        <td>сидоров</td>
                        <td>28</td>
                        <td>$9.99</td>
                        <td>20%</td>
                        <td>jul 6, 2006 8:14 am</td>
                    </tr>
                    <tr>
                        <td>иван</td>
                        <td>хайкин</td>
                        <td>33</td>
                        <td>$19.99</td>
                        <td>25%</td>
                        <td>dec 10, 2002 5:14 am</td>
                    </tr>
                    <tr>
                        <td>николай</td>
                        <td>котов</td>
                        <td>18</td>
                        <td>$15.89</td>
                        <td>44%</td>
                        <td>jan 12, 2003 11:14 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>арнов</td>
                        <td>45</td>
                        <td>$153.19</td>
                        <td>44%</td>
                        <td>jan 18, 2001 9:12 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>егоров</td>
                        <td>22</td>
                        <td>$13.19</td>
                        <td>11%</td>
                        <td>jan 18, 2007 9:12 am</td>
                    </tr>
                    <tr>
                        <td>петр</td>
                        <td>сидоров</td>
                        <td>28</td>
                        <td>$9.99</td>
                        <td>20%</td>
                        <td>jul 6, 2006 8:14 am</td>
                    </tr>
                    <tr>
                        <td>иван</td>
                        <td>хайкин</td>
                        <td>33</td>
                        <td>$19.99</td>
                        <td>25%</td>
                        <td>dec 10, 2002 5:14 am</td>
                    </tr>
                    <tr>
                        <td>николай</td>
                        <td>котов</td>
                        <td>18</td>
                        <td>$15.89</td>
                        <td>44%</td>
                        <td>jan 12, 2003 11:14 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>арнов</td>
                        <td>45</td>
                        <td>$153.19</td>
                        <td>44%</td>
                        <td>jan 18, 2001 9:12 am</td>
                    </tr>
                    <tr>
                        <td>борис</td>
                        <td>егоров</td>
                        <td>22</td>
                        <td>$13.19</td>
                        <td>11%</td>
                        <td>jan 18, 2007 9:12 am</td>
                    </tr>
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