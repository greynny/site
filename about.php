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
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Головна</a></li>
					<li class="active"><a href="about.php">Про сервіс</a></li>
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
			<li class="active">Про сервіс</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent text-justify">
				<header class="page-header">
					<h1 class="page-title">Про сервіс</h1>
				</header>
                <h3>Чому був створений цей ресурс?</h3>
                <p>Часто на рішення про вибір професії впливають поради батьків, друзів, знайомих, «мода» на певні спеціальності тощо.    Не менш часто, людина, яка при виборі свого професійного шляху керується порадами
                    інших людей, бажанням обрати «модну» спеціальність і, при цьому, мало враховує або і зовсім не звертає уваги на власні індивідуальні особливості та бажання, рано чи пізно
                    опиняється в ситуації, коли виявляється, що обрана нею професія їй не до душі, кар’єра   не вибудовується, перспективи туманні.
                    І, якщо це так, то навряд працівник отримуватиме задоволення від своєї роботи.</p>
                <p>Готовність людини до трудової діяльності визначається його психологічною та практичною готовністю.</p>
            <p> Виховання психологічної та практичної готовності до праці є необхідною умовою вирішення завдань професійної орієнтації учнів.
                    Цілеспрямовано воно починається на етапі молодшого шкільного віку і триває до 9-х класів, забезпечуючи наступність у змісті, формах і методах роботи, що проводиться. </p>
                <p>Цей ресурс створений для того щоб допомогти обрати вступникові професію, яка б була йому до душі та відповідала його характеру, інтересам та схильностям, а, отже, забезпечувала б задоволення від праці за обраною професією та успішну кар’єру.</p>

                <h3>Яка основна причина створення цього ресурса?</h3>
               <p> На даному етапі шкільного навчання найбільш ефективно застосовуються такі методи профорієнтаційної роботи:<br>
                   <li> вивчення і формування особистісних і соціально значущих мотивів вибору професії (в формі профорієнтаційних ігор-конкурсів з учнями, конкурсів-естафет, вікторин, турнірів і т.д.);</li>
                   <li> вивчення і моніторинг профнамереній учнів (з метою вивчення інтересів своїх вихованців класний керівник може використовувати такі прийоми, як вивчення особистих справ учнів, проведення індивідуальної бесіди з учнями, анкетування і т.д.);</li>
                   <li> індивідуальна робота з учнями з питань вибору професії;</li>
                   <li> класні години та професіографічні зустрічі;</li>
                   <li> формування пізнавальних інтересів (факультативні і гурткові заняття, олімпіади, конкурси, вікторини, виставки, галереї дружби, ярмарки завтрашніх майстрів, спартакіади і т.д.);</li>
                   <li> гуртки технічної та художньої творчості;</li>
                   <li> уроки технічного і обслуговуючого праці;</li>
                   <li> організація суспільно корисної продуктивної праці;</li>
                   <li> екскурсії на підприємства і в організації;</li>
                   <li> робота з батьками.</li>
               </p>
                <p>Таким чином, зміст і форми реалізації методів професійної орієнтації є базою для здійснення профорієнтаційної роботи в 9-x класах.</p>
                <h3>Мета сервісу "Турнір професій"</h3>
                <p>Вибір професії - це друге народження людини. І кожному з вас потрібно буде зробити цей вибір у майбутньому. Дорога в майбутнє почнеться з перехрестя. Дуже важливо не помилитися у виборі шляху. Адже від цього вибору залежить багато чого: і матеріальний достаток, і коло спілкування, і інтереси, і щастя в житті. Як зробити правильний вибір, куди і на кого йти вчитися далі? Адже нині існує багато різноманітних професій. Як зорієнтуватися в цьому безмежному морі, вибрати серед них ту, яка допомогла б успішно розпочати самостійну трудову діяльність, а значить, і життєвий шлях?
                </p>
				</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget text-justify">
					<h4>Це, Вас, може заікавити </h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="educational.php">Навчальний заклад</a><br><span class="small text-muted">Перелік спеціальностей, та професій, які можна здобути в навчальному закладі</span></li>
						<li><a href="search.php">Пошук професій</a><br><span class="small text-muted">Пошук спеціальностей, та професій, які можна здобути в навчальному заклад</span></li>
						<li><a href="">Особистий кабінет</a><br><span class="small text-muted">Повний перелік спеціальностей, та професій, які вибрав АБІТУРІЄНТ</span></li>
						<li><a href="">Турнір професій</a><br><span class="small text-muted">Професії боряться за вибір АБІТУРІЄНТА.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
    <?  include_once 'include/footer.php';  ?>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>