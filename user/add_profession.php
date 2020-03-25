<?php
session_start();
include_once '../connect/connect.php';
if((isset($_POST["employment"])) && (!empty($_POST["employment"]))){
    $id_user = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_COOKIE['id']))));
    $id_emploment = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($_POST['employment']))));
    if ((!empty($id_user)) or (!empty($id_emploment)) or (!empty($id_user)) or (!empty($id_emploment))) {
        $res = mysql_query("SELECT * FROM `user_choice` WHERE `id_user` = $_COOKIE[id] && `id_employment` = $id_emploment && `choice` = 0");
        if (mysql_num_rows($res) == 1) {
            $query = "UPDATE user_choice SET `choice`= '1' WHERE `id_user`= '$id_user' && `id_employment` = $id_emploment ";
            $result = mysql_query($query) or die ("<p>Помилка запиту</p>");
            echo '<script language = \'javascript\'>
                      var delay = 0;
                      setTimeout("window.history.back();", delay);
                    </script>';
        }
        else {
        $sql = mysql_query("SELECT MAX(id) as id FROM user_choice");
        $myrow = mysql_fetch_array($sql);
        $max = 1 + $myrow["id"];
        $query = "INSERT INTO `user_choice` (`id`,`id_user`,`id_employment`,`choice`) VALUES ('$max','$id_user','$id_emploment','1')";
        $result = mysql_query($query) or die ("<p>Помилка запиту</p>");
        echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("window.history.back();", delay);
		</script>';
    }
    }
    else {
        echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'index.php\'", delay);
		</script>';
    }
}
?>