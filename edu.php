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
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#chartContainer").CanvasJSChart({ //Pass chart options
                data: [
                    {
                        type: "splineArea", //change it to column, spline, line, pie, etc
                        dataPoints: [
                            { x: 10, y: 10 },
                            { x: 20, y: 14 },
                            { x: 30, y: 18 },
                            { x: 40, y: 22 },
                            { x: 50, y: 18 },
                            { x: 60, y: 28 }
                        ]
                    }
                ]
            });

        });
    </script>
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


				<div class="row widget">
					<div class="col-xs-12">
						<h4>Черкаський державний бізнес-коледж</h4>
						<p><img src="assets/images/edu/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Абітурієнту</h4>
						<p><iframe width="100%" height="400px" src="https://www.youtube.com/embed/udzgeQrhCFI?controls=0&rel=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
						</div>
				</div>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Lorem ipsum dolor sit amet, consectetur.</h1>
				</header>
                <div id="chartContainer" style="width:100%; height:300px;"></div>
				<h2>A, quibusdam, nobis, eveniet consequatur</h2>
				<p>A, quibusdam, nobis, eveniet consequatur alias doloremque officia blanditiis fuga et numquam labore reiciendis voluptas quis repellat quos sunt non dolore consectetur at sit nam tenetur dolorem? Harum, quas, sit perspiciatis esse odit temporibus aperiam nulla aspernatur sequi fugiat tempore?</p>
				<p>Ad velit consequuntur quo qui odit quam sapiente repudiandae et ea pariatur? Ex sapiente beatae nobis consectetur ea. Deleniti, beatae, magnam, dolorum, fuga nostrum quas laboriosam sapiente temporibus enim voluptates ullam impedit atque quae provident quos mollitia aperiam perferendis amet.</p>

				<blockquote>Numquam, ut iure quia facere totam quas odit illo incidunt. Voluptatem, nostrum, ex, quasi incidunt similique cum maxime expedita unde labore inventore excepturi veniam corporis sequi facere ullam voluptates amet illum quam fuga voluptatibus ipsum atque sunt eos. Ut, necessitatibus.</blockquote>
				<p>Odit, laudantium, dolores, natus distinctio labore voluptates in inventore quasi qui nobis quis adipisci fugit id! Aliquam alias ea modi. Porro, odio, sed veniam hic numquam qui ad molestiae sint placeat expedita? Perferendis, enim qui numquam sequi obcaecati molestiae fugiat!</p>
				<p>Aperiam, odit, quasi, voluptate fugiat quisquam velit magni provident corporis animi facilis illo eveniet eum obcaecati adipisci blanditiis quas labore doloribus eos veniam repudiandae suscipit tempora ad harum odio eius distinctio hic deleniti. Sunt fuga ad perspiciatis repellat deleniti omnis!</p>

				<h3>Numquam, ut iure quia facere totam quas odit illo incidunt</h3>
				<p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
				<p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>
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