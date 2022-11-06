<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");
if(isset($_POST['linha']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM cadastro where CODIGO_CINE_ROTULO=? ORDER BY MUNICIPIO');
	$sth->bindParam(1, $_POST['linha']);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}

$smarty->assign('dados', $result);
$smarty->display('mostra_cursos.tpl');

