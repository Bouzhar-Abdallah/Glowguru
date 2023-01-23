<?php
session_start();
require_once 'app/core/init.php';

//show($_SESSION);
$app = new App();
$app->loadController();
