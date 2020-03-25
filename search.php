<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/del_coockie.php';
mb_internal_encoding('UTF-8');
$search = str_replace(" ", "", mb_strtolower(htmlspecialchars(mysql_real_escape_string(trim($_POST['query'])))));
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
                <?
                if ((isset($search)) && (!empty($search))){
                $query = mysql_query("SELECT * FROM `employment` WHERE `employment` LIKE '%$search%'");
                $result = mysql_fetch_array($query);
                    if (mysql_num_rows($query) == '0') {
                        $error = '<div class="alert alert-danger alert-dismissible" role="alert" id="error">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        Жодного запису по запиту "...'.$search.'..." не знайдено! 
                    </div>';
                    }
                    else {
                        $text = '<div class="alert alert-success alert-dismissible" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        По вашому запиту "...'.$search.'..." знайдено '.mysql_num_rows($query).' записа(ів)! 
                    </div>';
                    }
                }
                ?>

            </article>

			<!-- /Article -->
		</div>
	</div>	<!-- /container -->

    <hr>
    <div class="container-fluid">
        <div class="row">
            <article class="col-md-12 maincontent">
                <? echo $error, $text ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Професія</th>
                        <th>Навчальний заклад</th>
                        <th>Спеціальність</th>
                        <th>Освітній рівень</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                        $query = mysql_query("SELECT * FROM `employment` WHERE `employment` LIKE '%$search%'");
                        $result = mysql_fetch_array($query);
                    if (mysql_num_rows($query) !=0) {
                        $i = 1;
                        do {
                            $query1 = mysql_query("SELECT * FROM `educational` WHERE `id` = $result[educational]");
                            $result1 = mysql_fetch_array($query1);
                            $query2 = mysql_query("SELECT * FROM `specialty` WHERE `id` = $result[specialty]");
                            $result2 = mysql_fetch_array($query2);
                            printf('<tr>
                                            <td>%s</td>
                                            <td><a href="profession.php?profession=%s" target="_blank">%s</a></td>
                                            <td><a href="edu.php?educational=%s" target="_blank">%s</a></td>
                                            <td>%s</td>
                                            <td>%s</td>
                                        </tr>', $i, $result[id], mb_strtoupper($result[employment]), $result1[id], $result1[educational], $result2[specialty], $result2[level]);
                            $i++;
                        } while ($result = mysql_fetch_array($query));
                    }
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
    <script>
        $("#error").show(function () {
            setTimeout(function(){ $('#error').hide(); }, 10000)
        });
    </script>
    <?  include_once 'include/footer.php';  ?>






    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>