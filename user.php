<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/del_coockie.php';
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
			<li class="active">Кабінет користувача / <? echo $_COOKIE[user] ?></li>
		</ol>

		<div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 sidebar sidebar-left">

                <div class="widget text-justify">
                    <ul class="list-unstyled list-spaces">
                        <li id="tab1" style="cursor: pointer"><a>Вибір професії</a><br><span class="small text-muted">Професії, що були добавлені користувачем, для подальшого ознайомлення</span></li>
                        <li id="tab2" style="cursor: pointer"><a>Турнір професій</a><br><span class="small text-muted">Професії будуть боротися за твій вибір, уважно роби свій вибір.</span></li>
                        <li id="tab4" style="cursor: pointer"><a>Тест на профорієнтацію онлайн</a><br><span class="small text-muted">Щоб скоротити сферу пошуку майбутньої професії можна пройти тест на професійні інтереси. Після цього питання вибору професії підлітком перестане стояти руба. А ви готові дізнатися до якої категорії професійної діяльності більш схильні? Приступимо?</span></li>
                        <li id="tab3" style="cursor: pointer"><a>Конкурс абітурієнтів для здобуття ОС "Бакалавр"</a><br><span class="small text-muted">Конкурс абітурієнтів на місця регіонального замовлення денної формі навчання за підсумками прийому в 2018-2019 році на базі ОКР молодший спеціаліст для здобуття ОС "Бакалавр"</span></li>
                        <li id="modal" style="cursor: pointer"><a>Рекламний ролік для АБІТУРІЄНТА</a><br><span class="small text-muted">Рекламний ролік для АБІТУРІЄНТА</span></li>
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->

			<!-- Article main content -->

			<article class="col-md-9 maincontent">
				<header class="page-header tab1">
					<h4 class="page-title text-justify">Професії, що були добавлені користувачем, для подальшого ознайомлення</h4>
                    <table id="table_id" class="display">
                        <thead>
                        <tr>
                            <th class="text-center">Професія</th>
                            <th class="text-center">Навчальний заклад</th>
                            <th class="text-center">Спеціальність</th>
                            <th class="text-center">Видалити</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $sql = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` =  $_COOKIE[id] && `choice` = '1'");
                        $myrow = mysql_fetch_array($sql);
                        if(mysql_num_rows($sql) != 0) {
                            do {
                                $sql1 = mysql_query("SELECT * FROM `employment` WHERE `id` =  $myrow[id_employment] ORDER BY `employment`");
                                $myrow1 = mysql_fetch_array($sql1);
                                $sql2 = mysql_query("SELECT * FROM `educational` WHERE `id` =  $myrow1[educational]");
                                $myrow2 = mysql_fetch_array($sql2);
                                $sql3 = mysql_query("SELECT * FROM `specialty` WHERE `id` =  $myrow1[specialty]");
                                $myrow3 = mysql_fetch_array($sql3);
                                printf(' <tr>
                                                    <td class="text-justify"><a href="profession.php?profession=%s" target="_blank">%s</a></td>
                                                    <td class="text-justify"><a href="edu.php?educational=%s" target="_blank">%s</td>
                                                    <td class="text-justify">%s</td>
                                                    <td class="text-center"><i class="fa fa-times-circle btn-danger fa-2x" aria-hidden="true" style="cursor: pointer" id="submit_delete_%s"></i></td>
                                                        <script>
                                                              $("#submit_delete_%s").click(function(){
                                                               $.ajax({
                                                                        url: "user/del_profession.php", // куда отправляем
                                                                        type: "post", // метод передачи
                                                                        dataType: "json", // тип передачи данных
                                                                        data: { // что отправляем
                                                                            "del_employment": %s
                                                                        },
                                                                    })
                                                                    location.reload();
                                                            });
                                                          </script>
                                            </tr>', $myrow[id_employment], $myrow1[employment], $myrow2[id], $myrow2[educational], $myrow3[specialty], $myrow[id_employment], $myrow[id_employment], $myrow[id_employment]);
                                $i++;
                            } while ($myrow = mysql_fetch_array($sql));
                        }
                        ?>
                        </tbody>
                    </table>
                </header>
                <header class="page-header tab2" style="display: none">
				    <h4 class="page-title text-justify">Рейтинг "Турніра професій"</h4>
                    <blockquote>
                        <p class="text-danger">Правила "Турніра професій"</p>
                        <ol>
                            <li>Щоб розпочати "Турнір професій" необхідно, щоб було добавлено не менше <span class="text-danger">2 професій!</span></li>
                            <li>За замовчуванням між професіями - «нічия» - обидві отримують по «0» балів. якщо є бажання так і завершити раунд, то «бігунок» внизу не рухається обо натискається кнопка "ЗАВЕРШИТИ ТУРНІР".</li>
                            <li>Професія, що набирає 3 бали - перемагає!</li>
                            <li>Професія, що перемогла залишається на рингу, яка програла - змінюється. При «нічиєї», змінюються обидві професії.</li>
                            <li>Перемагає професія, на сторону якої пересунули «бігунок». Професія, що перемогла отримує від 1 до 3 балів в залежності від переконливості перемоги.</li>
                            <li>Для кожної професії ведеться рейтинг: Поєдинки: Перемоги/поразки: Очки:</li>
                        </ol>
                    </blockquote>
                    <table id="table_id2" class="display">
                        <thead>
                        <tr>
                            <th class="text-center">Професія</th>
                            <th class="text-center">Кількість боїв</th>
                            <th class="text-center">Кількість перемог</th>
                            <th class="text-center">Кількість поразок</th>
                            <th class="text-center">Загальна кількість очок</th>
                            <th class="text-center">Видалити</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $sql = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` =  $_COOKIE[id] && `choice` = '1'");
                        $myrow = mysql_fetch_array($sql);
                        if(mysql_num_rows($sql) != 0){
                        do {
                            $sql1 = mysql_query("SELECT * FROM `employment` WHERE `id` =  $myrow[id_employment] ORDER BY `employment`");
                            $myrow1 = mysql_fetch_array($sql1);
                                             printf(' <tr>
                                                    <td class="text-justify"><a href="profession.php?profession=%s" target="_blank">%s</a></td>
                                                    <td class="text-center">%s</td>
                                                    <td class="text-center">%s</td>
                                                    <td class="text-center">%s</td>
                                                    <td class="text-center">%s</td>
                                                    <td class="text-center"><i class="fa fa-times-circle btn-danger fa-2x" aria-hidden="true" style="cursor: pointer" id="submit_delete_1%s"></i></td>
                                                        <script>
                                                              $("#submit_delete_1%s").click(function(){
                                                               $.ajax({
                                                                        url: "user/del_profession.php", // куда отправляем
                                                                        type: "post", // метод передачи
                                                                        dataType: "json", // тип передачи данных
                                                                        data: { // что отправляем
                                                                            "del_employment": %s
                                                                        },
                                                                    })
                                                                    location.reload();
                                                            });
                                                          </script>
                                            </tr>',$myrow[id_employment],$myrow1[employment],$myrow[ring],$myrow[victory],$myrow[losing],$myrow[score],$myrow[id_employment],$myrow[id_employment],$myrow[id_employment]);
                            $i++;
                        }
                        while($myrow = mysql_fetch_array($sql));
                        }
                        ?>
                        </tbody>
                    </table>
                    <hr>
                    <?
                        if(mysql_num_rows($sql) >= 2) {
                            echo '<button type="button" class="btn btn-success col-lg-12">Розпочати турнір професій</button>';
                        }
                        else {
                            echo '<button type="button" class="btn btn-success col-lg-12" disabled>Розпочати турнір професій</button>';
                        }
                    ?>

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
                    <h2>Тест на профорієнтацію онлайн </h2>
                     <blockquote>Щоб скоротити сферу пошуку майбутньої професії можна пройти тест на професійні інтереси. Після цього питання вибору професії підлітком перестане стояти руба. А ви готові дізнатися до якої категорії професійної діяльності більш схильні?
                        <p class="text-danger">На проходження кожного тесту дається тільки одна спроба! Радимо уважно читати питання до тестів.</p> Приступимо?</blockquote>

                    <table id="table_id3" class="display">
                        <thead>
                        <tr>
                            <th class="text-center">Назва теста</th>
                            <th class="text-center">Спеціальність</th>
                            <th class="text-center">Навчальний заклад</th>
                            <th class="text-center">Відмітка про проходження теста</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $query = mysql_query("SELECT * FROM `test` ORDER BY `id_educational`");
                        $row = mysql_fetch_array($query);
                        if (mysql_num_rows($query) != 0) {
                        do {

                                printf('<tr>
                            <td class="text-justify"><a href="testing.php?educational=%s&test=%s">%s</a></td>
                            <td class="text-justify">Спеціальність</td>
                            <td class="text-justify">Навчальний заклад</td>
                            <td class="text-justify">Відмітка про проходження теста</td>
                        </tr>',$row[educational],$row[id],$row[test_name]);
                        }
                        while ($row = mysql_fetch_array($query));
                        }
                        ?>
                        </tbody>
                    </table>
                </header>
              </article>

        </div>

    </div>
			<!-- /Article -->

            <!-- Container -->
            <div class="container-fluid">
                <div class="row">
                    <article class="col-md-12 maincontent">

                    </article>

                </div>
            </div>
			<!-- /container -->
    <?  include_once 'include/footer.php';  ?>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
            $('#table_id2').DataTable();
            $('#table_id3').DataTable();
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