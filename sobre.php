<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");
$uploaddir='./fotos/';

$smarty->assign('uploaddir', $uploaddir);
$smarty->display('sobre.tpl');

