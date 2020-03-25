<?php
if(isset($_GET["del_coockie"])){
    unset($_COOKIE["user"]);
    setcookie("user", null, time()-3600);
    unset($_COOKIE["id"]);
    setcookie("id", null, time()-3600);
    echo '<script language = \'javascript\'>
            var delay = 0;
            setTimeout("document.location.href=\'index.php\'", delay);
          </script>';
}
?>