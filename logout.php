<?php
include('path.php');
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);

header('location:' . BASE_URL . '/index.php');
