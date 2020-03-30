<?php
session_start();
include_once 'connect/connect.php';
include_once 'user/del_coockie.php';
mb_internal_encoding('UTF-8');
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
    <!-- Стиль для раздела турнир -->
    <link rel="stylesheet" href="assets/css/tournament.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Валидация формы -->
    <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/form_search.js"></script>
    <!-- Модальное окно -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <style>

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
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li><a href="index.php">Головна</a></li>
                    <li class="active">ТУРНІР ПРОФЕСІЙ</li>
                </ol>
                <hr>
                <?
                if((!isset($_COOKIE["id"])) && (empty($_COOKIE["id"]))){
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            Щоб перебувати на цый сторінці необхідно зарєеструватися, або зайти під своїм логіном</a>
                        </div>';
                    echo '<script language = \'javascript\'>
                          var delay = 5000;
                          setTimeout("document.location.href=\'signin.php\'", delay);
                        </script>';

                }
                $sql = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` = $_COOKIE[id] && `choice` = 1");
                if(mysql_num_rows($sql) < 2) {
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                           Для участі в ТУРНІРІ ПРОФЕСІЙ необхідно вибрати принаймі дві професії</a>
                        </div>';
                    echo '<script language = \'javascript\'>
                          var delay = 5000;
                          setTimeout("document.location.href=\'user.php\'", delay);
                        </script>';
                }
                ?>
                <div class="row">
                    <div class="container-fluid">
                        <div class="row row-flex">
                            <div class="col-md-3 col-sm-3">
                                <select class="form-control" id="select1" style="text-transform: uppercase;">
                                    <option value="" disabled selected>Вибрати професію</option>
                                    <?
                                    $query = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` = $_COOKIE[id] && `choice`=1");
                                    $myrow = mysql_fetch_array($query);
                                    do {
                                        $query1 = mysql_query("SELECT * FROM `employment` WHERE `id` =  $myrow[id_employment]");
                                        $myrow1 = mysql_fetch_array($query1);
                                        echo ' <option style="text-transform: uppercase;" value="'.$myrow1[id].'">'.$myrow1["employment"].'</option>';
                                    }
                                    while($myrow = mysql_fetch_array($query))
                                    ?>

                                </select>
                                <hr>
                                <div id="selprof1">
                                    <img class="img-fluid" src="assets/images/prof.jpg" alt="...">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="pricingTable">
                                    <div class="thumb">
                                        <svg x="0" y="0" viewBox="0 0 360 220">
                                            <g>
                                                <path fill="#ae003d" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                L0.732,193.75z"></path>
                                            </g>
                                                 <text transform="matrix(0.9566 0 0 1 150 130)" fill="#fff" font-size="100">0</text>
                                            </svg>
                                        <div class="pricing-content">
                                            <h1 class="title" style="font-size: 250%" id="text1">Вибір професії</h1>
                                            <ul class="pricing-content">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="pricingTable blue">
                                    <div class="thumb">
                                        <svg x="0" y="0" viewBox="0 0 360 220">
                                            <g>
                                                <path fill="#005c99" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                L0.732,193.75z"></path>
                                            </g>
                                            <text transform="matrix(0.9566 0 0 1 150 130)" fill="#fff" font-size="100">0</text>
                                        </svg>
                                        <div class="pricing-content">
                                            <h1 class="title" style="font-size: 250%" id="text2">Вибір професії</h1>
                                            <ul class="pricing-content">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select class="form-control" id="select2" style="text-transform: uppercase;">
                                    <option value="" disabled selected>Вибрати професію</option>
                                    <?
                                    $query = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` = $_COOKIE[id] && `choice`=1");
                                    $myrow = mysql_fetch_array($query);
                                    do {
                                        $query1 = mysql_query("SELECT * FROM `employment` WHERE `id` =  $myrow[id_employment]");
                                        $myrow1 = mysql_fetch_array($query1);
                                        echo ' <option style="text-transform: uppercase;" value="'.$myrow1[id].'">'.$myrow1["employment"].'</option>';
                                    }
                                    while($myrow = mysql_fetch_array($query))
                                    ?>

                                </select>
                                <hr>
                                <div id="selprof2">
                                    <img class="img-fluid" src="assets/images/prof2.jpg" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $("#select1").change(function(e) {
                    e.preventDefault();
                    var value = $('#select1 option:selected').text();
                    $('#select2 option:contains(' + value + ')').remove();
                    $('#text1').html(value);
                    jQuery.ajax({
                        type: 'POST',
                        url: 'user/addselect1.php',
                        data: 'id='+$('#select1').val(),
                        success: function(data) {
                            $('#selprof1').html(data);
                        }
                    });

                });
                $("#select2").change(function(e) {
                    e.preventDefault();
                    var value = $('#select2 option:selected').text();
                    $('#select1 option:contains(' + value + ')').remove();
                    $('#text2').html(value);

                });
            </script>
			<!-- /container -->
    <?  include_once 'include/footer.php';  ?>

  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>