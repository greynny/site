<?php
$data = $_POST;
if (isset($data['do_reg'])) {
    $name = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['name']))));
    $lastname = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['lastname']))));
    $email = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['email']))));
    $sex = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['sex']))));
    $date = str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['date']))));
    $password = md5(str_replace(" ", "", htmlspecialchars(mysql_real_escape_string(trim($data['password'])))));
    $today = date("Y-m-d");
    if ((!empty($lastname)) || (!empty($name)) || (!empty($sex)) || (!empty($date)) || (!empty($email)) || (!empty($password))) {
        $check = mysql_query("SELECT * FROM `user` WHERE `email` = '$email'");
        if (mysql_num_rows($check)!=0){
            $error = '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    Така пошта вже зареєстрована!!! Змініть пошту або ввійдіть під своїм <a href="signin.php">логіном</a> 
                </div>
                ';
        }
        else {
            $sql = mysql_query("SELECT MAX(id) as id FROM user");
            $myrow = mysql_fetch_array($sql);
            $max = 1 + $myrow["id"];
            $query = "INSERT INTO `user` (`id`,`last_name`,`name`,`email`,`sex`,`password`,`birthdate`,`registrdate`) VALUES ('$max','$lastname','$name','$email','$sex','$password','$date','$today')";
            $result = mysql_query($query) or die ("<p>Помилка запиту</p>");
            setcookie("id",$max,time()+3600*24);
            $users = $lastname.' '.$name;
            setcookie("user",$users,time()+3600*24);
            $text = '<div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            Вітаємо! Ви зареєструвалися на нашому ресурсі. Ваш логін - '.$email.', пароль - '.$data[password].' Через 10 секунд Ви будете перенаправлені на головну сторінку.
                        </div>
                        <script language = \'javascript\'>
                          var delay = 10000;
                          setTimeout("document.location.href=\'index.php\'", delay);
                        </script>
                        ';
        }
    }
    else {
        echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'signup.php\'", delay);
		</script>';
    }
}
?>