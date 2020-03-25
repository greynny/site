<?php
session_start();
include_once '../connect/connect.php';
print_r($_POST);
if((isset($_POST["del_employment"])) && (!empty($_POST["del_employment"]))){
    $id_user = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_COOKIE['id']))));
    $id_emploment = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_POST['del_employment']))));
    if ((!empty($id_user)) or (!empty($id_emploment)) or (!empty($id_user)) or (!empty($id_emploment))) {
        $query = "UPDATE user_choice SET `choice`= '0' WHERE `id_user`= '$id_user' && `id_employment` = $id_emploment ";
        $result = mysql_query($query) or die ("<p>Помилка запиту</p>");
        echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("window.history.back();", delay);
		</script>';
    }
    else {
        echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'index.php\'", delay);
		</script>';
    }
}
?>