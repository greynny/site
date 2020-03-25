<?php
$data = $_POST;
if (isset($data['do_login'])) {
    $user = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['email']))));
    $password = md5(str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['password'])))));
    $sql = mysql_query("SELECT * FROM `user` WHERE `email` = '$user'");
    $my_login = mysql_fetch_array($sql);
    $sql2 = mysql_query("SELECT * FROM `user` WHERE `password` = '$password'");
    $my_password = mysql_fetch_array($sql2);
    if ((!empty($user)) or (!empty($password)) or (!empty($my_login[email])) or (!empty($my_password[password]))) {
        if (($my_password[email] == $user) and ($my_password[password] == $password)) {
            setcookie("id", $my_login[id], time() + 3600 * 24);
            $users = $my_login[last_name] . ' ' . $my_login[name];
            setcookie("user", $users, time() + 3600 * 24);
            echo '<script language = \'javascript\'>
             var delay = 0;
             setTimeout("document.location.href=\'index.php\'", delay);
             </script>';
        } else {
            $text = '<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    Не вірний логін або пароль!
</div>';
        }
    }
}
?>