<?php
session_start();

unset($_SESSION['MEMBER']);

header('Location: http://localhost/UTS/index.php?page=views/menu_page/home');
