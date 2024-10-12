<?php

session_start();

// TODO :: check session login
if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != true) {

    header("Location: login.php");
    exit;
}
