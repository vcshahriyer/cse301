<?php
    session_start();
    $sid = $_POST["ID"];
    $_SESSION["uid"] = $sid;

 ?>
