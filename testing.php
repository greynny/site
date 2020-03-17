<?php
session_start();
include_once 'connect/connect.php';
if (isset($_GET['test'])){
    $test = $_GET['test'];
}
else {
     $test = 1;
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
                    <form method="POST" action="check.php" id="myform">
                    <? $sql = mysql_query("SELECT * FROM `test` WHERE `id` = $test");
                        $myrow = mysql_fetch_array($sql);
                    printf('<article class="col-md-12 maincontent">
                                        <h2>%s</h2>
                                     <blockquote>%s </blockquote>
                                    </article>',$myrow[test_name],$myrow[test_title]);
                    $query = mysql_query("SELECT * FROM `test_question` WHERE `parent_test` = $test");
                    $row = mysql_fetch_array($query);
                    $i = 1;
                    do {
                            printf('<div class="col-md-12"><blockquote style="border-left:3px solid #ffc107">%s. %s</blockquote> </div>',$i,$row[question]);
                                $q = mysql_query("SELECT * FROM `test_answer` WHERE `id_question` = $row[id]");
                                $r = mysql_fetch_array($q);
                                do {
                                    printf(' <div class="container" style="margin-left: 30px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" style="background-color:#ffc107; ">
                                                                <input type="radio" name="question%s" value="%s">
                                                            </span>
                                                            <label class="form-control">%s
                                                        </div>
                                                    </div>',$row[id],$r[answer],$r[answer]);
                                }
                                while($r = mysql_fetch_array($q));

                    $i++;}
                    while($row = mysql_fetch_array($query));
                    ?>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button class="btn btn-action" type="submit" id="sbm">Завершити</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

			<!-- /container -->
    <?  include_once 'include/footer.php';  ?>

  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>