<?php
session_start();
include_once 'connect/connect.php';

echo "<br>!!!!!!!!!!".$_COOKIE["id"];
echo "<br>!!!!!!!!!!".$_POST["employment1"];
echo "<br>!!!!!!!!!!".$_POST["employment2"];
echo "<br>!!!!!!!!!!".$_POST["rang1"];
echo "<br>!!!!!!!!!!".$_POST["rang2"];

if (!isset($_COOKIE["id"])){
    echo '<script language = \'javascript\'>
		  var delay = 0;
		  setTimeout("document.location.href=\'index.php\'", delay);
		</script>';
}
else {
        $sql1 = mysql_query("SELECT * FROM `user_choice` WHERE `id_user`=$_COOKIE[id] && `choice`='1' && `id_employment` =  $_POST[employment1]");
        $myrow1 = mysql_fetch_array($sql1);
        $num1 = mysql_num_rows($sql1);
        $sql2 = mysql_query("SELECT * FROM `user_choice` WHERE `id_user`=$_COOKIE[id] && `choice`='1' && `id_employment` =  $_POST[employment2]");
        $myrow2 = mysql_fetch_array($sql2);
        $num2 = mysql_num_rows($sql2);
        if(($num1 == 0) || ($num2 == 0)){
            echo '<script language = \'javascript\'>
                  var delay = 0;
                  setTimeout("document.location.href=\'index.php\'", delay);
                </script>';
        }
        else {
            $score1 = $myrow1[score] + $_POST[rang1];
            $score2 = $myrow1[score] + $_POST[rang2];
            $ring1 = $myrow1[ring] + 1;
            $ring2 = $myrow2[ring] + 1;
            if ($_POST[rang1] > $_POST[rang2]){
                $victory1 = $myrow1[victory] + 1;
                $losing1 = $myrow1[losing] + 0;
                $victory2 = $myrow2[victory] + 0;
                $losing2 = $myrow2[losing]+1;
             }
            if ($_POST[rang1] < $_POST[rang2]){
                $victory2 = $myrow2[victory] + 1;
                $losing2 = $myrow2[losing] + 0;
                $victory1 = $myrow1[victory] + 0;
                $losing1 = $myrow1[losing] + 1;
            }
            if ($_POST[rang1] == $_POST[rang2]){
                $victory2 = $myrow2[victory] + 0;
                $losing2 = $myrow2[losing] + 0;
                $victory1 = $myrow1[victory] + 0;
                $losing1 = $myrow1[losing] + 0;
            }


            $query1 = "UPDATE `user_choice` SET `ring`='$ring1',`victory` = '$victory1', `losing` = '$losing1', `score` = '$score1'  WHERE `id_user`=$_COOKIE[id] && `choice`='1' && `id_employment` =  $_POST[employment1]";
            $result1 = mysql_query($query1) or die ("<p>Помилка</p>");

            $query2 = "UPDATE `user_choice` SET `ring`='$ring2',`victory` = '$victory2', `losing` = '$losing2', `score` = '$score2' WHERE `id_user`=$_COOKIE[id] && `choice`='1' && `id_employment` =  $_POST[employment2]";
            $result2 = mysql_query($query2) or die ("<p>Помилка</p>");
            echo '<script language = \'javascript\'>
                      var delay = 0;
                      setTimeout("document.location.href=\'ring.php\'", delay);
                    </script>';
        }
}

?>