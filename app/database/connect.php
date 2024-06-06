<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'bencom_db';

/* $host = 'bshoasc.be.gov.ng';
$user = 'bshoascb_bshoascadmin';
$pass = 'makurdi1PASS';
$db_name = 'bshoascb_db'; */

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('database connection error' . $conn->connect_error);
}
