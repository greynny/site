<?php
define('DB_HOST', '78.137.2.119');
define('DB_USER', 'villy');
define('DB_PASS', 'markoPolo');
define('DB_NAME', 'work');

/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'work');
*/
if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
    exit('Сервер не доступен');
}
if (!mysql_select_db(DB_NAME)) {
    exit('нет соединение с базой');
}
   $db = mysql_connect(DB_HOST,DB_USER, DB_PASS);
   mysql_select_db(DB_NAME,$db);
   mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
   mysql_query("SET CHARACTER SET 'utf8'");
?>