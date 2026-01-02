<?php
    session_start();
    include "../config/database.php";
    include "../models/user.php";

    $users = new User();

    $users->logOut();

    header("Location: ../index.php");

    exit;

?>