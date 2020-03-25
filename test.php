<?php
session_start();
include_once 'connect/connect.php';
if (isset($_GET['educational'])){
    $educational =$_GET['educational'];
}
else {
    $educational = 1;
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
     <!-- Графики и диаграмы -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


    <!-- Сортировка таблицы -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>
    <!-- Модальное окно -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <style>
        /* counter */
        :root{
            --white: #fff;
            --bg_color1: #CE1211;
            --bg_color2: #7EB814;
            --bg_color3: #1298B3;
            --bg_color4: #FD7C05;
        }
        .counter{
            color: var(--white);
            font-family: 'Titillium Web', sans-serif;
            text-align: center;
            width: 210px;
            padding: 25px 20px 25px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .counter:before,
        .counter:after{
            content: '';
            background-color: var(--bg_color1);
            height: 160px;
            width: 160px;
            border-radius: 15px 15px 0 15px;
            transform: translateX(-50%) translateY(-50%) rotate(45deg);
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: -1;
            transition: all 0.3s;
        }
        .counter:hover:before{ box-shadow: 0 0 15px var(--white) inset; }
        .counter:after{
            height: 80px;
            width: 80px;
            border-radius: 0;
            border: 5px solid var(--white);
            background-color: transparent;
            top: 81%;
        }
        .counter:hover:after{
            transform: translateX(-50%) translateY(-50%) rotate(225deg);
        }
        .counter .counter-icon{
            font-size: 35px;
            margin: 0 0 40px 0;
            display: block;
            transition: all 0.3s;
        }
        .counter:hover .counter-icon{
            text-shadow: 0 0 10px rgba(0,0,0,0.8);
            transform: rotateX(360deg);
        }
        .counter h3{
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 55px 0;
        }
        .counter h5{
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: -35px 0 55px 0;
        }
        .counter .counter-value{
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0 0 10px 0;
            display: block;
        }
        .counter.green:before{ background-color: var(--bg_color2); }
        .counter.blue:before{ background-color: var(--bg_color3); }
        .counter.orange:before{ background-color: var(--bg_color4); }
        @media screen and (max-width:990px){
            .counter{ margin-bottom: 40px; }
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
					<li><a class="btn" href="signin.php">Авторизація / Реєстрація</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
      <!-- Container -->
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Головна</a></li>
                    <li class="active">Тестування</li>
                </ol>
                <hr>
                <div class="row">
                    <?
                    $sql = mysql_query("SELECT * FROM `educational` WHERE `id` = $educational" );
                    $myrow = mysql_fetch_array($sql);
                    ?>
                    <article class="col-md-12 maincontent">
                        <h2>Тест на профорієнтацію онлайн <a href="edu.php?educational=<? echo $myrow[id] ?>" target="_blank"><? echo $myrow[educational] ?></a> </h2>

                        <blockquote>Щоб скоротити сферу пошуку майбутньої професії можна пройти тест на професійні інтереси. Після цього питання вибору професії підлітком перестане стояти руба. А ви готові дізнатися до якої категорії професійної діяльності більш схильні?
                            <p class="text-danger">На проходження кожного тесту дається тільки одна спроба! Радимо уважно читати питання до тестів.</p> Приступимо?</blockquote>

                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th class="text-center">Спеціальність</th>
                                <th class="text-center">Назва теста</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                                $query = mysql_query("SELECT * FROM `specialty` WHERE `educational` = $educational ");
                                $row = mysql_fetch_array($query);
                                 do {
                                     $q =  mysql_query("SELECT * FROM `test` WHERE `id_educational` = $educational  && `id_specialty` = $row[id]");
                                     $r = mysql_fetch_array($q);
                                     if($r[test_name]!='') {
                                         printf('<tr>
                                                        <td class="text-justify">%s</td>
                                                        <td class="text-justify">', $row[specialty]);
                                         do {
                                             printf('<li><a href="testing.php?educational=%s&test=%s"> %s (%s)</a></li>',$educational, $r[id], $r[test_name], $r[test_title]);
                                         } while ($r = mysql_fetch_array($q));
                                         printf('    </td>
                                                    </tr>');
                                     }
                                     }
                                 while ($row = mysql_fetch_array($query));
                            ?>
                            </tbody>
                        </table>
                    </article>

                </div>
            </div>
			<!-- /container -->
    <?  include_once 'include/footer.php';  ?>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="modal/modal_enrollee.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>