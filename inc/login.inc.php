<?php
$host = "95.217.108.202";
$pw = "Pb7VubhK4UtXY9G7";
$user = "utopia";
$db = "michaelB_utopia";

$con = new mysqli($host, $user, $pw, $db);

if ($con->connect_errno) {
    printf("Connection failed: %sn" . $con->connect_error);
    exit();
}
