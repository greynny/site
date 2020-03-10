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
    <script src="assets/js/highcharts.js"></script>
    <script src="assets/js/main.js"></script>

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

	<!-- container -->
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.php">Головна</a></li>
			<li class="active">Навчальний заклад</li>
		</ol>

		<div class="row">
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-left">

                <div class="widget text-justify">
                    <h4>Черкаський державний бізнес-коледж</h4>
                    <ul class="list-unstyled list-spaces">
                        <li id="tab1" style="cursor: pointer"><a>Конкурс абітурієнтів на базі базової середньої освіти</a><br><span class="small text-muted">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2017-2019 роках на базі базової середньої освіти</span></li>
                        <li id="tab2" style="cursor: pointer"><a>Конкурс абітурієнтів на базі повної середньої освіти</a><br><span class="small text-muted">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2017-2019 роках на базі повної середньої освіти</span></li>
                        <li id="tab3" style="cursor: pointer"><a>Конкурс абітурієнтів для здобуття ОС "Бакалавр"</a><br><span class="small text-muted">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2018-2019 році на базі ОКР молодший спеціаліст для здобуття ОС "Бакалавр"</span></li>
                        <li id="tab4" style="cursor: pointer"><a>Тест на профорієнтацію онлайн</a><br><span class="small text-muted">Щоб скоротити сферу пошуку майбутньої професії можна пройти тест на професійні інтереси. Після цього питання вибору професії підлітком перестане стояти руба. А ви готові дізнатися до якої категорії професійної діяльності більш схильні? Приступимо?</span></li>
                        <li id="modal" style="cursor: pointer"><a>Рекламний ролік для АБІТУРІЄНТА</a><br><span class="small text-muted">Рекламний ролік для АБІТУРІЄНТА</span></li>
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->

			<!-- Article main content -->

			<article class="col-md-8 maincontent">
				<header class="page-header tab1">
					<h4 class="page-title text-justify">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2017-2019 роках на базі базової середньої освіти</h4>
                <div id="chart_1" class="chart"></div>
                </header>
                <header class="page-header tab2" style="display: none">
				    <!--*Згідно акту узгодження переліку спеціальностей, за якими здійснюється підготовка здобувачів вищої освіти за ОКР молодший спеціаліст-->
                            <h4 class="page-title text-justify">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2017-2019 роках на базі повної середньої освіти</h4>
                            <div id="chart_2" class="chart"></div>
                </header>
                <header class="page-header tab3" style="display: none">
                            <h4 class="page-title text-justify">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2018-2019 році на базі ОКР молодший спеціаліст для здобуття ОС "Бакалавр"</h4>
                            <div id="chart_3" class="chart"></div>
                </header>
                <script>
                $('#tab1').click(function() {
                    $('.tab2,.tab3,.tab4').css('display','none');
                    $('.tab1').css('display','block')
                });
                $('#tab2').click(function() {
                    $('.tab1,.tab3,.tab4').css('display','none');
                    $('.tab2').css('display','block')
                });
                $('#tab3').click(function() {
                    $('.tab2,.tab1,.tab4').css('display','none');
                    $('.tab3').css('display','block')
                });
                $('#tab4').click(function() {
                    $('.tab2,.tab1,.tab3').css('display','none');
                    $('.tab4').css('display','block')
                });
                </script>
                <header class="page-header tab4" style="display: none">
                    <h4 class="page-title text-justify">Щоб скоротити сферу пошуку майбутньої професії можна пройти тест на професійні інтереси. Після цього питання вибору професії підлітком перестане стояти руба. А ви готові дізнатися до якої категорії професійної діяльності більш схильні? Приступимо?</h4>

                    <div class="col-md-4 col-sm-6">
                        <div class="counter">
                            <div class="counter-content">
                                <div class="counter-icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <h5>Відділення «ІНФОРМАЦІЙНИХ ТЕХНОЛОГІЙ»</h5>
                                <span class="counter-value">Тест</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="counter blue">
                            <div class="counter-content">
                                <div class="counter-icon">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <h5>Відділення «Дизайн»</h5>
                                <span class="counter-value">Тест</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="counter green">
                            <div class="counter-content">
                                <div class="counter-icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <h5>Кафедра економіки, підприємництва та маркетингу</h5>
                                <span class="counter-value">Тест</span>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-sm-6">
                        <div class="counter orange">
                            <div class="counter-content">
                                <div class="counter-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h5>Відділення «ПІДПРИЄМНИЦТВА ТА МАРКЕТИНГУ»</h5>
                                <span class="counter-value">Тест</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="counter">
                            <div class="counter-content">
                                <div class="counter-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <h5>Кафедра обліку та фінансів</h5>
                                <span class="counter-value">Тест</span>
                            </div>
                        </div>
                    </div>
                </header>
              </article>

        </div>
        <hr>
    </div>
			<!-- /Article -->

            <!-- Container -->
            <div class="container-fluid">
                <div class="row">
                    <article class="col-md-12 maincontent">
                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th class="text-center">№</th>
                                <th class="text-center">Спеціальність</th>
                                <th class="text-center">Професія</th>
                                <th class="text-center">Освітній рівень</th>
                                <th class="text-center">URL спеціальності</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            $sql = mysql_query("SELECT * FROM `specialty` WHERE `educational` =  $educational");
                            $myrow = mysql_fetch_array($sql);
                            $i = 1;
                            do {
                                $sql1 = mysql_query("SELECT * FROM `employment` WHERE `educational` =  $educational AND `specialty` = $myrow[id]");
                                 $myrow1 = mysql_fetch_array($sql1);
                                printf(' <tr>
                                                    <td class="text-center">%s</td>
                                                    <td class="text-justify">%s</td>
                                                    <td class="text-justify">',$i,$myrow[specialty]);
                                        do {
                                            printf('<li><a href="profession.php?profession=%s" target="_blank">%s</a> </li>',$myrow1[id],$myrow1[employment]);
                                        }
                                        while($myrow1 = mysql_fetch_array($sql1));
                        printf('</td>
                        <td class="text-justify">%s</td>
                        <td class="text-justify"><a href="%s" target="_blank">Перейти</a></td>
                    </tr>',$myrow[level],$myrow[url]);
                            $i++;
                            }
                            while($myrow = mysql_fetch_array($sql));
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