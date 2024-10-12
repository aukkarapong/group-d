<?php

$connection = mysqli_connect("127.0.0.1", "root", "", "badminton");
mysqli_query($connection, 'set names utf8');

if (!$connection) {
    echo "can not connect sdatabase";
    exit;
}
