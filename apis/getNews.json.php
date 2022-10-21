<?php
session_start();

require "../classes/db.class.php";
require "../classes/Configure.class.php";
require "../classes/Auth.class.php";

$db = new DB();
$configure = new Configure();
