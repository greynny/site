<?php
session_start();
include_once '../connect/connect.php';
$email = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_POST['email']))));
$password = md5(str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_POST['password'])))));
$sql = mysql_query("SELECT * FROM `user` WHERE `email` = '$email'");
$myrow = mysql_fetch_array($sql);
if ((!empty($email)) || (!empty($password))) {
    $query = "UPDATE user SET `password`= '$password' WHERE `email`= '$email'";
    $result = mysql_query($query) or die ("<p>Помилка запиту</p>");
    setcookie("id",$myrow[id],time()+3600*24);
    $users = $myrow[last_name].' '.$myrow[name];
    setcookie("user",$users,time()+3600*24);
    echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'../index.php\'", delay);
		</script>';
}
else {
    echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'signup.php\'", delay);
		</script>';
}
?>
