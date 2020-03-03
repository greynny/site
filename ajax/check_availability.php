<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["email"])) {
    $query = "SELECT * FROM user WHERE email='" . $_POST["email"] . "'";
    $user_count = $db_handle->numRows($query);
    if($user_count>0) {
        echo "<span id='status' class='status-not-available text-success'>Така пошта зареєстрована</span>";
    }else{
        echo "<span id='status' class='status-available text-danger'>Пошти не існує в базі</span>";
    }
}
if(!empty($_POST["email_reg"])) {
    $query = "SELECT * FROM user WHERE email='" . $_POST["email_reg"] . "'";
    $user_count = $db_handle->numRows($query);
    if($user_count>0) {
        echo "<span id='status' class='text-danger'>Така пошта зареєстрована</span>";
    }else{
        echo "<span id='status' class='status-available text-success'>Пошти не існує в базі</span>";
    }
}
?>